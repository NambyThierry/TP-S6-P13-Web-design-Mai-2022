<?php
include("connection.php");
function getUser($email, $mdp)
{
    $sql = "SELECT * FROM admin where email='%s' and mdp='%s'";
    $sql = sprintf($sql, $email, $mdp);
    $result = dbconnect()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $result[0];
}
function login($email, $mdp)
{
    $user = getUser($email, $mdp);
    if ($user != null) {
        return $user;
    } else {
        return null;
    }
}
function findAllContenu()
{
    $sql = "SELECT * FROM typecontenu";
    $result = dbconnect()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function findAll()
{
    $sql = "SELECT * FROM contenu";
    $result = dbconnect()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function insertContenu($titre, $contenue, $idType, $photo)
{
    $sql = "insert into contenu values(default,'%s','%s',now(),%s,'%s')";
    $sql = sprintf($sql, $titre, $contenue, $idType, $photo);
    $result = dbconnect()->query($sql);
}
function delete($id)
{
    $sql = "DELETE FROM contenu  where id=%s";
    $sql = sprintf($sql, $id);
    $result = dbconnect()->query($sql);
}
function getContent($id)
{
    $sql = "SELECT * FROM contenu where id=%s";
    $sql = sprintf($sql, $id);
    $result = dbconnect()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $result[0];
}
function modif($id, $titre, $contenue, $date)
{
    $sql = "UPDATE contenu set titre='%s' , content='%s',daty='%s' where id=%s";
    $sql = sprintf($sql, $titre, $contenue, $date, $id);
    $result = dbconnect()->query($sql);
}
