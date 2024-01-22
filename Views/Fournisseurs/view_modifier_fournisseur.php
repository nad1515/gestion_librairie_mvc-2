

  
     <h1 class= "mt-5 text-center"> Mettre a jours les données de la table Fournisseurs</h>
 <form action="?controller=fournisseurs&action=update_fournisseur" method="POST">
  <div class="form-group">
  <label>Code_fournisseur: <input class="form-control"  type="text" id="code" name="code" value="<?=$fournisseurs[0]->Code_fournisseur?>"></label>
  </div>
  <div class="form-group">
  <label>Raison_sociale: <input  class="form-control" type="text" id="raison" name="raison" value="<?=$fournisseurs[0]->Raison_sociale?>"></label>
  </div>
  <div class="form-group">
  <label>Rue_fournisseur: <input  class="form-control" type="text" id="rue" name="rue" value="<?=$fournisseurs[0]->Rue_fournisseur?>"></label>
  </div>
  <div class="form-group">
  <label>Code_postal: <input  class="form-control" type="text" id="codep" name="codep" value="<?=$fournisseurs[0]->Code_postal?>"></label>
  </div>
  <div class="form-group">
  <label>Localite: <input  class="form-control" type="text" id="localite" name="localite" value="<?=$fournisseurs[0]->Localite?>"></label>
  </div>
  <div class="form-group">
  <label>Pays: <input class="form-control"  type="text" id="pays" name="pays" value="<?=$fournisseurs[0]->Pays?>"></label>
  </div>
  <div class="form-group">
  <label>Tel_fournisseur: <input  class="form-control" type="text" id="tel" name="tel" value="<?=$fournisseurs[0]->Tel_fournisseur?>"></label>
  </div>
  <div class="form-group">
  <label>Url_fournisseur: <input  class="form-control" type="text" id="url" name="url" value="<?=$fournisseurs[0]->Url_fournisseur?>"></label>
  </div>
  <div class="form-group">
  <label>Email_fournisseur: <input class="form-control"  type="text" id="email" name="email" value="<?=$fournisseurs[0]->Email_fournisseur?>"></label>
  </div>
  <div class="form-group">
  <label>Fax_fournisseur: <input class="form-control"  type="text" id="fax" name="fax" value="<?=$fournisseurs[0]->Fax_fournisseur?>"></label>
  </div>
   <input type="hidden" id="hide" name="hide" value="<?=$fournisseurs[0]->Id_fournisseur?>">

  <div class="form-group">
  <button type="submit" class="btn btn-primary mb-5" >Update</button>
    </div>
 </form>

