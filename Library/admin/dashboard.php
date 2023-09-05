<div class="dashboard container">
	<div class="dashboard-content">
		<div class="dashboard-head">
			<h2 class="dashboard-header">ADMIN DASHBOARD</h2>
			<div class="dashboard-hr"></div>
		</div>
		<div class="dashboard-items">
			<div class="item" id="manage-students">
				<div class="item-img">
					<img src="profile.png">
				</div>
				<p>264</p>
				<p>MANAGE STUDENTS</p>
			</div>
			<div class="item" id="manage-faculty">
				<div class="item-img">
					<img src="profile.png">
				</div>
				<p>264</p>
				<p>MANAGE FACULTY</p>
			</div>
			<div class="item" id="all-books">
				<div class="item-img">
					<img src="books.png">
				</div>
				<p>264</p>
				<p>ALL BOOKS</p>
			</div>
			<div class="item" id="add-book">
				<div class="item-img">
					<img src="books.png">
				</div>
				<p>ADD BOOK</p>
			</div>
			<div class="item" id="issue-book">
				<div class="item-img">
					<img src="books.png">
				</div>
				<p>264</p>
				<p>ISSUE BOOK</p>
			</div>
			<div class="item" id="manage-books">
				<div class="item-img">
					<img src="books.png">
				</div>
				<p>264</p>
				<p>MANAGE BOOKS</p>
			</div>
			
			<div class="item" id="issue-requests">
				<div class="item-img">
					<img src="books.png">
				</div>
				<p>264</p>
				<p>ISSUE REQUESTS</p>
			</div>
			<div class="item" id="renewal-requests">
				<div class="item-img">
					<img src="books.png">
				</div>
				<p>264</p>
				<p>RENEWAL REQUESTS</p>
			</div>
			<div class="item" id="currently-issued-books">
				<div class="item-img">
					<img src="books.png">
				</div>
				<p>264</p>
				<p>ISSUED BOOKS(NOT RETURNED YET)</p>
			</div>
			<div class="item" id="books-returned">
				<div class="item-img">
					<img src="books.png">
				</div>
				<p>264</p>
				<p>RETURNED BOOKS</p>
			</div>
			<div class="item" id="recomendations">
				<div class="item-img">
					<img src="books.png">
				</div>
				<p>264</p>
				<p>BOOK RECOMENDATIONS</p>
			</div>
		</div>
	</div>
</div>

<script>
    document.getElementById("manage-faculty").onclick = function () {
        location.href = "mngfaculty.php";
    };
    document.getElementById("manage-students").onclick = function () {
        location.href = "mngstudents.php";
    };
    document.getElementById("all-books").onclick = function () {
        location.href = "allbooks.php";
    };
    document.getElementById("issue-book").onclick = function () {
        location.href = "issuebook.php";
    };
    document.getElementById("issue-requests").onclick = function () {
        location.href = "issuerequests.php";
    };
    document.getElementById("renewal-requests").onclick = function () {
        location.href = "renewalrequests.php";
    };
    document.getElementById("currently-issued-books").onclick = function () {
        location.href = "crntissuedbooks.php";
    };
    document.getElementById("add-book").onclick = function () {
        location.href = "addbooks.php";
    };
    document.getElementById("books-returned").onclick = function () {
        location.href = "booksreturned.php";
    };
    document.getElementById("manage-books").onclick = function () {
        location.href = "managebooks.php";
    };
    document.getElementById("recomendations").onclick = function () {
        location.href = "recomendations.php";
    };
</script>