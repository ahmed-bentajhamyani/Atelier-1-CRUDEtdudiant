<?php

class EtudiantTransaction{

    private $_db;

    public function __construct()
    {
        $this->_db = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','');
    }
    public function add( $etudiant )
    {
        $requeststr = 'INSERT into etudiant (nom , prenom , age , cne) values( :nom , :prenom , :age , :cne )';
        $request = $this->_db->prepare( $requeststr );
        $request->bindValue( ':nom' , $etudiant->getNom() );
        $request->bindValue( ':prenom' , $etudiant->getPrenom() );
        $request->bindValue( ':age' , $etudiant->getAge() , PDO::PARAM_INT );
        $request->bindValue( ':cne' , $etudiant->getCne() );
        $request->execute();
    }
    public function update( $etudiant )
    {
        $requeststr = 'UPDATE etudiant set nom = :nom , prenom = :prenom , age = :age , cne = :cne where id_etudiant =' . $etudiant->getId() ;
        $request = $this->_db->prepare( $requeststr );
        $request->bindValue( ':nom' , $etudiant->getNom());
        $request->bindValue( ':prenom' , $etudiant->getPrenom() );
        $request->bindValue( ':age' , $etudiant->getAge() , PDO::PARAM_INT );
        $request->bindValue( ':cne' , $etudiant->getCne() );
        $request->execute();
    }
    public function delete( $etudiant )
    {
        $this->_db -> query( 'DELETE from etudiant where id_etudiant=' . $etudiant->getId() );
    }
    public function get( $identifiant )
    {
        $id = (int)$identifiant;
        $request = $this->_db -> query( 'SELECT * FROM etudiant where id_etudiant =' . $id );
        $donnee = $request->fetch( PDO::FETCH_ASSOC );
        return new Etudiant(  $donnee['nom'] , $donnee['prenom'] , $donnee['age'] , $donnee['cne'] , $donnee['id_etudiant'] );
    }
    public function getList()
    {
        $etudiants = [];
        $request = $this->_db -> query( 'SELECT * FROM etudiant' );
        while( $donnee = $request->fetch( PDO::FETCH_ASSOC ) ){
            $e = new Etudiant(  $donnee['nom'] , $donnee['prenom'] , $donnee['age'] , $donnee['cne'] , $donnee['id_etudiant'] );
            array_push( $etudiants , $e );
        }
        return $etudiants;
    }
    public function setDataBase( PDO $db )
    {
        $this->_db = $db ;
    }
}