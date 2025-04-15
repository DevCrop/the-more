document.addEventListener("DOMContentLoaded", () => {
  marqueeInit();
  initLenis();
  headerSingle();
});

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
