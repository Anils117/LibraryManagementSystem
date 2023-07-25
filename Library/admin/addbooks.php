<?php
require('dbconnect.php');
?>
<?php include_once("bootstrap.php") ?>
<?php include_once("titlebar.php") ?>

<?php
	if(isset($_POST['submit'])){
		$bookname=$_POST['bookname'];
		$cat=$_POST['taskOption'];
		$authorname=$_POST['authorname'];
		$referenceno=$_POST['refno'];
		$bookcount=$_POST['bookcount'];
		$bookid=$_POST['bookid'];
		$filename = $_FILES['image']['name'];
		$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
		$extensions_arr = array("jpg","jpeg","png");

		$new = "select Bookid from Library.Books where Bookid='$bookid'";
		$result = $conn->query($new);
		$numrows=mysqli_num_rows($result);
		$flag = true;
		if($numrows>0){
			echo "<script type='text/javascript'>alert('Book Already Added!!')</script>";
			header( "Refresh:0.01; url=addbooks.php", true, 303);
			$flag = false;
		}
		if(in_array($imageFileType,$extensions_arr)  && $flag){
			if(move_uploaded_file($_FILES["image"]["tmp_name"],'../bookimg/'.$filename)){
				$sql="INSERT INTO  Library.books VALUES('$bookname','$authorname','$referenceno','$cat','$bookcount','$filename','$bookid')";
				if(mysqli_query($conn, $sql)){
					echo "<script type='text/javascript'>alert('Book Added Successfully.')</script>";
			header( "Refresh:0.01; url=addbooks.php", true, 303);
				}else{
				  echo 'Error: '.mysqli_error($conn);
				}
			}else{
				echo 'Error in uploading file - '.$_FILES['image']['name'].'<br/>';
			}

		}
	}
?>
<div class="admin-books container">
	<div class="books1">
		<div class="add-book-head">
			<h2 class="add-book-header">ADD BOOKS</h2>
			<div class="add-book-hr"></div>
		</div>
		<div class="add-book-content">
			<h2 class="ss-header">Book Info</h2>
			<div class="book-form">
				<form class="form-content" action="addbooks.php" method="post" enctype="multipart/form-data">
					<div class="form2">
						<label>Book Name<span>*</span> : </label>
						<input type="text" name="bookname"><br>

						<label>Author Name<span>*</span> : </label>
						<input type="text" name="authorname"><br>

						<label>Book Id<span>*</span> : </label>
						<input type="text" name="bookid"><br>

						<label>Reference Number<span>*</span> : </label>
						<input type="text" name="refno"><br>

						<label>Select Category<span>*</span> : </label>
						<select name="taskOption">
							<option value="Category-1">Category-1</option>
							<option value="Category-2">Category-2</option>
							<option value="Category-3">Category-3</option>
							<option value="Category-4">Category-4</option>
							<option value="Category-5">Category-5</option>
						</select><br>

						<label>Availability<span>*</span> : </label>
						<input type="text" name="bookcount"><br>

						<label>Book Image<span>*</span> : </label>
						<input type="file" name="image">

						<div class="subbtn">
							<button type="submit" name="submit" class="add-book-btn">Add Book</button>
						</div>				
					</div>
				</form>
			</div>
		</div>
	</div>
</div>