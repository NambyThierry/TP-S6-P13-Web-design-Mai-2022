<?php
include('../inc/function.php');
session_start();
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$user = login($email, $mdp);
if ($user != null) {
    $_SESSION['user'] = $user;
    //$_SESSION['page'] = 'acceuil.php';
    header('Location: template.php?page=acceuil');
} else {
    header('Location: ../index.php?erreur=1');
}
