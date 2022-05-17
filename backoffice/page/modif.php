<?php
include('../inc/function.php');
$titre = $_POST['titre'];
$content = $_POST['content'];
$date = $_POST['date'];
$id = $_POST['id'];
modif($id, $titre, $content, $date);
header('Location: template.php?page=acceuil');
