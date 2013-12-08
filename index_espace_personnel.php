
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
 <?php
        require_once 'infoUtil.php';
        ?>
<html>
    <head>
         <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
        <script src="js/jquery-1.10.2.min.js"></script><!-- http://code.jquery.com/jquery-1.9.1.js -->
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <meta charset="utf-8"/>
    </head>
     <script>
            $(function() {
               $("#tabs").tabs();
                $("#accordion").accordion({collapsible: true});
            });
        </script>
    <body>
        <div id="accordion">

                        <h3>Modifier mes informations</h3> 
                        <form action="" method="post">
                            <div>
                                <p>
                                <table>
                                    <tr>
                                        <td>
                                    <label for="nom">Nom</label>
                                    <input name="nom" type="text" value="<?php echo $user->nom; ?>"><br>
                                    </td>
                                    <td>
                                    <label for="prenom">Prenom</label>
                                    <input   name="prenom  type="text" value="<?php echo $user->prenom; ?>"><br>
                                    </td>
                                    </tr>
                                     <tr>
                                         <td>
                                    <label for="ville">Ville</label>
                                    <input  name="ville"   type="text" value="<?php echo $user->ville; ?>">
                                    </td>
                                    <td>
                                     <label for="email">Email</label>
                                    <input   name="email" type="text" value="<?php echo $user->email; ?>"><br>
                                    </td>
                                    </tr>
                                     <tr>
                                         <td colspan="2">
                                    <label for="telephone">Telephone</label>
                                    <input  name="telephone" type="text" value="<?php echo $user->telephone; ?>"><br>
                                    </td>
                                    </tr>
                                     <tr>
                                         <td>
                                    <label for="password1">le mot de passe</label>
                                    <input id="password1" name="password1"  type="text" ><br>
                                    </td>
                                    <td>
                                     <label for="password2">Répétez votre mot de passe</label>
                                    <input id="password2" name="password2"  type="text" ><br>
                                    </td>
                                     </tr>
                                </table>    
                                    
                                    <input type="submit" value="Mettre à jour"/>
                                    
                                   
                                </p>
                            </div>
                            <h3>Coordonnées</h3>
                            <div>
                                <p>
                                  
                                </p>
                            </div>
                            <h3>Mot de passe</h3>
                            <div>
                                <p>
                               
                                </p>
                            </div>

                    </div> 
                    
                 

                </form>
            </div>
    </body>
</html>

