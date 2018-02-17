<?php
 if(isset($_POST['search']) or isset($_GET['searchtext']) or isset($_POST['searchtype']))
{
	$searchtype=$_POST['searchtype'];
	$searchtext=$_POST['searchtext'];
	
	if (empty($searchtext))
	{
		echo "<script>window.location='index.php?page=home'</script>";
	}
	else
	{
		if(isset($searchtext)){
			if(empty($searchtype)){
				$sql  =  "select * from `sales` where sales_date like '%$searchtext%'" ;
			}elseif($searchtype=='customer'){$sql  =  "select * from `sales` where customer_name like '%$searchtext%'" ;}
			else{
				
	$sql  =  "select * from `sales`" ;
			}
		}
		$result =  mysqli_query($conn,$sql) or die("Wrong Query".mysql_error());
		$num  =  mysqli_num_rows($result);
		if($num>0)
		{?>
			
			
			<div style="display: block;" id="print">
				
			<ul style="margin:20px">
				<?php
				$count_search=0;?>
				<table class="table">
                <tr>
                <th>Product Name</th>
                <th>Sales Date</th>
                <th>Rate</th>
                <th>Quantity</th>
                <th>Amount</th>
                <th>Paid Amount</th>
                <th>Remaining Amount</th>
                <th>Customer Name</th>
                <th>Customer Address</th>
                <th>Customer Contact</th>
                </tr>
					<?php
				while($row =  mysqli_fetch_object($result))
				{
					
            		
	   	    			?>
						<tr>
						<td><?php echo $row->product_name;?></td>
                        <td><?php echo $row->sales_date;?></td>
						<td><?php echo "Rs.".$row->product_rate;?></td>
						<td><?php echo $row->sales_quantity;?></td>
						<td><?php echo "Rs.".$row->sales_amount;?></td>
						<td><?php echo "Rs.".$row->paid_amount;?></td>
						<td><?php echo "Rs.".$row->remaining_amount;?></td>
						<td><?php echo $row->customer_name;?></td>
                        <td><?php echo $row->customer_address;?></td>
                        <td><?php echo $row->customer_contact;?></td>
						<td><?php echo "<a href='index.php?page=delete&id=$row->sales_id'>Delete</a>";?></td>
					</tr>
				            		 
      					      
             	 <?php $count_search++;            
       			}?>
       			</table><?php
				echo $count_search." records found!"?></ul></div><?php
			
		}
		else
			{?>
           
			<h5 style="margin-left:20px;"><?php echo "Search result for "."'".$searchtext."'";?></h5>
        
            <div style="display: block;">
			<ul style="margin:20px"><?php
				echo "<li>";
				echo "No record found!";
				echo "</li>";
				?>
			</ul>
          	</div><!-- /tab1 -->
          <?php
	}

	}
}
?>
