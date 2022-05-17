<?php
include('../inc/function.php');
$id = $_GET['id'];
delete($id);
header('Location: template.php?page=acceuil');
