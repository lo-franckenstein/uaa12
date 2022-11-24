<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions PHP | Louis Francken</title>
</head>
<body>

    <?php 


        function factorielle ($q) {
            $reponse = 1;
            for($compteur = 1; $compteur <= $q + 1; $compteur++) {
                $reponse = $reponse * $compteur;
            }
            return $reponse;

        }
    ?>

    <fieldset>
        <legend>Factorielle</legend>
        <div>
            <h1>Le résultat de la factorielle: <?= factorielle(7) ?>:</h1>
        </div>
    </fieldset>



<?php 


    function occurence ($text, $letter) {
    $compteur = -1;
    $compteurletter = 0;
    phrase.Lenght <=> stiler($text);
        

    do {
        $compteur == $compteur + 1;
        if ()
    } while ($numbertext == compteur);
    return $reponse;

    }
?>

<fieldset>
    <legend>Factorielle</legend>
    <div>
        <h1>Le résultat de la factorielle: <?= occurence("Hey, comment-tu vas? J'espère que tu va bien et que tu aimes le PHP", "e") ?>:</h1>
    </div>
</fieldset>




















    
</body>
</html>