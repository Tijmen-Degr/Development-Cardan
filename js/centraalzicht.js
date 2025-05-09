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

