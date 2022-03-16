<?php

require_once 'Model/etudiant.php';
require_once 'Model/etudiantTransaction.php';
require_once 'View/view.php';

class EtudiantController{

    private $_etudiant;
    private $_etudiantTransaction;

    public function __construct(){
        $this->_etudiant = new Etudiant();
        $this->_etudiantTransaction = new EtudiantTransaction();
    }

    // Ajouter un etudiant
    public function addEtudiant()
    {
        $view = new View( "Add" );
        $view->generate1();

        if( isset( $_POST['save'] ) ){

            if( isset( $_POST['nom'] ) )
                $this->_etudiant->setNom( $_POST['nom'] ) ;

            if( isset( $_POST['prenom'] ) )
                $this->_etudiant->setPrenom( $_POST['prenom'] ) ;

            if( isset( $_POST['age'] ) )
                $this->_etudiant->setAge( $_POST['age'] ) ;

            if( isset( $_POST['cne'] ) )
                $this->_etudiant->setCne( $_POST['cne'] ) ;

            $this->_etudiantTransaction->add( $this->_etudiant );
        
            header('location:http://localhost/crudetudiant/index?action=List');
        }
        
    }

    // Modifier un etudiant
    public function updateEtudiant( $id )
    {
        $etudiants = $this->_etudiantTransaction->getList();
        foreach( $etudiants as $etudiant ){
            if( $etudiant->getId() == $id ) 
            {
                $view = new View( "Update" );
                $view->generate( array('etudiant' => $etudiant) );

                if( isset( $_POST['save'] ) ){

                    if( isset( $_POST['nom'] ) )
                        $etudiant->setNom( $_POST['nom'] ) ;

                    if( isset( $_POST['prenom'] ) )
                        $etudiant->setPrenom( $_POST['prenom'] ) ;

                    if( isset( $_POST['age'] ) )
                        $etudiant->setAge( $_POST['age'] ) ;

                    if( isset( $_POST['cne'] ) )
                        $etudiant->setCne( $_POST['cne'] ) ;

                    $this->_etudiantTransaction->update( $etudiant );
                
                    header('location:http://localhost/crudetudiant/index?action=List');
                }
            }
        }
        
    }

    // Supprimer un etudiant
    public function deleteEtudiant( $id )
    {
        $etudiants = $this->_etudiantTransaction->getList();
        foreach( $etudiants as $etudiant){
            if( $etudiant->getId() == $id )
                $this->_etudiantTransaction->delete( $etudiant );
        }
        header('location:http://localhost/crudetudiant/index?action=List');
    }

    // Afficher un etudiant par son id
    public function getOne( $identifiant )
    {
        $etudiant = $this->_etudiantTransaction->get( $identifiant );
        $view = new View( "Etudiant" );
        $view->generate( array('etudiant' => $etudiant) );
    }
    
    // Affiche la liste de tous les etudiants de la classe 
    public function liste()
    {
        $etudiants = $this->_etudiantTransaction->getList();
        $view = new View( "Liste" );
        $view->generate( array('etudiants' => $etudiants) );
    }
}