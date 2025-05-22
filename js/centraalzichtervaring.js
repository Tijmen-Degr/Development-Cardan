document.addEventListener('DOMContentLoaded', function () {
    const maten = ['S', 'M', 'L'];
    const minPrijs = 19.95;
    const maxPrijs = 29.99;

    const grid = document.querySelector('.product-grid');
    const producten = Array.from(grid.querySelectorAll('.product'));

    // Shuffle producten (betere aanpak)
    function shuffleArray(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
        }
        return array;
    }

    const shuffled = shuffleArray(producten);
    grid.innerHTML = '';
    grid.append(...shuffled);

    // Geef elke product een random maat en prijs
    producten.forEach(function (product) {
        const maat = maten[Math.floor(Math.random() * maten.length)];
        const prijs = (Math.random() * (maxPrijs - minPrijs) + minPrijs).toFixed(2);

        let h3 = product.querySelector('h3');
        if (h3) {
            h3.textContent += ` (maat ${maat})`;
        }

        let p = product.querySelector('p');
        if (p) {
            p.textContent = `€${prijs}`;
        }

        product.setAttribute('data-maat', maat);
        product.setAttribute('data-prijs', prijs);
    });

    // Extra knoppen controleren
    const restartBtn = document.getElementById('restartBtn');
    if (restartBtn) {
        let goedCount = 0;
        restartBtn.addEventListener('click', function () {
            goedCount = 0;
            const completion = document.getElementById('completionScreen');
            if (completion) completion.style.display = 'none';
            window.location.reload();
        });
    }

    const backBtn = document.getElementById('backBtn');
    if (backBtn) {
        backBtn.addEventListener('click', function () {
            window.location.href = 'centraalzicht.php';
        });
    }
});
document.addEventListener('DOMContentLoaded', function () {
  const juisteProduct = "zombie";
  const knoppen = document.querySelectorAll('.bestel-btn');

  knoppen.forEach(function (knop) {
    knop.addEventListener('click', function () {
      const product = this.closest('.product');
      const code = product.getAttribute('data-product');

      if (code === juisteProduct) {
        document.getElementById('completionScreen').style.display = 'block';
        window.scrollTo(0, 0);
      } else {
        alert("Fout! Dit is niet het juiste shirt.");
      }
    });
  });

  // Knop gedrag
  document.getElementById('restartBtn').addEventListener('click', function () {
    document.getElementById('completionScreen').style.display = 'none';
    window.scrollTo(0, 0);
  });

  const terugKnop = document.querySelector('.button-link');
  if (terugKnop) {
    terugKnop.addEventListener('click', function () {
      window.location.href = 'centraalzicht.php';
    });
  }
});
