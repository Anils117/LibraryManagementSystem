<?php require('dbconnect.php'); ?>
<?php include_once("bootstrap.php") ?>
<?php include_once("titlebar.php") ?>
<div class="profile container">
	<div class="profile-header">
		<div class="profile-head">
			<h2 class="profile-header">STUDENT PROFILE</h2>
			<div class="profile-hr"></div>
		</div>
	</div>
	<?php
		$rollno = $_SESSION['Id'];
		$sql = "select * from Library.user where Userid='$rollno'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
	?>
	<div class="profile-content row">
		<div class="profile-left col-md-3">
			<div class="profile-left-hr"></div>
			<div class="profile-photo">
				<img src="./lib-images/profile.png">
			</div>
			<div class="student-name">
				<h2><?php echo $row['Name'] ?></h2>
				<h2><?php echo $row['Userid']?></h2>
			</div>
		</div>
		<div class="profile-right col-md-9 p-0">
			<div class="student-info">
				<p><strong>STUDENT NAME : <?php echo $row['Name'] ?></strong></p>
				<p><strong>ID NUMBER : <?php echo $row['Userid']?></strong> </p>
				<p><strong>EMAIL : <?php echo $row['Email']?></strong> </p>
				<p><strong>ACADEMIC YEAR : xxxxxxxx</strong> </p>
				<p><strong>BRANCH : <?php echo $row['Branch']?></strong></p>
				<p><strong>SECTION : xxxxxxxx</strong></p>
				<p><strong>MOBILE NO : xxxxxxxx</strong></p>
				<p><strong>TOTAL BOOKS TAKEN : xxxxxxxx</strong></p>
				<p><strong>TOTAL BOOKS RETURNED : xxxxxxxx</strong></p>
				<p><strong>BOOKS NOT RETURNED : xxxxxxxx</strong></p>
			</div>
		</div>
		<a href="logout.php">Logout</a>
	</div>
</div>