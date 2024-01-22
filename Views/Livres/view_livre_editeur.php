
<form action="?controller=livres&action=livre_editeur_result" method="post">
   <select class="form-select" name="choixediteur">
  <option selected>Choix par editeur </option>
  <?php foreach ($livre as $l) : ?>
  <option value="<?=$l->Editeur?>"><?=$l->Editeur?></option>
  <?php endforeach; ?>
</select>
 <button type="submit" class="btn btn-primary mt-5">Valider</button>
  <!-- <div class="col-12"> 
    <input type ="submit" value="Valider">
  </div>   -->

</form>