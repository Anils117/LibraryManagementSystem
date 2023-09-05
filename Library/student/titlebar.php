<div class="myheader container-fluid m-0 p-0" id="myheader">
	<div class="navbar">
		<div class="title-left" id="home">
			<img src="./lib-images/logo.png">
			<div class="logoname">
				<h1 class="heading">Library</h1>
				<p>RGUKT ONGOLE</p>
			</div>
		</div>
		<div class="title-right m-0 p-0">
			<div class="searchbar">
				<div class="search">
					<!-- <form method="GET" action="search.php">
						<input type="text" class="search-input" placeholder="Search..." name="" >
						<a href="search.php" class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></a> -->
						<form method="GET" action="search.php">
					        <input type="text" class="search-input" placeholder="Search..." name="query">
					        <button type="submit" class="search-icon"><i class="fas fa-search"></i></button>
					    </form>
				</div>
			</div>
			<div  class="title-buttons">
				<ul class="menu">
					<li><a href="./cart.php"><i class="fa-solid fa-cart-shopping"></i> Cart</a></li>
					<!-- <li><a href="./books.php"><i class="fa-solid fa-book"></i> Books</a></li> -->
					<li><a href="./dashboard.php"><i class="fa-solid fa-clock-rotate-left"></i> Dashboard</a></li>
					<li><a href="./staff.php"><i class="fa-solid fa-user-group"></i> Staff</a></li>					
					<li><a href="./profile.php"><i class="fa-solid fa-user"></i> Profile</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>


<script>
	document.getElementById("home").onclick = function () {
        location.href = "index.php";
    };
</script>