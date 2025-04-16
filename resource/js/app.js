document.addEventListener("DOMContentLoaded", () => {
  marqueeInit();
  initLenis();
  headerSingle();
  mainAboutAnimation();
  mainServiceAnimaion();
  mainCreatorsAnimation();
  dropdown();
  subVisualAboutAnimation();
  subOfficeSwiper();
});

const subOfficeSwiper = () => {
  const office = document.querySelector(".no-sub-office-swiper");
  if (!office) return;
  
  const swiper = new Swiper(office, {
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    loop: true,
    speed: 2000, // 부드러운 전환 속도
    navigation: {
      prevEl: office.querySelector(".swiper-button-prev"),
      nextEl: office.querySelector(".swiper-button-next"),
    },
    pagination: {
      el: office.querySelector(".swiper-pagination"),
    },
  });
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

const subVisualAboutAnimation = () => {
  const section = document.querySelector(".no-sub-visual-about");
  if (!section) return;
};

const mainAboutAnimation = () => {
  const about = document.querySelector(".no-main-about");
  const inner = document.querySelector(".no-main-about__inner");
  if (!about || !inner) return;

  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: about,
      start: "top top",
      end: "+=100%",
      scrub: true,
      pin: inner,
      // markers: true,
    },
  });

  tl.to(".no-main-about .images", {
    opacity: 1,
    visibility: "visible",
    filter: "blur(0px)",
    duration: 0.8,
    ease: "power2.out",
  }).to(
    ".no-main-about .image",
    {
      transform: "translateX(0px) translateY(0px)",
      duration: 1,
      ease: "power3.out",
      stagger: 0.1,
      opacity: 1,
      visibility: "visible",
      filter: "blur(0px)",
    },
    "<"
  );
};

const mainCreatorsAnimation = () => {
  const creator = document.querySelector(".no-main-creators");

  if (!creator) return;

  const creatorDOM = {
    creatorInner: creator.querySelector(".no-main-creators__inner"),
    creatorImage: creator.querySelectorAll(".images img"),
    creatorFinal: creator.querySelector(".no-main-creators-final"),
  };

  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: creator,
      start: "top 50%",
      end: "+=200%",
    },
  });
  /*
  tl.to(creatorDOM.creatorImage, {
    opacity: 1,
    visibility: "visible",
    filter: "blur(0px)",
    x: 0,
    y: 0,
    stagger: 0.1,
    duration: 1,
    ease: "power2.out",
  }).to(creatorDOM.creatorImage, {
    filter: "blur(0px)",
    left: "50%",
    top: "50%",
    x: "-50%",
    y: "-50%",
    width: "30rem",
    height: "30rem",
    borderRadius: "30rem",
  });*/
};

const mainServiceAnimaion = () => {
  const service = document.querySelector(".no-main-service");
  if (!service) return;

  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: service,
      start: "top top",
      end: "+=100%",
      //markers: true,
    },
  });

  const serviceItems = service.querySelectorAll("li");

  // opacity, blur 공통 처리
  tl.to(serviceItems, {
    opacity: 1,
    visibility: "visible",
    filter: "blur(0px)",
    stagger: 0.1,
    duration: 1,
    ease: "power2.out",
  });

  // 개별 transform 처리
  serviceItems.forEach((item, index) => {
    let props = {
      duration: 1,
      ease: "power2.out",
    };

    if (index === 0) {
      props.y = -20;
    } else if (index === 1) {
      props.rotate = -5;
    } else if (index === 2) {
      props.y = -30;
    } else if (index === 3) {
      props.rotate = 5;
    } else if (index === 4) {
      props.y = -20;
    }
    tl.to(item, props, "<");
  });
};

const initLenis = () => {
  const lenis = new Lenis({
    autoRaf: true,
  });

  lenis.on("scroll", (e) => {});

  function raf(time) {
    lenis.raf(time);
    http: requestAnimationFrame(raf);
  }
  requestAnimationFrame(raf);
  /*
  const topBtn = document.querySelector(".no-top-btn button");
  topBtn.addEventListener("click", () => {
    lenis.scrollTo(0);
  });*/
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

const headerSingle = () => {
  const header = document.getElementById("no-header-single");
  if (!header) return;

  const headerItems = header.querySelectorAll(".no-header-gnb > li");
  const headerBtn = header.querySelector(".no-header-btn");

  headerItems.forEach((item) => {
    const submenu = item.querySelector(".no-header-lnb");

    if (submenu) {
      item.addEventListener("mouseenter", () => {
        submenu.classList.add("visible");
      });

      item.addEventListener("mouseleave", () => {
        submenu.classList.remove("visible");
      });
    }
  });

  headerBtn.addEventListener("click", function () {
    header.classList.toggle("visible");
  });
};
