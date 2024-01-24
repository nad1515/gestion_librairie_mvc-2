
 

<div class="w-75 mx-auto mb-3">  
     <h1 class= "mt-5 text-center"> Mettre a jours les données de la table Livres</h1>

<form action="?controller=livres&action=valider_ajouter_livre" method="POST">
 <div class="form-group">
    <label>ISBN:<input type="text" class="form-control" name="isbn" id="isbn" value="" required></label>
 </div>
 <div class="form-group">
   <label>Titre_livre:<input type="text" class="form-control" name="titre" id="titre" value="" required></label>
   </div> 
   <div class="form-group">
    <label>Theme_livre: <input type="text" class="form-control" name="theme" id="theme" value="" required></label>
    </div> 
    <div class="form-group">
    <label>Nbr_pages_livre: <input type="number" class="form-control" name="nbr" id="nbr" value="" required></label>
    </div> 
    <div class="form-group">
    <label>Format_livre:  <input type="text" class="form-control" name="format" id="format" value="" required></label> 
    </div> 
    <div class="form-group">
     <label>Nom_auteur: <input type="text" class="form-control" name="nom" id="nom" value="" required></label>  
     </div> 
    <div class="form-group">
     <label>Prenom_auteur: <input type="text" class="form-control" name="prenom" id="prenom" value="" required></label> 
     </div> 
    <div class="form-group">
    <label>Editeur: <input type="text" class="form-control" name="editeur" id="editeur" value="" required></label>
    </div>    
    <div class="form-group">
    <label>Annee_edition:<input type="text" class="form-control " name="annee" id="annee" value="" required></label>
    </div> 
    <div class="form-group">
    <label>Prix_vente: <input type="text" class="form-control" name="prix" id="prix" value="" required></label>
    </div> 

    <div class="form-group">
    <label for="langue" class="form-label">Langue_livre: <input type="text" class="form-control" name="langue" id="langue" value="" required></label> 
    </div> 
    <div class="form-group">
    <button type="submit" class="btn btn-primary mb-5" >Update</button>
    </div>
 </form>
 
</div>
    
