<?php
$con=mysqli_connect("localhost","root","","online_examination");
if(isset($_POST['point']))
{

$first=$_POST['point'];
	//echo $first;

$sql="select * from image order by posted_date desc limit $first,4";
//echo $sql;
$run=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($run))
{
	$image=$row['name'];
	echo "<div style='float:left;border:1px solid black;'><img src='$image' height=200 width=200></div>";

}	
//	sleep(1);
}
else{
//	echo "ldl;,msdfl;";
$sql="select * from image order by posted_date desc  limit 0,4";
$run=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($run))
{
	$image=$row['name'];
	echo "<div style='float:left;border:1px solid black;'><img src='$image' height=200 width=200></div>";

}
	}
	?>