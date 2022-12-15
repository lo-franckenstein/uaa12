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
<body>
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
    <div class="total2">
        <h1 class="title">Inscription</h1>
        <form action="">
            <div class="cadre">
                <div class="block">
                    <label for="prenom">Prénom</label> <br>
                    <input type="text" name="prenom" id="prenom" required placeholder="Votre prénom...">
                </div>
                <br>
                <div class="block">
                    <label for="nom">Nom</label> <br>
                    <input type="text" name="nom" id="nom" required placeholder="Votre nom...">
                </div>
                <br>
                <div class="block">
                    <label for="user">Votre nom d'utilisateur</label> <br>
                    <input type="text" name="user" id="user" required placeholder="Nom d'utilisateur...">
                </div>
                <br>
                <div class="block">
                    <label for="email">Votre Email</label> <br>
                    <input type="email" name="email" id="email" required placeholder="Email...">
                </div>
                <br>
                <div class="block">
                    <label for="password">Votre mot de passe</label> <br>
                    <input type="password" name="password" id="password" required placeholder="Mot de passe...">
                </div>
                <br>
                <div class="block">
                    <input class="buttonsend" type="submit" value="S'inscrire'">
                </div>
                <div>
                    <input type="checkbox" id="online" name="online" value="online">
                    <label class="txtonline" for="online">S'abonner à notre newsletter mensuel?</label>
                </div>
                <br>
                <div class="flexContainer littletxt">
                    <a href="#">Soucis d'inscription?</a>
                    <br>
                    <a href="login.php">Déja inscrit?</a>
                </div>

            </div>

        </form>
    </div>


</body>
</html>