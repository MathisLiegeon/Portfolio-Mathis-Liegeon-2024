// HEADER CONFIGURATION
document.addEventListener("DOMContentLoaded", function () {
  var burger = document.getElementById("burger");
  var headerMenu = document.getElementById("header-menu");

  burger.addEventListener("click", function () {
    headerMenu.classList.toggle("open");
    burger.classList.toggle("open");
  });
});

document.addEventListener("alpine:init", () => {
  Alpine.data("popup", () => ({
    showContent: false,
    title: "",
    desc: "",
    init() {
      this.$watch("showContent", (value) => {
        if (value) {
          document.body.classList.add("no-scroll");
        } else {
          document.body.classList.remove("no-scroll");
        }
      });
    },
  }));

  // ----------------- HANDLE MENU ------------------
  var burger = document.getElementById("burger");
  var menu_about = document.getElementById("menu-item-89");
  var headerMenu = document.getElementById("header-menu");

  if (burger && headerMenu && menu_about) {
    burger.addEventListener("click", function () {
      document.body.classList.toggle("no-scroll");
    });
    menu_about.addEventListener("click", function () {
      headerMenu.classList.toggle("open");
      burger.classList.toggle("open");
      document.body.classList.toggle("no-scroll");
    });
  }

  // ----------------- HANDLE ANIMATIONS ------------------
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      }
    });
  });

  document
    .querySelectorAll('[class*="hidden-"]')
    .forEach((el) => observer.observe(el));

    const observerSvg = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.target.classList.contains("hidden-section-1-t")) {
          const path = entry.target;
          const svg = path.closest("svg");
          const nextGroup = path.closest("g").nextElementSibling;
          const nextNextGroup = nextGroup?.nextElementSibling;
    
          if (svg) {
            const initialHeight = 466.5;
            const maxStretch = 500;
            let lastScrollY = window.scrollY;
            let ticking = false;
    
            // Optimisation : Mettre en cache les éléments
            const elements = [path, nextGroup, nextNextGroup].filter(Boolean);
    
            // Activer GPU acceleration
            elements.forEach(el => {
              el.style.willChange = 'transform';
              el.style.transformOrigin = "top";
              el.style.transformBox = "fill-box";
            });
    
            const onScroll = () => {
              if (!ticking && Math.abs(window.scrollY - lastScrollY) > 5) { // Throttle
                lastScrollY = window.scrollY;
                
                requestAnimationFrame(() => {
                  const stretch = Math.min(lastScrollY * 0.5, maxStretch);
                  const scale = 1 + (stretch / initialHeight) * 8;
    
                  // Utiliser transform3d pour GPU acceleration
                  path.style.transform = `translate3d(0,0,0) scaleY(${scale})`;
                  
                  if (nextGroup) {
                    nextGroup.style.transform = `translate3d(0,${stretch}px,0)`;
                  }
                  if (nextNextGroup) {
                    nextNextGroup.style.transform = `translate3d(0,${stretch}px,0)`;
                  }
    
                  ticking = false;
                });
    
                ticking = true;
              }
            };
    
            window.addEventListener("scroll", onScroll, { passive: true });
    
            // Cleanup
            return () => {
              window.removeEventListener("scroll", onScroll);
              elements.forEach(el => {
                el.style.willChange = 'auto';
              });
            };
          }
        }
      });
    });
    
    document
      .querySelectorAll(".hidden-section-1-t")
      .forEach((el) => observerSvg.observe(el));
});
