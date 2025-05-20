<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ALTWEAR - Underground Webshop</title>
  <link rel="stylesheet" href="css/winkel.css" />
</head>
<body>

  <header>
    <div class="logo">StyleZZ</div>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Collectie</a></li>
        <li><a href="#">Lookbook</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
  <div id="opdracht" class="opdracht"></div>
    <section class="product-grid">

      <div class="product">
        <img src="images/producten/electric_callboys_thomas.webp" alt="Electric callboys choo choo shirt" />
        <h3>"Choo Choo" T-shirt zwart van Electric Callboy </h3>
        <p>€21,99</p>
      </div>

      <div class="product">
        <img src="images/producten/soad_toxicity.webp" alt="System of a down toxicity shirt" />
        <h3>"Toxicity" T-shirt zwart van System Of A Down </h3>
        <p>€27,99</p>
      </div>

    <div class="product">
        <img src="images/producten/nirvana_heart_shape_box.webp" alt="Nirvana shirt" />
        <h3>"Heart Shape Box" T-shirt wit van Nirvana</h3>
        <p>€23,25</p>
    </div>

    <div class="product">
        <img src="images/producten/rammstein.jpg" alt="Rammstein shirt" />
        <h3>"Broken Logo II" T-shirt olijf van Rammstein </h3>
        <p>€23,85</p>
    </div>

    <div class="product">
        <img src="images/producten/motörhead.jpg" alt="Motörhead shirt" />
        <h3>"Logo England" T-shirt grijs van Motörhead </h3>
        <p>€21,45</p>
    </div>

    <div class="product">
        <img src="images/producten/Slipknot.webp" alt="Slipknot beige shirt" />
        <h3>"EMP Signature Collection" T-shirt beige van Slipknot </h3>
        <p>€25,80</p>
    </div>

    <div class="product">
        <img src="images/producten/korn.webp" alt="OMG IT'S KORN IDA URGHATATA SLI KA PURAA shirt" />
        <h3>"New Doll" T-shirt zwart van Korn </h3>
        <p>€23,75</p>
    </div>

    <div class="product">
        <img src="images/producten/wbtbwb.jpg" alt="We butter the bread with butter shirt" />
        <h3>We Butter The Bread With Butter - Schnitte - Hoodie</h3>
        <p>€21,95</p>
    </div>

    <div class="product">
        <img src="images/producten/brojob.jpg" alt="Brojob cockzilla shirt" />
        <h3>Brojob - Cockzilla - T-Shirt</h3>
        <p>€24,95</p>
    </div>

    <div class="product">
        <img src="images/producten/brojob_fist.jpg" alt="Brojob Fist your friends shirt" />
        <h3>Brojob - Fist your friends - T-Shirt</h3>
        <p>€24,85</p>
    </div>

    <div class="product">
        <img src="images/producten/anal_cunt.jpg" alt="Anal Cunt shirt" />
        <h3>Anal Cunt - T-Shirt</h3>
        <p>€22,50</p>
    </div>

    <div class="product">
        <img src="images/producten/death_metal.jpg" alt="Death metal shirt" />
        <h3>"Death Metal Unicorn" T-shirt lichtroze van Tierisch"</h3>
        <p>€22,50</p>
    </div>

    </section>
  </main>

  <footer>
    &copy; 2025 ALTWEAR. Underground gear for the fearless.
</footer>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const maten = ['S', 'M', 'L'];
    const minPrijs = 19.95;
    const maxPrijs = 29.99;

    const grid = document.querySelector('.product-grid');
    const producten = Array.from(grid.querySelectorAll('.product'));

    // Shuffle producten (Fisher-Yates)
    for (let i = producten.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        grid.appendChild(producten[j]);
    }

    // Geef elke product een random maat en prijs
    producten.forEach(function(product) {
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

    // Genereer een willekeurige opdracht
    let opdrachtType, opdrachtWaarde;
    const opdrachten = [
        () => {
            opdrachtType = 'maat';
            opdrachtWaarde = maten[Math.floor(Math.random() * maten.length)];
            return `Zoek de shirts met maat <b>${opdrachtWaarde}</b>`;
        },
        () => {
            opdrachtType = 'laagste-prijs';
            let prijzen = producten.map(p => parseFloat(p.getAttribute('data-prijs')));
            opdrachtWaarde = Math.min(...prijzen).toFixed(2);
            return `Zoek het shirt met de <b>laagste prijs</b>`;
        },
        () => {
            opdrachtType = 'hoogste-prijs';
            let prijzen = producten.map(p => parseFloat(p.getAttribute('data-prijs')));
            opdrachtWaarde = Math.max(...prijzen).toFixed(2);
            return `Zoek het shirt met de <b>hoogste prijs</b>`;
        }
    ];
    const opdracht = opdrachten[Math.floor(Math.random() * opdrachten.length)]();

    document.getElementById('opdracht').innerHTML = opdracht;

    // Maak alle producten klikbaar en geef feedback
    producten.forEach(function(product) {
        product.style.cursor = "pointer";
        product.addEventListener('click', function() {
            // Reset alle borders
            producten.forEach(p => p.style.border = '');

            let goed = false;
            if (opdrachtType === 'maat') {
                goed = product.getAttribute('data-maat') === opdrachtWaarde;
            } else if (opdrachtType === 'laagste-prijs') {
                goed = product.getAttribute('data-prijs') === opdrachtWaarde;
            } else if (opdrachtType === 'hoogste-prijs') {
                goed = product.getAttribute('data-prijs') === opdrachtWaarde;
            }

            if (goed) {
                product.style.border = "4px solid #2ecc40"; 
                setTimeout(() => {
                    window.location.reload();
                }, 800); 
            } else {
                product.style.border = "4px solid #e74c3c"; 
            }
        });
    });
});
</script>

</body>
</html>
