<?php require('dbconnect.php')?>
<?php include_once("bootstrap.php") ?>
<?php include_once("titlebar.php") ?>

<div class="currentissue container">
	<div class="currentissue-content">
		<div class="ss-name">
			<h2 class="ss-header">CURRENTLY ISSUED BOOKS</h2>
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
					<label>Search Student :  </label><input type="text" name="booksearch">
				</div>
			</div>
			<div class="sss-table">
				<table class="table table-striped table-bordered table-hover">
					<thead>
	                    <tr id="mngbooks-thead">
	                        <th id="slno">S.NO</th>
	                        <th id="student-name">Student Id</th>
	                        <th id="book-name">Book Id</th>
	                        <!-- <th id="ref-no">Ref No</th> -->
	                        <th id="issued-date">Issued Date</th>
	                        <th id="returned-date">Due Date</th>
	                        <th id="action">Due</th>
	                    </tr>
                	</thead>
                	<tbody id="mngcrntissuedbooks-trow">
                		<tr>
	                       <?php
						$sql = "select * from Library.issuerequests where Status='issued'";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							$i = 1;
							while($row = $result->fetch_assoc()) {
				    			echo "<tr>
					                    <td>".$i."</td>
					            		<td>".$row["Userid"]."</td>
					            		<td>".$row["Bookid"]."</td>
					            		<td>".$row["Issuedate"]."</td>
					            		<td>xxxx</td>
					            		<td>xxxx</td>
					            		<td>
										<div class='tableactions'>
											<a href=\"takereturn.php?id1=".$row['Bookid']."&id2=".$row['Userid']."\" class='editbtn'>Done</a>
										</div>
				                		</td>	
					            	</tr>";
					            $i++;
					  		}
						}
					?>
                    	</tr>
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