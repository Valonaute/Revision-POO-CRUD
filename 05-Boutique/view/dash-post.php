<?php
require_once '../controller/ArticleController.php';
require_once '../template/header.php';
?>
<div class="container-fluid mx-auto">
    <form method='post' class="text-center bg-secondary col-4 mx-auto my-5 p-5">
        <label for="">Title : </label>
        <input type="text" placeholder="title" name="title">
        <br><br>
        <label for="">content : </label>
        <input type="text" placeholder="content" name="content">
        <br><br>
        <label for="">price : </label>
        <input type="text" placeholder="price" name="price">
        <br><br>
        <label for="">picture : </label>
        <input type="text" placeholder="picture" name="picture">
        <br><br>
        <label for="category">Category : </label>
        <select name="category">
            <option value="">Select Category</option>
            <option value="h">Homme</option>
            <option value="f">Femme</option>
        </select>
        <br><br>
        <button name="valider"> Valider </button>
    </form>
</div>
<div class="text-center">
    <a href="dashboard.php" class="btn btn-primary "> Voir les articles</a>
</div>