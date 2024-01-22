 

<?php  
//error_reporting(E_ALL);
//ini_set('display_errors', 1);?>
     <h1 class= "mt-5 text-center"> Mettre a jours les données de la table Livres</h1>
<div>
<form action="?controller=livres&action=update_livre" method="POST">
  <div class="col-md-4 ms-5">
    <label for="isbn" class="form-label">ISBN</label>
    <input type="text" class="form-control" name="isbn" id="isbn" value="<?=$livre[0]->ISBN?>" required>
  </div>
  <div class="col-md-4 ms-5">
    <label for="titre" class="form-label">Titre_livre</label>
    <input type="text" class="form-control" name="titre" id="titre" value="<?=$livre[0]->Titre_livre?>" required> 
  </div>
  <div class="col-md-4 ms-5">
    <label for="theme" class="form-label">Theme_livre</label>
    <input type="text" class="form-control" name="theme" id="theme" value="<?=$livre[0]->Theme_livre?>" required>
  </div>
  <div class="col-md-4 ms-5">
    <label for="nbr" class="form-label">Nbr_pages_livre</label>
    <input type="number" class="form-control" name="nbr" id="nbr" value="<?=$livre[0]->Nbr_pages_livre?>" required> 
  </div>
    <div class="col-md-4 ms-5">
    <label for="forma" class="form-label">Format_livre</label>
    <input type="text" class="form-control" name="forma" id="forma" value="<?=$livre[0]->Format_livre?>" required>
  </div> 
   <div class="col-md-4 ms-5">
    <label for="nom" class="form-label">Nom_auteur</label>
    <input type="text" class="form-control" name="nom" id="nom" value="<?=$livre[0]->Nom_auteur?>" required> 
  </div>
  <div class="col-md-4 ms-5">
    <label for="prenom" class="form-label">Prenom_auteur</label>
    <input type="text" class="form-control" name="prenom" id="prenom" value="<?=$livre[0]->Prenom_auteur?>" required>
  </div>
  <div class="col-md-4 ms-5">
    <label for="editeur" class="form-label">Editeur</label>
    <input type="text" class="form-control" name="editeur" id="editeur" value="<?=$livre[0]->Editeur?>" required> 
  </div>
  <div class="col-md-4 ms-5">
    <label for="annee" class="form-label">Annee_edition</label>
    <input type="number" class="form-control " name="annee" id="annee" value="<?=$livre[0]->Annee_edition?>" required>
  </div>
  <div class="col-md-4 ms-5">
    <label for="prix" class="form-label">Prix_vente</label>
    <input type="number" class="form-control" name="prix" id="prix" value="<?=$livre[0]->Prix_vente?>" required> 
  </div>
  <div class="col-md-4 ms-5">
    <label for="langue" class="form-label">Langue_livre</label>
    <input type="text" class="form-control" name="langue" id="langue" value="<?=$livre[0]->Langue_livre?>" required> 
  </div>  
   
 <!-- <input type="submit" value="Update">
  -->
  
</form>
<a href="?controller=livres&action=update_livre" class="btn btn-primary mt-5">Valider</a>  
</div>