// HEADER HEIGHT CALCULATE START
let headerHeight;

function headerHeightCalc() {
  let header = document.querySelector(".custom-header");
  headerHeight = header.offsetHeight + "px";
}

// HEADER HEIGHT CALCULATE END

// CART PAGE START
headerHeightCalc();
let cartWrapper = document.querySelector(".shopping-cart-wrapper");
if (cartWrapper) {
  cartWrapper.style.setProperty("height", `calc(100vh - ${headerHeight})`);
  cartWrapper.style.setProperty("height", `calc(100svh - ${headerHeight})`);
}
// CART PAGE END

// MEGA MENU POSITION START
function menuTopPosition() {
  headerHeightCalc();
  let MegaMenus = document.querySelectorAll(".mega-menu-wrap");
  for (let i = 0; i < MegaMenus.length; i++) {
    MegaMenus[i].style.top = headerHeight;
  }
}
// MEGA MENU POSITION END

// NAVBAR TOGGLE
document.getElementById("hamburger-1").addEventListener("click", () => {
  document.getElementsByTagName("html")[0].classList.toggle("show-menu");
});

// SIDEBAR TOP POSITION START
function sidebarTopPosition() {
  headerHeightCalc();
  let sidebar = document.getElementById("headerLinkContainer");
  sidebar.style.top = headerHeight;
}
window.onload = function () {
  sidebarTopPosition();
  menuTopPosition();
}

window.onresize = function () {
  sidebarTopPosition();
  menuTopPosition();
}
// SIDEBAR TOP POSITION END

// SCROLL SWIPER START
var swiper = new Swiper(".scroll-slider", {
  spaceBetween: 47,
  grabCursor: true,
  a11y: false,
  freeMode: true,
  speed: 11000,
  loop: true,
  slidesPerView: "auto",
  autoplay: {
    delay: 0.5,
    disableOnInteraction: false
  },
  breakpoints: {
    0: {
      /* when window >=0px - webflow mobile landscape/portriat */
      spaceBetween: 30
    },
    480: {
      /* when window >=0px - webflow mobile landscape/portriat */
      spaceBetween: 30
    },
    767: {
      /* when window >= 767px - webflow tablet */
      spaceBetween: 40
    },
    992: {
      /* when window >= 988px - webflow desktop */
      spaceBetween: 40
    }
  }
});
// SCROLL SWIPER END

// VALUE CHANGE WHEN CLICK ON LANGUAGE DROPDOWN START
const allLinks = document.querySelectorAll(".change");
const changeName = document.getElementById("change-name");
allLinks.forEach(item => {
  item.addEventListener("click", function (event) {
    changeName.innerText = event.target.innerText;
  });
});
// VALUE CHANGE WHEN CLICK ON LANGUAGE DROPDOWN END


// Offset Header Height function
function offsetHeaderHeight() {
  headerHeightCalc();
  var width = window.outerWidth;
  if (width < 991 && width >= 320) {
    let categoriesList = document.querySelector(".categories-wrap");
    if (categoriesList) categoriesList.style.marginTop = headerHeight;
  }
}

window.addEventListener("resize", offsetHeaderHeight());
window.addEventListener("load", offsetHeaderHeight());
// Offset Header Height function

// OFFCANVAS MENU
let listWrap = document.querySelector(".categories-wrap");
let drawerBtn = document.querySelector(".drawer-btn");
let removeBtn = document.querySelector(".removeBtn");

drawerBtn?.addEventListener("click", function () {
  listWrap.classList.add("categoryOffCanvas");
});

removeBtn?.addEventListener("click", function () {
  listWrap.classList.remove("categoryOffCanvas");
});
// OFFCANVAS MENU

//Read More and Read Less Button Start

let wordLimit = 7;

let readMoreDivs = document.querySelectorAll(".read-more");

readMoreDivs.forEach(readMoreDiv => {
  let textEl = readMoreDiv.querySelector(".read-more-content");
  let moreBtn = readMoreDiv.querySelector(".more");
  let fullText = textEl.innerText;

  let initialText = fullText.split(" ").splice(0, wordLimit).join(" ") + "...";
  if (fullText.split(" ").length < wordLimit) {
    moreBtn.style.display = "none";
    initialText = fullText.split(" ").splice(0, wordLimit).join(" ") + "";
  }

  textEl.innerHTML = initialText;
  moreBtn.innerHTML = "Read more";

  moreBtn.addEventListener("click", () => {
    if (textEl.innerHTML === initialText) {
      textEl.innerHTML = fullText;
      moreBtn.innerHTML = "Read less";
    } else {
      textEl.innerHTML = initialText;
      moreBtn.innerHTML = "Read more";
    }
  });
});

//Read More and Read Less Button END


// video screen page video start functionality
let videoPlay = document.querySelector("#CBD-affiliated-video");
let videoMain = document.querySelector(".video-section-wrapper");
let videoBtn = document.querySelector(
  `[data-video="CBD-affiliated-video-play-button"]`
);
videoBtn?.addEventListener("click", function () {
  videoMain.classList.add("video-hide");
  videoPlay.play()
})

// video screen page video start functionality

// Offcanvas slider start
var Offcanvasswiper = new Swiper(".offcanvas-product-detail-thumb-slider", {
  direction: "vertical",
  autoHeight: true,
  loop: true,
  spaceBetween: 20,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
  breakpoints: {
    320: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    480: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    576: {
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
    },
    991: {
      slidesPerView: 3,
    },
    1439: {
      slidesPerView: 4
    },
  }
});
var Offcanvasswiper2 = new Swiper(".offcanvas-product-detail-slider", {
  autoHeight: true,
  loop: true,
  slidesPerView: 1,
  spaceBetween: 20,
  thumbs: {
    swiper: Offcanvasswiper,
  },
});
// Offcanvas slider end

// You may also like slider start
var YouMayswiper = new Swiper(".you-may-swiper", {
  slidesPerView: 5,
  spaceBetween: 24,
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    480: {
      slidesPerView: 2,
    },
    767: {
      slidesPerView: 3,
    },
    1279: {
      slidesPerView: 4,
    },
    1365: {
      slidesPerView: 4,
    },
    1439: {
      slidesPerView: 5,
    }
  }
});
// You may also like slider end

// PRODUCT SLIDER START
var swiper = new Swiper(".product-detail-thumb-slider", {
  loop: true,
  spaceBetween: 20,
  slidesPerView: 3,
  freeMode: true,
  watchSlidesProgress: true,
});
var swiper2 = new Swiper(".product-detail-slider", {
  loop: true,
  spaceBetween: 10,
  thumbs: {
    swiper: swiper,
  },
});
// PRODUCT SLIDER END

// QUANTITY START
let QuantityWrappers = document.querySelectorAll('.quantity-counter-wrap')
QuantityWrappers.forEach((QuantityWrapper) => {
  let MinusBtn = QuantityWrapper.querySelector('.decrease-counter');
  let AddBtn = QuantityWrapper.querySelector('.increase-counter');
  let QuantityText = QuantityWrapper.querySelector('.quantity-counter-text');

  QuantityWrapper.count = 1;
  AddBtn.onclick = function () {
    QuantityWrapper.count += 1;
    QuantityText.innerHTML = QuantityWrapper.count;
    console.log(AddBtn)
  };

  MinusBtn.onclick = function () {
    if (QuantityWrapper.count > 0) {
      QuantityWrapper.count -= 1;
      QuantityText.innerHTML = QuantityWrapper.count;
    }
  };
})
// QUANTITY END


//list read more section start
let read_more_sections = document.querySelectorAll(".read-more-wrapper");

read_more_sections.forEach((list_wrapper) => {
  let all_li_tags = list_wrapper.querySelectorAll("ul > li");
  let read_more_btn = list_wrapper.querySelector("button");

  if (all_li_tags.length > 3) {
    for (let i = 3; i < all_li_tags.length; i++) {
      all_li_tags[i].style.display = "none";
    }
  } else {
    read_more_btn.style.display = "none";
  }

  read_more_btn.addEventListener("click", (e) => {
    if (e.target.dataset.readBtn == "readmore") {
      for (let i = 3; i < all_li_tags.length; i++) {
        all_li_tags[i].style.display = "flex";
      }
      e.target.dataset.readBtn = "readless";
      e.target.innerText = "Read Less";
    } else {
      for (let i = 3; i < all_li_tags.length; i++) {
        all_li_tags[i].style.display = "none";
      }
      e.target.dataset.readBtn = "readmore";
      e.target.innerText = "Read More";
    }
  });
});
//list read more section end

//navbar start js
let mobilenav = document.querySelector(".mobile-nav-item");
let mobilenavsub = document.querySelector(".mobile-nav-sublist");

// let sublistButtons = document.querySelectorAll(".mobile-nav-has-sublist");
let sublistButtons = document.querySelectorAll(".mobile-nav-toggle");
sublistButtons.forEach((btn) => {
  btn.addEventListener("click", function (e) {
    let t = e.currentTarget;
    let p = e.currentTarget.closest(".mobile-nav");
    p.querySelectorAll(".mobile-nav-sublist:not(.active)").forEach(function (i) {
      i.classList.remove("active");
    });
    t.closest(".mobile-nav-has-sublist").nextElementSibling.classList.toggle("active");
  })
})



//navbar end js

// Product Collection Categories Section
function categoriesTopSpacing() {
  headerHeightCalc();
  var width = window.outerWidth;
  if (width <= 1920 && width > 768) {
    let categories = document.querySelector(".product-collection-categories");
    if (categories) categories.style.top = headerHeight;
  } 
}

window.addEventListener("resize", categoriesTopSpacing());
window.addEventListener("load", categoriesTopSpacing());
// Product Collection Categories Section

// cart counter increment and decrement

let addCartQty = document.querySelectorAll(`[data-cart="increment"]`);
let minusCartQty = document.querySelectorAll(`[data-cart="decrement"]`);
let cartItemDeleteBtn = document.querySelectorAll(`[data-cart="delete"]`);
let cartClose = document.querySelector(`[data-cart="close"]`);
let cartSidebar = document.querySelector(`[data-cart="sidebar"]`);
let cartOpenBtn = document.querySelector(`[data-cart="cart-open-btn"]`);

addCartQty.forEach((addbtn) => {
  addbtn.addEventListener("click", (e) => {

    let count = e.currentTarget.previousElementSibling.value;
    e.currentTarget.previousElementSibling.value = +count + 1;
      
  })
})

minusCartQty.forEach((minusbtn) => {
  minusbtn.addEventListener("click", (e) => {
    let count = e.currentTarget.nextElementSibling.value;
    if (count < 2) return;
    e.currentTarget.nextElementSibling.value = +count - 1;
  });
});

cartItemDeleteBtn.forEach((deleteBtn) => {
  deleteBtn.addEventListener("click", (e) => {
    e.currentTarget.closest(`[data-cart="cart-item"]`).remove()
  })
})