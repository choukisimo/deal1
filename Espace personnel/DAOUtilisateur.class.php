<?php

require_once 'Utilisateur.class.php';
require_once 'util/Connection.class.php';

class DAOUtilisateur {

    private static $mysqli;

    public static function findById($id) {


        $connection = new Connection();
        $mysqli = $connection->connectBdd();



        $result = $mysqli->query("select * from utilisateurs where id=29");
          
        $utilisateur = null;
        while ($row = $result->fetch_assoc()) {

            $utilisateur = new Utilisateur();
            $utilisateur->id = $id;
            $utilisateur->nom = $row['nom'];
            $utilisateur->prenom = $row['prenom'];
            $utilisateur->email = $row['email'];
            $utilisateur->telephone = $row['telephone'];
            $utilisateur->activer = $row['activer'];
            $utilisateur->ville = $row['ville'];
            $utilisateur->type = $row['type'];
            $utilisateur->motDePasse = $row['motDePasse'];
            $utilisateur->id_oauth=$row['id_oauth'];
        }
        $result->free();

        return $utilisateur;
    }
    
    public static function Modifier($utilisateur) {
      
       

        

        $connection = new Connection();
        $mysqli = $connection->connectBdd();

        $requete = "UPDATE Utilisateurs SET nom=?,prenom=?, email=? ,motDePasse=?, telephone=?, ville=? where id=?";
										
        

        $stmt = $mysqli->prepare($requete);

        $stmt->bind_param('ssssssi', $utilisateur->nom, $utilisateur->prenom, $utilisateur->email, $utilisateur->motDePasse,$utilisateur->telephone,$utilisateur->ville,$utilisateur->id);

        $stmt->execute();

   
    }


}

?>
