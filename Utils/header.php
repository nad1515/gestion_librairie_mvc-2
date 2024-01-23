<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Content/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  
    <script src="./Content/js/script.js" defer></script>
    <title>Librairie</title>

</head>
<body>
<header>
  
<nav class="navbar navbar-expand-lg bg-body-tertiary ml-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="?controlleur=home&action=home">Accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
     </button>
    
     
      <?php
      // une fois connecter sois je suis dans l'admin ou l'utilisateur
      if(isset($_SESSION['email']))
      {  
        if($_SESSION['Statut']!='Utilisateur')
        {  
          include('header_Admin.php');
          
        }else{
          include('header_User.php');
        } 
      }
     else
     {  
     ?>
      <!-- je suis  dans la partie decconnexion,  -->
      
      <a href="?controller=home&action=User_connexion" class="btn btn-danger m-3 ">Connexion</a> 
    <?php 
  } 
  ?>
    
    
  </div>
</nav>
 
</header>
</body>
</html>
