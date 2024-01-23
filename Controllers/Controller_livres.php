<?php

class Controller_livres extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_all_livres()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_all_livres()];
        $this->render("all_livres",$data);

    }
    // ............Auteur..............
    public function action_livre_auteur()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_livre_auteur()];
        $this->render("livre_auteur",$data);

    }

    public function action_livre_auteur_result()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_livre_auteur_result()];
        $this->render("livre_auteur_result",$data);
// ........Editeur..........................
    }
    public function action_livre_editeur()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_livre_editeur()];
        $this->render("livre_editeur",$data);

    }
    public function action_livre_editeur_result()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_livre_editeur_result()];
        $this->render("livre_editeur_result",$data);

    }
    // .............livre par titre....................
    public function action_livre_titre()
    { 
        $m=Model::get_model();
        $data=['livre'=>$m->get_livre_titre()];
        $this->render("livre_titre",$data);

    }
    public function action_livre_titre_result()
    { 
        $m=Model::get_model();
        $data=['livre'=>$m->get_livre_titre_result()];
        $this->render("livre_titre_result",$data);

    }
    // ...............admin.............
    public function action_all_livres_admin()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_all_livres_admin()];
        $this->render("all_livres_admin",$data);

    }
// .............mettre a jours...........;;
public function action_modifier_livre()
{ 
    $m=Model::get_model();
    $data=['livre'=>$m->get_modifier_livre()];
    $this->render("modifier_livre",$data);

}
public function action_update_livre()
{ 
    $m=Model::get_model();
    $data=['livre'=>$m->get_update_livre()];
    $this->render("all_livres_admin",$data);

}
// ......................Ajouter un livre ...................
public function action_ajouter_livre()
{ 
    // $m=Model::get_model();
    // $data=['livre'=>$m->get_ajouter_livre()];
    $this->render("ajouter_livre");

}
   
   
}