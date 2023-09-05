<?php include_once("bootstrap.php") ?>
<?php include_once("titlebar.php") ?>

<div class="stu-books container">
	<div class="stu-books-content">
		<div class="stu-books-head">
			<h2 class="stu-books-header">DASHBOARD</h2>
			<div class="stu-books-hr"></div>
		</div>
		<div class="stu-books-items">
			<div class="item" id="total-books">
				<div class="item-img">
					<img src="books.png">
				</div>
				<p>100</p>
				<p>TOTAL BOOKS LISTED</p>
			</div>
			<div class="item" id="books-taken">
				<div class="item-img">
					<img src="books.png">
				</div>
				<p>100</p>
				<p>BOOKS TAKEN</p>
			</div>
			<div class="item" id="books-returned">
				<div class="item-img">
					<img src="books.png">
				</div>
				<p>100</p>
				<p>BOOKS RETURNED</p>
			</div>
			<div class="item" id="books-notreturned">
				<div class="item-img">
					<img src="books.png">
				</div>
				<p>100</p>
				<p>BOOKS NOT RETURNED</p>
			</div>
		</div>
		<div class="stu-books-ss" id="stu-books-ss">
			<div class="ss-name">
				<h2 class="ss-header" id="headname">TOTAL BOOKS LISTED</h2>
				<div class="ss-hr"></div>
			</div>
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
				<div class="sss-select">
					<label>Select Category : </label>
					<select>
					    <option value="">All</option>
					    <option value="">B</option>
					    <option value="">C</option>
					    <option value="">D</option>
					    <option value="">A</option>
					    <option value="">B</option>
					    <option value="">C</option>
					    <option value="">D</option>
				  	</select>
				</div>
				<div class="sss-search">
					<label>Search Book :</label><input type="text" name="booksearch">
				</div>
			</div>
			<div class="sss-table">
				<table class="table table-striped table-bordered table-hover">
					<thead>
	                    <tr id="thead">
	                        
	                    </tr>
                	</thead>
                	<tbody id="trow">
                		<tr>
	                        <td>${i}</td>
	                		<td>Book-${i}</td>
	                		<td>xxxxxxxx</td>
	                		<td>xxxxxxxx</td>
	                		<td>20</td>
                    	</tr>
                    	<tr>
	                        <td>${i}</td>
	                		<td>Book-${i}</td>
	                		<td>xxxxxxxx</td>
	                		<td>xxxxxxxx</td>
	                		<td>20</td>
                    	</tr>
                    	<tr>
	                        <td>${i}</td>
	                		<td>Book-${i}</td>
	                		<td>xxxxxxxx</td>
	                		<td>xxxxxxxx</td>
	                		<td>20</td>
                    	</tr>
                    	<tr>
	                        <td>${i}</td>
	                		<td>Book-${i}</td>
	                		<td>xxxxxxxx</td>
	                		<td>xxxxxxxx</td>
	                		<td>20</td>
                    	</tr>
                    	<tr>
	                        <td>${i}</td>
	                		<td>Book-${i}</td>
	                		<td>xxxxxxxx</td>
	                		<td>xxxxxxxx</td>
	                		<td>20</td>
                    	</tr>
                    	<tr>
	                        <td>${i}</td>
	                		<td>Book-${i}</td>
	                		<td>xxxxxxxx</td>
	                		<td>xxxxxxxx</td>
	                		<td>20</td>
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
		let trow = document.getElementById('trow');

		function item1(){
			let item1 = document.getElementById('total-books');

			item1.addEventListener('click', function(e) {
				let ds1 = document.getElementById('stu-books-ss');
				ds1.style.display = "block";
				ls=document.getElementById("headname");
				ls.innerHTML="Total Books Listed";

				let thead = document.getElementById('thead');
				thead.innerHTML=`<th id="slno">S.NO</th>
	                        <th id="book-name">Book Name</th>
	                        <th id="category">Category</th>
	                        <th id="ref-no">Ref No</th>
	                        <th id="availability">Availability</th>`;


				let str = "";
				for (let i = 1; i <= 10; i++) {
					str=str+`<tr>
		                        <td>${i}</td>
		                		<td>Book-${i}</td>
		                		<td>xxxxxxxx</td>
		                		<td>xxxxxxxx</td>
		                		<td>20</td>
		                    </tr>`;
				}
				trow.innerHTML = str;
			})
		}

		item1()

		function item2() {
			let item2 = document.getElementById('books-taken');
			item2.addEventListener('click', function(e) {
				let ds2 = document.getElementById('stu-books-ss');
				ds2.style.display = "block";
				ls=document.getElementById("headname");
				ls.innerText="Books Taken";

				let thead = document.getElementById('thead');
				thead.innerHTML=`<th id="slno">S.NO</th>
		                        <th id="student-name">Student Name</th>
		                        <th id="book-name">Book Name</th>
		                        <th id="ref-no">Ref No</th>
		                        <th id="issued-date">Issued Date</th>`;

				let str = "";
				for (let i = 1; i <= 10; i++) {
					str=str+`<tr>
		                        <td>${i}</td>
		                		<td>Book-${i}</td>
		                		<td>xxxxxxxx</td>
		                		<td>xxxxxxxx</td>
		                		<td>20</td>
		                    </tr>`;
				}
				trow.innerHTML = str;
			})
		}
		item2()

		function item3(){
			let item3 = document.getElementById('books-returned');
			item3.addEventListener('click', function(e) {
				let ds3 = document.getElementById('stu-books-ss');
				ds3.style.display = "block";
				ls=document.getElementById("headname");
				ls.innerHTML="Books Returned";


				let thead = document.getElementById('thead');
				thead.innerHTML=`<th id="slno">S.NO</th>
	                        <th id="student-name">Student Name</th>
	                        <th id="book-name">Book Name</th>
	                        <th id="ref-no">Ref No</th>
	                        <th id="issued-date">Issued Date</th>
	                        <th id="submitted-date">Submitted Date</th>`;

				let str = "";
				for (let i = 1; i <= 10; i++) {
					str=str+`<tr>
		                        <td>${i}</td>
		                		<td>Book-${i}</td>
		                		<td>xxxxxxxx</td>
		                		<td>xxxxxxxx</td>
		                		<td>xxxxxxxx</td>
		                		<td>xxxxxxxx</td>
		                    </tr>`;
				}
				trow.innerHTML = str;
			})
		}
		item3()

		function item4(argument) {
			let item4 = document.getElementById('books-notreturned');
			item4.addEventListener('click', function(e) {
				let ds4 = document.getElementById('stu-books-ss');
				ds4.style.display = "block";
				ls=document.getElementById("headname");
				ls.innerHTML="Books Not Returned";

				let thead = document.getElementById('thead');
				thead.innerHTML=`<th id="slno">S.NO</th>
	                        <th id="student-name">Student Name</th>
	                        <th id="book-name">Book Name</th>
	                        <th id="ref-no">Ref No</th>
	                        <th id="issued-date">Issued Date</th>
	                        <th id="status">Status</th>`;

				let str = "";
				for (let i = 1; i <= 10; i++) {
					str=str+`<tr>
		                        <td>${i}</td>
		                		<td>Book-${i}</td>
		                		<td>xxxxxxxx</td>
		                		<td>xxxxxxxx</td>
		                		<td>xxxxxxxx</td>
		                		<td>xxxxxxxx</td>
		                    </tr>`;
				}
				trow.innerHTML = str;
			})
		}
		item4()
</script>