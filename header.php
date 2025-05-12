<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your website description here">
    <meta name="author" content="Your Name or Company">
    <title>Cardan development header</title>
    <link rel="stylesheet" href="header.css">
</head>
<body>
<header>
            <nav>
                <ul>
                    <li><a href="https://mijn.cardan.com/login">Mijn Cardan</a></li>
                    <li><a href="ervaringsplein.php">Ervaringsplein</a></li>
                    <li><a href="services.php">Cookies</a></li>
                </ul>
            </nav>  
            <nav class="secondary-nav">
                <li>
                    <a href="https://www.cardan.com/">
                        <img src="images/cardan-logo.png" alt="Cardan Logo" class="logo">
                    </a>
                </li>
                <ul>
                    <div class="hoofdmenu">
                    <li class="dropdown">
                        <a href="" class="dropbtn">Onze diensten<i class="arrow down"></i></a>
                        <div class="dropdown-content">
                            <a href="">WCAG onderzoeken</a>
                            <a href="">Trainingen</a>
                            <a href="">Advies op maat</a>
                            <a href="">Bewustwording</a>
                            <a href="">Project management</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropbtn">Branches<i class="arrow down"></i></a>
                        <div class="dropdown-content">
                            <a href="">Overheid</a>
                            <a href="">Bedrijven</a>
                            <a href="">Leveranciers</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropbtn">Kennisbank<i class="arrow down"></i></a>
                        <div class="dropdown-content">
                            <a href="">Digitale toegankelijkheid</a>
                            <a href="">Soorten beperkingen</a>
                            <a href="">De WCAG</a>
                            <a href="">Wet Digitale Overheid</a>
                            <a href="">European Accessibility act</a>
                            <a href="">Blog artikelen</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropbtn">Over Ons<i class="arrow down"></i></a>
                        <div class="dropdown-content">
                            <a href="">Onze Mensen</a>
                            <a href="">Vacatures</a>
                            <a href="">Waarmerk Drempelvrij</a>
                        </div>
                    </li>
                    <li><a href="https://www.cardan.com/contact">Contact</a></li>
                </ul>
                <div class="language-switcher">
                    <a href="https://www.cardan.com" class="nl">NL</a> |
                    <a href="https://www.cardan.com/en">EN</a>
                </div>
                
                <input type="image" src="images/lightmode_sun.png" class="darkORlight" onclick="switchmode()"/>
            </nav>
        </header>

        <script>
function switchmode() {
    var element = document.body;
    element.classList.toggle("darkmode");

    // Get the button element
    var button = document.querySelector('.darkORlight');
    var logo = document.querySelector('.logo');

    // Change the image based on the current mode
    if (element.classList.contains("darkmode")) {
        button.src = "images/darkmode_moon.png";
        logo.src = "images/cardan-logo-darkmode.png";  
    } else {
        button.src = "images/lightmode_sun.png"; 
        logo.src = "images/cardan-logo.png";
    }
}
</script>

</body>
