<?php require("dbconnect.php")?>
<?php include_once("bootstrap.php") ?>
<?php include_once("titlebar.php") ?>
<div class="dashboard container">
	<div class="dashboard-content">
		<div class="books-taken">
			<div class="dashboard-head">
				<h2 class="dashboard-header">Currently Issued Books</h2>
				<div class="dashboard-hr"></div>
			</div>
			<div class="books-taken-table">
				<table class="table table-striped table-bordered table-hover">
					<thead>
	                    <tr>
	                        <th>S.NO</th>
	                        <th>Book Name</th>
	                        <th>REF No</th>
	                        <th>Issued Date</th>
	                        <th>Due Date</th>
	                        <th>Actions</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	<?php
	                	$userid = $_SESSION['Id'];
					$sql = "select Bookname,Bookid,Issuedate from Library.issuerequests where Userid='$userid' and Status='done'";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						$i = 1;
						while(($row = $result->fetch_assoc()) && ($i < 10)) { 
			    			echo "<tr>
				                    <td>".$i."</td>
				            		<td>".$row["Bookname"]."</td>
				            		<td>".$row["Bookid"]."</td>
				            		<td>".$row["Issuedate"]."</td>
				            		<td>"."01/01/2023"."</td>
				            		<td>
										<div class='tableactions'>
											<button class='editbtn'>Details</button>
										</div>
									</td>	
				            	</tr>";
				            $i++;
				  		}
					}
				?>
	                </tbody>
				</table>
			</div>
		</div>
		<div class="books-returned">
			<div class="dashboard-head">
				<h2 class="dashboard-header">BOOKS RETURNED</h2>
				<div class="dashboard-hr"></div>
			</div>
			<div class="books-returned-table">
				<table class="table table-striped table-bordered table-hover">
					<thead>
	                    <tr>
	                        <th>S.NO</th>
	                        <th>Book Name</th>
	                        <th>REF No</th>
	                        <th>Issued Date</th>
	                        <th>Return Date</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	<?php
					$sql = "select Bookname,Bookid,Issuedate,Returndate from Library.issuerequests where Userid='$userid' and Status='returned'";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						$i = 1;
						while(($row = $result->fetch_assoc()) && ($i < 10)) { 
			    			echo "<tr>
				                    <td>".$i."</td>
				            		<td>".$row["Bookname"]."</td>
				            		<td>".$row["Bookid"]."</td>
				            		<td>".$row["Issuedate"]."</td>
				            		<td>".$row["Returndate"]."</td>
				            	</tr>";
				            $i++;
				  		}
					}
				?>
	                </tbody>
				</table>
			</div>
		</div>
		<!-- <div class="books-notreturned">
			<div class="dashboard-head">
				<h2 class="dashboard-header">BOOKS NOT RETURNED</h2>
				<div class="dashboard-hr"></div>
			</div>
			<div class="books-notreturned-table">
				<table class="table table-striped table-bordered table-hover">
					<thead>
	                    <tr>
	                        <th>S.NO</th>
	                        <th>Book Name</th>
	                        <th>REF No</th>
	                        <th>Issued Date</th>
	                        <th>Due</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	<tr>
	                		<td>1</td>
	                		<td>Book 1</td>
	                		<td>xxxxxxxx</td>
	                		<td>01/01/2023</td>
	                		<td>XXXX</td>
	                	</tr>
	                	<tr>
	                		<td>2</td>
	                		<td>Book 2</td>
	                		<td>xxxxxxxx</td>
	                		<td>01/01/2023</td>
	                		<td>XXXX</td>
	                	</tr>
	                	<tr>
	                		<td>3</td>
	                		<td>Book 3</td>
	                		<td>xxxxxxxx</td>
	                		<td>01/01/2023</td>
	                		<td>XXXX</td>
	                	</tr>
	                	<tr>
	                		<td>4</td>
	                		<td>Book 4</td>
	                		<td>xxxxxxxx</td>
	                		<td>01/01/2023</td>
	                		<td>XXXX</td>
	                	</tr>
	                </tbody>
				</table>
			</div>
		</div> -->
	</div>
</div>

