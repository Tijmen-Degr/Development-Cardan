<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ALTWEAR - Underground Webshop</title>
  <link rel="stylesheet" href="css/winkel.css" />
</head>
<body>

    <svg width="0" height="0" style="position:absolute;">
    <filter id="deuteranopia">
        <feColorMatrix type="matrix" values="0.625,0.7,0,0,0 0.375,0.3,0.3,0,0 0,0,0.7,1,0 0,0,0,1,0"/>
    </filter>
    <filter id="protanopia">
        <feColorMatrix type="matrix" values="0.567,0.433,0,0,0 0.558,0.442,0,0,0 0,0.242,0.758,0,0 0,0,0,1,0"/>
    </filter>
    <filter id="tritanopia">
        <feColorMatrix type="matrix" values="0.95,0.05,0,0,0 0,0.433,0.567,0,0 0,0.475,0.525,0,0 0,0,0,1,0"/>
    </filter>
    </svg>

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

<div id="intro" style="text-align:center; margin: 2em 0;">
  <h2>Kleurenblindheid Minigame</h2>
  <p>In deze minigame ervaar je hoe mensen met verschillende vormen van kleurenblindheid kleuren waarnemen. Kun jij de juiste outfit vinden zonder kleurenlabels te gebruiken?</p>
  <div id="vormKiezen">
    <label>Kies een vorm van kleurenblindheid:</label>
    <select id="kleurvorm">
      <option value="deuteranopie">Deuteranopie (groenblindheid)</option>
      <option value="protanopie">Protanopie (roodblindheid)</option>
      <option value="tritanopie">Tritanopie (blauwblindheid)</option>
    </select>
    <button id="startGameBtn">Start</button>
  </div>
</div>
  
  <main>
    <div id="opdracht" class="opdracht" style="display:none;">
    Zoek een blauwe broek en een rood T-shirt voor een zomerse outfit!
    </div>

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
        <img src="images/producten/FFDP_Zombie_Kill_Xmas_Red.jpg" alt="Five Finger Death Punch 'Zombie Kill Xmas' (Red) T-Shirt" />
        <h3>"Five Finger Death Punch 'Zombie Kill Xmas' (Red) T-Shirt"</h3>
        <p>€22,50</p>
    </div>

        <div class="product">
        <img src="images/producten/wrong_side_of_heaven_ffdp.jpg" alt=" Five Finger Death Punch 'Wrong Side Of Heaven' T-Shirt" />
        <h3>"Five Finger Death Punch 'Wrong Side Of Heaven' T-Shirt"</h3>
        <p>€22,50</p>
    </div>

        <div class="product">
        <img src="images/producten/AA_purple.jpg" alt=" Asking Alexandria Night Slime" />
        <h3>"Asking Alexandria Night Slime T-shirt"</h3>
        <p>€22,50</p>
    </div>

        <div class="product">
        <img src="images/producten/T-shirts-Flogging-Molly-Flogging-Molly-T-shirt-Vintage.jpg" alt=" Flogging Molly T-shirt Vintage" />
        <h3>" Flogging Molly T-shirt Vintage Irish Punk"</h3>
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

<div id="completionScreen">
  <h2 style="color:white;">Gefeliciteerd! Je hebt 5 keer goed geraden!</h2>
  <button id="restartBtn">Opnieuw spelen</button>
  <button id="backBtn">Terug naar uitleg</button>
</div>

</body>
</html>
