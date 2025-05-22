let goedCount = 0;
let gekozenVorm = null;
let selectie = [];
let huidigeOpdracht = null;
let grid;
let producten; 
const toegestaneKleuren = ["geel", "groen", "rood", "zwart", "paars", "beige", "oranje", "blauw", "roze"];

function shuffleProducten() {
    for (let i = producten.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        grid.appendChild(producten[j]);
    }
}

document.addEventListener('DOMContentLoaded', function() {
    grid = document.querySelector('.product-grid');
    producten = Array.from(grid.querySelectorAll('.product'));

    shuffleProducten();
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

function uniekeKleuren(type) {
    const kleuren = new Set();
    producten.forEach(p => {
        if (p.getAttribute('data-type') === type) {
            kleuren.add(p.getAttribute('data-kleur'));
        }
    });
    return Array.from(kleuren);
}

function nieuweOpdracht() {
    selectie = [];
    producten.forEach(p => p.style.outline = '');

    const broekKleuren = uniekeKleuren('broek');
    const shirtKleuren = uniekeKleuren('shirt');

    const gekozenBroekKleur = broekKleuren[Math.floor(Math.random() * broekKleuren.length)];
    const gekozenShirtKleur = shirtKleuren[Math.floor(Math.random() * shirtKleuren.length)];

    huidigeOpdracht = {
        tekst: `Zoek een broek met de kleur <b>${gekozenBroekKleur}</b> en een shirt met de kleur <b>${gekozenShirtKleur}</b>!`,
        oplossing: [
            { kleur: gekozenBroekKleur, type: "broek" },
            { kleur: gekozenShirtKleur, type: "shirt" }
        ]
    };
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
            if (goedCount >= 2) {
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

    // Verwijder eerst alle filters
    producten.forEach(p => {
        const img = p.querySelector('img');
        if (img) img.style.filter = '';
    });

    let filter = '';
    if (gekozenVorm === 'deuteranopie') filter = 'url(#deuteranopia)';
    if (gekozenVorm === 'protanopie') filter = 'url(#protanopia)';
    if (gekozenVorm === 'tritanopie') filter = 'url(#tritanopia)';

    // Zet filter alleen op de afbeeldingen
    producten.forEach(p => {
        const img = p.querySelector('img');
        if (img) img.style.filter = filter;
    });

    selectie = [];
};
document.getElementById('opnieuwBtn').onclick = function() {
    document.getElementById('completionScreen').style.display = 'none';
    document.getElementById('intro').style.display = 'block';
    document.getElementById('opdracht').style.display = 'none';

    // Verwijder filter van alle afbeeldingen
    producten.forEach(p => {
        const img = p.querySelector('img');
        if (img) img.style.filter = '';
    });

    producten.forEach(p => p.style.outline = '');
    selectie = [];
    goedCount = 0;
    nieuweOpdracht();
};

document.getElementById('restartBtn').onclick = function() {
location.reload();
};
    document.getElementById('backBtn').addEventListener('click', function() {
        window.location.href = 'kleurenblindheid.php';
    });
});