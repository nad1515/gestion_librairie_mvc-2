
 

<div class="w-75 mx-auto mb-3">  
     <h1 class= "mt-5 text-center"> Mettre a jours les données de la table Livres</h1>

<form action="?controller=livres&action=update_livre" method="POST">
 <div class="form-group">
    <label>ISBN:<input type="text" class="form-control" name="isbn" id="isbn" value="<?=$livre[0]->ISBN?>" required></label>
 </div>
 <div class="form-group">
   <label>Titre_livre:<input type="text" class="form-control" name="titre" id="titre" value="<?=$livre[0]->Titre_livre?>" required></label>
   </div> 
   <div class="form-group">
    <label>Theme_livre: <input type="text" class="form-control" name="theme" id="theme" value="<?=$livre[0]->Theme_livre?>" required></label>
    </div> 
    <div class="form-group">
    <label>Nbr_pages_livre: <input type="number" class="form-control" name="nbr" id="nbr" value="<?=$livre[0]->Nbr_pages_livre?>" required></label>
    </div> 
    <div class="form-group">
    <label>Format_livre:  <input type="text" class="form-control" name="format" id="format" value="<?=$livre[0]->Format_livre?>" required></label> 
    </div> 
    <div class="form-group">
     <label>Nom_auteur: <input type="text" class="form-control" name="nom" id="nom" value="<?=$livre[0]->Nom_auteur?>" required></label>  
     </div> 
    <div class="form-group">
     <label>Prenom_auteur: <input type="text" class="form-control" name="prenom" id="prenom" value="<?=$livre[0]->Prenom_auteur?>" required></label> 
     </div> 
    <div class="form-group">
    <label>Editeur: <input type="text" class="form-control" name="editeur" id="editeur" value="<?=$livre[0]->Editeur?>" required></label>
    </div>    
    <div class="form-group">
    <label>Annee_edition:<input type="number" class="form-control " name="annee" id="annee" value="<?=$livre[0]->Annee_edition?>" required></label>
    </div> 
    <div class="form-group">
    <label for="prix" class="form-label">Prix_vente: <input type="number" class="form-control" name="prix" id="prix" value="<?=$livre[0]->Prix_vente?>" required></label>
    </div> 

    <div class="form-group">
    <label for="langue" class="form-label">Langue_livre: <input type="text" class="form-control" name="langue" id="langue" value="<?=$livre[0]->Langue_livre?>" required></label> 
    </div> 
     <input type="hidden" id="hide" name="hide" value="<?=$livre[0]->Id_Livre?>">
    <div class="form-group">
    <button type="submit" class="btn btn-primary mb-5" >Update</button>
    </div>
 </form>
 
</div>
    
