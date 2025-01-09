gsap.registerPlugin(ScrollTrigger);

function tooltip() {
  const button = document.querySelector("#button");
  const tooltip = document.querySelector("#tooltip");

  if (!button || !tooltip) {
    return;
  }

  // 설정 객체로 분리
  const config = {
    mobile: {
      placement: "top",
      offset: [0, 7],
    },
    desktop: {
      placement: "right",
      offset: [-64, 8],
    },
  };

  // 미디어 쿼리 매칭 함수
  const getDeviceConfig = () =>
    window.matchMedia("(max-width: 544px)").matches
      ? config.mobile
      : config.desktop;

  // Popper 인스턴스 생성
  const { placement, offset } = getDeviceConfig();
  const popperInstance = Popper.createPopper(button, tooltip, {
    placement,
    modifiers: [
      {
        name: "offset",
        options: { offset },
      },
      {
        name: "arrow",
        options: {
          element: "[data-popper-arrow]",
        },
      },
    ],
  });

  // 이벤트 핸들러 함수
  const handlers = {
    show() {
      tooltip.setAttribute("data-show", "");
      tooltip.style.cssText = "opacity: 1; transform: translateX(0)";
      this.updatePopper(true);
    },

    hide() {
      tooltip.removeAttribute("data-show");
      tooltip.style.cssText = "opacity: 0; transform: translateX(-10px)";
      this.updatePopper(false);
    },

    updatePopper(enabled) {
      popperInstance.setOptions((options) => ({
        ...options,
        modifiers: [...options.modifiers, { name: "eventListeners", enabled }],
      }));
      popperInstance.update();
    },
  };

  // 이벤트 리스너 등록
  const events = {
    show: ["mouseenter", "focus"],
    hide: ["mouseleave", "blur"],
  };

  events.show.forEach((event) =>
    button.addEventListener(event, handlers.show.bind(handlers))
  );

  events.hide.forEach((event) =>
    button.addEventListener(event, handlers.hide.bind(handlers))
  );

  // 반응형 처리
  window.addEventListener("resize", () => {
    const { placement, offset } = getDeviceConfig();
    popperInstance.setOptions((options) => ({
      ...options,
      placement,
      modifiers: [
        ...options.modifiers,
        { name: "offset", options: { offset } },
      ],
    }));
  });
}

function subPageIntroAnimation() {
  const splitText = new SplitType(".show-1 .txt h2", { types: "chars" });
  const tl = gsap.timeline();

  // 초기 상태 설정
  gsap.set(".show-1", {
    rotate: "180deg",
  });

  gsap.set(splitText.chars, {
    opacity: 0,
    y: "100%",
    visibility: "hidden",
  });

  // 인트로 애니메이션
  tl.to(".show-1", {
    transform: "translate(-50%, -50%)",
    rotate: "0deg",
    opacity: 1,
    duration: 1.6,
    ease: "expo.out",
  })
    .to(
      ".show-1",
      {
        width: "100%",
        height: "100vh",
        duration: 1.4,
        ease: "expo.out",
      },
      "start"
    )
    .to(
      ".show-1",
      {
        borderWidth: 0,
        duration: 2.4,
        ease: "expo.out",
      },
      "start"
    )
    .to(
      ".show-1 img",
      {
        scale: 1.05,
        duration: 3,
        ease: "none",
      },
      "start"
    )
    .to(
      ".show-1 .img",
      {
        opacity: 1,
        duration: 2.4,
        ease: "expo.out",
      },
      "start"
    )
    .to(
      splitText.chars,
      {
        opacity: 1,
        visibility: "visible",
        duration: 1,
        y: 0,
        stagger: 0.08,
        ease: "power3.out",
      },
      "start"
    )
    .to(
      ".show-1-bg",
      {
        opacity: 1,
        duration: 1,
        ease: "power3.out",
      },
      "start"
    )
    .to(
      ".show-1 .scroll-down",
      {
        opacity: 1,
        visibility: "visible",
        duration: 1,
        ease: "power3.out",
      },
      "start"
    );

  // GSAP MatchMedia 사용
  gsap.matchMedia().add("(min-width: 768px)", () => {
    const paragraphs = document.querySelectorAll(".show-2-text p");

    // ScrollTrigger를 사용한 타임라인 애니메이션
    gsap
      .timeline({
        scrollTrigger: {
          trigger: ".show-2", // 트리거 요소
          start: "top top", // 트리거 시작 지점
          end: "+=300%", // 스크롤 길이
          pin: true, // 핀 고정
          scrub: true, // 스크롤 동기화
        },
      })
      .to(".show-2", {
        clipPath: "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)", // 양옆으로 펼쳐지는 효과
        duration: 2,
        ease: "power3.out",
      })
      .to(".show-2-bg", {
        opacity: 0.48,
        duration: 2,
        ease: "power1.out",
      })
      .to(
        ".show-2 img",
        {
          scale: 1.3, // 이미지 확대
          duration: 3,
          ease: "power2.out",
        },
        "<"
      )
      .to(".show-2-text > div:nth-child(1) p", {
        opacity: 1,
        y: 0,
        duration: 2,
        ease: "power2.out",
      })
      .to(".show-2-text > div:nth-child(2) p", {
        opacity: 1,
        y: 0,
        duration: 2,
        ease: "power2.out",
      })
      .to(".show-2-text > div:nth-child(3) p", {
        opacity: 1,
        y: 0,
        duration: 2,
        ease: "power2.out",
      })
      .to(".show-2-text > div:nth-child(4) p", {
        opacity: 1,
        y: 0,
        duration: 2,
        ease: "power2.out",
      });
  });
}

function pallexImage() {
  const images = document.querySelector(".no-interpark-img img");

  console.log(images);
  gsap.set(images, {
    scale: 1.3,
  });

  // 애니메이션 설정
  gsap.fromTo(
    images,
    { yPercent: -10 },
    {
      yPercent: 10,
      scrollTrigger: {
        trigger: images,
        start: "top bottom",
        end: "bottom top",
        scrub: true,
      },
    }
  );
}

function moreInfo() {
  const moreInfoButtons = document.querySelectorAll(".more-info-wrap .no-btn");

  if (!moreInfoButtons) return;
  moreInfoButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const wrapper = this.closest(".more-info-wrap");
      wrapper.classList.toggle("active");

      // 버튼 텍스트 변경
      const buttonText = this.childNodes[0]; // 텍스트 노드 선택
      if (wrapper.classList.contains("active")) {
        buttonText.textContent = "Hide Info ";
      } else {
        buttonText.textContent = "More Info ";
      }
    });
  });
}

function canvasAnimation() {
  const canvas = document.getElementById("waveCanvas");

  if (!canvas) {
    return;
  }
  const ctx = canvas.getContext("2d");

  // 캔버스 해상도 스케일 조정 (낮은 해상도로 렌더링)
  const scale = 0.75; // 75% 해상도로 설정
  canvas.width = window.innerWidth * scale;
  canvas.height = window.innerHeight * scale;
  ctx.scale(scale, scale);

  // 도형 설정
  const shapes = [];
  const colors = ["#1769FF", "#9747FF"];
  const maxShapes = Math.min(5, Math.ceil(window.innerWidth / 400)); // 화면 크기에 따른 도형 수 제한

  // 프레임 속도 제한
  let lastTime = 0;
  const targetFPS = 30; // 초당 30 프레임

  // 도형 생성 함수
  function createShape(index) {
    const size = Math.random() * (canvas.width * 0.2) + canvas.width * 0.1;
    return {
      x: Math.random() * canvas.width,
      y: Math.random() * canvas.height,
      size,
      phase: Math.random() * Math.PI * 2,
      blur: Math.random() * 15 + 5, // Blur 감소
      color: colors[index % 2],
      speed: Math.random() * 0.5 + 0.2,
      opacity: 0.24, // 초기 투명도
      driftX: Math.random() * 2 - 1, // 움직임 범위 축소
      driftY: Math.random() * 2 - 1,
      oscillationSpeed: Math.random() * 0.04 + 0.02,
      oscillationAmount: Math.random() * 15 + 5, // 진동 범위 축소
    };
  }

  // 도형 렌더링 함수
  function drawCircle(shape) {
    const { x, y, size, blur, color, opacity } = shape;
    const rgba = color.replace(")", `, ${opacity})`).replace("rgb", "rgba");

    ctx.filter = `blur(${blur}px)`;
    ctx.beginPath();
    ctx.arc(x, y, size / 2, 0, Math.PI * 2);
    ctx.closePath();
    ctx.fillStyle = rgba;
    ctx.fill();
  }

  // 애니메이션 함수
  function animate(timestamp) {
    const delta = timestamp - lastTime;

    // FPS 제한 (30FPS)
    if (delta >= 1000 / targetFPS) {
      lastTime = timestamp;

      ctx.clearRect(0, 0, canvas.width, canvas.height);

      shapes.forEach((shape) => {
        shape.opacity = 0.24 + Math.abs(Math.sin(shape.phase)) * 0.76; // 0.24 ~ 1
        shape.phase += shape.oscillationSpeed;
        shape.x += Math.sin(shape.phase) * shape.driftX;
        shape.y += Math.cos(shape.phase) * shape.driftY;

        const sizeOscillation = Math.sin(shape.phase) * shape.oscillationAmount;
        const currentSize = shape.size + sizeOscillation;

        // 화면 경계 처리
        if (shape.x < -currentSize) shape.x = canvas.width + currentSize;
        if (shape.x > canvas.width + currentSize) shape.x = -currentSize;
        if (shape.y < -currentSize) shape.y = canvas.height + currentSize;
        if (shape.y > canvas.height + currentSize) shape.y = -currentSize;

        drawCircle(shape);
      });
    }

    requestAnimationFrame(animate);
  }

  // 초기 도형 생성
  for (let i = 0; i < maxShapes; i++) {
    shapes.push(createShape(i));
  }

  // 애니메이션 시작
  animate(0);

  // 창 크기 변경 시 캔버스 크기 조정
  window.addEventListener("resize", () => {
    canvas.width = window.innerWidth * scale;
    canvas.height = window.innerHeight * scale;
    ctx.scale(scale, scale);
  });
}

function inputLineAnimation() {
  const radioContainer = document.querySelector(".no-form-radio-line");
  const rect = document.querySelector(".no-form-radio-line-rect");

  if (!radioContainer || !rect) return;

  const radioInputs = radioContainer.querySelectorAll("input[type='radio']");

  radioInputs.forEach((radio) => {
    radio.addEventListener("change", () => {
      const label = radio.closest("label");

      if (label) {
        const labelBounds = label.getBoundingClientRect();
        const containerBounds = radioContainer.getBoundingClientRect();

        gsap.to(rect, {
          x: labelBounds.left - containerBounds.left, // 라벨의 x 위치
          width: labelBounds.width, // 라벨의 너비에 맞춤
          duration: 0.8,
          ease: "power3.out",
        });
      }
    });
  });

  // 초기 rect 위치 설정 (첫 번째 선택된 라디오 버튼)
  const selectedRadio = radioContainer.querySelector(
    "input[type='radio']:checked"
  );
  if (selectedRadio) {
    const label = selectedRadio.closest("label");
    if (label) {
      const labelBounds = label.getBoundingClientRect();
      const containerBounds = radioContainer.getBoundingClientRect();

      gsap.set(rect, {
        x: labelBounds.left - containerBounds.left,
        width: labelBounds.width,
      });
    }
  }
}
function header(App, headerId = "header") {
  const headerEl = document.querySelector(`#${headerId}`);
  const headerSearch = headerEl.querySelector(".no-header__search button");
  const searchView = document.querySelector(".no-search-view");
  const sitemapView = document.querySelector(".no-sitemap");
  const headerDarkModeToggle = headerEl.querySelector(".no-header__theme");
  const headerToggleButton = headerEl.querySelector(".no-header__toggle");
  const headerMenu = headerEl.querySelector("nav"); // 메뉴 엘리먼트 선택
  const headLine = document.querySelector(".no-headline");

  function init() {
    saveTheme();
    darkMode();
    searchToggle();
    toggleMode();
    menuOver();
    menuLeave();

    window.addEventListener("scroll", () => {
      if (window.scrollY > 80) {
        headerEl.classList.add("shadow");
        if (headLine) {
          headerEl.classList.add("hasHeadLine");
        }
      } else {
        headerEl.classList.remove("shadow");
        headerEl.classList.remove("hasHeadLine");
      }
    });
  }

  // 메뉴 마우스 오버
  function menuOver() {
    headerMenu.addEventListener("mouseenter", () => {
      headerEl.classList.add("active");
      gsap.to(headerMenu, {
        duration: 0.5,
        ease: "power3.out",
      });
    });
  }

  // 메뉴 마우스 리브
  function menuLeave() {
    headerMenu.addEventListener("mouseleave", () => {
      headerEl.classList.remove("active");
      gsap.to(headerMenu, {
        duration: 0.5,
        ease: "power3.out",
      });
    });
  }

  // 쿠키 설정 및 읽기 함수
  function setCookie(name, value, days) {
    const date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    document.cookie = `${name}=${value};expires=${date.toUTCString()};path=/`;
  }

  function getCookie(name) {
    const cookies = document.cookie.split("; ");
    for (let i = 0; i < cookies.length; i++) {
      const [key, value] = cookies[i].split("=");
      if (key === name) {
        return value;
      }
    }
    return null;
  }

  // 테마 저장 및 적용 함수
  function saveTheme() {
    const savedTheme = getCookie("theme");
    if (savedTheme) {
      document.documentElement.setAttribute("data-theme", savedTheme);
      toggleImages(savedTheme);
    } else {
      document.documentElement.setAttribute("data-theme", "dark");
      setCookie("theme", "dark", 365);
      toggleImages("dark");
    }
  }

  function setTheme(theme) {
    document.documentElement.setAttribute("data-theme", theme);
    setCookie("theme", theme, 365);
    toggleImages(theme);
  }

  // 다크 모드 이미지 관리
  function toggleImages(theme) {
    const toggleImagesContainers =
      document.querySelectorAll(".--toggle-images");

    toggleImagesContainers.forEach((container) => {
      const lightImg = container.querySelector(".--light-img");
      const darkImg = container.querySelector(".--dark-img");

      if (theme === "light") {
        if (lightImg) lightImg.style.display = "block";
        if (darkImg) darkImg.style.display = "none";
      } else {
        if (lightImg) lightImg.style.display = "none";
        if (darkImg) darkImg.style.display = "block";
      }
    });
  }

  // 다크 모드 토글
  function darkMode() {
    if (!headerDarkModeToggle) return;

    const lightButton = headerDarkModeToggle.querySelector(
      "[data-toggle-light]"
    );
    const darkButton = headerDarkModeToggle.querySelector("[data-toggle-dark]");
    const circle = headerDarkModeToggle.querySelector(".circle");

    const updateTransform = (button) => {
      const isSmallScreen = window.matchMedia("(max-width: 768px)").matches;

      if (button === lightButton) {
        circle.style.transform = isSmallScreen
          ? "translate(11px, -13px)"
          : "translate(10px, -15px)";
        setTheme("light");
      } else if (button === darkButton) {
        circle.style.transform = isSmallScreen
          ? "translate(42px, -13px)"
          : "translate(50px, -15px)";
        setTheme("dark");
      }
    };

    const setActiveButton = (button) => {
      lightButton.classList.remove("active");
      darkButton.classList.remove("active");
      button.classList.add("active");
      updateTransform(button);
    };

    const initTheme = () => {
      const savedTheme = getCookie("theme");
      if (savedTheme === "light") {
        setActiveButton(lightButton);
      } else {
        setActiveButton(darkButton);
      }
    };

    lightButton.addEventListener("click", () => {
      setActiveButton(lightButton);
    });

    darkButton.addEventListener("click", () => {
      setActiveButton(darkButton);
    });

    window.addEventListener("resize", () => {
      const activeButton = lightButton.classList.contains("active")
        ? lightButton
        : darkButton;
      updateTransform(activeButton);
    });

    initTheme();
  }

  // 검색 토글
  function searchToggle() {
    headerSearch.addEventListener("click", () => {
      const isSearched = headerEl.classList.contains("searched");

      resetState();

      if (!isSearched) {
        headerEl.classList.add("searched");
        searchView.classList.add("active");
        gsap.to(searchView.querySelector(".line"), {
          width: "100%",
          duration: 1,
          ease: "power3.out",
        });
      }
    });
  }

  // 토글 모드
  function toggleMode() {
    headerToggleButton.addEventListener("click", () => {
      const isToggled = headerEl.classList.contains("toggle");
      const tl = gsap.timeline();
      tl.to(".no-sitemap .line", {
        width: "100%",
        duration: 1.6,
        ease: "power3.out",
        stagger: 0.2,
      })
        .to(
          ".no-sitemap__gnb--link-title span",
          { duration: 1.3, y: 0, ease: "power3.out" },
          0.3
        )
        .to(
          ".no-sitemap__lnb--item a",
          { duration: 1.2, y: 0, ease: "power3.out" },
          0.4
        );

      resetState();

      if (!isToggled) {
        headerToggleButton.classList.add("toggle");
        headerEl.classList.add("toggle");
        sitemapView.classList.add("active");
      }
    });
  }

  // 상태 초기화
  function resetState() {
    headerEl.classList.remove("searched", "toggle");
    searchView.classList.remove("active");
    sitemapView.classList.remove("active");
    headerToggleButton.classList.remove("toggle");
  }

  // 초기화 실행
  init();
}

function initTheme() {
  const buttons = document.querySelectorAll(
    ".no-header__theme input[name=theme]"
  );

  function initLocalStorage() {
    if (!localStorage.getItem("theme")) {
      localStorage.setItem("theme", buttons[0].value);
    }

    const theme = localStorage.getItem("theme");
    buttons.forEach((button) => {
      button.removeAttribute("checked");
      if (button.value === theme) {
        button.checked = true;
      }
    });
    setTheme(theme);

    document.documentElement.classList.remove("is-transition");
  }

  function setTheme(theme) {
    document.documentElement.setAttribute("data-theme", theme);
    localStorage.setItem("theme", theme);
  }

  buttons.forEach((button) => {
    button.addEventListener("change", () => {
      setTheme(button.value);

      console.log(button.value);
    });
  });

  initLocalStorage();
}

function intro(lenis, minutes = 30) {
  const introSection = document.querySelector(".no-main-intro");
  if (!introSection) return;

  // 로컬 스토리지 체크
  const savedTime = localStorage.getItem("intro-once");
  const currentTime = new Date().getTime();

  // 저장된 시간이 있고, 지정된 시간(기본 30분)이 지나지 않았다면 인트로 스킵
  if (savedTime && currentTime - savedTime < minutes * 60 * 1000) {
    // 인트로 섹션 숨기기
    gsap.set(introSection, {
      opacity: 0,
      pointerEvents: "none",
    });
    // 스크롤 활성화
    if (lenis) lenis.start();
    return;
  }

  // 현재 시간 저장
  localStorage.setItem("intro-once", currentTime);

  const introDOM = {
    symbol: introSection.querySelector(".no-main-intro-symbol"),
    txt: introSection.querySelector(".no-main-intro-txt"),
    cover: introSection.querySelector(".no-main-intro-cover"),
    container: introSection.querySelector(".no-main-intro-container"),
  };

  // 스크롤 비활성화
  if (lenis) lenis.stop();

  // 인트로 애니메이션
  const tl = gsap.timeline({
    onComplete: () => {
      if (lenis) lenis.start(); // 애니메이션 완료 후 스크롤 활성화
    },
  });

  tl.to(introDOM.symbol, {
    opacity: 1,
    y: 0,
    duration: 0.6,
    bottom: "0",
    rotate: "0deg",
    ease: "power3.out",
  })
    .to(introDOM.symbol, {
      left: 0,
      duration: 1,
      ease: "power2.out",
    })
    .to(
      introDOM.txt,
      {
        opacity: 1,
        visibility: "visible",
        duration: 1,
        ease: "power2.out",
      },
      "<"
    )
    .to(
      introDOM.cover,
      {
        background: "#000",
      },
      "<"
    )
    .to(
      introDOM.txt.querySelectorAll(".change"),
      {
        fill: "#fff",
      },
      "<"
    )
    .to(introDOM.container, {
      y: "-60%",
      opacity: 0,
      duration: 0.6,
      ease: "power3.out",
    })
    .to(
      introSection,
      {
        clipPath: "polygon(0 0, 100% 0, 100% 0, 0 0)",
        duration: 1,
        ease: "power2.out",
      },
      "-=1"
    );
}

function marquee() {
  const marquees = document.querySelectorAll('[wb-data="marquee"]');

  if (!marquees.length) {
    return;
  }

  marquees.forEach((marquee) => {
    const duration = parseInt(marquee.getAttribute("duration"), 10) || 5;
    const marqueeContent = marquee.querySelector(".no-main-marquee__content");

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

    window.addEventListener("resize", debounce(playMarquee));

    marquee.addEventListener("mouseover", () => {
      gsap.to(tween, { timeScale: 0.1, duration: 1 }); // 천천히 재생
    });

    marquee.addEventListener("mouseleave", () => {
      gsap.to(tween, { timeScale: 1, duration: 1 }); // 다시 원래 속도로
    });
  });
}

function setupModalTriggers(lenis) {
  const modalElements = {
    shinhan: {
      buttonSelector: ".shinhan-card .no-sub-floor-map-button button",
      modalSelector: ".no-modal-shinhan",
    },
    master: {
      buttonSelector: ".master-card .no-sub-floor-map-button button",
      modalSelector: ".no-modal-master",
    },
    privacy: {
      buttonSelector: ".no-modal-privacy-btn",
      modalSelector: ".no-modal-privacy",
    },
  };

  Object.keys(modalElements).forEach((key) => {
    const { buttonSelector, modalSelector } = modalElements[key];
    const buttons = document.querySelectorAll(buttonSelector);
    const modal = document.querySelector(modalSelector);
    const modalItems = modal?.querySelectorAll(".modal-item");
    const modalContainer = document.querySelector("#modal");

    if (!buttons.length || !modal || !modalItems?.length || !modalContainer)
      return;

    buttons.forEach((button) => {
      button.addEventListener("click", () => {
        const dataModalId = button.dataset.modalId;
        console.log(dataModalId);

        // Hide all modal items
        modalItems.forEach((item) => {
          item.classList.remove("visible");
        });

        // Stop Lenis scrolling
        if (lenis?.stop) lenis.stop();

        // Show the corresponding modal item based on data-modal-id
        const matchingModal = Array.from(modalItems).find(
          (item) => item.dataset.modalId === dataModalId
        );

        if (matchingModal) {
          matchingModal.classList.add("visible");
          modal.classList.add("visible");
          modalContainer.classList.add("visible"); // Add visible class to #modal
        }
      });
    });

    // Add close functionality
    const closeButton = modalContainer.querySelector(".modal-close-btn");
    if (closeButton) {
      closeButton.addEventListener("click", () => {
        modal.classList.remove("visible");
        modalContainer.classList.remove("visible"); // Remove visible class from #modal
        modalItems.forEach((item) => {
          item.classList.remove("visible");
        });

        // Resume Lenis scrolling
        if (lenis?.start) lenis.start();
      });
    }
  });
}

function tabManager() {
  function initTabClickEvents() {
    const tabButtons = document.querySelectorAll(".no-sub-tab button");
    const tabContents = document.querySelectorAll(
      ".no-sub-tab-contents > ul > li"
    );

    if (tabContents.length > 0) {
      tabContents[0].style.display = "block";
      activateNestedContent(tabContents[0]);
    }

    tabButtons.forEach((button, index) => {
      button.addEventListener("click", () => {
        activateTab(index, tabButtons, tabContents);
      });
    });
  }

  function activateTab(index, tabButtons, tabContents) {
    tabButtons.forEach((btn) => btn.classList.remove("active"));

    tabButtons[index].classList.add("active");

    tabContents.forEach((content) => {
      content.style.display = "none";
    });

    const activeContent = tabContents[index];
    activeContent.style.display = "block";
    activateNestedContent(activeContent);
    resetNestedButtons(activeContent);
  }

  function activateNestedContent(tabContent) {
    const nestedItems = tabContent.querySelectorAll(
      ".no-nest-tab-contents > ul > li"
    );

    if (nestedItems.length > 0) {
      nestedItems.forEach((item) => item.classList.remove("active"));
      nestedItems[0].classList.add("active");
    }
  }

  function resetNestedButtons(tabContent) {
    const nestedButtons = tabContent.querySelectorAll(
      ".no-nest-tab-wrap .no-nest-btn"
    );

    if (nestedButtons.length > 0) {
      nestedButtons.forEach((button) => button.classList.remove("active"));
      nestedButtons[0].classList.add("active");
    }
  }

  function initNoNestTabClickEvents() {
    const tabButtons = document.querySelectorAll(
      ".no-nest-tab-wrap .no-nest-btn"
    );
    const tabContents = Array.from(
      document.querySelectorAll(".no-nest-tab-contents > ul > li")
    );

    if (tabContents.length > 0) {
      tabContents.forEach((content, idx) => {
        content.classList.toggle("active", idx === 0); // Add 'active' class to the first content
      });
      tabButtons[0]?.classList.add("active"); // Add 'active' to the first button
    }

    tabButtons.forEach((button, index) => {
      button.addEventListener("click", () => {
        activateNoNestTab(index, tabButtons, tabContents);
      });
    });
  }

  function activateNoNestTab(index, tabButtons, tabContents) {
    tabButtons.forEach((btn) => btn.classList.remove("active"));

    tabButtons[index].classList.add("active");

    // Remove 'active' class from all contents
    tabContents.forEach((content) => content.classList.remove("active"));

    // Add 'active' class to the corresponding content
    const activeContent = tabContents[index];
    activeContent.classList.add("active");
  }

  // Initialize both tab click event handlers
  initTabClickEvents();
  initNoNestTabClickEvents();
}

function sectionTitleAnimation() {
  const sectionTitles = document.querySelectorAll(".no-section-title");
  if (!sectionTitles.length) return;
  // GSAP 애니메이션 설정
  sectionTitles.forEach((title) => {
    gsap.fromTo(
      title, // h2 요소 전체에 적용
      {
        opacity: 0, // 처음에 투명
        y: 40, // 아래에서 시작
      },
      {
        opacity: 1, // 완전히 보이게
        y: 0, // 제자리로 이동
        duration: 1.2, // 애니메이션 지속 시간
        ease: "power3.out", // 부드러운 감속 효과
        scrollTrigger: {
          trigger: title, // h2 요소를 트리거로 사용
          start: "top 80%", // 뷰포트 상단에서 80% 지점에 있을 때 시작
          end: "top 60%", // 뷰포트 상단에서 60% 지점에 있을 때 끝
          scrub: false, // 스크롤에 따른 애니메이션 진행 비활성화
          once: true, // 한 번만 애니메이션 실행
        },
      }
    );
  });
}
function sectionCntAnimation() {
  const sectionContents = document.querySelectorAll(".no-section-content");
  if (!sectionContents.length) return;

  // GSAP 애니메이션 설정
  sectionContents.forEach((content) => {
    gsap.fromTo(
      content, // 콘텐츠 전체에 적용
      {
        opacity: 0, // 처음에 투명
        y: 50, // 왼쪽에서 시작
      },
      {
        opacity: 1, // 완전히 보이게
        y: 0, // 제자리로 이동
        duration: 1.5, // 애니메이션 지속 시간
        ease: "power3.out", // 부드러운 감속 효과
        scrollTrigger: {
          trigger: content, // 콘텐츠를 트리거로 사용
          start: "top 90%", // 뷰포트 상단에서 90% 지점에 있을 때 시작
          end: "top 70%", // 뷰포트 상단에서 70% 지점에 있을 때 끝
          scrub: false, // 스크롤에 따른 애니메이션 진행 비활성화
          once: true, // 한 번만 애니메이션 실행
        },
      }
    );
  });
}

function visibleSmooth() {
  const visibleSmooth = document.querySelectorAll(".visible-smooth");
  if (!visibleSmooth.length) return;

  visibleSmooth.forEach((container) => {
    // li 요소들 선택
    const items = container.querySelectorAll("li");

    gsap.fromTo(
      items,
      {
        opacity: 0,
        y: 100,
      },
      {
        opacity: 1,
        y: 0,
        duration: 1.2, // 각 아이템의 애니메이션 시간
        stagger: 0.08, // 각 아이템 사이의 지연 시간
        ease: "power3.out",
        scrollTrigger: {
          trigger: container, // 컨테이너를 트리거로 사용
          start: "top 80%",
          end: "top 60%",
          scrub: false,
          once: true,
          // markers: true, // 디버깅용 마커 (필요시 주석 해제)
        },
      }
    );
  });
}

function subVisualAnimation() {
  const subVisual = document.querySelectorAll(".no-sub-visual");
  if (!subVisual.length) return;

  const tl = gsap.timeline();
  // GSAP 애니메이션 설정
  subVisual.forEach((content) => {
    const h2 = content.querySelector("h2");
    const p = content.querySelector("p");
    tl.to(h2, {
      y: 0,
      duration: 1.5, // 애니메이션 지속 시간
      ease: "power3.out", // 부드러운 감속 효과
      scrollTrigger: {
        trigger: content, // 콘텐츠를 트리거로 사용
        start: "top 90%", // 뷰포트 상단에서 90% 지점에 있을 때 시작
        end: "top 70%", // 뷰포트 상단에서 70% 지점에 있을 때 끝
        scrub: false, // 스크롤에 따른 애니메이션 진행 비활성화
        once: true, // 한 번만 애니메이션 실행
      },
    }).to(p, {
      right: 0,
      duration: 1.5,
      visibility: "visible",
      opacity: 0.06,
      ease: "power3.out",
    });
  });
}

function mainWorksAnimation() {
  // Main Works Swiper
  const mainWorksSwiper = new Swiper(".no-main-works-slider", {
    grabCursor: true,
    centeredSlides: true,
    spaceBetween: 24,
    speed: 1200,
    initialSlide: 2,
    effect: "coverflow",
    coverflowEffect: {
      rotate: 30,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
    /*
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },*/
    navigation: {
      nextEl: ".no-main-works-button .swiper-button-next",
      prevEl: ".no-main-works-button .swiper-button-prev",
    },

    pagination: {
      type: "bullets",
      el: ".no-main-works-pagination",
      clickable: true,
    },

    breakpoints: {
      319: { slidesPerView: 1.5 },
      544: { slidesPerView: 2 },
      768: {
        slidesPerView: 3,
      },
      1440: {
        slidesPerView: 4,
      },
      1664: {
        slidesPerView: 4,
      },
      1920: {
        slidesPerView: 5,
      },
      1921: {
        slidesPerView: 6,
      },
    },
  });

  // Intersection Observer 설정
  const swiperElement = document.querySelector(".no-main-works-slider");

  const observerOptions = {
    root: null, // 뷰포트를 기준으로
    rootMargin: "0px",
    threshold: 0.1, // 요소의 10%가 보이면 콜백 실행
  };

  const observerCallback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // 슬라이드 요소 선택
        const slides = entry.target.querySelectorAll(".swiper-slide");

        // GSAP 애니메이션 적용
        gsap.fromTo(
          slides,
          { opacity: 0, y: 100 }, // 시작 상태
          {
            opacity: 1,
            y: 0,
            delay: 0.2,
            duration: 0.5,
            stagger: 0.1, // 각 슬라이드 간 0.1초 지연
            ease: "power2.out",
          }
        );

        // 애니메이션이 한번만 실행되도록 옵저버 해제
        observer.unobserve(entry.target);
      }
    });
  };

  const observer = new IntersectionObserver(observerCallback, observerOptions);

  // Swiper 요소 관찰 시작
  if (swiperElement) {
    observer.observe(swiperElement);
  }
}

function initLenis() {
  try {
    const lenis = new Lenis();
    const noTopBtn = document.querySelector(".no-top-btn button");

    // Lenis 이벤트와 ScrollTrigger 연동
    lenis.on("scroll", (e) => {
      // 스크롤 이벤트에서 top 버튼 상태 업데이트
      if (noTopBtn) {
        if (window.scrollY > 80) {
          noTopBtn.classList.add("active");
        } else {
          noTopBtn.classList.remove("active");
        }
      }
    });

    lenis.on("scroll", ScrollTrigger.update);

    gsap.ticker.add((time) => {
      lenis.raf(time * 1000);
    });

    gsap.ticker.lagSmoothing(0);

    // "no-top-btn" 버튼 클릭 이벤트 추가
    if (noTopBtn) {
      noTopBtn.addEventListener("click", () => {
        lenis.scrollTo(0, { duration: 1 }); // 탑으로 스크롤, 1초 동안 부드럽게 이동
      });
    } else {
      console.warn("no-top-btn button not found");
    }

    return lenis;
  } catch (error) {
    console.error("Failed to initialize Lenis:", error);
    return null;
  }
}

function subNavSwiper() {
  // Sub Navigation Swiper
  const subNavSwiper = new Swiper(".no-sub-nav-slider", {
    slidesPerView: "auto", // 자동 크기
    freeMode: true,
  });
  const currentSubNavIndex = subNavSwiper.slides.findIndex((slide, i) => {
    if (slide.classList.contains("active")) {
      return i;
    }
  });
  if (currentSubNavIndex > 0) {
    subNavSwiper.slideTo(currentSubNavIndex - 1, 800, false);
  }
}

function swiperManager() {
  const progressCircle = document.querySelector(".autoplay-progress svg");
  const progressContent = document.querySelector(".autoplay-progress span");
  const imgPath = "/resource/images/main/";
  const imgName = [
    "main_visual_pager_2",
    "main_visual_pager_1",
    "main_visual_pager_3",
    "main_visual_pager_4",
  ];

  // Main Visual Swiper
  const mainVisualSwiper = new Swiper(".no-main-visual-slider", {
    slidesPerView: "auto",
    grabCursor: true,
    parallax: true,
    speed: 1200,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      320: {
        pagination: {
          el: ".no-main-visual-pagination",
          type: "fraction",
        },
      },
      1024: {
        pagination: {
          el: ".no-main-visual-pagination",
          type: "bullets",
          clickable: true,
          renderBullet: function (index, className) {
            const imageUrl = `${imgPath}${imgName[index]}.png`;
            return `
              <span class="${className}">
                <img src="${imageUrl}" alt="Pager ${index + 1}">
              </span>`;
          },
        },
      },
    },
    on: {
      autoplayTimeLeft(s, time, progress) {
        progressCircle.style.setProperty("--progress", 1 - progress);
        progressContent.textContent = `${Math.ceil(time / 1000)}s`;
      },
    },
    autoplay: {
      delay: 4500,
      disableOnInteraction: false,
    },
    scrollbar: {
      el: ".swiper-scrollbar",
    },
  });

  const mainSponsorSwiper1 = new Swiper(".no-main-sponsor-slider-1", {
    slidesPerView: "auto",
    grabCursor: true,
    speed: 1200,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
  });

  const mainSponsorSwiper2 = new Swiper(".no-main-sponsor-slider-2", {
    slidesPerView: "auto",
    grabCursor: true,
    speed: 1200,
    breakpoints: {
      312: {
        spaceBetween: 24,
      },
    },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
  });

  // Shinhan Content Swiper
  const shinahnContentSwiper = new Swiper(
    ".shinhan-card .no-sub-tab-contents-slider",
    {
      slidesPerView: "1",
      grabCursor: true,
      spaceBetween: 24,
      speed: 1200,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".shinhan-card .swiper-button-next",
        prevEl: ".shinhan-card .swiper-button-prev",
      },
    }
  );

  // Master Content Swiper
  const masterContentSwiper = new Swiper(
    ".master-card .no-sub-tab-contents-slider",
    {
      slidesPerView: "1",
      grabCursor: true,
      spaceBetween: 24,
      speed: 1200,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".master-card .swiper-button-next",
        prevEl: ".master-card .swiper-button-prev",
      },
    }
  );

  // Master Content Swiper
  const nemoContentSwiper = new Swiper(".nemo .no-sub-tab-contents-slider", {
    slidesPerView: "1",
    grabCursor: true,
    spaceBetween: 24,
    speed: 1200,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".nemo .swiper-button-next",
      prevEl: ".nemo .swiper-button-prev",
    },
  });

  // Master Content Swiper
  const practiceContentSwiper = new Swiper(
    ".practice .no-sub-tab-contents-slider",
    {
      slidesPerView: "1",
      grabCursor: true,
      spaceBetween: 24,
      speed: 1200,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".practice .swiper-button-next",
        prevEl: ".practice .swiper-button-prev",
      },
    }
  );

  // Sub Tab Swiper
  const subTabSwiper = new Swiper(".no-sub-tab-slider", {
    slidesPerView: "auto", // 자동 크기
    spaceBetween: 24, // 슬라이드 간 간격
    freeMode: true,
    breakpoints: {
      321: {
        spaceBetween: 12,
      },
      768: {
        spaceBetween: 20,
      },
      1024: {
        spaceBetween: 24,
      },
    },
  });

  const subCategorySwiper = new Swiper(".no-sub-category-slider", {
    slidesPerView: "auto",
    grabCursor: true,
    spaceBetween: 24,
    speed: 1200,
    breakpoints: {
      376: { slidesPerView: 1.2 },
      1024: { slidesPerView: 1 },
    },
  });

  // Shinhan Card Thumbnail Swiper
  const shinhanChartSliderThum = new Swiper(
    ".shinhan-card .no-sub-tab-chart-slider-thum",
    {
      slidesPerView: 3,
      spaceBetween: 24,
      speed: 1200,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      breakpoints: {
        321: { slidesPerView: 2 },
      },
    }
  );

  // Shinhan Card Chart Swiper
  const shinhanChartSlider = new Swiper(
    ".shinhan-card .no-sub-tab-chart-slider",
    {
      slidesPerView: 1,
      grabCursor: true,
      spaceBetween: 24,
      speed: 1200,
      effect: "fade",
      fadeEffect: {
        crossFade: true, // 슬라이드 간 겹치지 않도록 crossFade 활성화
      },
      autoHeight: true,
      navigation: {
        nextEl: ".shinhan-card .no-sub-tab-chart-slider .swiper-button-next",
        prevEl: ".shinhan-card .no-sub-tab-chart-slider .swiper-button-prev",
      },
      thumbs: {
        swiper: shinhanChartSliderThum,
      },
    }
  );

  // Master Card Thumbnail Swiper
  const masterChartSliderGroundThum = new Swiper(
    ".master-card .no-sub-tab-chart-slider-thum-ground",
    {
      slidesPerView: "auto",
      spaceBetween: 24,
      speed: 1200,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      breakpoints: {
        321: { slidesPerView: 2 },
      },
    }
  );

  // Master Card Chart Swiper
  const masterChartSliderGround = new Swiper(
    ".master-card .no-sub-tab-chart-slider-ground",
    {
      slidesPerView: "auto",
      grabCursor: true,
      spaceBetween: 24,
      speed: 1200,
      effect: "fade",
      fadeEffect: {
        crossFade: true, // 슬라이드 간 겹치지 않도록 crossFade 활성화
      },
      autoHeight: true,
      navigation: {
        nextEl:
          ".master-card .no-sub-tab-chart-slider-ground .swiper-button-next",
        prevEl:
          ".master-card .no-sub-tab-chart-slider-ground .swiper-button-prev",
      },
      thumbs: {
        swiper: masterChartSliderGroundThum,
      },
    }
  );

  // Master Card Thumbnail Swiper
  const masterChartSliderStandThum = new Swiper(
    ".master-card .no-sub-tab-chart-slider-thum-stand",
    {
      slidesPerView: "auto",
      spaceBetween: 24,
      speed: 1200,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      breakpoints: {
        321: { slidesPerView: 2 },
      },
    }
  );

  // Master Card Chart Swiper
  const masterChartSliderStand = new Swiper(
    ".master-card .no-sub-tab-chart-slider-stand",
    {
      slidesPerView: "auto",
      grabCursor: true,
      spaceBetween: 24,
      speed: 1200,
      effect: "fade",
      fadeEffect: {
        crossFade: true, // 슬라이드 간 겹치지 않도록 crossFade 활성화
      },
      autoHeight: true,
      navigation: {
        nextEl:
          ".master-card .no-sub-tab-chart-slider-stand .swiper-button-next",
        prevEl:
          ".master-card .no-sub-tab-chart-slider-stand .swiper-button-prev",
      },
      thumbs: {
        swiper: masterChartSliderStandThum,
      },
    }
  );

  // FNB Stage Swiper
  const fnbStageSwiper = new Swiper(".fnb-swiper", {
    slidesPerView: "auto",
    grabCursor: true,
    spaceBetween: 24,
    speed: 1600,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".fnb-swiper .swiper-button-next",
      prevEl: ".fnb-swiper .swiper-button-prev",
    },
    breakpoints: {
      376: { slidesPerView: 1 },
    },
  });
  //Modal
  const modalSwiper = new Swiper(".no-modal-swiper", {
    slidesPerView: "auto",
    grabCursor: true,
    spaceBetween: 24,
    speed: 1600,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      type: "bullets",
      el: ".no-modal-swiper .swiper-pagination",
      clickable: true,
    },
  });
}

function isSticky(selector) {
  // 대상 요소 선택
  const targetElement = document.querySelector(selector);

  if (!targetElement) {
    console.warn(`${selector} 요소가 존재하지 않습니다.`);
    return;
  }

  // 요소의 초기 위치 계산
  const initialTop =
    targetElement.getBoundingClientRect().top + window.pageYOffset;

  // 스크롤 이벤트 핸들러 등록
  window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;

    if (currentScroll >= initialTop) {
      targetElement.classList.add("sticky"); // sticky 클래스 추가
    } else {
      targetElement.classList.remove("sticky"); // sticky 클래스 제거
    }
  });
}

function infiniteRotate(selector) {
  const target = document.querySelector(selector);
  if (!target) {
    return;
  }

  gsap.to(target, {
    rotate: 360, // 360도 회전
    duration: 5, // 5초 동안 회전
    repeat: -1, // 무한 반복
    ease: "linear", // 일정한 속도
  });
}

function faqItems() {
  const faqItems = [...document.querySelectorAll("[data-faq-item]")];

  if (!faqItems.length) return;

  faqItems.forEach((item) => {
    const head = item.querySelector("header button");
    const body = item.querySelector("section");
    const arrow = item.querySelector(".no-skin-faq-item__arrow");

    $(head).click(function () {
      const siblings = $(item).siblings();

      // Toggle the active class for the clicked item
      $(item).toggleClass("--active");
      $(body).stop().slideToggle(200);

      // Manage the arrow active class
      if ($(item).hasClass("--active")) {
        $(arrow).addClass("--active");
      } else {
        $(arrow).removeClass("--active");
      }

      // Remove active class from siblings
      siblings.removeClass("--active");
      siblings.find("section").stop().slideUp(200);
      siblings.find(".no-skin-faq-item__arrow").removeClass("--active");
    });
  });
}

function processManager() {
  const processItems = document.querySelectorAll(".--process > ul > li");

  // 요소가 있는지 확인
  if (processItems.length > 0) {
    let currentIndex = 0;

    // 초기 애니메이션 지연 시간 1초 설정
    const firstDelay = 1000;
    const subsequentDelay = 3000;

    function activateNextItem() {
      // 모든 항목에서 active 클래스 제거
      processItems.forEach((item) => item.classList.remove("active"));

      // 현재 항목에 active 클래스 추가
      if (processItems[currentIndex]) {
        processItems[currentIndex].classList.add("active");
      }

      // 다음 인덱스 계산
      currentIndex = (currentIndex + 1) % processItems.length;

      // 첫 번째 이후의 딜레이로 setTimeout 재설정
      setTimeout(activateNextItem, subsequentDelay);
    }

    // 첫 번째 애니메이션 시작
    setTimeout(activateNextItem, firstDelay);
  }
}

function input() {
  let $fakeField = ".fake-field-file";
  let $inputFile = $(".field-file");
  let $fileInfoList = $(".--file-info ul"); // 파일 리스트를 추가할 ul 선택

  $inputFile.on("change", function () {
    // 파일 이름 추출
    let files = $(this)[0].files;

    for (let file of files) {
      // 파일 이름 표시
      let fileName = file.name;

      // <li> 요소 생성
      let $li = $(
        `<li><span>${fileName}</span><button class="remove-file">x</button></li>`
      );

      // 파일 리스트에 추가
      $fileInfoList.append($li);

      // 삭제 버튼 클릭 이벤트 추가
      $li.find(".remove-file").on("click", function () {
        $(this).closest("li").remove(); // li 제거
      });
    }

    // Fake input field 업데이트 (마지막 파일 이름만 표시)
    // let displayName =
    //   files.length > 0 ? files[files.length - 1].name : "Attach file";
    // $(this).siblings($fakeField).text(displayName).css({
    //   color: "#0dabe3",
    //   "font-weight": "700",
    // });

    // 입력값 초기화 (같은 파일을 다시 업로드할 수 있도록)
    $(this).val("");
  });
}

function buttonManager(buttonSelector, listSelector, startYear = 2011) {
  try {
    const buttonElement = document.querySelector(buttonSelector);
    const listElement = document.querySelector(listSelector);

    // 버튼 또는 리스트가 존재하지 않으면 에러 메시지 출력 후 종료
    if (!buttonElement) {
      console.error(
        `buttonManager Error: Button element not found for selector "${buttonSelector}"`
      );
      return;
    }
    if (!listElement) {
      console.error(
        `buttonManager Error: List element not found for selector "${listSelector}"`
      );
      return;
    }

    // 버튼 클릭 이벤트 등록
    buttonElement.addEventListener("click", function () {
      listElement.classList.toggle("visible");
      this.classList.toggle("active");
    });

    // 리스트 내 input 요소의 checked 상태 처리
    const inputs = listElement.querySelectorAll(
      'input[type="radio"], input[type="checkbox"]'
    );
    if (inputs.length === 0) {
      console.warn(
        `buttonManager Warning: No input elements (radio/checkbox) found in "${listSelector}"`
      );
    }

    inputs.forEach((input) => {
      input.addEventListener("change", function () {
        if (this.checked) {
          listElement.classList.remove("visible"); // visible 클래스 제거
          buttonElement.classList.remove("active"); // 버튼 active 클래스도 제거
        }
      });
    });
  } catch (error) {
    console.error("buttonManager Error:", error);
  }
}

function curstomCursor() {
  const cursor = new MouseFollower({
    stateDetection: {
      container: "body",
      // '-pointer': '.no-btn',
    },
  });
}

function filingRadio(selector) {
  const elements = document.querySelectorAll(selector);

  elements.forEach((element) => {
    element.addEventListener("change", (e) => {
      const parent = e.target.closest(".no-filing-btn");
      document.querySelectorAll(".no-filing-btn").forEach((btn) => {
        btn.classList.remove("active");
      });
      if (e.target.checked) {
        parent.classList.add("active");
      }
    });
  });
}

class App {
  static lenis;

  static init() {
    AOS.init();
    header(this);
    this.lenis = initLenis();
    canvasAnimation(this);
    marquee(this);
    tabManager(this);
    subNavSwiper();
    swiperManager(this);
    filingRadio('.no-filing-btn input[type="radio"]');
    buttonManager(".no-date-btn", ".no-date-list"); // 연도 버튼 렌더링
    buttonManager(".no-footer__privacy button", ".no-footer__privacy-list"); // 연도 버튼 렌더링
    processManager();
    input();
    faqItems();
    intro(this.lenis, 30);
    infiniteRotate(".no-text-circle");
    inputLineAnimation();
    tooltip();
    moreInfo();
    mainWorksAnimation();
    subPageIntroAnimation();
    curstomCursor();
    sectionTitleAnimation();
    isSticky(".no-sub-tab");
    sectionCntAnimation();
    visibleSmooth();
    subVisualAnimation();
    setupModalTriggers(this.lenis);
  }
}

App.init();
