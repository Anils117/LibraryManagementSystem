<?php
require('dbconnect.php');


$bookid=$_GET['id1'];
$userid=$_GET['id2'];

$sql = "update Library.issuerequests set Status='done',Issuedate=CURRENT_TIMESTAMP where Bookid='$bookid' and Userid='$userid'";

if($conn->query($sql) == true){
	echo "<script type='text/javascript'>alert('Book Given Successfully.')</script>";
	header( "Refresh:0.01; url=issuebook.php", true, 303);
}


?>