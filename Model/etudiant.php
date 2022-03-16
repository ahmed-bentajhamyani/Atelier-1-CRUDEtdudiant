<?php


class Etudiant{

    private $_id ;
    private $_nom ;
    private $_prenom ;
    private $_age ;
    private $_cne ;

    // Constructeur
    public function __construct( $nom = NULL , $prenom = NULL , $age = NULL , $cne = NULL , $id = NULL ){
        $this->_id = $id ;
        $this->_nom = $nom ;
        $this->_prenom = $prenom ;
        $this->_age = $age ;
        $this->_cne = $cne ;
    }

    // Getters
    public function getId(){
        return $this->_id ;
    }
    public function getNom(){
        return $this->_nom ;
    }
    public function getPrenom(){
        return $this->_prenom ;
    }
    public function getAge(){
        return $this->_age ;
    }
    public function getCne(){
        return $this->_cne ;
    }

    // Setters
    public function setId( $id ){
        $this->_id = $id ;
    }
    public function setNom( $nom ){
        $this->_nom = $nom ;
    }
    public function setPrenom( $prenom ){
        $this->_prenom = $prenom ;
    }
    public function setAge( $age ){
        $this->_age = $age ;
    }
    public function setCne( $cne ){
        $this->_cne = $cne ;
    }
}