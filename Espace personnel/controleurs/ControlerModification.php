<?php
session_start();
    session_destroy();
require_once '../Utilisateur.class.php';
require_once '../DAOUtilisateur.class.php';






$_POST['nom'] = mysql_real_escape_string($_POST['nom']);
$_POST['prenom'] = mysql_real_escape_string($_POST['prenom']);

$_POST['email'] = mysql_real_escape_string($_POST['email']);

$_POST['ville'] = mysql_real_escape_string($_POST['ville']);
$_POST['telephone'] = mysql_real_escape_string($_POST['telephone']);
$_POST['password1'] = mysql_real_escape_string($_POST['password1']);
$_POST['password2'] = mysql_real_escape_string($_POST['password2']);



$Utilisateur = new Utilisateur();

$Utilisateur->id=29;

$Utilisateur->nom = $_POST['nom'];
$Utilisateur->prenom = $_POST['prenom'];

$Utilisateur->email = $_POST['email'];
$Utilisateur->mdp = $_POST['password1'];
$Utilisateur->telephone = $_POST['telephone'];
$Utilisateur->ville = $_POST['ville'];

DAOUtilisateur::Modifier($Utilisateur);
header('Location: ../index.php');