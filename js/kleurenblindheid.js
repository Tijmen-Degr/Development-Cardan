let goedCount = 0;
let gekozenVorm = null;
let selectie = [];
let huidigeOpdracht = null;

document.addEventListener('DOMContentLoaded', function() {
    const grid = document.querySelector('.product-grid');
    const producten = Array.from(grid.querySelectorAll('.product'));

    for (let i = producten.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        grid.appendChild(producten[j]);
    }

    // Voorbeeld: geef producten data-attributen voor kleur en type
    // Doe dit handmatig in je HTML of hier in JS als je wilt randomiseren

    const opdrachten = [
        {
            tekst: "Zoek een blauwe broek en een rood T-shirt voor een zomerse outfit!",
            oplossing: [
                { kleur: "blauw", type: "broek" },
                { kleur: "rood", type: "shirt" }
            ]
        },
        {
            tekst: "Zoek een zwarte broek en een groen T-shirt voor een festivaloutfit!",
            oplossing: [
                { kleur: "zwart", type: "broek" },
                { kleur: "groen", type: "shirt" }
            ]
        }
    ];

    function nieuweOpdracht() {
        selectie = [];
        producten.forEach(p => p.style.outline = '');
        huidigeOpdracht = opdrachten[Math.floor(Math.random() * opdrachten.length)];
        document.getElementById('opdracht').innerHTML = huidigeOpdracht.tekst;
    }

    nieuweOpdracht();

    producten.forEach(product => {
        product.onclick = function() {
            if (selectie.includes(this)) return;
            if (selectie.length < 2) {
                this.style.outline = '4px solid #2ecc40';
                selectie.push(this);
                if (selectie.length === 2) {
                    setTimeout(checkOutfit, 600);
                }
            }
        };
    });

    function checkOutfit() {
        const gekozen = selectie.map(p => ({
            kleur: p.getAttribute('data-kleur'),
            type: p.getAttribute('data-type')
        }));

        let juist = true;
        huidigeOpdracht.oplossing.forEach(opdrachtItem => {
            const match = gekozen.find(
                k => k.kleur === opdrachtItem.kleur && k.type === opdrachtItem.type
            );
            if (!match) juist = false;
        });

        if (juist) {
            goedCount++;
            if (goedCount >= 5) {
                document.getElementById('completionScreen').style.display = 'flex';
            } else {
                alert("Goed gedaan! Nieuwe opdracht.");
                nieuweOpdracht();
            }
        } else {
            alert("Niet de juiste combinatie, probeer opnieuw!");
            selectie.forEach(p => p.style.outline = '4px solid #e74c3c');
            setTimeout(() => {
                selectie.forEach(p => p.style.outline = '');
                selectie = [];
            }, 1000);
        }
    }

    document.getElementById('startGameBtn').onclick = function() {
        gekozenVorm = document.getElementById('kleurvorm').value;
        document.getElementById('intro').style.display = 'none';
        document.getElementById('opdracht').style.display = 'block';
        let filter = '';
        if (gekozenVorm === 'deuteranopie') filter = 'url(#deuteranopia)';
        if (gekozenVorm === 'protanopie') filter = 'url(#protanopia)';
        if (gekozenVorm === 'tritanopie') filter = 'url(#tritanopia)';
        document.querySelector('.product-grid').style.filter = filter;
        selectie = [];
    };

    document.getElementById('opnieuwBtn').onclick = function() {
        document.getElementById('completionScreen').style.display = 'none';
        document.getElementById('intro').style.display = 'block';
        document.getElementById('opdracht').style.display = 'none';
        document.querySelector('.product-grid').style.filter = 'none';
        producten.forEach(p => p.style.outline = '');
        selectie = [];
        goedCount = 0;
        nieuweOpdracht();
    };
});