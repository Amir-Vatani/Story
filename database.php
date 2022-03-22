<?php

    $db = new mysqli("localhost", "root", "", "story");

    if($db->connect_error)
    {
        echo "Error in connection";
        echo $db->connect_error;
    }
    else
    {
        $db->query("SET CHARACTER SET utf8");
    }
?>