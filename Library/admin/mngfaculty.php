<?php include_once("bootstrap.php") ?>
<?php include_once("titlebar.php") ?>

<div class="mngfaculty container">
	<div class="ss-name">
		<h2 class="ss-header" id="headname">TOTAL Faculty</h2>
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
			<label>Search Faculty :</label><input type="text" name="booksearch">
		</div>
	</div>
	<div class="sss-table">
		<table class="table table-striped table-bordered table-hover">
			<thead>
                <tr id="thead">
                    <th id="slno">S.NO</th>
                    <th id="book-name">Faculty ID</th>
                    <th id="category">BRANCH</th>
                    <th id="ref-no">E-MAIL</th>
                    <th id="availability">ACTION</th>
                </tr>
        	</thead>
        	<tbody id="mng-faculty-trow">
        		
            	
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

<script>
	function mngfaculty() {
		let str="";
		for (var i = 1; i <= 10; i++) {
			str = str+`<tr>
                    <td>${i}</td>
            		<td>Faculty-${i}</td>
            		<td>CSE</td>
            		<td>o180677@rguktong.ac.in</td>
            		<td>
						<div class="tableactions">
							<button class="editbtn">Details</button>
						</div>
					</td>	
            	</tr>`
		}
		mngfacultyrow = document.getElementById('mng-faculty-trow');
		mngfacultyrow.innerHTML=str;
	}
	mngfaculty()
</script>