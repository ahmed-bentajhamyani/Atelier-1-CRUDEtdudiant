<?php $this->_title = "Liste des étudiants"; ?>

<link rel="stylesheet" href="css/bootstrap.min.css">

<div class="container  my-5">

    <table class="table table-borderless table-hover">
        <thead class="table-secondary">
            <td >Id</td>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Age</td>
            <td>Cne</td>
            <td>Action</td>
        </thead>

    <?php foreach( $etudiants as $etudiant ): ?>

        <tbody class="table-borderless">
            <td> <?php echo $etudiant->getId(); ?> </td>
            <td> <?php echo $etudiant->getNom(); ?> </td>
            <td> <?php echo $etudiant->getPrenom(); ?> </td>
            <td> <?php echo $etudiant->getAge(); ?> </td>
            <td> <?php echo $etudiant->getCne(); ?> </td>
            <td>
                <!-- Button update and delete -->
                <a href="index.php?action=Update&id=<?php echo $etudiant->getId();?>" class="btn btn-primary">Modifier</a>
                <a href="index.php?action=Delete&id=<?php echo $etudiant->getId();?>" class="btn btn-danger">Supprimer</a>
            </td>
        </tbody>

    <?php endforeach; ?>
    </table>
</div>
