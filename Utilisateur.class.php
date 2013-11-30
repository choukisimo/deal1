<?php
class Utilisateur {
    
   

    private $id;
    private $id_oauth;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $ville;
    private $motDePasse;
    private $type;
    private $activer;

    public function __set($name, $value) {
        //TODO
        if ($name == 'id') {
            $this->id = $value;
        }
        if ($name == 'nom') {
            $this->nom = $value;
        }
        if ($name == 'prenom') {
            $this->prenom = $value;
        }
        if ($name == 'email') {
            $this->email = $value;
        }
        if ($name == 'telephone') {
            $this->telephone = $value;
        }
        if ($name == 'activer') {
            $this->activer = $value;
        }
        if ($name == 'ville') {
            $this->ville = $value;
        }
        if ($name == 'type') {
            $this->type = $value;
        }
        if ($name == 'motDePasse') {
            $this->motDePasse = $value;
        }
        if ($name == 'id_oauth') {
            $this->id_oauth = $value;
        }
        
    }

    public function __get($name) {
        if ($name == 'id') {
            return $this->id;
        }
        if ($name == 'nom') {
            return $this->nom;
        }
        if ($name == 'prenom') {
            return $this->prenom;
        }
        if ($name == 'email') {
            return $this->email;
        }
        if ($name == 'telephone') {
            return $this->telephone;
        }
        if ($name == 'id_oauth') {
            return $this->id_oauth;
        }
        if ($name == 'ville') {
            return $this->ville;
        }
        if ($name == 'activer') {
            return $this->activer;
        }
        if ($name == 'motDepasse') {
            return $this->motDepasse;
        }
        if ($name == 'type') {
            return $this->type;
        }
       
    }

}



?>
