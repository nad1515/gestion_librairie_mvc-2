<?php
abstract class Controller		//Ceci est le controleur par defaut
{

	abstract public function action_default();

		public function __construct()
		{
			if(isset($_GET['action'])and method_exists($this,"action_".$_GET ["action"]))
			{
				$action="action_".$_GET['action']; 
				$this->$action();					//On appelle cette action
			}
			else $this->action_default();			//sinon action par défaut
		}

	protected function render($vue,$data=[])		//Fonction qui recupere les données et les transmet a la vu
	{
		extract($data);								//Recupération des données à afficher
		// on deffini le nom du repertoir view_".$vue;
		if(isset($_GET['controller']))                 
		{											//Si le fichier existe
			$Controller_actif= ucfirst($_GET['controller']);					//Si oui on l'affiche
		}
		else
		{
			$Controller_actif= "Home";
		}

	   $file_name="Views/".$Controller_actif."/view_".$vue.'.php';
	   if(file_exists($file_name))
	   {
		require($file_name);
	   }else {
	 	$this->action_error("La vue n'existe pas !");
	    }
	}

	protected function action_error($message)		// en cas d'erreur 
	{
		$data=['erreur'=>$message];
		$this->render('error',$data);
		die();										//Pour faire terminer le script vu qu'il y a une erreur
	}
}
