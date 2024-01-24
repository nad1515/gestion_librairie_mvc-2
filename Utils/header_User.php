<div class="collapse navbar-collapse " id="navbarSupportedContent">
          <a class="nav-link dropdown-toggle  " href="?controller=livres&action=all_livres" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Livres
          </a>
          <ul class="dropdown-menu">
          <li><a href="?controller=livres&action=all_livres">Tous les livres</a></li>
            <li><a class="dropdown-item" href="?controller=livres&action=livre_auteur">par_auteur</a></li>
            <li><a class="dropdown-item" href="?controller=livres&action=livre_editeur">par_editeur</a></li>
            <li><a class="dropdown-item" href="?controller=livres&action=livre_titre">par_titre</a></li>
          </ul>
          <a class="nav-link dropdown-toggle" href="?controller=livres&action=all_fournisseurs" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Fournisseurs
          </a>
          <ul class="dropdown-menu">
          <li><a  href="?controller=fournisseurs&action=all_fournisseurs">Tous les Fournisseurs</a></li>
            <li><a class="dropdown-item" href="?controller=fournisseurs&action=fournisseur_raison_sociale">par_raison_sociale</a></li>
            <li><a class="dropdown-item" href="?controller=fournisseurs&action=fournisseur_localite">par_localité</a></li>
            <li><a class="dropdown-item" href="?controller=fournisseurs&action=fournisseur_pays">par_pays</a></li>
          </ul>
          <a class="nav-link dropdown-toggle" href="?controller=livres&action=all_commandes" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Commandes
          </a>
          <ul class="dropdown-menu">
          <li><a  href="?controller=commandes&action=all_commandes">Toutes les commandes</a></li>
            <li><a class="dropdown-item" href="?controller=commandes&action=commande_date">par_date</a></li>
            <li><a class="dropdown-item" href="?controller=commandes&action=commande_fournisseur">par_fournisseur</a></li>
            <li><a class="dropdown-item" href="?controller=commandes&action=commande_editeur">par_editeur</a></li>
          </ul>  
    </div>
          
   <div class="user-badge"><?= $_SESSION['nom']?></div>
        
    
    <a href="?controller=home&action=deconnexion" class="btn btn-danger m-2 p-2">Deconnexion</a>
   
    