<div class="container">
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
<table class="table table-bordered" id='table'>
    <thead>
        <th class="table-danger">id_commande</th>
        <th class="table-danger">Nbr_exemplaires</th>
        <th class="table-danger">Titre_livre</th>
        <th class="table-danger">fournisseur</th>   
        <th class="table-danger">Date_achat</th>
        <th class="table-danger">Prix_achat</th>
        <th class="table-danger">Nom</th>
        <th class="table-danger">Action</th>
         
    </thead>
    <?php  foreach($commandes as $c ): ?>
    <tr>
        <td><?=$c->id_commande?></td>
        <td><?=$c->Nbr_exemplaires?></td>
        <th><?=$c->Titre_livre?></th>
        <th><?=$c->Raison_sociale?></th>
        <td><?=$c->Date_achat?></td>
        <td><?=$c->Prix_achat?></td>
        <td><?=$c->nom?></td>
        

        <td>
            <div class="d-flex flex-row">
            
                <a href="?controller=commandes&action=modifier_commande&id=<?=$c->id_commande?>">
                    <button type="update" class="btn btn-warning btn-sm me-3"><i class="bi bi-pencil-fill"></i></button></a>
                <a href="?controller=commandes&action=delete_commande&id=<?=$c->id_commande?>">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmation()"><i class="bi bi-trash-fill"></i></button></a>
            </div>
        </td>
       
    </tr>
    <?php endforeach; ?>
</table>
<a href="?controller=commandes&action=ajouter_commande">
                    <button type="ajouter" class="btn btn-primary mb-5" >Ajouter</button></a>
</div>            
              