<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ALTWEAR - Underground Webshop</title>
  <link rel="stylesheet" href="css/kleurenblind_simulatie.css" />
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
<div class="product" data-kleur="zwart" data-type="shirt">
    <img src="images/producten/electric_callboys_thomas.webp" alt="Electric callboys choo choo shirt" />
    <h3>"Choo Choo" T-shirt zwart van Electric Callboy </h3>
    <p>€21,99</p>
</div>

<div class="product" data-kleur="wit" data-type="shirt">
    <img src="images/producten/nirvana_heart_shape_box.webp" alt="Nirvana shirt" />
    <h3>"Heart Shape Box" T-shirt wit van Nirvana</h3>
    <p>€23,25</p>
</div>

<div class="product" data-kleur="geel" data-type="shirt">
    <img src="images/producten/beastie_boys.webp" alt="Beastie Boys shirt" />
    <h3>"Logo" T-shirt van Beastie Boys </h3>
    <p>€23,85</p>
</div>

<div class="product" data-kleur="beige" data-type="shirt">
    <img src="images/producten/motörhead.jpg" alt="Motörhead shirt" />
    <h3>"Logo England" T-shirt grijs van Motörhead </h3>
    <p>€21,45</p>
</div>

<div class="product" data-kleur="beige" data-type="shirt">
    <img src="images/producten/Slipknot.webp" alt="Slipknot beige shirt" />
    <h3>"EMP Signature Collection" T-shirt beige van Slipknot </h3>
    <p>€25,80</p>
</div>

<div class="product" data-kleur="rood" data-type="shirt">
    <img src="images/producten/FFDP_Zombie_Kill_Xmas_Red.jpg" alt="Five Finger Death Punch 'Zombie Kill Xmas' (Red) T-Shirt" />
    <h3>"Five Finger Death Punch 'Zombie Kill Xmas'T-Shirt"</h3>
    <p>€23,76</p>
</div>

<div class="product" data-kleur="paars" data-type="shirt">
    <img src="images/producten/AA_purple.jpg" alt=" Asking Alexandria Night Slime" />
    <h3>"Asking Alexandria Night Slime T-shirt"</h3>
    <p>€22,50</p>
</div>

<div class="product" data-kleur="groen" data-type="shirt">
    <img src="images/producten/T-shirts-Flogging-Molly-Flogging-Molly-T-shirt-Vintage.jpg" alt=" Flogging Molly T-shirt Vintage" />
    <h3>" Flogging Molly T-shirt Vintage Irish Punk"</h3>
    <p>€25,50</p>
</div>

<div class="product" data-kleur="roze" data-type="shirt">
    <img src="images/producten/death_metal.jpg" alt="Death metal shirt" />
    <h3>"Death Metal Unicorn" T-shirt lichtroze van Tierisch"</h3>
    <p>€25,46</p>
</div>

<div class="product" data-kleur="geel" data-type="broek">
    <img src="images/producten/cargo_geel.jpg" alt="Gele cargo broek kort" />
    <h3>"Korte cargo broek"</h3>
    <p>€22,89</p>
</div>

<div class="product" data-kleur="groen" data-type="broek">
    <img src="images/producten/cargo_groen.jpg" alt="Groene cargo broek kort" />
    <h3>"Korte cargo broek"</h3>
    <p>€18,45</p>
</div>

<div class="product" data-kleur="oranje" data-type="broek">
    <img src="images/producten/cargo_oranje.jpg" alt="Oranje cargo broek kort" />
    <h3>"Korte cargo broek"</h3>
    <p>€28,47</p>
</div>

<div class="product" data-kleur="paars" data-type="broek">
    <img src="images/producten/cargo_paars.jpg" alt="Paarse cargo broek kort" />
    <h3>"Korte cargo broek"</h3>
    <p>€27,12</p>
</div>

<div class="product" data-kleur="rood" data-type="broek">
    <img src="images/producten/cargo_rood.jpg" alt="Rode cargo broek kort" />
    <h3>"Korte cargo broek"</h3>
    <p>€29,32</p>
</div>

<div class="product" data-kleur="zwart" data-type="broek">
    <img src="images/producten/cargo_zwart.webp" alt="Zwarte cargo broek" />
    <h3>"Korte cargo broek"</h3>
    <p>€26,78</p>
</div>

<div class="product" data-kleur="groen" data-type="shirt">
    <img src="images/producten/green_day.webp" alt="Green Day shirt" />
    <h3>"Green Day T-shirt"</h3>
    <p>€23,66</p>
</div>

<div class="product" data-kleur="geel" data-type="shirt">
    <img src="images/producten/anthrax.webp" alt="Anthrax shirt" />
    <h3>""Not Man" T-shirt van Anthrax "</h3>
    <p>€22,50</p>
</div>

<div class="product" data-kleur="blauw" data-type="shirt">
    <img src="images/producten/dropkick_murphys.jpg" alt="Dropkick Murphys shirt" />
    <h3>"Fist Up" T-shirt van Dropkick Murphys</h3>
    <p>€24,70</p>
</div>

<div class="product" data-kleur="blauw" data-type="broek">
    <img src="images/producten/cargo_roze.jpg" alt="Roze cargo broek kort" />
    <h3>"Korte cargo broek"</h3>
    <p>€19,50</p>
</div>

    </section>
  </main>

  <footer>
    &copy; 2025 ALTWEAR. Underground gear for the fearless.
</footer>

<div id="completionScreen">
  <h2 style="color:white;">Gefeliciteerd! Je hebt 5 keer goed geraden!</h2>
  <button id="restartBtn">Opnieuw spelen</button>
<a id="backBtn" href="kleurenblindheid.php" class="completion-btn">Terug naar uitleg</a>
</div>

<script src="js/kleurenblindheid.js"></script>

</body>
</html>
