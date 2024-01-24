<?php

class Model
{
    private $bd;

    private static $instance=null;

    private function __construct()
    {
        try {
            $this->bd = new PDO('mysql:host=localhost;dbname=gestion_librairie', 'root', '');
            $this->bd->query("SET NAMES 'utf8'");
            $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch (PDOException $e) 
        {
            die('<p>Echec connexion. Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
    }

    public static function get_model()
    {

        if(is_null(self::$instance))
        {
            self::$instance=new Model();
        }
        return self::$instance;
    }

// ----------------------------------PARTIE HOME--------------------------------------------//

    

// ----------------------------------PARTIE LIVRE--------------------------------------------//
    public function get_all_livres()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM livres');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
      // ............Partie livre par auteur................
      public function get_livre_auteur()
      {
          try {
              $requete = $this->bd->prepare('SELECT Nom_auteur FROM livres');
              $requete->execute();
              
          } catch (PDOException $e) {
              die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
          }
          return $requete->fetchAll(PDO::FETCH_OBJ);
      }
    //   .................Partie livre resultat auteur...........
      public function get_livre_auteur_result()
      {
        // ....choixNom c'est le meme qui ecrit dans mon formulaire(view nom auteur : select)
        $choixNom = $_POST["choixNom"];
          try {
              $requete = $this->bd->prepare('SELECT * FROM livres WHERE Nom_auteur = :A');
              $requete->execute(array(':A'=>$choixNom));
              
          } catch (PDOException $e) {
              die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
          }
          return $requete->fetchAll(PDO::FETCH_OBJ);
      }
    //  ...........;par livre editeur.................
    public function get_livre_editeur()
      {
          try {
              $requete = $this->bd->prepare('SELECT Editeur FROM livres');
              $requete->execute();
              
          } catch (PDOException $e) {
              die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
          }
          return $requete->fetchAll(PDO::FETCH_OBJ);
      }
      public function get_livre_editeur_result()
      {
        // ....choixEom c'est le meme qui ecrit dans mon formulaire(view nom editeur : select)
        $choixEditeur = $_POST["choixediteur"];
          try {
              $requete = $this->bd->prepare('SELECT * FROM livres WHERE Editeur = :E');
              $requete->execute(array(':E'=>$choixEditeur));
              
          } catch (PDOException $e) {
              die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
          }
          return $requete->fetchAll(PDO::FETCH_OBJ);
      }
//   ..................choix par titre.................
    public function get_livre_titre()
{   echo "je suis dans le modele";
    try {
        $requete = $this->bd->prepare('SELECT Titre_livre FROM livres');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}
// ............afiche resulta titre............
public function get_livre_titre_result()
{ echo " jesuis dans modele resulta titre";
  $choixtitre = $_POST["choixtitre"];
    try {
        $requete = $this->bd->prepare('SELECT * FROM livres WHERE Titre_livre =:t');
        $requete->execute(array(':t'=>$choixtitre));
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}
// ...............all_livres_admin..........reserver pour ADMIN.............
public function get_all_livres_admin()
{
    try {
        $requete = $this->bd->prepare('SELECT * FROM livres');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

// ................modifier livre...............

public function get_modifier_livre()
{ 
    $id = $_GET['id'];
    try { 
        $requete = $this->bd->prepare('SELECT * FROM livres WHERE Id_Livre = :d');
        $requete->execute(array(':d'=>$id));
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}
// ............la mise a jours livres............................

public function get_update_livre()
{ 
     try { 
        
        $requete = $this->bd->prepare("UPDATE livres SET ISBN = :i, Titre_livre = :t, Theme_livre = :th, Nbr_pages_livre = :nb, Format_livre = :f, Nom_auteur = :n, Prenom_auteur = :p, Editeur = :e, Annee_edition = :a, Prix_vente = :px, Langue_livre = :l WHERE Id_Livre = :id" );
        $requete->execute(array(':i'=> $_POST["isbn"], ':t'=> $_POST["titre"] ,':th'=> $_POST["theme"], ':nb' => $_POST["nbr"], 
        ':f'=> $_POST["format"], ':n'=> $_POST["nom"], ':p'=> $_POST["prenom"], ':e'=> $_POST["editeur"],  ':a'=> $_POST["annee"], ':px'=> $_POST["prix"],':l'=> $_POST["langue"], ':id'=> $_POST["hide"]));
    
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}
// ......................ajouter un livre.............................
public function get_valider_ajouter_livre()

{   
    
    try {
     $requete = $this->bd->prepare('INSERT INTO livres (Id_Livre, ISBN,Titre_livre,Theme_livre,Nbr_pages_livre,Format_livre,Nom_auteur,Prenom_auteur,Editeur,Annee_edition,Prix_vente,Langue_livre) VALUES(NULL,:i,:t,:th,:n,:f,:na,pa,e,a,p,l )');
       
        $requete->execute(array(':i'=>$_POST['isbn'] ,':i'=>$_POST['titre'],:'i'=>$_POST['isbn'] ,':i'=>$_POST['isbn'] ,':i'=>$_POST['isbn'] ,':i'=>$_POST['isbn'] ,':i'=>$_POST['isbn'] ,':i'=>$_POST['isbn'] ,':i'=>$_POST['isbn'] ,':i'=>$_POST['isbn'] ,
        ':idu'=> $_SESSION['id']));
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

    // ..................Partie Fournisseur.........................
    public function get_all_Fournisseurs()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM Fournisseurs');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    // ..............................fournisseur raison sociale..................

    public function get_fournisseur_raison_sociale()
    {
        try {
            $requete = $this->bd->prepare('SELECT Raison_sociale FROM Fournisseurs');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
// ...................fournisseur raison sociale resultat............
    public function get_fournisseur_raison_sociale_result()
    { echo " jesuis dans modele resulta raison sociale";
      $choixR = $_POST["choixraisonsociale"];
        try {
        $requete = $this->bd->prepare('SELECT * FROM Fournisseurs WHERE Raison_sociale =:r');
        $requete->execute(array(':r'=>$choixR));
        
        } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    // ........................fournisseur par localite.......
   public function get_fournisseur_localite()
     {
        try {
            $requete = $this->bd->prepare('SELECT Localite FROM Fournisseurs');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
// ...................fournisseur localite............
    public function get_fournisseur_localite_result()
    { echo "je suis dans model fournisseur localite";
      $choixl = $_POST["choixlocalite"];
        try {
        $requete = $this->bd->prepare('SELECT * FROM Fournisseurs WHERE localite =:l');
        $requete->execute(array(':l'=>$choixl));
        
        } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
//  ..............fournisseur pays........................
public function get_fournisseur_pays()
     {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Pays FROM Fournisseurs');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
// ...................fournisseur pays............
    public function get_fournisseur_pays_result()
    { echo "je suis dans model fournisseur pays";
      $choixp = $_POST["choixpays"];
        try {
        $requete = $this->bd->prepare('SELECT * FROM Fournisseurs WHERE Pays =:p');
        $requete->execute(array(':p'=>$choixp));
        
        } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
// ..................fournisseurs Admin......................
public function get_all_Fournisseurs_admin()
{
    try {
        $requete = $this->bd->prepare('SELECT * FROM Fournisseurs');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}
// ..................modifier fournisseur........
public function get_modifier_fournisseur()
{ 
    $id = $_GET['id'];
    try { 
        $requete = $this->bd->prepare('SELECT * FROM Fournisseurs WHERE Id_fournisseur = :d');
        $requete->execute(array(':d'=>$id));
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}
// ...............update fournisseur................
public function get_update_fournisseur()
{ echo "bonjour ca marche j'arrive a faire update";
     try { 
        
        $requete = $this->bd->prepare("UPDATE Fournisseurs SET Code_fournisseur=:c, Raison_sociale=:r, Rue_fournisseur=:ru, Code_postal=:cp, Localite=:l, Pays=:p, Tel_fournisseur=:t, Url_fournisseur=:u, Email_fournisseur=:e, Fax_fournisseur=:f WHERE Id_fournisseur = :id" );
        $requete->execute(array(':c'=> $_POST["code"], ':r'=> $_POST["raison"] ,':ru'=> $_POST["rue"], ':cp' => $_POST["codep"], 
        ':l'=> $_POST["localite"], ':p'=> $_POST["pays"], ':t'=> $_POST["tel"], ':u'=> $_POST["url"],  ':e'=> $_POST["email"], ':f'=> $_POST["fax"], ':id'=> $_POST["hide"]));
    
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

// ........................Commandes....................

    public function get_all_commandes()
    {
        try {
         $requete = $this->bd->prepare('SELECT L.Titre_livre, F.Raison_sociale,C.id_commande, C.Date_achat, C.Prix_achat, C.Nbr_exemplaires FROM commander C JOIN livres L ON C.Id_Livre = L.Id_Livre JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur');
           
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    // ............;;commande par date...................
    public function get_commande_date()
    { echo "je suis dans model commande par date achat";
        try {
         $requete = $this->bd->prepare('SELECT DISTINCT Date_achat FROM commander C JOIN livres L ON C.Id_Livre = L.Id_Livre JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur');
           
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    // ................commande date resultat...............
    public function get_commande_date_result()
    { echo "je suis dans model";
      $choixd = $_POST["choixdate"];
        try {
        $requete = $this->bd->prepare('SELECT * FROM commander C JOIN livres L ON C.Id_Livre = L.Id_Livre JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur WHERE Date_achat =:d');
        $requete->execute(array(':d'=>$choixd));
        
        } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
     // ............;;commande par fournisseur...................
     public function get_commande_fournisseur()
     { echo "je suis dans model commande par fournisseur";
         try {
          $requete = $this->bd->prepare('SELECT DISTINCT F.Raison_sociale FROM commander C JOIN livres L ON C.Id_Livre = L.Id_Livre JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur');
            
             $requete->execute();
             
         } catch (PDOException $e) {
             die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
         }
         return $requete->fetchAll(PDO::FETCH_OBJ);
     }
     // ................commande fournisseur resultat...............
     public function get_commande_fournisseur_result()
     { echo "";
       $choixf = $_POST["choixfournisseur"];
         try {
         $requete = $this->bd->prepare('SELECT * FROM commander C JOIN livres L ON C.Id_Livre = L.Id_Livre JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur WHERE Raison_sociale =:f');
         $requete->execute(array(':f'=>$choixf));
         
         } catch (PDOException $e) {
         die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
         }
         return $requete->fetchAll(PDO::FETCH_OBJ);
     }
//   ........................commande par editeur..................
 
 public function get_commande_editeur()
 { echo "je suis dans model commande par editeur";
     try {
      $requete = $this->bd->prepare('SELECT DISTINCT Editeur FROM commander C JOIN livres L ON C.Id_Livre = L.Id_Livre JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur');
        
         $requete->execute();
         
     } catch (PDOException $e) {
         die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
     }
     return $requete->fetchAll(PDO::FETCH_OBJ);
 }
 // ................commande date resultat...............
 public function get_commande_editeur_result()
 { 
   $choixe = $_POST["choixediteur"];
     try {
     $requete = $this->bd->prepare('SELECT * FROM commander C JOIN livres L ON C.Id_Livre = L.Id_Livre JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur WHERE Editeur =:e');
     $requete->execute(array(':e'=>$choixe));
     
     } catch (PDOException $e) {
     die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
     }
     return $requete->fetchAll(PDO::FETCH_OBJ);
 }
//  ...............connexion..............
public function get_login_connexion()
{ 
    
     try {
        $Mdp = $_POST['mdp'];
        $email = $_POST['email'];
     $requete = $this->bd->prepare('SELECT * FROM utilisateur WHERE MdP= :mdp AND email= :nom');
       
        $requete->execute(array(':mdp'=>$Mdp, ':nom'=>$email));
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}
// ....................commandes admin..............
public function get_all_commandes_admin()
{
    try {
     $requete = $this->bd->prepare('SELECT L.Titre_livre, F.Raison_sociale,C.id_commande, C.Date_achat, C.Prix_achat, C.Nbr_exemplaires, U.nom 
     FROM commander C 
     JOIN livres L ON C.Id_Livre = L.Id_Livre 
     JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur
     JOIN utilisateur U ON C.idUtilisateur = U.idUtilisateur');
       
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}
public function get_modifier_commande()
{    $id=$_GET['id'];
    try {
     $requete = $this->bd->prepare('SELECT L.Titre_livre, F.Raison_sociale,C.id_commande, C.Date_achat, C.Prix_achat, C.Nbr_exemplaires FROM commander C JOIN livres L ON C.Id_Livre = L.Id_Livre JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur WHERE id_commande=:c');
       
        $requete->execute(array(':c'=>$id));
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

// ..................ajouter commande..................

public function get_valider_ajouter_commande()

{   
    $idLivre = $_POST['Id_Livre'];
    $idFournisseur = $_POST['Id_fournisseur'];
    $nbrExemplaires = $_POST['nbr'];
    $prixAchat = $_POST['prix'];
    
    try {
     $requete = $this->bd->prepare('INSERT INTO commander (id_commande,Id_Livre,Id_fournisseur,Date_achat,Prix_achat,Nbr_exemplaires,idUtilisateur) VALUES(NULL,:l,:f,:d,:p,:n,:idu )');
       
        $requete->execute(array(':l'=>$idLivre,':f'=> $idFournisseur,':d'=> date('Y-m-d'),':p'=>  $prixAchat,':n'=> $nbrExemplaires, ':idu'=> $_SESSION['id']));
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}
// .............;;..suprime commande(DELETE)......................
public function get_delete_commande()
{    $id=$_GET['id'];
    try {
     $requete = $this->bd->prepare('DELETE  FROM commander  WHERE id_commande=:c');
       
        $requete->execute(array(':c'=>$id));
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}
}