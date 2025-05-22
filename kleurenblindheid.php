<?php

?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Monoculaire visie Ervaring</title>
  <link rel="stylesheet" href="css/kleurenblindheid.css">
</head>

<body>
  <?php include 'header.php'; ?>

    <main>
    
        <h1>Ervaar hoe het is om kleurendoof te zijn</h1>

        <section class="informatie">

        <div class="informatie-text">

            <h2>Wat houd kleurenblindheid in?</h2>
            <p>Kleurenblindheid is een visuele aandoening waarbij iemand moeite heeft met het onderscheiden van bepaalde kleuren. 
                Dit komt doordat de kegeltjes in het oog niet goed werken of ontbreken. De meest voorkomende vormen zijn rood-groen 
                kleurenblindheid en blauw-geel kleurenblindheid.</p>
            <p>Er zijn verschillende typen kleurenblindheid, zoals protanopie (roodblindheid), deuteranopie (groenblindheid) en 
                tritanopie (blauwblindheid). Mensen met kleurenblindheid ervaren de wereld dus anders en kunnen kleuren soms lastig 
                herkennen of onderscheiden.</p>

            <div class="oorzaken">
                <h2>Oorzaken van kleurenblindheid</h2>
                <p>Kleurenblindheid kan verschillende oorzaken hebben. De belangrijkste zijn:</p>
                <ul>
                    <li>Erfelijkheid: kleurenblindheid wordt vaak via de genen doorgegeven</li>
                    <li>Aandoeningen aan het netvlies of de oogzenuw</li>
                    <li>Schade door bepaalde ziektes, zoals diabetes</li>
                    <li>Blootstelling aan giftige stoffen of bijwerkingen van medicijnen</li>
                    <li>Veroudering van het oog</li>
                </ul>
            </div>

        </div>

        <div class="ervaring-image">
            <img src="images/kleurenblindheid.jpg" alt="Visualisatie van kleurenblindheid">
        </div>

        </section>
        
        <section class="experience">
      <div class="experience-text">
        <h1>Ervaring: Stel de outfit samen</h1>
        <p>
          Deze ervaring is heel simpel, stel de aangegeven outfit samen terwijl je kleurenblind bent.
        </p>
        <a href="kleurenblind_simulatie.php" class="start-experience">
          <button id="toggle-button" class="start-btn">Start de ervaring</button>
        </a>
      </div>
      <div class="experience-visual">
        <img src="images/Stylezz-KB.png" alt="Bestelervaring" width="300" />
      </div>
    </section>
    <h1></h1>
   <?php include 'footer.php';?>
    </main>
</body>
</html>