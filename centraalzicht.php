<?php ?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Centraal Zichtverlies Ervaring</title>
  <link href="https://fonts.googleapis.com/css?family=Inter:400,700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="css/centraalzicht.css" />
</head>

<body>
<?php include 'header.php'; ?>

<main>
  <section class="intro">
    <div class="intro-text">
      <h1>Ervaar hoe het is om verlies van centraal zicht te hebben</h1>
      <p>Bij verlies van centraal zicht ontstaat er een zwart vlekje in het midden van het gezichtsveld, wat het moeilijk maakt om te focussen op tekst of gezichten.</p>
    </div>
    <div class="intro-image">
      <img src="images/centraalzicht-voorbeeld.png" alt="Visualisatie van verlies van centraal zicht" />
    </div>
    <button id="toggle-centraalzicht" class="toggle-btn">Ervaar Centraal Zichtverlies</button>
    <div class="kokerzicht-description">
      <p>Klik op de knop hierboven om een simulatie te starten van hoe het is om met verlies van centraal zicht te leven.</p>
    </div>
  </section>

  <section class="experience">
    <h2>Ervaring: Lees een Tekst</h2>
    <p>Probeer deze tekst te lezen terwijl je centrale zicht geblokkeerd is.</p>
    <div class="experience-visual">
      <p>
        Digitale toegankelijkheid is essentieel voor een inclusieve samenleving. Iedereen, ongeacht beperking, moet websites kunnen gebruiken. 
        De WCAG-richtlijnen helpen ontwikkelaars en ontwerpers om toegankelijke oplossingen te bouwen.
      </p>
    </div>
  </section>

  <section class="tips">
    <h2>Do’s en Don’ts voor Centraal Zichtverlies</h2>
    <div class="tips-content">
      <div class="tip good">
        <p><strong>Goed voorbeeld:</strong> tekst met duidelijke koppen, grote letters en veel witruimte.</p>
      </div>
      <div class="tip bad">
        <p><strong>Slecht voorbeeld:</strong> lange paragrafen zonder onderbrekingen of visuele aanwijzingen.</p>
      </div>
    </div>
  </section>
</main>

<div class="central-vision-overlay"></div>

<footer class="main-footer">
  <p>&copy; <?php echo date("Y"); ?> Cardan - Alle rechten voorbehouden.</p>
</footer>

<script src="js/centraalzicht.js"></script>
</body>
</html>
