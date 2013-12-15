<?php
/**
* Permet de recuperer la configuration mysql
*/
class Conf{

    static $debug = 1;
    
    static $databases = array(
        'default' => array(
            'host' => 'localhost',
            'database' => 'deal',
            'login' => 'root',
            'password' => ''
        )
    );
}
?>