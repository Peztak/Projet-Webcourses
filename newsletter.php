<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Abonnez-vous à la Newsletter</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content">
    <div class="container">
      <h1>S'abonner à la Newsletter Webcourses</h1>
      <p>Entrez les informations correspondantes afin de vous abonner</p>
      <hr>
      <label for="nom"><b>Nom</b></label>
      <input type="text" placeholder="Entrez votre nom" name="nom" required>

      <label for="mail"><b>Mail</b></label>
      <input type="mail" placeholder="Entrez votre mail" name="mail" required>

      <label>
        <input type="checkbox" checked="checked" name="daily"> Recevoir des mails tous les jours
      </label>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuler</button>
        <button type="submit" class="signupbtn">S'abonner</button>
      </div>
    </div>
  </form>
</div>