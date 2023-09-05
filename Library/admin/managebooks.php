<?php include_once("bootstrap.php") ?>
<?php include_once("titlebar.php") ?>

<div class="mngbooks container">
	<div class="mngbooks-content">
		<div class="ss-name">
			<h2 class="ss-header">MANAGE BOOKS</h2>
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
	                    <tr id="mngbooks-thead">
	                        <th id="slno">S.NO</th>
	                        <th id="student-name">Book Name</th>
	                        <th id="book-name">Category</th>
	                        <th id="ref-no">Ref No</th>
	                        <th id="issued-date">Action</th>
	                    </tr>
                	</thead>
                	<tbody id="mngbooks-trow">
                		
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
	function mngbooks() {
		let str="";
		for (var i = 1; i <= 10; i++) {
			str = str+`<tr>
	                        <td>${i}</td>
	                		<td>
	                			<div class="tablebook">
	                        		<img src="books.png">
	                        		<h3>Book Name</h3>
	                        	</div>
	                        	<div class="tablebookname"><p>Book Name</p></div>
	                		</td>
	                		<td>xxxxxxxx</td>
	                		<td>xxxxxxxx</td>
	                		<td>
	                			<div class="tableactions">
	                				<button class="editbtn">Details</button>
	                				<button class="editbtn">Edit</button>
	                				<a href="">Delete</a>
	                			</div>
	                		</td>
                    	</tr>`
		}
		mngbooksrow = document.getElementById('mngbooks-trow');
		mngbooksrow.innerHTML=str;
	}
	mngbooks()
</script>