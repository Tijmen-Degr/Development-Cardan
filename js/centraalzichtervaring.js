document.addEventListener('DOMContentLoaded', function () {
    const juisteProduct = "zombie";
    const maten = ['S', 'M', 'L'];
    const minPrijs = 19.95;
    const maxPrijs = 29.99;

    const grid = document.querySelector('.product-grid');
    let producten = Array.from(grid.querySelectorAll('.product'));
    let goedCount = 0;
    let processingClick = false; // ⛔️ voorkomt dubbelklikken

    function shuffleArray(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
        }
        return array;
    }

    function randomiseerProducten() {
        producten = shuffleArray(producten);
        grid.innerHTML = '';
        grid.append(...producten);

        producten.forEach(function (product) {
            const maat = maten[Math.floor(Math.random() * maten.length)];
            const prijs = (Math.random() * (maxPrijs - minPrijs) + minPrijs).toFixed(2);

            const h3 = product.querySelector('h3');
            if (h3) {
                const origineleNaam = h3.getAttribute('data-origineel');
                h3.textContent = `${origineleNaam} (maat ${maat})`;
            }

            const p = product.querySelector('p');
            if (p) {
                p.textContent = `€${prijs}`;
            }

            product.setAttribute('data-maat', maat);
            product.setAttribute('data-prijs', prijs);
        });

        koppelBestelKnoppen(); // opnieuw koppelen na shuffle
    }

    function koppelBestelKnoppen() {
        const knoppen = document.querySelectorAll('.bestel-btn');

        knoppen.forEach(function (knop) {
            const nieuweKnop = knop.cloneNode(true); // verwijder oude event listeners
            knop.parentNode.replaceChild(nieuweKnop, knop); // vervang met schone knop

            nieuweKnop.addEventListener('click', function () {
                if (processingClick) return; // ⛔️ blokkeer dubbele klik
                processingClick = true;

                const product = this.closest('.product');
                const code = product.getAttribute('data-product');

                if (code === juisteProduct) {
                    if (goedCount === 2) {
                        goedCount++;
                        document.getElementById('completionScreen').style.display = 'block';
                        window.scrollTo(0, 0);
                    } else {
                        goedCount++;
                        alert(`Goed! Je hebt ${goedCount} van de 3 juiste producten besteld.`);
                        setTimeout(() => {
                            randomiseerProducten();
                            processingClick = false;
                        }, 300); // even delay zodat DOM klaar is
                    }
                } else {
                    alert("Fout! Dit is niet het juiste shirt.");
                    processingClick = false;
                }
            });
        });
    }

    // Sla originele namen op
    producten.forEach(product => {
        const h3 = product.querySelector('h3');
        if (h3 && !h3.hasAttribute('data-origineel')) {
            h3.setAttribute('data-origineel', h3.textContent.replace(/\(.*\)/, '').trim());
        }
    });

    randomiseerProducten();

    const restartBtn = document.getElementById('restartBtn');
    if (restartBtn) {
        restartBtn.addEventListener('click', function () {
            goedCount = 0;
            document.getElementById('completionScreen').style.display = 'none';
            window.scrollTo(0, 0);
            randomiseerProducten();
        });
    }

    const terugKnop = document.querySelector('.button-link');
    if (terugKnop) {
        terugKnop.addEventListener('click', function () {
            window.location.href = 'centraalzicht.php';
        });
    }
});
