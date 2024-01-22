
<form action="?controller=commandes&action=commande_editeur_result" method="post">
   <select class="form-select" name="choixediteur">
  <option selected>Choix par Editeur </option>
  <?php  foreach($commandes as $c ): ?>
  <option value="<?=$c->Editeur?>"><?=$c->Editeur?></option>
  <?php endforeach; ?>
</select>
 <button type="submit" class="btn btn-primary mt-5">Valider</button> 
  

</form>