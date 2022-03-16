<?php

class View{

    private $_file;
    private $_title;

    public function __construct( $action )
    {
        $this->_file = "View/view" . $action . ".php";
    }

    private function generateFile( $file , $data )
    {
        if( file_exists( $file ) ){
            extract( $data );
            ob_start();
            require $file;
            return ob_get_clean();
        }
        else { 
            throw new Exception("File '$file' not found"); 
        }
    }

    public function generate( $data )
    {
        $content = $this->generateFile( $this->_file , $data );
        $view = $this->generateFile( 'View/gabarit.php' , array( 'title' => $this->_title , 'content' => $content ) );
        echo $view;
    }

    public function generate1()
    {
        $content = $this->generateFile( $this->_file , array( 'data' => 'data') );
        $view = $this->generateFile( 'View/gabarit.php' , array( 'title' => $this->_title , 'content' => $content ) );
        echo $view;
    }
}