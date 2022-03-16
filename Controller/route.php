<?php

require_once 'etudiantController.php';
require_once 'View/view.php';

class Route{

    private $_ctrlEtudiant;

    public function __construct()
    {
        $this->_ctrlEtudiant = new EtudiantController();
    }

    public function routeRequest()
    {
        try{
            if( isset( $_GET['action'] ) ){
                
                if( $_GET['action'] == 'Add' )
                {
                    $this->_ctrlEtudiant->addEtudiant();
                }
                elseif( $_GET['action'] == 'Update' )
                {
                    $this->_ctrlEtudiant->updateEtudiant( $_GET['id'] );
                }
                elseif( $_GET['action'] == 'Delete' )
                {
                    $this->_ctrlEtudiant->deleteEtudiant( $_GET['id'] );
                }
                elseif( $_GET['action'] == 'Etudiant' )
                {
                    $this->_ctrlEtudiant->getOne( $_GET['id'] );
                }
                elseif( $_GET['action'] == 'List' )
                {
                    $this->_ctrlEtudiant->liste();
                }
                else
                {
                    throw new Exception('Action not found'); 
                }
            }
            else
            {
                $this->_ctrlEtudiant->liste();
            }
        }catch( Exception $e ){
            $this->erreur( $e->getMessage());
        }
    }
    private function erreur( $ErrorMessage )
    {
        $view = new View('Erreur');
        $view->generate( array( 'ErrorMessage' => $ErrorMessage ));
    }
}