document.addEventListener("DOMContentLoaded", function () {
  const gameOuterWrapper = document.querySelector(".game-outer-wrapper");
  const gameContents = document.querySelectorAll(
    ".game-content, .game-content-bis"
  );

  if (!gameOuterWrapper || gameContents.length === 0) {
    console.error("gameOuterWrapper ou gameContents non trouvés");
    return;
  }

  gameOuterWrapper.addEventListener("scroll", () => {
    const containerWidth =
      gameOuterWrapper.scrollWidth - gameOuterWrapper.clientWidth;
    const scrollLeft = gameOuterWrapper.scrollLeft;

    gameContents.forEach((content) => {
      const rect = content.getBoundingClientRect();
      const scrollPercentage =
        (scrollLeft +
          rect.left -
          gameOuterWrapper.getBoundingClientRect().left) /
        containerWidth;

      if (scrollPercentage > 0 && scrollPercentage < 1) {
        if (content.classList.contains("game-content-bis")) {
          content.style.transform = `translateY(${scrollPercentage * 100}px)`;
        } else {
          content.style.transform = `translateY(${100 - scrollPercentage * 100}px)`;
        }
      } else if (scrollPercentage >= 1) {
        content.style.transform = "translateY(0px)";
      } else {
        if (content.classList.contains("game-content-bis")) {
          content.style.transform = "translateY(0px)";
        } else {
          content.style.transform = "translateY(100px)";
        }
      }
    });
  });
});
