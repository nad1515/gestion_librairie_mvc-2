<?php

class Controller_fournisseurs extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_all_fournisseurs()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_all_fournisseurs()];
        $this->render("all_fournisseurs",$data);

    }
// ..........choix fournisseurs raison sociale...............
    public function action_fournisseur_raison_sociale()
     {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_fournisseur_raison_sociale()];
        $this->render("fournisseur_raison_sociale",$data);

    }
    public function action_fournisseur_raison_sociale_result()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_fournisseur_raison_sociale_result()];
        $this->render("fournisseur_raison_sociale_result",$data);

    }
// ........................fournisseur par localite....................
public function action_fournisseur_localite()
{
   $m=Model::get_model();
   $data=['fournisseurs'=>$m->get_fournisseur_localite()];
   $this->render("fournisseur_localite",$data);

}
public function action_fournisseur_localite_result()
{
   $m=Model::get_model();
   $data=['fournisseurs'=>$m->get_fournisseur_localite_result()];
   $this->render("fournisseur_localite_result",$data);

}
// .......................fournisseur par pays..............
public function action_fournisseur_pays()
{
   $m=Model::get_model();
   $data=['fournisseurs'=>$m->get_fournisseur_pays()];
   $this->render("fournisseur_pays",$data);

}
public function action_fournisseur_pays_result()
{
   $m=Model::get_model();
   $data=['fournisseurs'=>$m->get_fournisseur_pays_result()];
   $this->render("fournisseur_pays_result",$data);

}
// .................all_fournisseur_admin....................
public function action_all_fournisseurs_admin()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_all_fournisseurs_admin()];
        $this->render("all_fournisseurs_admin",$data);

    }
// ............modifier fournisseur............
public function action_modifier_fournisseur()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_modifier_fournisseur()];
        $this->render("modifier_fournisseur",$data);

    }
// .............update fournisseur...............
public function action_update_fournisseur()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_update_fournisseur()];
        $this->render("update_fournisseur",$data);

    }
    
    // .............ajouter un fournisseur.............
    public function action_ajouter_fournisseur()
{ 
    // $m=Model::get_model();
    // $data=['livre'=>$m->get_ajouter_livre()];
    $this->render("ajouter_fournisseur");

}
   
    
}