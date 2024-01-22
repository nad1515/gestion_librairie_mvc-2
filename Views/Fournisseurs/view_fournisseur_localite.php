
<form action="?controller=fournisseurs&action=fournisseur_localite_result" method="post">
   <select class="form-select" name="choixlocalite">
  <option selected>Choix par Localite </option>
  <?php foreach ($fournisseurs as $f) : ?>
  <option value="<?=$f->Localite?>"><?=$f->Localite?></option>
  <?php endforeach; ?>
</select>
 <button type="submit" class="btn btn-primary mt-5">Valider</button> 
  

</form>