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
        <th class="table-danger">Url_fournisseur</th>


       
    </thead>
    <?php  foreach($fournisseurs as $f ): ?>
    <tr>
        <td><?=$f->Code_fournisseur?></td>
        <td><?=$f->Raison_sociale?></td>
        <td><?=$f->Rue_fournisseur?></td>
        <th><?=$f->Code_postal?></th>
        <th><?=$f->Localite?></th>
        <th><?=$f->Pays?></th>
        <th><?=$f->Url_fournisseur?></th>

    </tr>
    <?php endforeach; ?>
</table>
</div>            
              