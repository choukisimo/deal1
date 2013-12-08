<?php
    session_start();
    session_destroy(); 
 require_once './Utilisateur.class.php';
    require_once './DAOUtilisateur.class.php';
    
       $_SESSION['id']=29;
       $id = $_SESSION['id']; 
       
       $user = DAOUtilisateur::findById($id);
?>
