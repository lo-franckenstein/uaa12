<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/animation.css">
    <link rel="stylesheet" href="CSS/loginregister.css">
    <title>Connexion</title>

</head>
<body class="plalala">
    <header>
        <ul class="flex space-evenly">
            <li class="menu"><a href="index.php">Home</a></li>
            <li  class="menu"><a href="profil.php">Page profil</a></li>
            <li class="menu"><a href="login.php">Se connecter</a></li>
            <li class="menu"><a href="register.php">S'inscrire</a></li>
            <li class="imageMenu"><a href="index.php"><ion-icon size="large" name="home-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="profil.php"><ion-icon size="large" name="person-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="login.php"><ion-icon size="large" name="accessibility-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="register.php"><ion-icon size="large" name="person-add-outline"></ion-icon></a></li>

        </ul>
    </header>
    <div class="total">
        <h1 class="title">Connexion</h1>
        <form action="">
            <div class="cadre">
                <div class="block">
                    <label for="user">Votre nom d'utilisateur</label> <br>
                    <input type="text" name="user" id="user" required placeholder="Nom d'utilisateur...">
                </div>
                <br>
                <div class="block">
                    <label for="password">Votre mot de passe</label> <br>
                    <input type="password" name="password" id="password" required placeholder="Mot de passe...">
                </div>
                <div>
                    <input type="checkbox" id="online" name="online" value="online">
                    <label class="txtonline" for="online">Rester connecté?</label>
                </div>
                <br>
                <div class="block">
                    <input class="buttonsend" type="submit" value="Se connecter">
                </div>
                <br>
                <div class="flexContainer littletxt">
                    <a href="#">Mot de passe oublié...</a>
                    <br>
                    <a href="register.php">Pas encore inscrit?</a>
                </div>

            </div>

        </form>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>