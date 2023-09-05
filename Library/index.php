<?php
require('dbconnect.php');
?><!-- 
echo "<script type='text/javascript'>alert('Error! User Already Exists!!!')</script>";
					header( "Refresh:0.01; url=index.php", true, 303); -->
<?php
	$passwordincorrect = false;
	$userexists = false;
	$usernotexists = false;
	if(isset($_POST['login'])){
		$u = $_POST['loginid'];
		$p = $_POST['password'];

		$sql = "select * from library.user where Userid='$u'";
		$result = $conn->query($sql);

	    $num = mysqli_num_rows($result); 

	    if($num == 0){
	    	$usernotexists = true;
	    }
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
			$passwordincorrect = true;
		}
	}
	if($usernotexists){
		echo "<script type='text/javascript'>alert('User Not Exists Please SignIn!!')</script>";
		header( "Refresh:0.0; url=index.php", true, 303);
	}else if($passwordincorrect){
		echo "<script type='text/javascript'>alert('Password Wrong !!')</script>";
		header( "Refresh:0.0; url=index.php", true, 303);
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

	    if($num>0) {
	    	$userexists = true;
   		}else if($num == 0){
	    	$sql = "insert into library.user (Name,Type,Userid,Email,Branch,Password) values ('$name','$type','$id','$email','$branch','$password')";
			$result2 = mysqli_query($conn, $sql);
	    	if ($result2){
				echo "<script type='text/javascript'>alert('Resgistration Success You can Signin!!')</script>";
					header( "Refresh:0.01; url=index.php", true, 303);
			}
	    }
	    if($userexists){
	    	echo "<script type='text/javascript'>alert('Error! User Already Exists!!!')</script>";
			header( "Refresh:0.01; url=index.php", true, 303);
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
			<a href="#home">SignUp</a>
			<a href="#home">SignIn</a>
		</div>
	</div>
	<div class="home container-fluid">
	<div class="home-content" id="home">
		<div class="left">
			<div class="left-content">
				<div class="left-header">
					<h3>Sign Up</h3>
				</div>
				<form action="index.php" method="post">
					<input type="text" name="name" placeholder="Name" required>
					<input type="text" name="id" placeholder="ID" required>
					<input type="email" name="email" placeholder="E-mail" required>
					<input type="text" name="branch" placeholder="Branch" required>
					<input type="password" name="password" placeholder="Password" required><br>
					<button type="submit" name="signup">Sign up</button>
				</form>
			</div>
		</div>
		<div class="right">
			<div class="right-content">
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