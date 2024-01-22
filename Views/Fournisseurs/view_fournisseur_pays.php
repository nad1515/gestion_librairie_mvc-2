
<form action="?controller=fournisseurs&action=fournisseur_pays_result" method="post">
   <select class="form-select" name="choixpays">
  <option selected>Choix par pays </option>
  <?php foreach ($fournisseurs as $f) : ?>
  <option value="<?=$f->Pays?>"><?=$f->Pays?></option>
  <?php endforeach; ?>
</select>
 <button type="submit" class="btn btn-primary mt-5">Valider</button> 
  

</form>