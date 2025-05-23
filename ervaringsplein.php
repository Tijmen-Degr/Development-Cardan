<!DOCTYPE html>
<html lang="en">    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ervaringsplein</title>
        <link rel="stylesheet" href="ervaringsplein.css">
    </head>

    <body>
    
    <header>
    <?php include 'header.php' ?>
    </header>
    


</div>

        <div class="welkom">

            <h1>Welkom op het ervaringsplein! Hier vind u een overzicht van 
                de ervaringen voor visuele beperkingen met uitzondering van complete blindheid.
            </h1>

            <div class="uitleg">

            <div class="as-bg as-bg--top">
                <img src="../images/as-rechtsboven-boven-kort.png" alt="as-bg1" style="width: 100%; height: auto; margin: 2em 0;">
            </div>

            <div class="uitleg-text">	
            <h2>Wat is het ervaringsplein?</h2>
                <p>
                    Het ervaringsplein is een platform dat mensen met visuele beperkingen de kans biedt om hun ervaringen te delen 
                    en anderen bewust te maken van de uitdagingen waarmee zij dagelijks worden geconfronteerd. Het doel van het 
                    ervaringsplein is om begrip en empathie te creëren voor mensen met visuele beperkingen, zodat bedrijven hun websites 
                    inclusivier en toegankelijker kunnen maken.
                </p>
            <p>Door middel van interactieve simulaties, zoals het plaatsen van een bestelling 
                op een webshop of het zoeken van het verschil tussen producten, krijgt u inzicht 
                in de uitdagingen die mensen met een visuele beperking tegenkomen. Daarnaast 
                leert u hoe webdevelopers websites toegankelijker kunnen maken voor iedereen.
            </p>
            </div>

            <div class="as-bg as-bg--bottom">
                <img src="../images/as-linksonder-boven-kort.png" alt="as-bg2" style="width: 100%; height: auto; margin: 2em 0;">
            </div>

        </div>


<div class="beperkingen-beschrijving">

  <div class="beperking card">
    <h2 class="collapsible">Monoculaire visie <span class="arrow">▶</span></h2>
    <div class="content">
      <p>Monoculaire visie is een visuele beperking waarbij slechts één oog wordt gebruikt om te zien. Dit kan ontstaan door 
        een aandoening, letsel of een aangeboren afwijking. Het gebruik van slechts één oog leidt tot een verminderd 
        dieptezicht, wat dagelijkse activiteiten zoals autorijden, sporten of het inschatten van afstanden uitdagender kan 
        maken. Daarnaast resulteert monoculaire visie in een smaller gezichtsveld, omdat het zicht van het andere oog 
        ontbreekt om het beeld te verbreden. Mensen met monoculaire visie leren vaak compenseren door hun hoofd meer te 
        bewegen om een volledig beeld van hun omgeving te krijgen. Hoewel monoculaire visie niet te genezen is, kunnen 
        hulpmiddelen zoals speciale brillen of training helpen om beter met deze beperking om te gaan.</p>
    </div>
  </div>

  <div class="beperking card">
    <h2 class="collapsible">Kleurenblindheid <span class="arrow">▶</span></h2>
    <div class="content">
      <p>Kleurenblindheid is een visuele beperking waarbij het moeilijk is om bepaalde kleuren van elkaar te onderscheiden. 
        Dit kan een grote impact hebben op het dagelijks leven, vooral in situaties waarin kleur een belangrijke rol speelt, 
        zoals bij verkeerslichten, kaarten lezen of het kiezen van kleding. Kleurenblindheid komt in verschillende vormen 
        voor, afhankelijk van welke kleuren moeilijk te onderscheiden zijn. De meest voorkomende vormen zijn protanopie, 
        waarbij rood moeilijk waarneembaar is, en deuteranopie, waarbij groen lastig te onderscheiden is. Een minder vaak 
        voorkomende vorm is tritanopie, waarbij blauw en geel moeilijk te onderscheiden zijn. Hoewel kleurenblindheid niet 
        te genezen is, zijn er hulpmiddelen zoals speciale brillen en apps die kunnen helpen om kleuren beter te herkennen 
        en het leven toegankelijker te maken.</p>
    </div>
  </div>

  <div class="beperking card">
    <h2 class="collapsible">Centraal zicht <span class="arrow">▶</span></h2>
    <div class="content">
      <p>Centraal zicht is een visuele beperking waarbij het centrale deel van het gezichtsveld ontbreekt. Dit wordt 
        veroorzaakt door schade aan het netvlies of de oogzenuw, wat resulteert in een zwarte vlek of meerdere zwarte vlekken 
        in het midden van het zicht. Mensen met deze beperking kunnen moeite hebben met activiteiten zoals lezen, gezichten 
        herkennen of details waarnemen, omdat deze taken afhankelijk zijn van scherp centraal zicht. Hoewel het perifere 
        zicht vaak intact blijft, kan het ontbreken van centraal zicht het dagelijks leven aanzienlijk beïnvloeden. 
        Hulpmiddelen zoals vergrootglazen, speciale software of aanpassingen in verlichting kunnen helpen om beter met deze 
        beperking om te gaan.</p>
    </div>
  </div>

  <div class="beperking card">
    <h2 class="collapsible">Kokervisie <span class="arrow">▶</span></h2>
    <div class="content">
      <p>Kokervisie is een visuele beperking waarbij het perifere gezichtsveld ontbreekt, waardoor alleen het centrale deel 
        van het zicht behouden blijft. Dit geeft het gevoel alsof men door een smalle buis of koker kijkt. Kokervisie kan 
        worden veroorzaakt door aandoeningen zoals retinitis pigmentosa of glaucoom, die schade aan het netvlies of de 
        oogzenuw veroorzaken. Mensen met kokervisie hebben vaak moeite met navigeren in hun omgeving, vooral in slecht 
        verlichte ruimtes of drukke gebieden. Activiteiten zoals autorijden, sporten of het inschatten van afstanden kunnen 
        hierdoor uitdagend worden. Hoewel kokervisie niet te genezen is, kunnen hulpmiddelen zoals visuele training, 
        aanpassingen in verlichting en het gebruik van hulpmiddelen zoals een witte stok helpen om beter met deze beperking 
        om te gaan.</p>
    </div>
  </div>

</div>

<script>
  document.querySelectorAll('.collapsible').forEach(header => {
    header.addEventListener('click', () => {
      header.classList.toggle('active');
      const content = header.nextElementSibling;
      const arrow = header.querySelector('.arrow');

      content.classList.toggle('open');

      if (content.classList.contains('open')) {
        content.style.maxHeight = content.scrollHeight + "px";
        arrow.textContent = '▼';
      } else {
        content.style.maxHeight = null;
        arrow.textContent = '▶';
      }
    });
  });
</script>
<?php include 'footer.php'; ?> 

    </body>
</html>