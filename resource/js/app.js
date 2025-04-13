document.addEventListener("DOMContentLoaded", () => {
  headerFull();
  mainHeroSwiper();
  mainYoutubeSwiper();

  marqueeInit();
  tableScrollState();
  dropdown();
  categorySwiper();
  initLenis();
  subNavSwiper();
});

const initLenis = () => {
  const lenis = new Lenis({
    autoRaf: true,
  });

  lenis.on("scroll", (e) => {});

  function raf(time) {
    lenis.raf(time);
    //localhost:8080/pages/process/process.php
    http: requestAnimationFrame(raf);
  }
  requestAnimationFrame(raf);

  const topBtn = document.querySelector(".no-top-btn button");
  topBtn.addEventListener("click", () => {
    lenis.scrollTo(0);
  });
};

const headerFull = () => {
  const header = document.getElementById("no-header-full");
  console.log(header);

  if (!header) {
    return;
  }

  // INIT
  if (window.scrollY > 80) {
    header.classList.add("shadow");
  } else {
    header.classList.remove("shadow");
  }

  //SCROLL EVENT
  window.addEventListener("scroll", function () {
    if (window.scrollY > 80) {
      header.classList.add("shadow");
    } else {
      header.classList.remove("shadow");
    }
  });

  const HeaderDOM = {
    menu: header.querySelector(".no-header-menu"),
    gnb: header.querySelectorAll(".no-header-gnb>li"),
    gnbItem: header.querySelectorAll(".no-header-gnb>li>div>a"),
    mobileBtn: header.querySelector(".no-header-btn"),
    lnb: header.querySelectorAll(".no-header-lnb"),
    plus: header.querySelectorAll(".no-header-gnb>li>a>i"),
  };

  const mqDeck = window.matchMedia("screen and (min-width: 1024px)");
  const mqMobile = window.matchMedia("screen and (max-width: 1024px)");

  // 이벤트 핸들러 정의
  const headerMouseEnter = function () {
    header.classList.add("visible");
  };

  const headerMouseLeave = function () {
    header.classList.remove("visible");
  };

  const gnbClickHandler = function () {
    const gnbItem = this;
    // 모든 gnb의 ul에서 visible 클래스 제거
    HeaderDOM.gnb.forEach((item) => {
      const siblingUl = item.querySelector("ul");
      if (siblingUl && item !== gnbItem) {
        siblingUl.classList.remove("visible");
      }
      const plusIcon = item.querySelector("a>i");
      if (plusIcon && item !== gnbItem) {
        plusIcon.classList.remove("active");
      }
    });

    // 현재 클릭한 gnb의 ul에만 visible 클래스 토글
    const currentUl = gnbItem.querySelector("ul");
    if (currentUl) {
      currentUl.classList.toggle("visible");
    }

    // 현재 클릭한 gnb의 plus 아이콘에 active 클래스 토글
    const currentPlusIcon = gnbItem.querySelector("a>i");
    if (currentPlusIcon) {
      currentPlusIcon.classList.toggle("active");
    }
  };

  function setupDeckEvents() {
    header.addEventListener("mouseenter", headerMouseEnter);
    header.addEventListener("mouseleave", headerMouseLeave);
  }

  function removeDeckEvents() {
    header.removeEventListener("mouseenter", headerMouseEnter);
    header.removeEventListener("mouseleave", headerMouseLeave);
  }

  function setupGnbClickEvents() {
    HeaderDOM.gnb.forEach((gnbItem) => {
      gnbItem.addEventListener("click", gnbClickHandler);
    });
  }

  function removeGnbClickEvents() {
    HeaderDOM.gnb.forEach((gnbItem) => {
      gnbItem.removeEventListener("click", gnbClickHandler);
    });
  }

  HeaderDOM.mobileBtn.addEventListener("click", function () {
    this.classList.toggle("x");
    header.classList.toggle("visible");
    HeaderDOM.menu.classList.toggle("visible");
    document.querySelector("body").classList.toggle("of-h");
  });

  document.addEventListener("mousedown", function (event) {
    if (!header.contains(event.target)) {
      HeaderDOM.gnb.forEach((el) => {
        const siblingUl = el.querySelector("ul");
        if (siblingUl) {
          siblingUl.classList.remove("visible");
        }
        el.classList.remove("active");
        const plusIcon = el.querySelector("a>i");
        if (plusIcon) {
          plusIcon.classList.remove("active");
        }
      });
    }
  });

  function initialize() {
    if (mqDeck.matches) {
      setupDeckEvents();
      removeGnbClickEvents();
    } else if (mqMobile.matches) {
      removeDeckEvents();
      setupGnbClickEvents();
    }
  }

  initialize();

  // 미디어 쿼리 상태 변경 시 이벤트 재설정
  mqMobile.addEventListener("change", initialize);
  mqDeck.addEventListener("change", initialize);
};

const mainHeroSwiper = () => {
  const hero = document.querySelector(".no-main-hero-swiper");
  if (!hero) return;
  const swiper = new Swiper(hero, {
    navigation: {
      prevEl: hero.querySelector(".swiper-button-prev"),
      nextEl: hero.querySelector(".swiper-button-next"),
    },
    pagination: {
      el: hero.querySelector(".swiper-pagination"),
    },
  });
};

const mainYoutubeSwiper = () => {
  const youtube = document.querySelector(".no-main-youtube-swiper");
  if (!youtube) return;

  const swiper = new Swiper(youtube, {
    slidesPerView: 3,
    spaceBetween: 24,

    navigation: {
      prevEl: youtube.querySelector(".swiper-button-prev"),
      nextEl: youtube.querySelector(".swiper-button-next"),
    },

    pagination: {
      el: youtube.querySelector(".swiper-pagination"),
      clickable: true,
    },

    breakpoints: {
      0: {
        slidesPerView: 1.2,
        spaceBetween: 12,
      },
      576: {
        slidesPerView: 2,
        spaceBetween: 16,
      },
      768: {
        slidesPerView: 2.5,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 24,
      },
    },
  });
};
const subNavSwiper = () => {
  const subNav = document.querySelector(".no-sub-nav-swiper");
  if (!subNav) return;
  const swiper = new Swiper(subNav, {
    slidesPerView: "auto",
    spaceBetween: 24,
  });
};
const categorySwiper = () => {
  const category = document.querySelector(".no-category-swiper");
  if (!category) return;
  const swiper = new Swiper(category, {
    slidesPerView: "auto",
    spaceBetween: 24,
  });
};

const marqueeInit = () => {
  const marquees = document.querySelectorAll('[wb-data="marquee"]');

  if (!marquees.length) {
    return;
  }

  marquees.forEach((marquee) => {
    const duration = parseInt(marquee.getAttribute("duration"), 10) || 5;
    const marqueeContent = marquee.querySelector(".marquee-content");

    if (!marqueeContent) {
      return;
    }

    const marqueeContentClone = marqueeContent.cloneNode(true);
    marquee.append(marqueeContentClone);

    let tween;

    const playMarquee = () => {
      let progress = tween ? tween.progress() : 0;
      tween && tween.progress(0).kill();

      const width = parseInt(
        getComputedStyle(marqueeContent).getPropertyValue("width"),
        10
      );
      const gap = parseInt(
        getComputedStyle(marqueeContent).getPropertyValue("column-gap"),
        10
      );
      const distanceToTranslate = -1 * (gap + width);

      tween = gsap.fromTo(
        marquee.children,
        { x: 0 },
        { x: distanceToTranslate, duration, ease: "none", repeat: -1 }
      );
      tween.progress(progress);
    };

    playMarquee();

    function debounce(func) {
      let timer;
      return function (e) {
        if (timer) clearTimeout(timer);
        timer = setTimeout(
          () => {
            func();
          },
          500,
          e
        );
      };
    }
  });
};

const tableScrollState = () => {
  const scrollContainer = document.querySelector(".--listing-table");
  if (!scrollContainer) {
    return;
  }
  const thead = scrollContainer.querySelector("thead");

  if (scrollContainer && thead) {
    scrollContainer.addEventListener("scroll", () => {
      if (scrollContainer.scrollTop > 0) {
        scrollContainer.classList.add("is-scrolled");
      } else {
        scrollContainer.classList.remove("is-scrolled");
      }
    });
  }
};

const dropdown = () => {
  /*Dropdown Menu*/
  $(".dropdown").click(function () {
    $(this).attr("tabindex", 1).focus();
    $(this).toggleClass("active");
    $(this).find(".dropdown-menu").slideToggle(300);
  });

  /*Dropdown selection and data attribute setting*/
  $(".dropdown .dropdown-menu li").click(function () {
    var selectedText = $(this).text();
    var selectedValue = $(this).data("value");
    console.log(selectedValue);
    $(this).parents(".dropdown").find("span").text(selectedText);
    $(this).parents(".dropdown").data("selected-value", selectedValue);

    // Hidden input for form submission if needed
    $(this).parents(".dropdown").find("input").val(selectedValue);
  });

  /*Additional handling for the calculate specific dropdown*/
  const calculate = document.querySelector(".calculate");

  if (calculate) {
    $(".dropdown .dropdown-menu li").click(function () {
      var selectedText = $(this).text();
      var selectedValue = $(this).data("value");

      $(this).parents(".dropdown").find("span").text(selectedText);
      $(this).parents(".dropdown").data("selected-value", selectedValue);

      // Hidden input for form submission if needed
      $(this).parents(".dropdown").find("input").val(selectedValue);
    });
  }
};
