<?php


require 'etudiant.php';
require 'etudiantTransaction.php';
$etudiant = new Etudiant( 'LSI','test',  30);

$manager = new EtudiantTransaction();
$manager->add($etudiant);

?>