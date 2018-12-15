<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Indexcontroller
 *
 * @author bdani
 */
class Indexcontroller {
    
        
    public function Index() {
       try {
        require_once 'View/Navbar.html';
        require_once 'View/index.html';
    } catch (Exception $e) {
    echo "error en llamada de vistas";

    }
        
            
         
        

        
        
    }
}
