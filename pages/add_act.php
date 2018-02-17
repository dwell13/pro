<?php
if(isset($_POST['add'])){
	$name=$_POST['name'];
	$quantity=$_POST['quantity'];
	if(!empty($name) && !empty($quantity)){
		$insertsql="insert into `product` (product_name, product_quantity) values ('$name','$quantity')";
		$result=mysqli_query($conn,$insertsql) or die ("Wrong query".mysqli_error());
		echo "Successfull!";
	}
	else{
		echo "Some fields missing.";
		}
}

