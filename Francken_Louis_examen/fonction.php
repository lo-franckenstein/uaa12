<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/fonction.css">
    <link rel="stylesheet" href="../CSS/navbar_footer.css">
</head>
<body>
    <?php

    function diviseur($nb) {
        $i = 1;
        $diviseurs = "";
        while ($i > $nb) {
            if ($nb % $i == 0) {
                $diviseurs = $diviseurs . $i . " ";
                $i = $i + 1;
            }
        }
        return $diviseurs;
    
    }

    function triangle($c1, $c2, $c3) {
        $cote2 = 0;
        $cote3 = 0;
        $Pg = 0;
        if ($c1 >= $c2 && $c1 >= $c3) {
            $Pg = $c1;
            $cote2 = $c2;
            $cote3 = $c3; 
        } else {
            if ($c2 >= $c1 && $c2 >= $c3) {
                $Pg = $c2;
                $cote2 = $c1;
                $cote3 = $c3;
            } else {
                $pg = $c3;
                $c2 = $c1;
                $c3 = $c2;
            }
        }
        if ($Pg < $cote2 + $cote3) {
            if($Pg^2 == $cote2^2 + $cote3^2) {
                if($cote2 = $cote3) {
                    $message = "C'est un triangle rectangle isocèle";
                } else {
                    $message = "C'est un triangle rectangle";
                }
            } else {
                $message = "Le triangle n'est pas rectangle";
            }
        } else {
            $message = "Ces dimensions ne peuvent pas être celles d'un triangle";
        }

        return $message;
    }

    ?>
    
    <nav class="navbar">
        <ul>
            <li><a class="abutton" href="index.php">Home</a></li>
            <li><a class="abutton" href="fonction.php">Fonction</a></li>
            <li><a class="abutton" href="#">Contact</a></li>
        </ul>
    </nav>

    <div class="main">
        <div class="with">
            <div class="title">
                <h1>Affichage avec des fonctions PHP</h1>
            </div>
            <div class="txt">
                <div class="c1">
                    <h2>Trouver les diviseurs d'un nombre</h2>
                    <br>
                    <p>Le nombre 725 a <?= diviseur(725) ?>: comme diviseur</p>
                </div>
                <div class="c2">
                    <h2>Est-ce un triangle rectangle et lequel.</h2>
                    <br>
                    <p><?= triangle(2, 5, 6)?></p>
                </div>
            </div>
        </div>
        <div class="without">
            <div class="title">
                <h1>Affichage sans fonctions PHP</h1>
            </div>
            <div class="txt">
                <div class="c3">
                    <h2>Changer un nombre par un autre</h2>
                </div>
                <div class="c4">
                    <h2>Remplacer les voyelles et les consonnes</h2>

                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="pourquelehovermarchebien">
            <div class="description footertext">
                <p class="exam">Examen 2022-2023</p>
                <p>UAA12: Création d'un site web dynamique</p>
            </div>
            <div class="classe footertext">
                <p>5TTI</p>
            </div>
        </div>
    </footer>
</body>
</html>