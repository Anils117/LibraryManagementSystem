import {branches, books} from './data.js'

$(document).ready(function () {
  if ($(".bbb_viewed_slider_1").length) {
    var viewedSlider = $(".bbb_viewed_slider_1");
    viewedSlider.owlCarousel({
      loop: true,
      margin: 0,
      autoplay: true,
      autoplayTimeout: 8000000,
      nav: false,
      dots: false,
      responsive: {
        0: {
          items: 1
        },
        575: {
          items: 2
        },
        768: {
          items: 3
        },
        991: {
          items: 6
        },
        1199: {
          items: 6
        }
      }
    });
    if ($(".bbb_viewed_prev_1").length) {
      var prev = $(".bbb_viewed_prev_1");
      prev.on("click", function () {
        viewedSlider.trigger("prev.owl.carousel");
      });
    }
    if ($(".bbb_viewed_next_1").length) {
      var next = $(".bbb_viewed_next_1");
      next.on("click", function () {
        viewedSlider.trigger("next.owl.carousel");
      });
    }
  }
});

$(document).ready(function () {
  if ($(".bbb_viewed_slider_2").length) {
    var viewedSlider = $(".bbb_viewed_slider_2");
    viewedSlider.owlCarousel({
      loop: true,
      autoplay: true,
      autoplayTimeout: 8000,
      nav: false,
      dots: false,
      responsive: {
        0: {
          items: 1
        },
        575: {
          items: 2
        },
        768: {
          items: 3
        },
        991: {
          items: 6
        },
        1199: {
          items: 6
        }
      }
    });
    if ($(".bbb_viewed_prev_2").length) {
      var prev = $(".bbb_viewed_prev_2");
      prev.on("click", function () {
        viewedSlider.trigger("prev.owl.carousel");
      });
    }
    if ($(".bbb_viewed_next_2").length) {
      var next = $(".bbb_viewed_next_2");
      next.on("click", function () {
        viewedSlider.trigger("next.owl.carousel");
      });
    }
  }
});

$(document).ready(function () {
  if ($(".bbb_viewed_slider_3").length) {
    var viewedSlider = $(".bbb_viewed_slider_3");
    viewedSlider.owlCarousel({
      loop: true,
      autoplay: true,
      autoplayTimeout: 8000,
      nav: false,
      dots: false,
      responsive: {
        0: {
          items: 1
        },
        575: {
          items: 2
        },
        768: {
          items: 3
        },
        991: {
          items: 6
        },
        1199: {
          items: 6
        }
      }
    });
    if ($(".bbb_viewed_prev_3").length) {
      var prev = $(".bbb_viewed_prev_3");
      prev.on("click", function () {
        viewedSlider.trigger("prev.owl.carousel");
      });
    }
    if ($(".bbb_viewed_next_3").length) {
      var next = $(".bbb_viewed_next_3");
      next.on("click", function () {
        viewedSlider.trigger("next.owl.carousel");
      });
    }
  }
});

let heading = "Subjects";
let home = `<hr><br><button class="lib__home" id="lib__home">Home</button>`;
let drpbtn = document.getElementById("dropbtn");
let show = document.getElementById("drpcontent");
let books_heading = `<h2 class="books_header">Recently Added<i class="ml-2 fa-solid fa-book"></i></h2>`;

function getSubjects(arr) {
  let str = ``;
  arr.map((sub, ind) => {
    str += `<a href="#"><i class="fa-solid fa-angle-right"></i>${sub}</a>`;
  });
  str += `</ul>`;
  return str + home;
}

function getDefaultBooks(arr) {
  let str = "";
  for (let i = 0; i < arr.length; i++) {
    for (let j = 0; j < arr[i].length; j++) {
      if (j == 0) {
        str += `<h2>${arr[i][0]}  <i class="fa-solid fa-book"></i></h2><ul>`;
      } else {
        str += `<a href="#"><i class="fa-solid fa-angle-right"></i>${arr[i][j]}</a>`;
      }
    }
    str += `</ul>`;
  }
  return str + home;
}

function getBooks(arr) {
  let str = `
    <div class="owl-item">
        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
            <div class="bbb_viewed_image"><img src="./lib-images/cart-book.png"></div>
            <div class="bbb_viewed_content text-center">
                <h2 class="name">Book Title</h2>
                <p class="description">Author</p>
                <p class="description">Availability</p>
                <a href="#">Request</a>
            </div>   
            </div>
    </div>`;
  let res = str;
  for (let i = 0; i < 20; i++) {
    res += str;
  }
  return (
    res +
    `<div class="lib__pgn"><nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav></div>`
  );
}
window.addEventListener("click", (event) => {
  let x = event.target.textContent.toLowerCase();
  let id = event.target.parentElement.id;
  let homeid = event.target.id;
  let subjects = branches[x];

  show.classList.remove("active");

  if (id == "drpcontent" && branches[x]) {
    document.getElementById("libbooks").innerHTML =
      `<h2>${x} <i class="fa-solid fa-book"></i></h2><ul>` +
      getSubjects(subjects);
  } else if (homeid == "lib__home" && branches[x]) {
    document.getElementById("libbooks").innerHTML = getDefaultBooks(subjects);
  } else if (
    event.target.parentElement.parentElement.id == "libbooks" &&
    books[x]
  ) {
    let subj_head = `<h2 class="books_header">${x}<i class="ml-2 fa-solid fa-book"></i></h2>
              <div class="books_hr"></div>`;
    let bd = document.getElementById("books-display");
    bd.classList.add("lib__grid");
    bd.innerHTML = getBooks(books[x]);
    document.getElementById("subject-head").innerHTML = subj_head;
  }
});
drpbtn.onmouseover = function () {
  show.classList.add("active");
};

document.getElementById("home").onclick = function () {
        location.href = "index.php";
    };