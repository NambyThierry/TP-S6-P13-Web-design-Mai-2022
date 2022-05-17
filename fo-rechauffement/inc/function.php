<?php
include("connection.php");

function findAllEffet()
{
    $sql = "SELECT * FROM contenu where idtype =1";
    $result = dbconnect()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function findAllSolution()
{
    $sql = "SELECT * FROM contenu where idtype =2";
    $result = dbconnect()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function findById($id)
{
    $sql = "SELECT * FROM contenu where id=%s";
    $sql = sprintf($sql, $id);
    $result = dbconnect()->query($sql)->fetchAll();
    return $result[0];
}
