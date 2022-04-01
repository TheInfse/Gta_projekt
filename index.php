<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollToPlugin.min.js"></script>    
    <title>document</title>
</head>

<body>
    <div class="bg">
        <div class="main_bg">
            <h1>zmoduj swoje konto gta 5 !</h1>
            <div class="login">
                <button onclick="zaloguj()">zaloguj się</button>
                <button onclick="zarejestruj()">zarejestruj się</button>
            </div>
        </div>
    </div>

    <nav>
        <img class="logo" src="img/logo.png" alt="logo" onclick="str()">

        <ul>
            <li><a href="#">Oferta</a></li>
            <li><a href="#">Zamówienia</a></li>
            <li><a href="#">Kontakt</a></li>
            <li><a href="koszyk.php">Koszyk</a></li>
        </ul>

        <button class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </button>
    </nav>

    <div class="mapa"></div>

    <script src="main.js"></script>
</body>

</html>