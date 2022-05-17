<?php
include('../inc/function.php');
$titre = $_POST['titre'];
$content = $_POST['contenue'];
$idT = $_POST['idtype'];

http: //localhost/backoffice/
$target_dir = "../image/";
$target_dirdb = "http://namby1.alwaysdata.net/image/";

$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$target_file_db = $target_dirdb . basename($_FILES["photo"]["name"]);
$check = getimagesize($_FILES["photo"]["tmp_name"]);
if ($check !== false) {
    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
    insertContenu($titre, $content, $idT, $target_file_db);
    header('Location: template.php?page=acceuil');
} else {
    header('Location: ajout.php?erreur=2');
}
