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
        function factorielle ($number) {
            $reponse = 1;
            for($i = 1; $i <= $number + 1; $i++) {
                $reponse = $reponse * $i;
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
    for ($i=0; $i < strlen($text); $i++) {
        if ($text[$i] == $letter) {
            $compteur++;
        }
        return $counter;
    }
?>
<fieldset>
    <legend>Occurence</legend>
    <div>
        <h1>Le nombre de a dans cette phrase: "Hey, comment-tu vas? J'espère que tu va bien et que tu aimes le PHP" est de: <?= occurence("Hey, comment-tu vas? J'espère que tu va bien et que tu aimes le PHP", "e") ?>:</h1>
    </div>
</fieldset>
</body>
</html>