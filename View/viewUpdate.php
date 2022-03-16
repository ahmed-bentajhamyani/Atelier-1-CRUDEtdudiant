<?php $this->_title = "Modifier un étudiant"; ?>

<div class="container">
    <form class="mt-5" method="POST">

        <div class="mb-3">
            <label class="form-label">Nom d'étudiant</label>
            <input type="text" name="nom" value="<?= $etudiant->getNom(); ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Prenom d'étudiant</label>
            <input type="text" name="prenom" value="<?= $etudiant->getPrenom(); ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Age d'étudiant</label>
            <input type="number" name="age" value="<?= $etudiant->getAge(); ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">CNE d'étudiant</label>
            <input type="text" name="cne" value="<?= $etudiant->getCne(); ?>" class="form-control">
        </div>

        <div class="mb-3">
            <input type="submit" value="Modifier" name="save" class="btn btn-primary">
        </div> 
    </form>
</div>