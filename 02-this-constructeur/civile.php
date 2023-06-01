<?php

/* 
  1 - Créer une class user.
  2 - Créer deux private propriétés (prenom & nom).
  3 - Créer deux public méthodes (setPrenom & getPrenom).
  4 - Ajouter un argument de réception à setPrenom (prénom).
  5 - Faite un return de votre private propriété (prenom), dans votre méthode (getPrenom).
  6 - Vérifier le type de notre paramètre (si c'est un string)
   puis Modifier la valeur de votre private propriété (prenom) dans la méthode (setPrenom) grâce à l'argument passé en paramètre.
  7 - Puis par exemple si vous affectez "Maria" à votre propriété et que vous appelez votre méthode getPrenom, on doit voir comme résultat "Hello Maria".
*/

class User
{
    private $nom;
    private $prenom; 

    // Getters et setters 
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    
}

$user = new User;

$user->setPrenom("Maria");

echo "Hello ".$user->getPrenom();
