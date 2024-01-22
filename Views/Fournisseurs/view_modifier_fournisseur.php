

<form action="?controller=fournisseurs&action=update_fournisseur" method="POST">
<label>Code_fournisseur: <input type="text" id="code" name="code" value="<?=$fournisseurs[0]->Code_fournisseur?>"></label>
<label>Raison_sociale: <input type="text" id="raison" name="raison" value="<?=$fournisseurs[0]->Raison_sociale?>"></label>
<label>Rue_fournisseur: <input type="text" id="rue" name="rue" value="<?=$fournisseurs[0]->Rue_fournisseur?>"></label>
<label>Code_postal: <input type="text" id="codep" name="codep" value="<?=$fournisseurs[0]->Code_postal?>"></label>
<label>Localite: <input type="text" id="localite" name="localite" value="<?=$fournisseurs[0]->Localite?>"></label>
<label>Pays: <input type="text" id="pays" name="pays" value="<?=$fournisseurs[0]->Pays?>"></label>
<label>Tel_fournisseur: <input type="text" id="tel" name="tel" value="<?=$fournisseurs[0]->Tel_fournisseur?>"></label>
<label>Url_fournisseur: <input type="text" id="url" name="url" value="<?=$fournisseurs[0]->Url_fournisseur?>"></label>
<label>Email_fournisseur: <input type="text" id="email" name="email" value="<?=$fournisseurs[0]->Email_fournisseur?>"></label>
<label>Fax_fournisseur: <input type="text" id="fax" name="fax" value="<?=$fournisseurs[0]->Fax_fournisseur?>"></label>
<input type="hidden" id="hide" name="hide" value="<?=$fournisseurs[0]->Id_fournisseur?>">  
  <input type="submit" value="Update">
</form>