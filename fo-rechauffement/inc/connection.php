<?php
function dbconnect()
{
    static $connect = null;
    $user = "epiz_31747056";
    $pass = "unlockinfinityfree";
    if ($connect === null) {
        $connect = new PDO('mysql:host=sql312.epizy.com;dbname=epiz_31747056_climat', $user, $pass);
        //echo "connected";
    }
    return $connect;
}
