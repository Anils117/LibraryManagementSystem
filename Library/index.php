<?php
require('dbconnect.php');
?>
<?php
		$showAlert = false; 
		$showError = false; 
		$exists=false;
	if(isset($_POST['login'])){

		$u = $_POST['loginid'];
		$p = $_POST['password'];

		$sql = "select * from library.user where Userid='$u'";

		$result = $conn->query($sql);
		$row = $result->fetch_assoc();

		$x = $row['Password'];
		$y=$row['Type'];

		if(strcasecmp($x,$p)==0 && !empty($u) && !empty($p)){
			$_SESSION['Id']=$u;
			if($y=='Admin')
				header('location:admin/index.php');
			else
				header('location:student/index.php');
		}
		else{
			$showError = true;
		}
	}
	if(isset($_POST['signup'])){
		$name = $_POST['name'];
		$id = $_POST['id'];
		$email = $_POST['email'];
		$branch = $_POST['branch'];
		$password = $_POST['password'];
		$type='Student';

		$sql = "Select * from library.user where Userid='$id'";
	    $result1 = mysqli_query($conn, $sql);
	    $num = mysqli_num_rows($result1); 

	    if($num == 0){
	    	$sql = "insert into library.user (Name,Type,Userid,Email,Branch,Password) values ('$name','$type','$id','$email','$branch','$password')";
			$result2 = mysqli_query($conn, $sql);
	    	if ($result2){
				$showAlert = true;
			}
	    }
	    if($num>0) {
	    	$exists=true;
   		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Anil</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
	<div class="wrapper">
		<h1>Library <br>Management System</h1>
		<div class="wrapperbuttons">
			<a href="#home">Login</a>
			<a href="#home">Signin</a>
		</div>
	</div>
	<div class="home container-fluid">
	<div class="home-content" id="home">
		<div class="left">
			<div class="left-content">
				<?php
				if($exists){
					echo "<script type='text/javascript'>alert('Error! User Already Exists!!!')</script>";
					header( "Refresh:0.01; url=index.php", true, 303);
				 }
			    if($showAlert){
			        echo "<script type='text/javascript'>alert('Success! Your account is 
			            now created and you can login.')</script>";
					header( "Refresh:0.01; url=index.php", true, 303);
		    	}?>
				<div class="left-header">
					<h3>Sign Up</h3>
				</div>
				<form action="index.php" method="post">
					<input type="text" name="name" placeholder="Name" required>
					<input type="text" name="id" placeholder="ID" required>
					<input type="text" name="email" placeholder="E-mail" required>
					<input type="text" name="branch" placeholder="Branch" required>
					<input type="password" name="password" placeholder="Password" required><br>
					<button type="submit" name="signup">Sign up</button>
				</form>
			</div>
		</div>
		<div class="right">
			<div class="right-content">
				<?php
			    if($showError){
			        echo ' <div class="alert alert-success 
			            alert-dismissible fade show" role="alert">
			    
			            <strong>Error!!</strong> Wrong Password 
			        </div> ';
		    	}?>
				<div class="right-header">
					<h3>Log in</h3>
				</div>
				<form action="index.php" method="post">
					<input type="text" name="loginid" placeholder="Login id" required>
					<input type="password" name="password" placeholder="Password" required><br>
					<button type="submit" name="login" value="Log in">Login</button>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>