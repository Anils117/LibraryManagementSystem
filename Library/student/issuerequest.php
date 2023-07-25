<?php
require('dbconnect.php');

$bookid=$_GET['id'];
$bookname=$_GET['name'];
$userid=$_SESSION['Id'];

$new = "select Bookid,Status from Library.issuerequests where Userid='$userid'";
$result = $conn->query($new);
$flag = true;
while($row = $result->fetch_assoc()){
	if($row['Bookid'] == $bookid && $row['Status'] != 'returned' && $flag){
		echo "<script type='text/javascript'>alert('You have Already Requested!!')</script>";
		header( "Refresh:0.01; url=index.php", true, 303);
		$flag = false;
	}
}
if($flag){
	$sql="insert into Library.issuerequests (Userid,Bookid,Bookname,Status) values ('$userid','$bookid','$bookname','pending')";
	$conn->query($sql);
	echo "<script type='text/javascript'>alert('Request Sent to Admin.')</script>";
	header( "Refresh:0.01; url=index.php", true, 303);
}
?>