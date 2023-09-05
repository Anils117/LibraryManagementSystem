<?php require('dbconnect.php'); ?>
<?php include_once("bootstrap.php") ?>
<?php include_once("titlebar.php") ?>
<div class="ad-profile container">
	<div class="ad-profile-header">
		<div class="ad-profile-head">
			<h2 class="ad-profile-header">ADMIN PROFILE</h2>
			<div class="ad-profile-hr"></div>
		</div>
	</div>
	<?php
		$rollno = $_SESSION['Id'];
		$sql = "select * from Library.user where Userid='$rollno'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
	?>
	<div class="ad-profile-content row">
		<div class="ad-profile-left col-md-3">
			<div class="ad-profile-left-hr"></div>
			<div class="ad-profile-photo">
				<img src="profile.png">
			</div>
			<div class="ad-name">
				<h2><?php echo $row['Name'] ?></h2>
			</div>
		</div>
		<div class="ad-profile-right col-md-9 p-0">
			<div class="ad-info">
				<p><strong>ADMIN NAME :</strong> <?php echo $row['Name'] ?></p>
				<p><strong>ADMIN NAME :</strong> <?php echo $row['Userid'] ?></p>
				<p><strong>EMAIL :</strong> <?php echo $row['Email'] ?></p>
				<p><strong>BRANCH :</strong> <?php echo $row['Branch'] ?></p>
				<p><strong>MOBILE NO :</strong> xxxxxxxx</p>
			</div>
		</div>
	</div>
	<a href="logout.php">Logout</a>
</div>