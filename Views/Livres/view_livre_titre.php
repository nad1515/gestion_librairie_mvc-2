

<form  action="?controller=livres&action=livre_titre_result" method="post">
   <select  name="choixtitre">
  <option selected>Choix par titre </option>
  <?php foreach ($livre as $l) : ?>
  <option value="<?=$l->Titre_livre?>"><?=$l->Titre_livre?></option>
  <?php endforeach; ?>
</select>
 <button type="submit" class="btn btn-primary mt-5">Valider</button>
  

class="form-select "</form>