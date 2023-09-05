<?php
require('dbconnect.php');
?>
<?php include_once("bootstrap.php") ?>
<?php include_once("titlebar.php") ?>

<div class="allbooks container">
	<div class="allbooks-content">
		<div class="ss-name">
			<h2 class="ss-header">Books Listing</h2>
		</div>
		<div class="dashboard-ss">
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
					<label>Search Book :  </label><input type="text" name="booksearch">
				</div>
			</div>
			<div class="sss-table">
				<table class="table table-striped table-bordered table-hover">
					<thead>
	                    <tr id="allbooks-thead">
	                        <th id="slno">S.NO</th>
	                        <th id="student-name">Book Id</th>
	                        <th id="student-name">Book Name</th>
	                        <th id="author-name">Author</th>
	                        <th id="book-name">Category</th>
	                        <th id="ref-no">Ref No</th>
	                        <th id="issued-date">Availability</th>
	                    </tr>
                	</thead>
                	<tbody id="allbooks-trow">
                	<?php
						$sql = "select * from Library.books";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							$i = 1;
							while(($row = $result->fetch_assoc()) && ($i < 10)) { 
				    			echo "<tr>
					                    <td>".$i."</td>
					                    <td>".$row["Bookid"]."</td>
					            		<td>".$row["Bookname"]."</td>
					            		<td>".$row["Authorname"]."</td>
					            		<td>".$row["Category"]."</td>
					            		<td>".$row["Referenceno"]."</td>
					            		<td>".$row["Bookcount"]."</td>
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
</div>

<script>
	// function allbooks() {
	// 	let str="";
	// 	for (var i = 1; i <= 10; i++) {
	// 		str = str+`<tr>
	//                         <td>${i}</td>
	//                 		<td>Book Name</td>
	//                 		<td>xxxxxxxx</td>
	//                 		<td>xxxxxxxx</td>
	//                 		<td>25</td>
 //                    	</tr>`
	// 	}
	// 	allbooksrow = document.getElementById('allbooks-trow');
	// 	allbooksrow.innerHTML=str;
	// }
	// allbooks()
</script>