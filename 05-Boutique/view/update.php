<?php require_once('../controller/ArticleController.php'); ?>
<?php require_once('../template/header.php'); ?>

<?= $arrayArticleById['title'];  ?>
<?= $arrayArticleById['content'];  ?>

<div class="container-fluid mx-auto">
    <form method='post' class="text-center bg-secondary col-4 mx-auto my-5 p-5">
  <label for="">Title : </label>
  <input type="hidden" name="id" value="<?= $arrayArticleById['id']; ?>">
  <input type="text" placeholder="title" name="title" value="<?= $arrayArticleById['title']; ?>">

  <label for="">Content : </label>
  <input type="text" placeholder="content" name="content" value="<?= $arrayArticleById['content']; ?>">

  <label for="">Price : </label>
  <input type="number" placeholder="price" name="price" value="<?= $arrayArticleById['price']; ?>">

  <label for="">Picture : </label>
  <input type="text" placeholder="Picutre" name="picture" value="<?= $arrayArticleById['picture']; ?>">

  <select name="category">
    <?php if ($arrayArticleById['category'] == "h") : ?>
      <option value="h">Homme</option>
      <option value="f">Femme</option>
    <?php else : ?>
      <option value="f">Femme</option>
      <option value="h">Homme</option>
    <?php endif; ?>
  </select>

  <button name="valider_update">Valider</button>
</form>
</div>