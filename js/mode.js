document.addEventListener("DOMContentLoaded", function () {
  const overlay = document.getElementById("kokerzichtOverlay");
  const cartLink = document.querySelector("#floating-cart");
  const completionScreen = document.getElementById("completionScreen");
  const restartBtn = document.getElementById("restartBtn");
  const backToOverlayBtn = document.getElementById("backToOverlayBtn");

  if (!overlay || !cartLink) {
    console.error("Overlay of winkelwagentje niet gevonden!");
    return;
  }

  let clicks = 0;

  document.addEventListener("mousemove", (e) => {
    document.documentElement.style.setProperty("--x", `${e.clientX}px`);
    document.documentElement.style.setProperty("--y", `${e.clientY}px`);
  });

  function moveCartRandomly() {
    const maxX = window.innerWidth - cartLink.offsetWidth;
    const maxY = window.innerHeight - cartLink.offsetHeight;
    const randX = Math.floor(Math.random() * maxX);
    const randY = Math.floor(Math.random() * maxY);

    cartLink.style.position = "fixed";
    cartLink.style.left = `${randX}px`;
    cartLink.style.top = `${randY}px`;
    cartLink.style.zIndex = 10000;
  }

  function showCompletionScreen() {
    completionScreen.style.display = "block";
    overlay.style.display = "none"; // overlay UIT

    restartBtn.addEventListener("click", () => {
      clicks = 0;
      completionScreen.style.display = "none";
      overlay.style.display = "block"; // overlay AAN
      moveCartRandomly();
    });

    backToOverlayBtn.addEventListener("click", () => {
      clicks = 0;
      completionScreen.style.display = "none";
      overlay.style.display = "block";
      moveCartRandomly();
    });
  }

  cartLink.addEventListener("click", function (e) {
    e.preventDefault();
    clicks++;
    if (clicks < 5) {
      moveCartRandomly();
    } else {
      showCompletionScreen();
    }
  });

  moveCartRandomly();
});
