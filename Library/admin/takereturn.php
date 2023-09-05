<?php
require('dbconnect.php');

$bookid=$_GET['id1'];
$userid=$_GET['id2'];

$sql = "update Library.issuerequests set Status='returned',Returndate=NOW() where Bookid='$bookid' and Userid='$userid'";

if($conn->query($sql) == true){
	echo "<script type='text/javascript'>alert('Book Successfully Returned.')</script>";
	header( "Refresh:0.01; url=crntissuedbooks.php", true, 303);
}


?>