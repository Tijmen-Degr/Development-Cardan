<footer class="main-footer">
  <div class="slider-container" id="navSlider" style="position: relative; user-select: none;">
    <span class="slider-label left" id="leftLabel" data-url="#" style="cursor:pointer; user-select:none;">⬅ Left</span>
    <div class="slider-handle" id="navHandle" style="position:absolute; left:50%; top:50%; transform: translate(-50%, -50%); cursor:pointer; user-select:none; font-size: 2rem;">↔</div>
    <span class="slider-label right" id="rightLabel" data-url="#" style="cursor:pointer; user-select:none;">Right ➡</span>
  </div>
  <p>&copy; <?php echo date("Y"); ?> Cardan - Alle rechten voorbehouden.</p>
<style>

.main-footer {
  background-color: #f8f9fa;
  padding: 80px 0 40px;
  text-align: center;
}

  .slider-container {
    max-width: 400px;
    margin: 1rem auto;
    padding: 0.75rem 1rem;
    background: #eee;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
    font-weight: 600;
    font-size: 1rem; 
    user-select: none;
  }
  .slider-label {
    flex: 1;
    max-width: 40%;
    padding: 0 10px;
    text-align: center;
    color: #444;
    user-select: none;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis; 
    transition: color 0.3s ease;
    font-size: 0.9rem; 
  }
  .slider-label:hover {
    color: #000;
  }
  #navHandle {
    width: 50px;
    height: 50px;
    background: #007f3f;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    user-select: none;
    font-size: 1.8rem;
    box-shadow: 0 0 6px rgba(0,0,0,0.3);
    transition: left 0.3s ease;
  }
</style>


  <script>
  window.addEventListener("DOMContentLoaded", () => {
    const navHandle = document.getElementById("navHandle");
    const navSlider = document.getElementById("navSlider");
    const leftLabel = document.getElementById("leftLabel");
    const rightLabel = document.getElementById("rightLabel");

    const pageConfigs = {
      "/monoculaire_visie.php": {
        leftLabel: "🏠 Ervaringsplein",
        leftUrl: "ervaringsplein.php",
        rightLabel: "Kleurenblindheid ➡",
        rightUrl: "kleurenblindheid.php"
      },
      "/kleurenblindheid.php": {
        leftLabel: "⬅ Monoculaire visie",
        leftUrl: "monoculaire_visie.php",
        rightLabel: "Centraal zicht ➡",
        rightUrl: "centraalzicht.php"
      },
      "/centraalzicht.php": {
        leftLabel: "⬅ Kleurenblindheid",
        leftUrl: "kleurenblindheid.php",
        rightLabel: "Kokervisie ➡",
        rightUrl: "kokervisie.php"
      },
      "/kokervisie.php": {
        leftLabel: "⬅ Centraal zicht ",
        leftUrl: "centraalzicht.php",
        rightLabel: "Ervaringsplein 🏠",
        rightUrl: "ervaringsplein.php"
      }
    };

    const path = window.location.pathname.toLowerCase();
    const config = pageConfigs[path] || {
      leftLabel: "⬅ Vorige",
      leftUrl: "#",
      rightLabel: "Volgende ➡",
      rightUrl: "#"
    };

    leftLabel.textContent = config.leftLabel;
    leftLabel.dataset.url = config.leftUrl;
    rightLabel.textContent = config.rightLabel;
    rightLabel.dataset.url = config.rightUrl;

    leftLabel.addEventListener("click", () => {
      if(config.leftUrl && config.leftUrl !== "#") {
        window.location.href = config.leftUrl;
      }
    });
    rightLabel.addEventListener("click", () => {
      if(config.rightUrl && config.rightUrl !== "#") {
        window.location.href = config.rightUrl;
      }
    });

    // Slider drag functionaliteit
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
          if(config.rightUrl && config.rightUrl !== "#") {
            window.location.href = config.rightUrl;
          }
        }, 150);
      } else if (moved < -100) {
        navHandle.style.left = "50%";
        setTimeout(() => {
          if(config.leftUrl && config.leftUrl !== "#") {
            window.location.href = config.leftUrl;
          }
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
  </script>
</footer>
