<?php

class Controller_home extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
// ...............connexion.................
    }
    public function action_User_connexion()
    {
        $this->render('User_connexion');
    }
    // ..............login...................

    public function action_login_connexion()
    
    {

    $m=Model::get_model();
    $data = ['identification'=>$m->get_login_connexion()];
        $this->render("login_connexion",$data);
        
    }

    public function action_deconnexion()
    {
        $this->render('deconnexion');
    }
// ...........inscription.............
public function action_User_inscription()
{
    $this->render('User_inscription');
}
    public function action_User_inscription_valide()
{ 
    $m=Model::get_model();
    $data = ['utilisateur'=>$m->get_User_inscription_valide()];
        $this->render("login_connexion",$data);
        
    }
}