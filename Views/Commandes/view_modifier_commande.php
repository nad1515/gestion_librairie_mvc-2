<div class="w-75 mx-auto mb-3">  
     <h1 class= "mt-5 text-center"> Mettre a jours les données de la table Commander</h1>

<form action="?controller=livres&action=update_livre" method="POST">
 <div class="form-group">
    <label>Nbr_exemplaires:<input type="text" class="form-control" name="isbn" id="isbn" value="<?=$commandes[0]->Nbr_exemplaires?>" required></label>
 </div>
 <div class="form-group">
   <label>Titre_livre:<input type="text" class="form-control" name="titre" id="titre" value="<?=$commandes[0]->Titre_livre?>" required></label>
   </div> 
   <div class="form-group">
    <label>Raison_sociale: <input type="text" class="form-control" name="theme" id="theme" value="<?=$commandes[0]->Raison_sociale?>" required></label>
    </div> 
    <div class="form-group">
    <label>Date_achat:  <input type="text" class="form-control" name="format" id="format" value="<?=$commandes[0]->Date_achat?>" required></label> 
    </div> 
    <div class="form-group">
     <label>Prix_achat: <input type="text" class="form-control" name="nom" id="nom" value="<?=$commandes[0]->Prix_achat?>" required></label>  
     </div> 
     <input type="hidden" id="hide" name="hide" value="<?=$commandes[0]->id_commande?>">
    <div class="form-group">
    <button type="submit" class="btn btn-primary mb-5" >Update</button>
    </div>
  </form>
</div>

