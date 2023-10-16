<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Formulaire de Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">

        <?php include_once('header.php'); ?>
        <h1>Ajouter une recette</h1>
        <form action="<?php echo('post_create.php');?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="title" name="title" id="title" class="form-control">
                <div id="title-help" class="form-text">Choisissez un titre percutant!!!!</div>
            </div>
            <div>
                <label for="recipe" class="form-label">Description de la recette</label>
                <textarea placeholder="Seulemment du contenu vous appartenant ou libre de droits." name="recipe" id="recipe" class="form-control"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>

        <?php include_once('footer.php'); ?>
</body>

</html>