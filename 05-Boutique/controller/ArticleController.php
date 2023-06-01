<?php
ini_set("display_errors", 1);

class Article
{
  protected $db;

  const LOCALHOST = "localhost";
  const DB_NAME = "boutique";
  const USER = "root";
  const PASSWORD = "";

  public function pdo()
  {

    if (!$this->db) {
      try {
        $this->db = new PDO(
          "mysql:host=" . SELF::LOCALHOST . ";dbname=" . SELF::DB_NAME,
          SELF::USER,
          SELF::PASSWORD,
          array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
          )
        );
      } catch (Exception $e) {
        die("Probleme connexion : " . $e->getMessage());
      }
    }
    return $this->db; // On retourne l'objet PDO.
  }

  // Pour ajouter
  public function add($values) // $values = POST
  {

    $req = $this->pdo()->prepare("INSERT INTO articles VALUES (NULL, :title, :content, :price, :picture, :category)");

    $req->bindParam(':title', $values['title']);
    $req->bindParam(':content', $values['content']);
    $req->bindParam(':price', $values['price']);
    $req->bindParam(':picture', $values['picture']);
    $req->bindParam(':category', $values['category']);

    $req->execute();
  }

  // Pour récupérer
  public function findAll()
  {
    $req = $this->pdo()->query("SELECT * FROM articles");
    return $req->fetchAll(PDO::FETCH_ASSOC);
    
  }

  public function findById($id)
  {
    $req = $this->pdo()->prepare("SELECT * FROM  articles WHERE id = ?");
    $req->execute([$id]);
    return $req->fetch(PDO::FETCH_ASSOC);
  }

  // Pour modifier
  public function update($values)
  {
    $req = $this->pdo()->prepare(
    "UPDATE
        articles
    SET
        title = :title,
        content = :content,
        price = :price,
        picture = :picture,
        category = :category
    WHERE id = :id
    ");

    $req->bindParam(':title', $values['title']);
    $req->bindParam(':content', $values['content']);
    $req->bindParam(':price', $values['price']);
    $req->bindParam(':picture', $values['picture']);
    $req->bindParam(':category', $values['category']);
    $req->bindParam(':id', $values['id']);
    $req->execute();
  }

  // Pour supprimer
  public function delete($id)
  {
    $req = $this->pdo()->prepare("DELETE FROM articles WHERE id = :id");

    $req->bindParam(':id', $id);

    $req->execute();

    header('Location: dashboard.php');
  }
}
$article = new Article;

$arrayArticles = $article->findAll();

if (isset($_POST['valider'])) { $article->add($_POST); }

if(isset($_POST['valider_update'])) $article->update($_POST);

$actions = isset($_GET['action']) ? $_GET['action'] : NULL;

if ($actions == "update") $arrayArticleById = $article->findById($_GET['id']);




/*
      Exemple avec FETCH_ASSOC
        [title] => "chaussure",
        [content] => "Le message..." 
      
        Exemple sans FETCH_ASSOC
          [0] => "chaussure",
          [title] => "chaussure",
          [1] => "Le message...",
          [content] => "Le message..." 
    */