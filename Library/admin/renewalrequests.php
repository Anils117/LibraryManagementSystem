<?php include_once("bootstrap.php") ?>
<?php include_once("titlebar.php") ?>

<div class="renewalrequests container">
	<div class="renewalrequests-content">
		<div class="ss-name">
			<h2 class="ss-header">MANAGE RENEWAL REQUESTS</h2>
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
	                    <tr id="mng-renewal-requests-thead">
	                        <th id="slno">S.NO</th>
	                        <th>Roll No</th>
	                        <th id="student-name">Student Name</th>
	                        <th id="book-name">Book Name</th>
	                        <th id="ref-no">Ref No</th>
	                        <th id="renewals-left">Renewals Left</th>
	                        <th id="issued-date">Requested Date</th>
	                        <th id="action">Action</th>
	                    </tr>
                	</thead>
                	<tbody id="mngrenewalrequests-trow">
                		<tr>
	                       
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

<script>
	function mngrenewalrequests() {
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
		mngrenewalrequestsrow = document.getElementById('mngrenewalrequests-trow');
		mngrenewalrequestsrow.innerHTML=str;
	}
	mngrenewalrequests()
</script>