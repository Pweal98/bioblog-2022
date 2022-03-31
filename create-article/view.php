<!DOCTYPE html>
<html lang="fr">
<?php $title="Création article"; require "../head.php"; ?>
<body>
    <?php require "../header.php"; ?>

    <div class="container">
        <h1>Création article</h1>

        <form 
            action=""
            method="POST"
            enctype="multipart/form-data"
            >

            <div class="form-group">
                <label>
                    Title 
                    <input class="form-control"
                     type="texte" 
                     name="title" 
                     placeholder="Title" 
                     required maxlength="50"
                     value="<?= isset($article) ? $_POST['title'] : '' ?>" /> <!-- ? = If isset($article) = true on affiche la valeur du $_POST['title'] Sinon = : on affiche rien -->
                </label>
                <?php if(isset($validation) && isset($validation['title'])): ?>  <!-- Verifie si $validation est occuper si il est il affiche une erreur étant donner qu'il devrais ne pas etre remplis voir function validateInputs($inputs){ -->
                    <p><?= $validation['title'] ?></p>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label>
                    Content 
                    <textarea
                    class="form-control"
                    name="content"
                    maxlength="1000"><?= isset($article) ? $_POST['content'] : '' ?></textarea>
                </label>
                <?php if(isset($validation) && isset($validation['content'])): ?> <!-- Verifie si $validation est occuper si il est il affiche une erreur étant donner qu'il devrais ne pas etre remplis voir function validateInputs($inputs){ -->
                    <p><?= $validation['content'] ?></p>
                <?php endif; ?>
            </div>

            <input type="submit" value="Save" class="btn btn-primary">

        </form>

    </div>


    <?php require "../footer.php"; ?>
</body>
</html>
