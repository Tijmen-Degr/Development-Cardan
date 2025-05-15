<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ALTWEAR - Underground Webshop</title>
  <link rel="stylesheet" href="css/winkel.css" />
</head>
<body>

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

  <main>
    <h2>Nieuw binnen</h2>
    <section class="product-grid">
      <div class="product">
        <img src="images/alt-shirt1.jpg" alt="T-shirt met schedelprint" />
        <h3>Skull Tee</h3>
        <p>€29,95</p>
      </div>
      <div class="product">
        <img src="images/alt-shirt2.jpg" alt="Zwart oversized shirt" />
        <h3>Void Oversize</h3>
        <p>€34,95</p>
      </div>
    </section>
  </main>

  <footer>
    &copy; 2025 ALTWEAR. Underground gear for the fearless.
  </footer>

  <div id="floating-cart">🛒</div>
  <div id="kokerzichtOverlay" class="kokerzicht-overlay"></div>
<!-- Scherm na 7de klik -->
<div id="completionScreen" style="display: none; text-align: center;">
  <h2>Ervaring Voltooid</h2>
  <button id="restartBtn">Opnieuw</button>
  <a href="kokervisie.php" id="restartBtn" class="button-link">Terug naar Kokerzicht</a>

</div>


  <script src="js/mode.js"></script>

</body>
</html>
