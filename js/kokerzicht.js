document.addEventListener('DOMContentLoaded', () => {
    const overlay = document.querySelector('.kokerzicht-overlay');
    const toggleBtn = document.getElementById('toggle-kokerzicht');
    let active = false;
  
    toggleBtn.addEventListener('click', () => {
      active = !active;
      overlay.style.display = active ? 'block' : 'none';
      toggleBtn.textContent = active ? 'Stop Kokerzicht' : 'Ervaar Kokerzicht';
    });
  
    document.addEventListener('mousemove', (e) => {
      if (!active) return;
      const x = e.clientX;
      const y = e.clientY;
      overlay.style.background = `radial-gradient(circle at ${x}px ${y}px, rgba(0, 0, 0, 0) 90px, rgba(0, 0, 0, 0.85) 140px)`;
    });
  });
  