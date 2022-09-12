<button class="first_utilisateur"onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Créer votre compte utilisateur Webcourses</button>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content animate">
    <form action="./ressources/creer_compte.php" method="post">
    <div class="container">
      <h1><u>Créer un compte utilisateur</u></h1>
      <p>Entrez les informations correspondantes afin de créer votre compte utilisateur.</p>
      <hr>
      <label for="nom"><b>Nom</b></label>
      <input type="text" placeholder="Entrez votre nom" name="nom" required/>

      <label for="prenom"><b>Prénom</b></label>
      <input type="text" placeholder="Entrez votre prénom" name="prenom" required/>

      <label for="email"><b>Mail</b></label>
      <input type="text" placeholder="Entrez votre mail" name="email " required/>

      <label for="psw"><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrez votre mot de passe" name="psw" required/>

      <label for="psw-repeat"><b>Répéter votre mot de passe</b></label>
      <input type="password" placeholder="Veulliez répéter votre mot de passe" name="psw_repeat" required/>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Se souvenir de moi
      </label>

      <p>En créant votre compte, vous acceptez notre <a href="Politique.php" style="color:dodgerblue">Politique de confidentialité</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuler</button>
        <button type="submit" class="signupbtn">Créer un compte</button>
      </div>
    </div>
    </form>
  </form>
</div>