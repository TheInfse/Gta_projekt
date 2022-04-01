<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="logowanie.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <img class="logo" onclick="str()" src="img/logo.png" alt="logo">


        <ul>
            <li><a href="#">oferta</a></li>
            <li><a href="#">zamówienia</a></li>
            <li><a href="#">kontakt</a></li>
            <li><a href="#">koszyk</a></li>
        </ul>

        <button class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </button>
    </nav>

    <main>
        <form class="logowanie">
            <h1>Rejestracja</h1>
            <p class="odst2">E-mail</p>
        <input class="odst" type="text" name="login" required>
        <p class="odst2">Haslo</p>
        <input class="odst" type="password" name="haslo" required>
        <p class="odst2">Potwierdź Haslo</p>
        <input class="odst" type="password" name="haslo" required>
        <input class="odst" type="submit" name="wyslij" value="Zarejestruj!" required>

        <p class="kk komm on">Podałeś błędny login lub hasło</p>

        </form>
    </main>

    <script src="main.js"></script>
</body>
</html>