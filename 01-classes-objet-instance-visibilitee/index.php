<?php

// nbProduit
// nbProduit2
// methode AjouterArticle
// methode AfficherArticle
// "l'article a été ajouté" suivi du nom de l'article
class Panier
{

 public $nbProduit; // <-- propriété
 private $nbProduit2;

 public function ajouterArticle($arg) // <--- méthode
 { // --- traitement
  return "L'article a été ajouté " . $arg . "\n";
 }

 protected function retirerArticle($arg) // <--- méthode
 { // --- traitement
  return "L'article a été retiré " . $arg. "\n";  
 }

 private function afficherArticle() // <--- méthode
 { // --- traitement
  return "Voici les articles \n"; 
 }
}
$panier = new Panier; // <--- new panier = instanciation

$response = $panier->ajouterArticle('CHEMISE');
echo $response;

$panier2 = new Panier;

$response2 = $panier2->ajouterArticle('voiture');
echo $response2;

// methode protected erreur, l'élément est accessible uniquement dans la classe.
// $reponse3 = $panier2->retirerArticle("voiture"); 

// methode private  erreur, l'élément est accessible uniquement dans la classe.
// $reponse3 = $panier2->afficherArticle(); 

$panier2->nbProduit = 3;
// $panier2->nbproduit2 = 5; 

echo $panier2->nbProduit . "\n"; // propriété public ok 
/*
  Niveau de visibilité : 
    public : accessible de partout.
    protected : accesible uniquement dans la classe ou elle a été déclaré et aussi dans les classes héritières.
    private : accesible uniquement dans la classe.

    Divers : 
      new est un mot-clé permettant d'effectuer une instanciation.
      Une classe peut produire plusieurs objet. nous pouvons donc effectuer plusieurs instanciation 'new'.
      $panier1 représente l'objet issue de la classe panier.
*/