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
                <a href="/register">Pas encore inscrit?</a>
            </div>

        </div>

    </form>
</div>