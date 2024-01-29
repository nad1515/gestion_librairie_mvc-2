
<?php 
require_once('Models/Model.php');
require_once('Controllers/Controller.php');
 require('Utils/header.php');
 require_once('Utils/valid_data.php');


$controllers=['home','livres','fournisseurs','commandes'];
$controller_default='home';

if(isset($_GET['controller']) and in_array($_GET['controller'],$controllers))
{
    // / recupere le controlleur dans l'url avec Get
    $nom_controller=$_GET['controller'];
}
else
    $nom_controller=$controller_default;

$nom_classe="Controller_".$nom_controller;
$nom_fichier="Controllers/".$nom_classe.".php";


if(file_exists($nom_fichier))
{
    require_once("$nom_fichier");
    $controller=new $nom_classe();
}
else 
    exit("ERROR 404:not found");

require_once('Utils/footer.php');

?>