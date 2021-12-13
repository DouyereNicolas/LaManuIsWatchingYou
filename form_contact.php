
<div class="content-connexion">
        <div>
            <h1>Identifiez vous</h2>
            <div class="form-connect">
                <form action="./assets/function/connexion.php" method="post">
                <label for="login">Identifiant :</label><br>
                <input type="text" id="login" name="login"><br><br>
                <label for="password">Mot de passe :</label><br>
                <input type="text" id="password" name="password"><br><br>
                <input class="sub" type="submit" value="Valider">
                </form>
                <p><?php if(isset($_SESSION["error_connexion"])){echo $_SESSION["error_connexion"];}; ?></p> 
            </div>
        </div>
    
    </div>