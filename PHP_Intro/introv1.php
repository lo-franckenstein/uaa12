<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP | Louis Francken</title>
    <link rel="stylesheet" href="./intro.css">
</head>
<body>
    <div class="flexContainer justify-content-center">
        <div>
            <h1>Exercice 0</h1>
            <?php
                echo "<p>Hello world</p>";
            ?>
        </div>
    </div>
    <div class="flexContainer justify-content-space-around">
        <div>
            <h1>Exercice 1</h1>
                <?php
                    for($x = 0; $x <= 10; $x++){                
                        echo '<p>Le nombre vaut ' .$x. ".</p></br>";
                    }
                ?>
        </div>
        <div>
            <h1>Exercice 2</h1>
            <?php
                for($x = 0; $x <= 10; $x++){                
                    if($x != 3) {
                        echo '<p>Le nombre vaut ' .$x. ".</p></br>";
                    }
                }
            ?>
        </div>
    </div>
    <div class="flexContainer justify-content-space-around">
        <div>
            <h2>Exercice 3</h2>
            <?php 
                for($i = 1; $i <= 10; $i++)
                if($i < 4 || $i > 7) {
                    echo "<p>Le nombre vaut " .$i. ".</p><br>";
                }
            
            ?>
        </div>
        <div>

            <h2>Exercice 4</h2>
            <?php
            $v = abs(-5);
            $b = abs(10);
            echo "<p>La valeur absolue de -5 est de " .$v. ".</p><br>";
            echo "<p>La valeur absolue de 10 est de" .$b. ".</p><br>";
            ?>
            
        </div>
    </div>
</body>
</html>