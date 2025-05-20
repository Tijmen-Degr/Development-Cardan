<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Ervaar Kokervisie</title>
  <link href="https://fonts.googleapis.com/css?family=Inter:400,700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="css/kokerzicht.css" />
</head>
<body>
<?php include 'header.php';?>
  <main>
    <section class="intro">
      <div class="intro-text">
        <h1>Ervaar hoe een persoon met kokervisie een website ervaart, zodat jij je eigen website inclusiever kan maken!</h1>
        <p>
          Kokervisie is een visuele beperking waarbij het perifere zicht sterk is verminderd, 
          waardoor iemand alleen nog in een smalle, buisvormige zone kan kijken. 
          Dit kan worden veroorzaakt door aandoeningen zoals glaucoom, retinitis pigmentosa 
          of extreme stressreacties (bijvoorbeeld in noodsituaties).
        </p>
  
      </div>
      <div class="intro-image">
        <img src="images/kokervisievb.png" alt="Kokervisie voorbeeld" />
      </div>
    </section>

    <section class="experience">
      <div class="experience-text">
        <h1>Ervaring: Zoek het Winkelwagentje</h1>
        <p>
          Ervaar hoe het is om te kijken met kokervisie, probeer met je muis de website te navigeren en het winkelwagentje te vinden, de plek van het winkelwagentje is anders elke keer dat je de ervaring opnieuw start.
        </p>
      
         <a href="winkel.php" class="start-experience">
  <button id="toggle-button" class="start-btn">Start de ervaring</button>
</a>

      </div>
      <div class="experience-visual">
        <img src="images/winkelwagen.png" alt="Winkelwagen ervaring" width="300" />
      </div>
    </section>

    <section class="tips">
      <h2>Do’s en Don’t’s voor Kokervisie</h2>
      <div class="tips-content">

        <div class="tip bad">
          <img src="images/Dont-Kokerzicht.png" alt="Slecht voorbeeld" style="width:100%;"/>
          <h3>
            Hier is het niet te zien wat er nou fout is, omdat het bovenaan word aangegeven, kunnen mensen met kokervisie niet zien of ze het fout hebben
          </h3>
        </div>
        <div class="tip good">
          <img src="images/Do-Kokerzicht.png" alt="Goed voorbeeld" style="width:100%;"/>
          <h3>
            Hier is juist goed te zien wat er fout is, door de tekst er direct onder te zetten, specifieke tekst neer te zetten en het wachtwoord vak rood te maken.
          </h3>
        </div>
      </div>
    </section>
  </main>

  <div id="kokerzichtOverlay" class="kokerzicht-overlay"></div>
  <?php include 'footer.php';?>



  <script src="js/kokervisie.js" defer></script>
</body>
</html>

