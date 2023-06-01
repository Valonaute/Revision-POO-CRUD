<?php require_once('../controller/ArticleController.php'); ?>
<?php require_once('../template/header.php'); ?>

<table class="table m-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Price</th>
      <th scope="col">picture</th>
      <th scope="col">Category</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($arrayArticles as $values): ?>
    <tr>
      <th scope="row"><?= $values['id']; ?></th>
      <td><?= $values['title']; ?></td>
      <td><?= $values['content']; ?></td>
      <td><?= $values['price']; ?></td>
      <td><img src="<?= $values['picture']; ?>" alt=""></td>
      <td><?php 
      if($values['category'] == 'h') {
        echo 'Homme';
      } else {
        echo 'Femme';
      }; ?></td>
      <td>
        <a class="btn btn-warning" href="update.php?action=update&id=<?= $values['id']; ?>">Update</a>
      </td>
      <td>
        <a class="btn btn-danger" href="delete.php?action=delete&id=<?= $values['id']; ?>">delete</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<div class="text-center my-5">
        <a class="btn btn-primary" href="dash-post.php"> Ajouter un article</a>
</div>

<?php require_once '../template/footer.php';