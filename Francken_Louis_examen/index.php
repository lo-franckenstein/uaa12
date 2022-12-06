<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Décembre - Louis Francken</title>
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/navbar_footer.css">
</head>
<body>

    <nav class="navbar">
        <ul>
            <li><a class="abutton" href="index.php">Home</a></li>
            <li><a class="abutton" href="fonction.php">Fonction</a></li>
            <li><a class="abutton" href="#">Contact</a></li>
        </ul>
    </nav>
    <form action ="">
        <div class="main">
            <div class="column1 colimg">
                <h2>Galerie d'images</h2>
                <div class="img1">
                    <div class="column1-1">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                    </div>
                    <div class="column1-2">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                    </div>
                </div>
            </div>
            <div class="forms">
                <div class="partone">
                    <fieldset>
                        <legend>Vos informations</legend>
                        <div>
                            <label class="txt" for="nom">Votre nom</label>
                            <br>
                            <input type="text" id="nom" name="nom" placeholder="Nom" required>
                        </div>
                        <div>
                            <label class="txt" for="prenom">Votre prénom</label>
                            <br>
                            <input type="text" id="prenom" name="prenom" placeholder="Prénom" required>
                        </div>
                        <div>
                            <label class="txt" for="mail">Votre mail</label>
                            <br>
                            <input type="email" id="mail" name="mail" placeholder="Email" required>
                        </div>
                        <div>
                            <label class="txt" for="tel">Votre numéro de téléphone</label>
                            <br>
                            <input type="tel" id="phone" name="phone" pattern="[0-9]{4} [0-9]{2} [0-9]{2} [0-9]{2}" placeholder="Numéro de téléphone" required>
                        </div>
                    </fieldset>
                </div>
                <div class="parttwo">
                    <fieldset>
                        <legend>Votre commande</legend>
                        <div>
                            <label class="txt" for="article">Choississez parmi les articles</label>
                            <br>
                            <select id="article" name="article" required>
                                <optgroup label="Hardware">
                                    <option value="ecran">Écran</options>
                                    <option value="souris">Souris</options>
                                    <option value="clavier">Clavier</options>
                                    <option value="ram">RAM</options>
                                    <option value="dd">Disque Dur</options>
                                </optgroup>
                                <optgroup label="Software">
                                    <option value="office">Office 365</option>
                                    <option value="packet">Packet Tracer</option>
                                    <option value="google">Google Workspace</option>
                                </optgroup>
                            </select>
                        </div>
                        <div>
                            <label for="quantite">La quantité choisie</label>
                            <br>
                            <input class="txt" type="number" id="quantite" name="quantite" value="1" pattern="[1-10]" required>
                        </div>
                        <div>
                            <label class="txt" for="date">Date de commande souhaitée</label>
                            <br>
                            <input type="date" id="date" name="date" required>
                        </div>
                        <div>
                            <label class="txt" for="nothing" class="txt">Facture choisie</label>
                        </div>
                        <div>
                            <input type="checkbox" id="mail" name="facture" value="mail" checked>
                            <label for="mail">Par mail</label>
                        </div>
                        <div>
                            <input type="checkbox" id="paper" name="perio" value="paper">
                            <label for="paper">Par papier</label>
                        </div>
                        <div>
                            <label class="txt" for="rem">Remarques supplémentaires</label>
                            <br>
                            <textarea name="rem" id="rem" cols="30" rows="10"></textarea>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="column4 colimg">
                <h2>Galerie d'images</h2>
                <div class="img2">
                    <div class="column4-1">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                    </div>
                    <div class="column4-2">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                        <img src="./image.png" alt="Logo de l'ITN.">
                    </div>
                </div>
            </div>
        </div>
        <div class="beforefooter">
            <input class="send" type="submit" value="Envoyer">
        </div>
    </form>
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