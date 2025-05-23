<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Ervaar Verlies van Centraal Zicht</title>
  <link href="https://fonts.googleapis.com/css?family=Inter:400,700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="css/centraalzicht.css" />
</head>
<body>
<?php include 'header.php';?>
  <main>
    <section class="intro">
      <div class="intro-text">
        <h1>Ervaar een website met een verstoord centraal zicht </h1>
        <p>
         Bij verstoring van het centraal zicht wordt het scherpe, gedetailleerde zicht in het midden van het blikveld aangetast en kan het zicht wazig of vervormd zijn, kunnen rechte lijnen golvend lijken of kan er een donkere of blinde vlek (scotoom) in het midden van het gezichtsveld ontstaan
        </p>
      </div>
      <div class="intro-image">
        <img src="images/centralezichtvb.png" alt="Verlies van centraal zicht voorbeeld" />
      </div>
    </section>

    <section class="experience">
      <div class="experience-text">
        <h1>Ervaring: Navigeer de website</h1>
        <p>
          Deze ervaring is heel simpel, probeer het rode shirt te zoeken en te kopen, het enige wat je hindert in je zoektocht is het vervagen/verlies van je centrale zicht.
           Probeer met deze beperking op de bestel knop te klikken. 
        </p>
        <a href="centraalzichtwinkel.php" class="start-experience">
          <button id="toggle-button" class="start-btn">Start de ervaring</button>
        </a>
      </div>
      <div class="experience-visual">
        <img src="images/StyleZZ.png" alt="Bestelervaring" width="300" />
      </div>
    </section>

    <section class="tips">
      <h2>Do’s en Don’t’s bij Centraal Zichtverlies</h2>
      <div class="tips-content">
        <div class="tip bad">
          <img src="images/foutcs.png" alt="Slecht voorbeeld" />
          <h3>
            Hier kunnen mensen die hun centraal zicht verloren zijn heel slecht zien wat er nou eigenlijk staat, en hoeveel de waterfles kost
          </h3>
        </div>
        <div class="tip good">
          <img src="images/do-cs.png" alt="Goed voorbeeld" />
          <h3>
          Hier is alles overzichtelijk te zien, wat het product is en wat de prijs is.
          </h3>
        </div>
      </div>
    </section>
  </main>

<?php include 'footer.php';?>


</body>
</html>
