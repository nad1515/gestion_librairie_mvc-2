<form action="?controller=home&action=User_inscription_valide" method="post">
    
       <div class="form-row">
          <label class="col-md-3" for="nom">Nom</label>   
          <input id="nom" type="text" class="form-control" name="nom" placeholder="Entrer votre nom">    
        </div>
        <div class="form-row">
          <label class="col-md-3" for="nom">Prenomom</label>   
          <input id="prenom" type="text" class="form-control" name="prenom" placeholder="Entrer votre prenom" required>    
        </div>
        <div class="form-row">
          <label class="col-md-3" for="nom">Âge</label>   
          <input id="age" type="text" class="form-control" name="age" placeholder="Entrer votre age">    
        </div>
        <div class="form-row">
          <label class="col-md-3" for="nom">Email</label>   
          <input id="email" type="text" class="form-control" name="email" placeholder="Entrer votre email">    
        </div>
        <div class="form-row">
          <label class="col-md-3" for="nom">Mot de passe</label>   
          <input id="mdp" type="text" class="form-control" name="mdp" placeholder="Entrer votre mot de passe">    
        </div>
        <div class="col-md-1 offset-md-11">
         <button class="btn btn-warning">Envoyer</button>
        </div>
  
</form>