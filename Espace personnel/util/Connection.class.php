<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connection
 *
 * @author soufiane
 */
class Connection {
     public static $con; //Ressource accessible en dehors de la classe
   

    public function connectBdd() {
        if (!isset(self::$con)) {
            self::$con = new mysqli("localhost", "root", "256256", "deal");
        }

        return self::$con;
    }
}

?>
