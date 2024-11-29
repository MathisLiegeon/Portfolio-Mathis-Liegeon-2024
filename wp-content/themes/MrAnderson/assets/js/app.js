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

  // ---------------------------------------- HANDLE MENU ----------------------------------------
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
});
