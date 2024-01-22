<div class="container">
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
<table class="table table-bordered" id='table'>
    <thead>
        <th class="table-danger">Code_fournisseur</th>
        <th class="table-danger">Raison_sociale</th>
        <th class="table-danger">Rue_fournisseur</th>
        <th class="table-danger">Code_postal</th>
        <th class="table-danger">Localite</th>
        <th class="table-danger">Pays</th>
        <th class="table-danger">Tel_fournisseur</th>
        <th class="table-danger">Url_fournisseur</th>
        <th class="table-danger">Email_fournisseur</th>
        <th class="table-danger">Action</th>

       
    </thead>
    <?php  foreach($fournisseurs as $f ): ?>
    <tr>
        <td><?=$f->Code_fournisseur?></td>
        <td><?=$f->Raison_sociale?></td>
        <td><?=$f->Rue_fournisseur?></td>
        <th><?=$f->Code_postal?></th>
        <th><?=$f->Localite?></th>
        <th><?=$f->Pays?></th>
        <th><?=$f->Tel_fournisseur?></th>
        <th><?=$f->Url_fournisseur?></th>
        <th><?=$f->Email_fournisseur?></th>


        <td>
            <div class="d-flex flex-row">
            
                <a href="?controller=fournisseurs&action=modifier_fournisseur&id=<?=$f->Id_fournisseur?>">
                    <button type="update" class="btn btn-warning btn-sm me-3"><i class="bi bi-pencil-fill"></i></button></a>
                <a href="?controller=fournisseurs&action=suprimer_fournisseur&id=<?=$f->Id_fournisseur?>">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmation()"><i class="bi bi-trash-fill"></i></button></a>
            </div>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</div>            
              