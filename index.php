<?php 
 include_once("includes/database_connect.php");
 $profile =  isset($_GET['profile'])?$_GET['profile']:"first";
$contentPage =  isset($_GET['page'])?$_GET['page']:"home";
$category =  isset($_GET['category'])?$_GET['category']:"category";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
<!-->
var image1=new Image()
image1.src="images/user/a.png"
var image2=new Image()
image2.src="images/user/b.jpg"
var image3=new Image()
image3.src="images/user/c.jpg"
var image4=new Image()
image4.src="images/user/d.jpg"
var image5=new Image()
image5.src="images/user/e.jpg"
var image6=new Image()
image6.src="images/user/f.png"
var image7=new Image()
image7.src="images/user/g.png"
var image8=new Image()
image8.src="images/user/h.jpg"
//-->
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Shah&amp;Ghimire concern</title>
    <!--javascript-->
    <script type="text/javascript" src="js/script.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
    <script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>
		<!-- Stylesheets -->
     
        <link rel="stylesheet" type="text/css" href="css/form.css"/>
	<link href="css/master.css" type="text/css" rel="stylesheet">
	</head>
<div id="fb-root"></div>
<script type="text/javascript" src="js/script.js"></script>
<body class="home">
<div class="top group">
	<div class="inner">
		<div class="header group">
        
		<?php 
		
		include_once("includes/header.php");?>
		</div><!-- /header group-->
	</div><!-- /inner -->	
</div><!-- /top group -->
<div>
<?php include_once("pages/$profile.php");?>
</div>

<div>
<marquee >
<h2 align=center style="background:red;color:white;" >Some of our Highlighted products are shown below.</h2>
</marquee>
<img src="images/user/a.png" name="slide" width="100%" height="350px">
<script type="text/javascript">
<!--
var step=1
function slideit(){
document.images.slide.src=eval("image"+step+".src")
if(step<8)
step++
else
step=1
setTimeout("slideit()",1000)
}
slideit()
//-->
</script>
</div>

<div class="foot">   
	<?php include_once("includes/footer.php");?>
</div>						
</body>
</html>