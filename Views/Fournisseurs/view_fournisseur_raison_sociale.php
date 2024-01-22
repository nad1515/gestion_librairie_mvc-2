
<form action="?controller=fournisseurs&action=fournisseur_raison_sociale_result" method="post">
   <select class="form-select" name="choixraisonsociale">
  <option selected>Choix par Raison_sociale </option>
  <?php foreach ($fournisseurs as $f) : ?>
  <option value="<?=$f->Raison_sociale?>"><?=$f->Raison_sociale?></option>
  <?php endforeach; ?>
</select>
 <button type="submit" class="btn btn-primary mt-5">Valider</button> 
  

</form>