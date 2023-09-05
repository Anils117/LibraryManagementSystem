<?php require('dbconnect.php')?>
<?php include_once("bootstrap.php") ?>
<?php include_once("titlebar.php") ?>

<div class="cart container">
    <div class="cart-book-head">
        <h2 class="cart-book-header">Search Results</h2>
        <div class="cart-book-hr"></div>
    </div>
    <div class="cart-main">

    <?php
        if (isset($_GET['query'])) {
            $query = $_GET['query'];
            $sql = "SELECT * FROM library.books WHERE Bookname LIKE '%$query%' OR Authorname LIKE '%$query%'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) { ?>
                    <div class="cart-book">
                        <div class="cart-book-img">
                            <img src=<?php echo "../bookimg/".$row["Bookimage"]?>>
                        </div>
                        <div class="cart-book-content">
                            <h2 class="cart-book-name"><?php echo $row["Bookname"]?></h2>
                            <p class="">Book id : <?php echo $row["Bookid"]?></p>
                            <p class="">Author : <?php echo $row["Authorname"]?></p>
                            <p class="">Reference Number : <?php echo $row["Referenceno"]?></p>
                            <p class="">Category : <?php echo $row["Category"]?></p>
                            <p class="">Availability : <?php echo $row["Bookcount"]?></p>
                        </div>
                        <div class="book-cancel">
                            <?php echo "<a href=\"issuerequest.php?id=".$row['Bookid']."&name=".$row['Bookname']."\">Request</a>";?>
                        </div>
                    </div>
    <?php       }
            } else {
                echo "No results found.";
            }
        }
    ?>
    </div>
</div>
