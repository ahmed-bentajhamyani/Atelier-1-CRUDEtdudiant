<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title> <?=$title?> </title>
</head>
<body>
    <div class="container mt-5 mb-3" >
        <header>
            <a href="index.php?action=Add" class="btn btn-primary">Ajouter un étudiant</a>
            <a href="index.php?action=List" class="btn btn-primary">Liste des étudiants</a>
        </header>
    </div>

    <div id="content" class="container mb-3"> <?= $content ?> </div>

    <footer class="container mb-3" id="blogFooter">Blog réalisé avec PHP, HTML5 et CSS.</footer>
</body>
</html>