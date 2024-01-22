

<div class="collapse navbar-collapse ms-3 " id="navbarSupportedContent" >
          
          <a href="?controller=livres&action=all_livres_admin" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover m-4">Livres</a>
          <a href="?controller=fournisseurs&action=all_fournisseurs_admin" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover m-4">Fournisseurs</a>
          <a href="?controller=commandes&action=all_commandes_admin" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover m-4">Commandes</a>
         
        
        </div>
         
    <div class="admin-badge"><?= $_SESSION['nom'] ?></div>

    
    <a href="?controller=home&action=deconnexion" class="btn btn-danger m-3">Deconnexion</a>
 