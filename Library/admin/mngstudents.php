<?php
require('dbconnect.php');
?>
<?php include_once("bootstrap.php") ?>
<?php include_once("titlebar.php") ?>
<div class="mngstudents container">
	<div class="ss-name">
		<h2 class="ss-header" id="headname">TOTAL STUDENTS</h2>
	</div>
	<div class="dashboard-ss" id="dashboard-ss">
	<div class="sss">
		<div class="sss-select">
			<label>Records per page : </label>
			<select>
			    <option value="10">10</option>
			    <option value="15">15</option>
			    <option value="25">25</option>
			    <option value="100">100</option>
		  	</select>
		</div>
		<div class="sss-search">
			<label>Search Student :</label><input type="text" name="booksearch">
		</div>
	</div>
	<div class="sss-table">
		<table class="table table-striped table-bordered table-hover">
			<thead>
                <tr id="thead">
                    <th id="slno">S.NO</th>
                    <th id="book-name">STUDENT ID</th>
                    <th id="book-name">STUDENT Name</th>
                    <th id="category">BRANCH</th>
                    <th id="ref-no">E-MAIL</th>
                    <th id="availability">ACTION</th>
                </tr>
        	</thead>
        	<tbody id="mng-students-trow">
            	<?php
					$sql = "select * from Library.user";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						$i = 1;
						while(($row = $result->fetch_assoc()) && ($i < 10)) { 
			    			echo "<tr>
				                    <td>".$i."</td>
				            		<td>".$row["Userid"]."</td>
				            		<td>".$row["Name"]."</td>
				            		<td>".$row["Branch"]."</td>
				            		<td>".$row["Email"]."</td>
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
	<div class="ssss">
		<div class="ssss-left">
			<p>Showing 1 to 10 of 10 entries</p>
		</div>
		<div class="ssss-right">
			<div class="lib__pgn"><nav aria-label="Page navigation example">
			  <ul class="pagination">
			    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
			    <li class="page-item"><a class="page-link" href="#">1</a></li>
			    <li class="page-item"><a class="page-link" href="#">2</a></li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
			    <li class="page-item"><a class="page-link" href="#">Next</a></li>
			  </ul>
			</nav></div>
		</div>
	</div>
</div>
</div>

<script>
</script>
</body>
</html>