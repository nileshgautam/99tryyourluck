import {
  loginForm,
  signUpForm,
  newsLetterForm,
  contactForm,
  passwordForm,
} from "./form/validation.js";
import { Toast } from "./toast/toast.js";

//login form validation
loginForm();
//signUp form validation
signUpForm();
//newsletter form validation
newsLetterForm();
//contact form validation
contactForm();
//forgot password form
passwordForm();

//banner image animation using gsap //set this for production
const bannerTl = gsap.timeline();
bannerTl.fromTo(
  ".banner-img",
  1,
  { scale: 0.8 },
  { scale: 1, repeat: -1, yoyo: true }
);

//how-it-works box hover animation
$(".hiw-box").hover(
  function () {
    const hiwTl = gsap.timeline();
    hiwTl.to($(this), 0.3, { scale: 1.1, zIndex: 2 });
  },
  function () {
    const hiwTl = gsap.timeline();
    hiwTl.to($(this), 0.3, { scale: 1, zIndex: 1 });
  }
);

//button animation scale // set this for production
const basTL = gsap.timeline();
basTL.fromTo(
  ".btn-anim-scale",
  1,
  { scale: 0.9 },
  { scale: 1, repeat: -1, yoyo: true }
);

//all game slider
const allGamesSwiper = new Swiper(".all-games", {
  loop: true,
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  slidesPerView: 1,
  spaceBetween: 10,
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    992: {
      slidesPerView: 3,

      spaceBetween: 80,
    },
  },
  grabCursor: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
});

// countdown timer
$("[data-countdown]").each(function () {
  var $this = $(this),
    finalDate = $(this).data("countdown");
  $this.countdown(finalDate, function (event) {
    $(this).html(
      event.strftime('<span class="countdown-time">%Dd %Hh %Mm %Ss</span>')
    );
  });
});

// play game button
$(".play-game").on("click", function () {
  const isLoggedIn = true,
    notEnoughMoney = false;
  if (!isLoggedIn) {
    $("#loginModal").modal("show");
  } else if (notEnoughMoney) {
    Toast("error", "You don't have enough money to play this game"); // custom toast pass type and text
  } else {
    $("#g-s-confirm-modal").modal("show");
  }
});

// thankyou page check svg animation
const thankyouTl = gsap.timeline();
thankyouTl.fromTo(
  ".tcheck",
  1,
  { strokeDashoffset: 97 },
  { strokeDashoffset: 0, ease: "power2.out", repeat: -1, yoyo: true }
);

// blob animation
const blobTl = gsap.timeline();
blobTl.fromTo(
  ".blob",
  1,
  {
    rotate: 45,
  },
  {
    rotate: 0,
    repeat: -1,
    yoyo: true,
  }
);

//add money slider
const addMoneySwiper = new Swiper(".add-money-card", {
  loop: true,
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  slidesPerView: 1,
  spaceBetween: 10,
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 50,
    },
    1080: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
  },
  grabCursor: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
});

// how to play game modal option show hide div
$("#play-with-token").on("click", function () {
  $("#play-choise-btn-div").addClass("d-none");
  $(".invest-token-div").removeClass("d-none");
});
