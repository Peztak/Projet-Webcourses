<button class="first_utilisateur"onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Créer votre compte membre</button>
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content animate">
    <div class="container">
      <h1><u>Créer un compte membre</u></h1>
      <p>Entrez les informations correspondantes afin de créer votre compte membre.</p>
      <hr>
      <label for="numero"><b>Numéro de Membre</b></label>
      <input type="text" placeholder="Entrez votre numéro membre" name="numero" required>

      <label for="psw"><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrez votre mot de passe" name="psw" required>

      <label for="psw-repeat"><b>Répéter votre mot de passe</b></label>
      <input type="password" placeholder="Veulliez répéter votre mot de passe" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Se souvenir de moi
      </label>

      <p>En créant votre compte, vous acceptez notre <a href="Politique.php" style="color:dodgerblue">Politique de confidentialité</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Annuler</button>
        <button type="submit" class="signupbtn">Créer un compte</button>
      </div>
    </div>
  </form>
</div>