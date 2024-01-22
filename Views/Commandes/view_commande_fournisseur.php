
<form action="?controller=commandes&action=commande_fournisseur_result" method="post">
   <select class="form-select" name="choixfournisseur">
  <option selected>Choix par fournisseur </option>
  <?php  foreach($commandes as $c ): ?>
  <option value="<?=$c->Raison_sociale?>"><?=$c->Raison_sociale?></option>
  <?php endforeach; ?>
</select>
 <button type="submit" class="btn btn-primary mt-5">Valider</button> 
  

</form>
