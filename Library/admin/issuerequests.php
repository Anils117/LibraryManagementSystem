<?php include_once("bootstrap.php") ?>
<?php include_once("titlebar.php") ?>
<?php
require('dbconnect.php');
?>

<div class="issuerequests container">
	<div class="issuerequests-content">
		<div class="ss-name">
			<h2 class="ss-header">MANAGE ISSUE REQUESTS</h2>
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
	                    <tr id="mng-issued-requests-thead">
	                        <th id="slno">S.NO</th>
	                        <th>User Id</th>
	                        <!-- <th id="student-name">Student Name</th> -->
	                        <th id="book-name">Book Id</th>
	                        <!-- <th id="ref-no">Ref No</th> -->
	                        <th id="availability">Book Name</th>
	                        <th id="availability">Availability</th>
	                        <th id="issued-date">Status</th>
	                        <th id="issued-date">Requested Date</th>
	                        <th id="action">Action</th>
	                    </tr>
                	</thead>
                	<tbody id="mngissuedrequests-trow">
            		<?php
						$sql = "select * from Library.issuerequests where Status='pending'";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							$i = 1;
							while($row = $result->fetch_assoc()) {
								$x = $row["Bookid"];
								$bookavail = "select Bookcount from Library.books where Bookid='$x'";
								$avail = $conn->query($bookavail);
								$av = $avail->fetch_array()[0] ?? '';
				    			echo "<tr>
					                    <td>".$i."</td>
					            		<td>".$row["Userid"]."</td>
					            		<td>".$row["Bookid"]."</td>
					            		<td>".$row["Bookname"]."</td>
					            		<td>".$av."</td>
					            		<td>".$row["Status"]."</td>
					            		<td>".$row["Requestdate"]."</td>
					            		<td>
				                			<div class='tableactions'>
				                				<a href=\"accept.php?id1=".$row['Bookid']."&id2=".$row['Userid']."\" class='editbtn'>Accept</a>
				                				<a href='' class='decline'>Decline</a>
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
<!-- 
<script>
	function mngissuedrequests() {
		let str="";
		for (var i = 1; i <= 10; i++) {
			str = str+`<tr>
	                        <td>${i}</td>
	                        <td>O${180670+i}</td>
	                		<td>student name</td>
	                		<td>book name</td>
	                		<td>2362373</td>
	                		<td>5</td>
	                		<td>1/1/2023</td>
	                		<td>
	                			<div class="tableactions">
	                				<button class="editbtn">Accept</button>
	                				<a href="">Decline</a>
	                			</div>
	                		</td>
                    	</tr>`
		}
		mngissuedrequestsrow = document.getElementById('mngissuedrequests-trow');
		mngissuedrequestsrow.innerHTML=str;
	}
	mngissuedrequests()
</script> -->