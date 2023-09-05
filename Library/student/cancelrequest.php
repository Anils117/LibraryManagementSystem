<?php
require('dbconnect.php');

$bookid=$_GET['id'];
$userid=$_SESSION['Id'];
$new = "delete from library.issuerequests where Userid='$userid' and Bookid='$bookid'";
if($conn->query($new)){
	echo "<script type='text/javascript'>alert('Request Cancelled!!')</script>";
	header( "Refresh:0.01; url=cart.php", true, 303);
}
?>