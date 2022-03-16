<?php $this->_title = "Ajouter un étudiant"; ?>

<div class="container">

    <form class="mt-5" method="POST">

        <div class="mb-3">
            <label class="form-label">Nom d'étudiant</label>
            <input type="text" name="nom" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Prenom d'étudiant</label>
            <input type="text" name="prenom" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Age d'étudiant</label>
            <input type="number" name="age" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">CNE d'étudiant</label>
            <input type="text" name="cne" class="form-control">
        </div>

        <div class="mb-3">
            <input type="submit" value="Enregistrer" name="save" class="btn btn-primary">
        </div> 
    </form>
</div>