<?php

class Etudiant
{
  private $prenom;

  public function __construct($arg)
  {
    echo "Instanciation, nous avons reçu l'information suivant \n";
    $this->setPrenom($arg);
  }

  public function setPrenom($prenom)
  {
    if(is_string($prenom)) $this->prenom = $prenom;
  }

  public function getPrenom()
  {
    return $this->prenom;
  }
}

$etudiant = new Etudiant("Fabrice");

echo $etudiant->getPrenom();
// __constructeur est appelée automatiquement -
//  nous mettons un argument aprés le nom de la class qui attérit directement dans le constructeur
