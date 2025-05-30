<?php

?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Monoculaire visie Ervaring</title>
  <link rel="stylesheet" href="css/monoculair.css">
</head>

<body>
  <?php include 'header.php'; ?>

    <main>
    
        <h1>Ervaar hoe het is om met monoculaire visie te leven</h1>

        <section class="informatie">

        <div class="informatie-text">

            <h2>Wat is monoculaire visie?</h2>
            <p>Monoculaire visie is een aandoening waarbij iemand slechts één goed functionerend oog heeft. Dit kan 
            leiden tot problemen met dieptezicht en het waarnemen van afstanden. Mensen met monoculaire visie 
            kunnen moeite hebben met het inschatten van de afstand tot objecten en kunnen ook problemen ondervinden 
            bij het navigeren in onbekende omgevingen.</p>
            <p>Bij monoculaire visie is het belangrijk om te begrijpen dat de hersenen zich aanpassen aan de
            informatie die ze ontvangen van het goed functionerende oog. Dit kan leiden tot een waziger gezichtsveld, een verminderd dieptezicht 
            en problemen met het waarnemen van afstanden.</p>

            <div class="oorzaken">
                <h2>Oorzaken van monoculaire visie</h2>
                <p>Monoculaire visie kan verschillende oorzaken hebben, waaronder:</p>
                <ul>
                    <li>Oogletsel of trauma</li>
                    <li>Aangeboren aandoeningen</li>
                    <li>Oogziekten zoals glaucoom of cataract</li>
                    <li>Neurologische aandoeningen</li>
                </ul>
            </div>

        </div>

        <div class="monoculair-image">
            <img src="images/monoculaire_visie.png" alt="Visualisatie van monoculaire visie">
        </div>

        </section>
        
       <section class="experience">
      <div class="experience-text">
        <h1>Ervaring: Voltooi de opdrachten</h1>
        <p>
          Deze ervaring is heel simpel, voltooi de opdrachten die je krijgt. terwijl je zicht waziger wordt.
        </p>
        <a href="mono_simulatie.php" class="start-experience">
          <button id="toggle-button" class="start-btn">Start de ervaring</button>
        </a>
      </div>
      <div class="experience-visual">
        <img src="images/StyleZZ-Blur.png" alt="Bestelervaring" width="300" />
      </div>
    </section>
    <h1></h1>
        <?php include 'footer.php';?>
   
    </main>
</body>
</html>