
  

<div class="w-75 mx-auto mb-3">  
     <h1 class= "mt-5 text-center"> Ajouter une commande a la table Commander</h1>

<form action="?controller=commandes&action=valider_ajouter_commande" method="post">

    <select class="form-select" id="id_Livre" name="Id_Livre">
    <option selected>Titre livres </option>
    <?php  foreach($Titre_livre as $l ): ?>
    <option value="<?=$l->Id_Livre?>"><?=$l->Titre_livre?></option>
    <?php endforeach; ?>
    </select>
    <select class="form-select "  id="Id_fournisseur" name="Id_fournisseur">
    <option selected>Fournisseurs </option>
    <?php  foreach($Raison_sociale as $f ): ?>
    <option value= "<?=$f->Id_fournisseur?>"><?=$f->Raison_sociale?></option>
    <?php endforeach; ?>
    </select>
    <div class="form-group">
    <label>Nbr_exemplaires:<input type="number" class="form-control" name="nbr" id="nbr" value="" required></label>
    </div>
    <div class="form-group">
     <label>Prix_achat: <input type="text" class="form-control" name="prix" id="nom" value="" required></label>  
     </div> 
     <!-- <input type="hidden" id="hide" name="hide" value=""> -->
    <div class="form-group"> 
    <button type="submit" class="btn btn-primary mb-5" >Valider</button>
    </div>
  </form>
</div>

