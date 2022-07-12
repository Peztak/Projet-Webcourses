<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Connexion en tant que membre</button>

	<div id="id02" class="modal">
  		<span onclick="document.getElementById('id02').style.display='none'"
		class="close" title="Close Modal">&times;</span>

  	<form class="modal-content animate">
    	<div class="imgcontainer">
      		<img src="./ressources/images/img_avatar1.png" alt="Avatar" class="avatar">
    	</div>
		
    	<div class="container">
      		<label for="uname"><b>N° Membre</b></label>
      		<input type="text" placeholder="Entrez votre numéro" name="uname" required>

      		<label for="psw"><b>Mot de passe</b></label>
      		<input type="password" placeholder="Entrez votre mot de passe" name="psw" required>

      		<button type="submit"><a href="visuel_compte.php">Connexion</a></button>
      		<label>
        		<input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
      		</label>
    	</div>

    	<div class="container" style="background-color:#f1f1f1">
      		<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Supprimer</button>
      		<span class="psw">Vous avez oublié votre <a href="#">mot de passe?</a></span>
    	</div>
    </form>
</div>