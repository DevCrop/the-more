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
  mainDiffAnimation();
  mainHeroAnimation();
  marquee();
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

function marquee() {
  const marquees = document.querySelectorAll('[wb-data="marquee"]');

  if (!marquees.length) return;

  marquees.forEach((marquee) => {
    const duration = parseInt(marquee.getAttribute("duration"), 10) || 5;
    const marqueeContent = marquee.querySelector(".no-marquee__content");

    if (!marqueeContent) return;

    const marqueeContentClone = marqueeContent.cloneNode(true);
    marquee.append(marqueeContentClone);

    let tween;

    const playMarquee = () => {
      let progress = tween ? tween.progress() : 0;
      tween && tween.progress(0).kill();

      const height = parseInt(
        getComputedStyle(marqueeContent).getPropertyValue("height"),
        10
      );
      const gap =
        parseInt(
          getComputedStyle(marqueeContent).getPropertyValue("row-gap")
        ) || 0;

      const distanceToTranslate = -1 * (height + gap);

      tween = gsap.fromTo(
        [marqueeContent, marqueeContentClone],
        { y: 0 },
        {
          y: distanceToTranslate,
          duration,
          ease: "none",
          repeat: -1,
        }
      );

      tween.progress(progress);
    };

    playMarquee();

    function debounce(func) {
      let timer;
      return function () {
        clearTimeout(timer);
        timer = setTimeout(func, 500);
      };
    }

    window.addEventListener("resize", debounce(playMarquee));
  });
}

const subVisualAboutAnimation = () => {
  const subVisual = document.querySelector(".no-sub-visual-about");
  if (!subVisual) return;

  const subVisualDOM = {
    uls: subVisual.querySelectorAll(".images ul"),
    spans: subVisual.querySelectorAll(".txt h3 span"),
    marquee: subVisual.querySelectorAll(".no-marquee"),
  };

  const tl = gsap.timeline();

  // 텍스트 등장
  tl.to(subVisualDOM.spans, {
    y: 0,
    opacity: 1,
    filter: "blur(0px)",
    duration: 1,
    ease: "power3.out",
    stagger: 0.1,
  }).to(
    subVisualDOM.marquee,
    {
      opacity: 1,
      visibility: "visible",
      duration: 1.8,
      stagger: 0.05,
    },
    "<"
  );
};

const mainHeroAnimation = () => {
  const section = document.querySelector(".no-main-hero");
  if (!section) {
    return;
  }
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: section,
      start: "top 50%",
      //markers: true,
    },
  });

  tl.to(section.querySelectorAll(".no-main-hero-txt div span"), {
    y: 0,
    duration: 1,
    ease: "power3.out",
    stagger: 0.05,
  }).to(
    section.querySelector("img"),
    {
      scale: "1",
      duration: 3,
      ease: "power3.out",
    },
    "<"
  );
};
const mainAboutAnimation = () => {
  const about = document.querySelector(".no-main-about");
  const inner = document.querySelector(".no-main-about__inner");
  if (!about || !inner) return;

  const mm = gsap.matchMedia();

  mm.add(
    {
      isDesktop: "(min-width: 1025px)",
      isTablet: "(max-width: 1024px) and (min-width: 545px)",
      isMobile: "(max-width: 544px)",
    },
    (context) => {
      let yValue = "-100%";
      if (context.conditions.isTablet) yValue = "-50%";
      if (context.conditions.isMobile) yValue = "0%";

      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: about,
          start: "top top",
          end: "+=400%",
          scrub: true,
          pin: inner,
          // markers: true,
        },
      });

      tl.to(".no-main-about .image", {
        transform: "translateX(0px) translateY(0px)",
        opacity: 1,
        visibility: "visible",
        filter: "blur(0px)",
        duration: 3,
        ease: "power3.out",
        stagger: 0.08,
      })
        .to(
          ".no-main-about .images",
          {
            y: yValue,
            duration: 2,
            ease: "none",
          },
          "<"
        )
        .to(
          ".no-main-about .--section-title-wrap span",
          {
            y: 0,
            duration: 1.2,
            ease: "power3.out",
            stagger: 0.15,
          },
          "0.1"
        )
        .to(
          ".no-main-about .--section-title-wrap a",
          {
            y: 0,
            duration: 1.2,
            ease: "power3.out",
            stagger: 0.15,
          },
          "0.1"
        );
    }
  );
};

const mainCreatorsAnimation = () => {
  const about = document.querySelector(".no-main-creators");
  if (!about) return;
  const inner = about.querySelector(".no-main-creators__inner");
  const final = about.querySelector(".no-main-creators-final");

  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: about,
      start: "top top",
      end: "+=400%",
      scrub: true,
      pin: inner,
      // markers: true,
    },
  });

  tl.to(".no-main-creators .images", {
    opacity: 1,
    visibility: "visible",
    filter: "blur(0px)",
    duration: 0.8,
    ease: "power2.out",
  })
    .to(
      ".no-main-creators .image",
      {
        transform: "translateX(0px) translateY(0px)",
        duration: 3,
        ease: "power3.out",
        stagger: 0.15,
        opacity: 1,
        visibility: "visible",
        filter: "blur(0px)",
      },
      "<"
    )
    .to(".no-main-creators .image", {
      duration: 3,
      ease: "power3.out",
      stagger: 0.1,
      opacity: 0,
      filter: "blur(10px)",
    })
    .to(".no-main-creators .txt", {
      duration: 3,
      ease: "power3.out",
      opacity: 0,
      filter: "blur(10px)",
    })
    .to(
      final.querySelector("figure"),
      {
        clipPath: "circle(100% at 50% 50%)",
        duration: 5,
        ease: "power3.out",
        visibility: "visible",
      },
      "<0.5"
    )
    .to(final.querySelector("article"), {
      opacity: 1,
      duration: 3,
      ease: "power3.out",
      visibility: "visible",
    });
};
const mainServiceAnimaion = () => {
  const service = document.querySelector(".no-main-service");
  if (!service) return;

  const serviceText = service.querySelectorAll(".--section-title-wrap span");
  const serviceWrap = service.querySelector("ul");
  const serviceItems = service.querySelectorAll("li");

  // 텍스트 애니메이션은 항상 실행
  gsap.to(serviceText, {
    scrollTrigger: {
      trigger: service,
      start: "top bottom",
    },
    y: "0%",
    stagger: 0.15,
    duration: 1.2,
    ease: "power3.out",
  });

  const mm = gsap.matchMedia();

  // 768px 이상일 때: pin + timeline 애니메이션
  mm.add("(min-width: 768px)", () => {
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: service,
        start: "top top",
        end: "+=150%",
        scrub: true,
        pin: true,
        // markers: true,
      },
    });

    tl.to(serviceItems, {
      opacity: 1,
      visibility: "visible",
      filter: "blur(0px)",
      ease: "none",
    });

    tl.to(serviceWrap, {
      y: "0%",
      ease: "none",
    });

    serviceItems.forEach((item, index) => {
      let props = {
        ease: "none",
      };

      if (index === 0) {
        props.y = "-4%";
      } else if (index === 1) {
        props.rotate = "-5deg";
      } else if (index === 2) {
        props.y = "-6%";
      } else if (index === 3) {
        props.rotate = "2deg";
      } else if (index === 4) {
        props.y = "-4%";
      }

      tl.to(item, props, "<");
    });
  });

  // 768px 미만일 때: 각 li가 보일 때마다 fade + blur 제거
  mm.add("(max-width: 767px)", () => {
    serviceItems.forEach((item) => {
      gsap.fromTo(
        item,
        {
          opacity: 0,
          filter: "blur(10px)",
        },
        {
          scrollTrigger: {
            trigger: item,
            start: "top 85%",
            toggleActions: "play none none none",
          },
          opacity: 1,
          filter: "blur(0px)",
          duration: 1.2,
          ease: "power3.out",
        }
      );
    });
  });
};
const mainDiffAnimation = () => {
  const section = document.querySelector(".no-main-dfferent");
  if (!section) return;

  const sectionTitle = section.querySelectorAll(".--section-title-wrap span");
  const sectionCard = section.querySelectorAll(".--cnt > ul > li");

  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: section,
      start: "top 80%", // 화면에 닿으면 실행
      toggleActions: "play none none none",
      // markers: true,
    },
  });

  tl.to(sectionTitle, {
    y: 0,
    opacity: 1,
    filter: "blur(0px)",
    duration: 1.2,
    ease: "power3.out",
    stagger: 0.1,
  });

  tl.to(
    sectionCard,
    {
      y: 0,
      opacity: 1,
      filter: "blur(0px)",
      duration: 1.2,
      ease: "power3.out",
      stagger: 0.15,
    },
    "-=0.8" // 타이틀 애니메이션과 약간 겹쳐서 실행되도록
  );
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
  const line = header.querySelectorAll(".line");
  const body = document.querySelector("body");
  console.log();
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
    body.classList.toggle("--of-h");
    if (header.classList.contains("visible")) {
      gsap.to(line, {
        width: "100%",
        duration: 1.8,
        ease: "power3.out",
      });

      gsap.to(".no-header a > div", {
        y: "0%",
        opacity: 1,
        duration: 1.8,
        ease: "power3.out",
        stagger: 0.05,
      });
    } else {
      gsap.to(line, {
        width: "0%",
        duration: 1.8,
        ease: "power3.in",
      });

      gsap.to(".no-header a > div", {
        y: "100%",
        opacity: 0,
        duration: 1.8,
        ease: "power3.out",
        stagger: 0.05,
      });
    }
  });

  const handleScroll = () => {
    if (window.scrollY > 80) {
      header.classList.add("scrolled");
    } else {
      header.classList.remove("scrolled");
    }
  };

  // 초기 실행 및 이벤트 등록
  window.addEventListener("scroll", handleScroll);
  handleScroll(); // 페이지 진입 시 바로 반영되도록
};
