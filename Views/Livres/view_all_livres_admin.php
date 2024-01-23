
<h1 class="text-center">Modifier la table livre</h1>

<div class="container">
<a href="?controller=livres&action=ajouter_livre">
                    <button type="ajouter" class="btn btn-primary mb-5" >Ajouter un livre</button></a>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
<table class="table table-bordered" id='table'>
    <thead>
        <th class="table-danger">ISBN</th>
        <th class="table-danger">Titre</th>
        <th class="table-danger">Theme</th>
        <th class="table-danger">Nombre de pages</th>
        <th class="table-danger">Format</th>
        <th class="table-danger">Nom de l'auteur</th>
        <th class="table-danger">Prénom</th>
        <th class="table-danger">Éditeur</th>
        <th class="table-danger">Année d'édition</th>
        <th class="table-danger">Prix</th>
        <th class='table-danger'>Langue</th>
         <th class='table-danger'>Action</th>

    </thead>
    <?php  foreach($livre as $l ): ?>
    <tr>
        <td><?=$l->ISBN?></td>
        <td><?=$l->Titre_livre?></td>
        <td><?=$l->Theme_livre?></td>
        <td><?=$l->Nbr_pages_livre?></td>
        <td><?=$l->Format_livre?></td>
        <td><?=$l->Nom_auteur?></td>
        <td><?=$l->Prenom_auteur?></td>
        <td><?=$l->Editeur?></td>
        <td><?=$l->Annee_edition?></td>
        <td><?=$l->Prix_vente?></td>
        <td><?=$l->Langue_livre?></td>
        
   
       <td>
            <div class="d-flex flex-row">
            
                <a href="?controller=livres&action=modifier_livre&id=<?=$l->Id_Livre?>">
                    <button type="update" class="btn btn-warning btn-sm me-3"><i class="bi bi-pencil-fill"></i></button></a>
                <a href="?controller=livres&action=delete_livre&id=<?=$l->Id_Livre?>">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmation()"><i class="bi bi-trash-fill"></i></button></a>
            </div>
        </td>
       
    </tr>
    <?php endforeach; ?>
</table>

</div>            
              