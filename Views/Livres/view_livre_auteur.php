

<form action="?controller=livres&action=livre_auteur_result" method="post">
   <select class="form-select" name="choixNom">
  <option selected>Choix par auteur </option>
  <?php foreach ($livre as $l) : ?>
  <option value="<?=$l->Nom_auteur?>"><?=$l->Nom_auteur?></option>
  <?php endforeach; ?>
</select>
<button type="submit" class="btn btn-primary mt-5">Valider</button>
<!-- <div class="col-12">
    <input type ="submit" value="Valider">
  </div> -->

</form>

   
              
              
 
 