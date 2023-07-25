<?php
require('dbconnect.php');

$bookid=$_GET['id1'];
$userid=$_GET['id2'];

$sql = "update Library.issuerequests set Status='accepted' where Bookid='$bookid' and Userid='$userid'";

if($conn->query($sql) == true){
	echo "<script type='text/javascript'>alert('Requested Accepted.')</script>";
	header( "Refresh:0.01; url=issuerequests.php", true, 303);
}


?>