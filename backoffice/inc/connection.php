<?php
function dbconnect()
{
    static $connect = null;
    $user = "id18950172_thierry9";
    $pass = "#-!/Fo|[fhjV139$";
    if ($connect === null) {
        $connect = new PDO('mysql:host=localhost;dbname=id18950172_climat', $user, $pass);
        //echo "connected";
    }
    return $connect;
}
