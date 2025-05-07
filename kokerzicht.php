<?php

?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kokervisie Ervaring</title>
  <link href="https://fonts.googleapis.com/css?family=Inter:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/kokerzicht.css">
</head>

<body>
  <?php include 'header.php'; ?>

  <main>
    <section class="intro">
      <div class="intro-text">
        <h1>Ervaar hoe het is om met kokervisie te leven</h1>
        <p>Kokervisie is een visuele beperking waarbij het perifere zicht sterk is verminderd, waardoor iemand alleen nog in een smalle, buisvormige zone kan kijken.</p>
      </div>
      <div class="intro-image">
        <img src="images/kokervisie-voorbeeld.png" alt="Visualisatie van kokervisie">
      </div>
      <button id="toggle-kokerzicht" class="toggle-btn">Ervaar Kokerzicht</button>
      <div class="kokerzicht-description">
        <p>Met deze ervaring kun je zelf ervaren hoe het is om met kokervisie te leven. Klik op de knop hierboven om de ervaring te starten.</p>
      </div>
    </section>

    <section class="experience">
      <h2>Ervaring: Zoek het Winkelwagentje</h2>
      <p>Probeer met je muis het winkelwagentje te vinden op een onoverzichtelijke webshop</p>
      <div class="experience-visual">
        <div class="tunnel-vision"></div>
        <button class="find-cart-button">Vind mij!</button>
      </div>
    </section>

    <section class="tips">
      <h2>Do’s en Don’ts voor Kokerzicht</h2>
      <div class="tips-content">
        <div class="tip good">
          <p>Goed voorbeeld: de foutmelding staat direct bij het formulierveld en is rood gemarkeerd.</p>
        </div>
        <div class="tip bad">
          <p>Slecht voorbeeld: foutmelding staat bovenaan de pagina en is niet zichtbaar voor mensen met kokervisie.</p>
        </div>
      </div>
    </section>
  </main>

  <div class="kokerzicht-overlay" aria-hidden="true"></div>

  <footer class="main-footer">
    <p>&copy; <?php echo date("Y"); ?> Cardan - Alle rechten voorbehouden.</p>
  </footer>

  <script src="js/kokerzicht.js" defer></script>
</body>
</html>
