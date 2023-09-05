<?php require('dbconnect.php')?>
<?php include_once('bootstrap.php'); ?>
<style>
    <?php include 'new.css' ?>;     
</style>
<!-- ============== Nav Bar =================== -->
<?php include_once('titlebar.php') ?>

<!-- =================== Main Content ===============-->
<div class="lib__main">
    <!-- =============== Side Bar =================== -->
    <div class="lib__sidebar">
  <div class="dropdown" id="drp">
    <button class="dropbtn" id="dropbtn">
      SELECT CATEGORY
      <i class="fa-solid fa-circle-chevron-right"></i>
    </button>
    <div id="drpcontent" class="dropdown-content">
      <a onclick="toggleDiv('allbooks','books-display')" href="#"><i class="fa-solid fa-angle-right"></i>All Books</a>
      <a onclick="toggleDiv('books-display','allbooks')" href="#"><i class="fa-solid fa-angle-right"></i>Computer Science</a>
      <a onclick="toggleDiv('books-display','allbooks')"href="#"><i class="fa-solid fa-angle-right"></i>Electronics & Communications</a>
      <a onclick="toggleDiv('books-display','allbooks')"href="#"><i class="fa-solid fa-angle-right"></i>Mechanical Engineering</a>
      <a onclick="toggleDiv('books-display','allbooks')"href="#"><i class="fa-solid fa-angle-right"></i>Civil Engineering</a>
      <a onclick="toggleDiv('books-display','allbooks')"href="#"><i class="fa-solid fa-angle-right"></i>Chemical Engineering</a>
      <a onclick="toggleDiv('books-display','allbooks')"href="#"><i class="fa-solid fa-angle-right"></i>Electrical Engineering</a>
      <a onclick="toggleDiv('books-display','allbooks')"href="#"><i class="fa-solid fa-angle-right"></i>Story Books</a>
      <a onclick="toggleDiv('books-display','allbooks')"href="#"><i class="fa-solid fa-angle-right"></i>Top Novels</a>
    </div>
  </div>
  <div class="lib__books" id="libbooks">
    <h2>Top Trending <i class="fa-solid fa-book"></i></h2>
    <ul>
      <a href="#"><i class="fa-solid fa-angle-right"></i>1</a>
      <a href="#"><i class="fa-solid fa-angle-right"></i>2</a>
      <a href="#"><i class="fa-solid fa-angle-right"></i>3</a>
      <a href="#"><i class="fa-solid fa-angle-right"></i>4</a>
      <a href="#"><i class="fa-solid fa-angle-right"></i>5</a>
    </ul>
    <hr>
    <h2>Most Viewed <i class="fa-solid fa-book"></i></h2>
    <ul>
      <a href="#"><i class="fa-solid fa-angle-right"></i>1</a>
      <a href="#"><i class="fa-solid fa-angle-right"></i>2</a>
      <a href="#"><i class="fa-solid fa-angle-right"></i>3</a>
      <a href="#"><i class="fa-solid fa-angle-right"></i>4</a>
      <a href="#"><i class="fa-solid fa-angle-right"></i>5</a>
    </ul>
    <hr>
    <h2>Recently Added <i class="fa-solid fa-book"></i></h2>
    <ul>
      <a href="#"><i class="fa-solid fa-angle-right"></i>1</a>
      <a href="#"><i class="fa-solid fa-angle-right"></i>2</a>
      <a href="#"><i class="fa-solid fa-angle-right"></i>3</a>
      <a href="#"><i class="fa-solid fa-angle-right"></i>4</a>
      <a href="#"><i class="fa-solid fa-angle-right"></i>5</a>
    </ul>
    <hr>
    <h2>Recently Added <i class="fa-solid fa-book"></i></h2>
    <ul>
      <a href="#"><i class="fa-solid fa-angle-right"></i>1</a>
      <a href="#"><i class="fa-solid fa-angle-right"></i>2</a>
      <a href="#"><i class="fa-solid fa-angle-right"></i>3</a>
      <a href="#"><i class="fa-solid fa-angle-right"></i>4</a>
      <a href="#"><i class="fa-solid fa-angle-right"></i>5</a>
    </ul>
    <hr>
    <button class="lib__home" id="lib__home">Home</button>

  </div>
</div>

<!-- ================== Main Content -->

  <div class="lib__content">
    <div class="banner mb-2">
      <img src="./lib-images/banner.jpg">
    </div>
    <div class="allbooks"  id="allbooks">
      <div class="allbooks2">
        <?php
          $sql="select Bookname,Bookid,Authorname,Bookcount,Bookimage from Library.books";
          $result = $conn->query($sql);
          while(($row = $result->fetch_assoc())) {
        ?>
        <div class="book">
          <div class="bookimg">
            <img src=<?php echo "../bookimg/".$row["Bookimage"]?>>
          </div>
            <div class="bbb_viewed_content text-center">
              <h2 class="name"><?php echo $row["Bookname"]?></h2>
              <p class="description"><?php echo "by ".$row["Authorname"]?></p>
              <p class="description"><?php echo $row["Bookcount"]." Available"?></p>
              <?php echo "<a href=\"issuerequest.php?id=".$row['Bookid']."&name=".$row['Bookname']."\">Request</a>";?>
            </div>
        </div>
        <?php
          }
        ?>
        </div>
    </div>
    <div id="books-display">
      <div class="booksrow">
        <div class="row">
          <div class="col">
            <div class="bbb_viewed_title_container">
              <h2 class="books_header">Top Picked<i class="ml-2 fa-solid fa-book"></i></h2>
              <div class="books_hr"></div>
              <div class="bbb_viewed_nav_container">
                <div class="bbb_viewed_nav bbb_viewed_prev_2"><i class="fas fa-chevron-left"></i></div>
                <div class="bbb_viewed_nav bbb_viewed_next_2"><i class="fas fa-chevron-right"></i></div>
              </div>
            </div>
            <div class="bbb_viewed_slider_container">
              <div class="owl-carousel owl-theme bbb_viewed_slider_2 d-flex">
                <div class="owl-item">
                  <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="bbb_viewed_image"><img src="./lib-images/cart-book.png"></div>
                    <div class="bbb_viewed_content text-center">
                      <h2 class="name">Book Title</h2>
                      <p class="description">Author</p>
                      <p class="description">Availability</p>
                      <?php echo "<a href=\"issuerequest.php?id=\">Request</a>";
                                        ?>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="bbb_viewed_image"><img src="./lib-images/cart-book.png"></div>
                    <div class="bbb_viewed_content text-center">
                      <h2 class="name">Book Title</h2>
                      <p class="description">Author</p>
                      <p class="description">Availability</p>
                      <?php echo "<a href=\"issuerequest.php?\">Request</a>";
                                        ?>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="bbb_viewed_image"><img src="./lib-images/cart-book.png"></div>
                    <div class="bbb_viewed_content text-center">
                      <h2 class="name">Book Title</h2>
                      <p class="description">Author</p>
                      <p class="description">Availability</p>
                      <?php echo "<a href=\"issuerequest.php?\">Request</a>";
                                        ?>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="bbb_viewed_image"><img src="./lib-images/cart-book.png"></div>
                    <div class="bbb_viewed_content text-center">
                      <h2 class="name">Book Title</h2>
                      <p class="description">Author</p>
                      <p class="description">Availability</p>
                      <?php echo "<a href=\"issuerequest.php?\">Request</a>";
                                        ?>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="bbb_viewed_image"><img src="./lib-images/cart-book.png"></div>
                    <div class="bbb_viewed_content text-center">
                      <h2 class="name">Book Title</h2>
                      <p class="description">Author</p>
                      <p class="description">Availability</p>
                      <?php echo "<a href=\"issuerequest.php?\">Request</a>";
                                        ?>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="bbb_viewed_image"><img src="./lib-images/cart-book.png"></div>
                    <div class="bbb_viewed_content text-center">
                      <h2 class="name">Book Title</h2>
                      <p class="description">Author</p>
                      <p class="description">Availability</p>
                      <?php echo "<a href=\"issuerequest.php?\">Request</a>";
                                        ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="booksrow mt-2">
        <div class="row">
          <div class="col">
            <div class="bbb_viewed_title_container">
              <h2 class="books_header">Top Picked<i class="ml-2 fa-solid fa-book"></i></h2>
              <div class="books_hr"></div>
              <div class="bbb_viewed_nav_container">
                <div class="bbb_viewed_nav bbb_viewed_prev_2"><i class="fas fa-chevron-left"></i></div>
                <div class="bbb_viewed_nav bbb_viewed_next_2"><i class="fas fa-chevron-right"></i></div>
              </div>
            </div>
            <div class="bbb_viewed_slider_container">
              <div class="owl-carousel owl-theme bbb_viewed_slider_2 d-flex">
                <div class="owl-item">
                  <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="bbb_viewed_image"><img src="./lib-images/cart-book.png"></div>
                    <div class="bbb_viewed_content text-center">
                      <h2 class="name">Book Title</h2>
                      <p class="description">Author</p>
                      <p class="description">Availability</p>
                      <?php echo "<a href=\"issuerequest.php?\">Request</a>";
                                        ?>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="bbb_viewed_image"><img src="./lib-images/cart-book.png"></div>
                    <div class="bbb_viewed_content text-center">
                      <h2 class="name">Book Title</h2>
                      <p class="description">Author</p>
                      <p class="description">Availability</p>
                      <?php echo "<a href=\"issuerequest.php?\">Request</a>";
                                        ?>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="bbb_viewed_image"><img src="./lib-images/cart-book.png"></div>
                    <div class="bbb_viewed_content text-center">
                      <h2 class="name">Book Title</h2>
                      <p class="description">Author</p>
                      <p class="description">Availability</p>
                      <?php echo "<a href=\"issuerequest.php?\">Request</a>";
                                        ?>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="bbb_viewed_image"><img src="./lib-images/cart-book.png"></div>
                    <div class="bbb_viewed_content text-center">
                      <h2 class="name">Book Title</h2>
                      <p class="description">Author</p>
                      <p class="description">Availability</p>
                      <?php echo "<a href=\"issuerequest.php?\">Request</a>";
                                        ?>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="bbb_viewed_image"><img src="./lib-images/cart-book.png"></div>
                    <div class="bbb_viewed_content text-center">
                      <h2 class="name">Book Title</h2>
                      <p class="description">Author</p>
                      <p class="description">Availability</p>
                      <?php echo "<a href=\"issuerequest.php?\">Request</a>";
                                        ?>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="bbb_viewed_image"><img src="./lib-images/cart-book.png"></div>
                    <div class="bbb_viewed_content text-center">
                      <h2 class="name">Book Title</h2>
                      <p class="description">Author</p>
                      <p class="description">Availability</p>
                      <?php echo "<a href=\"issuerequest.php?\">Request</a>";
                                        ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="booksrow mt-2">
        <div class="row">
          <div class="col">
            <div class="bbb_viewed_title_container">
              <h2 class="books_header">Top Trending<i class="ml-2 fa-solid fa-book"></i></h2>
              <div class="books_hr"></div>
              <div class="bbb_viewed_nav_container">
                <div class="bbb_viewed_nav bbb_viewed_prev_3"><i class="fas fa-chevron-left"></i></div>
                <div class="bbb_viewed_nav bbb_viewed_next_3"><i class="fas fa-chevron-right"></i></div>
              </div>
            </div>
            <div class="bbb_viewed_slider_container">
              <div class="owl-carousel owl-theme bbb_viewed_slider_3 d-flex">
                <div class="owl-item">
                  <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="bbb_viewed_image"><img src="./lib-images/cart-book.png"></div>
                    <div class="bbb_viewed_content text-center">
                      <h2 class="name">Book Title</h2>
                      <p class="description">Author</p>
                      <p class="description">Availability</p>
                      <?php echo "<a href=\"issuerequest.php?\">Request</a>";
                                        ?>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="bbb_viewed_image"><img src="./lib-images/cart-book.png"></div>
                    <div class="bbb_viewed_content text-center">
                      <h2 class="name">Book Title</h2>
                      <p class="description">Author</p>
                      <p class="description">Availability</p>
                      <?php echo "<a href=\"issuerequest.php?\">Request</a>";
                                        ?>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="bbb_viewed_image"><img src="./lib-images/cart-book.png"></div>
                    <div class="bbb_viewed_content text-center">
                      <h2 class="name">Book Title</h2>
                      <p class="description">Author</p>
                      <p class="description">Availability</p>
                      <?php echo "<a href=\"issuerequest.php?\">Request</a>";
                                        ?>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="bbb_viewed_image"><img src="./lib-images/cart-book.png"></div>
                    <div class="bbb_viewed_content text-center">
                      <h2 class="name">Book Title</h2>
                      <p class="description">Author</p>
                      <p class="description">Availability</p>
                      <?php echo "<a href=\"issuerequest.php?\">Request</a>";
                                        ?>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="bbb_viewed_image"><img src="./lib-images/cart-book.png"></div>
                    <div class="bbb_viewed_content text-center">
                      <h2 class="name">Book Title</h2>
                      <p class="description">Author</p>
                      <p class="description">Availability</p>
                      <?php echo "<a href=\"issuerequest.php?\">Request</a>";
                                        ?>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="bbb_viewed_image"><img src="./lib-images/cart-book.png"></div>
                    <div class="bbb_viewed_content text-center">
                      <h2 class="name">Book Title</h2>
                      <p class="description">Author</p>
                      <p class="description">Availability</p>
                      <?php echo "<a href=\"issuerequest.php?\">Request</a>";
                                        ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="module" src="./script.js"> </script>
<script>
  function toggleDiv(id1,id2) {
    var div1 = document.getElementById(id1);
    var div2 = document.getElementById(id2);
    div1.style.display = "block";
    div2.style.display = "none";
  }
</script>
