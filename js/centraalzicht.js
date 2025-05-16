document.addEventListener('DOMContentLoaded', () => {
    const overlay = document.querySelector('.central-vision-overlay');
    const toggleBtn = document.getElementById('toggle-centraalzicht');
    let active = false;
  
    // Toggle de overlay aan/uit
    toggleBtn.addEventListener('click', () => {
      active = !active;
      overlay.style.display = active ? 'block' : 'none';
      toggleBtn.textContent = active ? 'Stop Centraal Zichtverlies' : 'Ervaar Centraal Zichtverlies';
    });
});
window.addEventListener("DOMContentLoaded", () => {
  const navHandle = document.getElementById("navHandle");
  const navSlider = document.getElementById("navSlider");

  let isDragging = false;
  let startX = 0;
  let currentX = 0;
  let maxMove;

  function updateMaxMove() {
    maxMove = navSlider.offsetWidth / 2 - navHandle.offsetWidth / 2;
  }

  updateMaxMove();
  window.addEventListener("resize", updateMaxMove);

  function setHandlePosition(deltaX) {
    const clampedX = Math.max(-maxMove, Math.min(maxMove, deltaX));
    navHandle.style.left = `calc(50% + ${clampedX}px)`;
  }

  function startDrag(x) {
    isDragging = true;
    startX = x;
    navHandle.style.transition = "none";
  }

  function duringDrag(x) {
    if (!isDragging) return;
    currentX = x;
    const deltaX = currentX - startX;
    setHandlePosition(deltaX);
  }

  function endDrag() {
    if (!isDragging) return;
    isDragging = false;

    const moved = currentX - startX;
    navHandle.style.transition = "left 0.3s ease";

    if (moved > 100) {
      navHandle.style.left = "50%";
      setTimeout(() => {
        window.location.href = "kokervisie.php";
      }, 150);
    } else if (moved < -100) {
      navHandle.style.left = "50%";
      setTimeout(() => {
        window.location.href = "kleurenblindheid.php";
      }, 150);
    } else {
      navHandle.style.left = "50%";
    }
  }

  navHandle.addEventListener("mousedown", (e) => startDrag(e.clientX));
  document.addEventListener("mousemove", (e) => duringDrag(e.clientX));
  document.addEventListener("mouseup", endDrag);

  navHandle.addEventListener("touchstart", (e) => startDrag(e.touches[0].clientX));
  document.addEventListener("touchmove", (e) => duringDrag(e.touches[0].clientX));
  document.addEventListener("touchend", endDrag);
});
