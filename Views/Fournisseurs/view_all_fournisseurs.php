<div class="container">
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
<table class="table table-bordered" id='table'>
    <thead>
        <th class="table-danger">Code_fournisseur</th>
        <th class="table-danger">Raison_sociale</th>
        <th class="table-danger">Rue_fournisseur</th>


       
    </thead>
    <?php  foreach($fournisseurs as $f ): ?>
    <tr>
        <td><?=$f->Code_fournisseur?></td>
        <td><?=$f->Raison_sociale?></td>
        <td><?=$f->Rue_fournisseur?></td>
       
    </tr>
    <?php endforeach; ?>
</table>
</div>            
              