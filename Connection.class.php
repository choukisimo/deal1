<?php
class Connection {
     public static $con; //Ressource accessible en dehors de la classe
  

    public function connectBdd() {
        if (!isset(self::$con)) {
            self::$con = new mysqli("localhost", "root", "", "deal");
        }

        return self::$con;
    }
}
?>
