<?php require('dbconnect.php')?>
<?php include_once("bootstrap.php") ?>
<?php include_once("titlebar.php") ?>
<?php
$userid=$_SESSION['Id'];
?>
<div class="cart container">
	<div class="cart-book-head">
		<h2 class="cart-book-header">REQUESTED BOOKS</h2>
		<div class="cart-book-hr"></div>
	</div>
	<div class="cart-main">
		<?php
			$sql = "select Bookid,Status,Bookname,Requestdate from library.issuerequests where Userid='$userid' and Status='pending'";
			$result = $conn->query($sql);
          	while($row = $result->fetch_assoc()) {
          		$bookid = $row['Bookid'];
          		$sql2 = "select Bookimage,Authorname,Referenceno from Library.books where Bookid='$bookid'";
				$result2 = $conn->query($sql2);
				while($row2 = $result2->fetch_assoc()) {
		?>
		<div class="cart-book">
			<div class="cart-book-img">
				<img src=<?php echo "../bookimg/".$row2["Bookimage"]?>>
			</div>
			<div class="cart-book-content">
				<h2 class="cart-book-name"><?php echo $row["Bookname"]?></h2>
	            <p class="">Author : <?php echo $row2["Authorname"]?></p>
	            <p class="">Reference Number : <?php echo $row2["Referenceno"]?></p>
	            <p>Status : <strong>Pending</strong></p>
	            <p>Requested on <?php echo $row["Requestdate"]?></p>
	            <p>Approved on xxxxxx</p>
			</div>
			<div class="book-cancel">
				<?php echo "<a href=\"cancelrequest.php?id=".$row['Bookid']."\">Cancel</a>"?>
			</div>
		</div>
		<?php
          }
      	}
        ?><?php
			$sql = "select Bookid,Status,Bookname,Requestdate from library.issuerequests where Userid='$userid' and Status='accepted'";
			$result = $conn->query($sql);
          	while($row = $result->fetch_assoc()) {
          		$bookid = $row['Bookid'];
          		$sql2 = "select Bookimage,Authorname,Referenceno from Library.books where Bookid='$bookid'";
				$result2 = $conn->query($sql2);
				while($row2 = $result2->fetch_assoc()) {
		?>
		<div class="cart-book">
			<div class="cart-book-img">
				<img src=<?php echo "../bookimg/".$row2["Bookimage"]?>>
			</div>
			<div class="cart-book-content">
				<h2 class="cart-book-name"><?php echo $row["Bookname"]?></h2>
	            <p class="">Author : <?php echo $row2["Authorname"]?></p>
	            <p class="">Reference Number : <?php echo $row2["Referenceno"]?></p>
	            <p>Status : <strong>Accepted</strong></p>
	            <p>Requested on <?php echo $row["Requestdate"]?></p>
	            <p>Approved on xxxxxx</p>
			</div>
			<div class="book-cancel">
				<?php echo "<a href=\"cancelrequest.php?id=".$row['Bookid']."\">Cancel</a>"?>
			</div>
		</div>
		<?php
          }
      	}
        ?>
	</div>
</div>



<?php
if (isset($_GET['query'])) {
    $query = $_GET['query'];

    $sql = "SELECT * FROM Library.books WHERE Bookname LIKE '%$query%' OR Authorname LIKE '%$query%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display results
        while ($row = $result->fetch_assoc()) {
            echo "Title: " . $row["Bookname"] . "<br>";
            echo "Author: " . $row["Authorname"] . "<br><br>";
        }
    } else {
        echo "No results found.";
    }
}
?>
