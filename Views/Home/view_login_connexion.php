<?php
    // session_start(); on la declare juste dans le header


    $_SESSION['email']  = $identification[0]->email;
    $_SESSION['nom']  = $identification[0]->nom;
    $_SESSION['prenom']  = $identification[0]->prenom;
    $_SESSION['age']  = $identification[0]->age;
    $_SESSION['Statut']  = $identification[0]->Statut;
    $_SESSION['id']  = $identification[0]->idUtilisateur;
   


    
    ?>
<script>window.location.href="?controller=home&action=home"</script>