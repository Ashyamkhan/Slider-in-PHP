<html>
<head>
<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
<script>
	var  f=0;
function plus(n)
{ 
var x=document.getElementById("last").value;
	//alert(x);
	//alert(n);
	f=f+n;
	//alert(f);
	if(f<0)
	{
		f=0;
	}
	if(f>=x)
	{
		f=f-1;
	}
	$.ajax({
		type:'post',
		url:'fileslide.php',
		data:{point:f}
	}).done(function(data){
$("#slideshow").html(data);
	});
}
</script>
</head>
<body>
	<img src="images/left.png" height=100 width=40 onclick="plus(-1)" style="float:left;margin-top:50px;">
	<div id="slideshow" style="float:left;">
	<?php
include("fileslide.php");
?>
</div>
<?php
$con=mysqli_connect("localhost","root","","online_examination");
$sql="select * from image";
$run=mysqli_query($con,$sql);
$no=mysqli_num_rows($run);
echo "<input type='hidden' id='last' value='$no'>";
	?>

		<img src="images/right.png" height=100 width=60 onclick="plus(1)" style="float:left;margin-top:50px;">
	</body>
	</html>