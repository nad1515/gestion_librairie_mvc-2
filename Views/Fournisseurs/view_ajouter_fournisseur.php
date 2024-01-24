
  

<div class="w-75 mx-auto mb-3">  
     <h1 class= "mt-5 text-center"> Ajouter un fournisseur a la table fournisseurs</h1>


     
 

<div class="w-75 mx-auto mb-3">  
     <h1 class= "mt-5 text-center"> ajouiter un fournisseur de la table fournisseurs</h1>

<form action="?controller=fournisseurs&action=valider_ajouter_fournisseur" method="POST">
 <div class="form-group">
    <label>Code fournisseur:<input type="text" class="form-control" name="code" id="code" value="" required></label>
 </div>
 <div class="form-group">
   <label>Raison sociale:<input type="text" class="form-control" name="raison" id="raison" value="" required></label>
   </div> 
   <div class="form-group">
    <label>Rue_fournisseur: <input type="text" class="form-control" name="rue" id="rue" value="" required></label>
    </div> 
    <div class="form-group">
    <label>Code postal: <input type="text" class="form-control" name="cp" id="cp" value="" required></label>
    </div> 
    <div class="form-group">
    <label>Localite:  <input type="text" class="form-control" name="localite" id="localite" value="" required></label> 
    </div> 
    <div class="form-group">
     <label>Pays: <input type="text" class="form-control" name="pays" id="pays" value="" required></label>  
     </div> 
    <div class="form-group">
     <label>Tel fournisseur <input type="text" class="form-control" name="tel" id="tel" value="" required></label> 
     </div> 
    <div class="form-group">
    <label>Url fournisseur: <input type="text" class="form-control" name="url" id="url" value="" required></label>
    </div>    
    <div class="form-group">
    <label>Email fournisseur:<input type="text" class="form-control " name="email" id="email" value="" required></label>
    </div> 
    <div class="form-group">
    <label>Fax fournisseur: <input type="text" class="form-control" name="fax" id="fax" value="" required></label>
    </div> 

    <div class="form-group">
    <button type="submit" class="btn btn-primary mb-5" >Ajouter</button>
    </div>
 </form>
 
</div>
    

</div>

