
<form action="?controller=commandes&action=commande_date_result" method="post">
   <select class="form-select" name="choixdate">
  <option selected>Choix par date </option>
  <?php  foreach($commandes as $c ): ?>
  <option value="<?=$c->Date_achat?>"><?=$c->Date_achat?></option>
  <?php endforeach; ?>
</select>
 <button type="submit" class="btn btn-primary mt-5">Valider</button> 
  

</form>