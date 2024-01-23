

 
<div class="w-75 mx-auto mb-3">  
     <h1 class= "mt-5 text-center"> Mettre a jours les données de la table Fournisseur</h1>

<form action="?controller=fournisseurs&action=update_fournisseur" method="POST">
 <div class="form-group">
    <label>Code_fournisseur:<input type="text" class="form-control" name="isbn" id="isbn" value="<?=$fournisseurs[0]->Code_fournisseur?>" required></label>
 </div>
 <div class="form-group">
   <label>Raison_sociale:<input type="text" class="form-control" name="titre" id="titre" value="<?=$fournisseurs[0]->Raison_sociale?>" required></label>
   </div> 
   <div class="form-group">
    <label>Rue_fournisseur: <input type="text" class="form-control" name="theme" id="theme" value="<?=$fournisseurs[0]->Rue_fournisseur?>" required></label>
    </div> 
    <div class="form-group">
    <label>Code_postal:<input type="text" class="form-control" name="format" id="format" value="<?=$fournisseurs[0]->Code_postal?>" required></label> 
    </div> 
    <div class="form-group">
     <label>Localite:<input type="text" class="form-control" name="nom" id="nom" value="<?=$fournisseurs[0]->Localite?>" required></label>  
     </div> 
     <div class="form-group">
    <label>Pays:<input type="text" class="form-control" name="isbn" id="isbn" value="<?=$fournisseurs[0]->Pays?>" required></label>
 </div>
 <div class="form-group">
   <label>Tel_fournisseur:<input type="text" class="form-control" name="titre" id="titre" value="<?=$fournisseurs[0]->Tel_fournisseur?>" required></label>
   </div> 
   <div class="form-group">
    <label>Url_fournisseur: <input type="text" class="form-control" name="theme" id="theme" value="<?=$fournisseurs[0]->Url_fournisseur?>" required></label>
    </div> 
    <div class="form-group">
    <label>Email_fournisseur:<input type="text" class="form-control" name="format" id="format" value="<?=$fournisseurs[0]->Email_fournisseur?>" required></label> 
    </div> 
    <div class="form-group">
     <label>ax_fournisseur:<input type="text" class="form-control" name="nom" id="nom" value="<?=$fournisseurs[0]->ax_fournisseur?>" required></label>  
     </div> 
     <input type="hidden" id="hide" name="hide" value="<?=$fournisseurs[0]->Id_fournisseur?>">
    <div class="form-group mt-2">
    <button type="submit" class="btn btn-primary mb-5" >Update</button>
    </div>
  </form>
</div>

    