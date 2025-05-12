document.addEventListener("DOMContentLoaded", function () {
  const toggleBtn = document.getElementById("toggle-kokerzicht");
  const overlay = document.getElementById("kokerzichtOverlay");

  toggleBtn.addEventListener("click", () => {
    overlay.classList.toggle("active");
  });
});
