const switcher = document.getElementById("themeSwitch");

switcher.addEventListener("change", () => {
  document.body.classList.toggle("dark-mode", switcher.checked);
});
