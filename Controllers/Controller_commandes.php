<?php

class Controller_commandes extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_all_commandes()
    {
        $m=Model::get_model();
        $data=['commandes'=>$m->get_all_commandes()];
        $this->render("all_commandes",$data);

    }
    // ................commande par date............
    public function action_commande_date()
    {
        $m=Model::get_model();
        $data=['commandes'=>$m->get_commande_date()];
        $this->render("commande_date",$data);

    }
    // ................commande par date resultat.............

    public function action_commande_date_result()
    {
        $m=Model::get_model();
        $data=['commandes'=>$m->get_commande_date_result()];
        $this->render("commande_date_result",$data);

    }
     // ................commande par fournisseur............
     public function action_commande_fournisseur()
     {
         $m=Model::get_model();
         $data=['commandes'=>$m->get_commande_fournisseur()];
         $this->render("commande_fournisseur",$data);
 
     }
     // ................commande par fournisseur resultat.............
 
     public function action_commande_fournisseur_result()
     {
         $m=Model::get_model();
         $data=['commandes'=>$m->get_commande_fournisseur_result()];
         $this->render("commande_fournisseur_result",$data);
 
     }
      // ................commande par editeur............
      public function action_commande_editeur()
      {
          $m=Model::get_model();
          $data=['commandes'=>$m->get_commande_editeur()];
          $this->render("commande_editeur",$data);
  
      }
      // ................commande par editeur resultat.............
  
      public function action_commande_editeur_result()
      {
          $m=Model::get_model();
          $data=['commandes'=>$m->get_commande_editeur_result()];
          $this->render("commande_editeur_result",$data);
  
      }
 
// ..................commandes fournisseurs.................
public function action_all_commandes_admin()
{
    $m=Model::get_model();
    $data=['commandes'=>$m->get_all_commandes_admin()];
    $this->render("all_commandes_admin",$data);

}
// ..................modifier commande par l'admin................
public function action_modifier_commande()
{
    $m=Model::get_model();
    $data=['commandes'=>$m->get_modifier_commande()];
    $this->render("modifier_commande",$data);

}
//..............update sur la table commande..............
public function action_update_commande()
{
    $m=Model::get_model();
    $data=['commandes'=>$m->get_update_commande()];
    $this->render("all_commandes_admin",$data);

}
// .............ajouter commande..........; 
public function action_ajouter_commande()
{
    $m=Model::get_model();
    $data=['Titre_livre'=>$m->get_all_livres(),'Raison_sociale'=>$m->get_all_fournisseurs()];
    $this->render("ajouter_commande",$data);

}
//..............valider l'ajout de commande..............
public function action_valider_ajouter_commande()
{
    $m=Model::get_model();
    $data=['commandes'=>$m->get_valider_ajouter_commande()];
    $this->render("all_commande_admin",$data);

}
// ..................effacer commande..................
public function action_delete_commande()
{
    $m=Model::get_model();
    $data=['commandes'=>$m->get_delete_commande()];
    $this->render("all_commande_admin",$data);

}
}