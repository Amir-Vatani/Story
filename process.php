<?php
    include "database.php";
    session_start();

    $user_choice_id = $_POST["way"];
    $content_level = $_POST["content_level"];

    $content_level++;
    if($_POST["ways_no"] > 0)
    {
        $choice = $db->query("SELECT * FROM ways WHERE id = $user_choice_id");
        $choice_way = $choice->fetch_assoc();

        $next_level = $choice_way["next_level"];
        $next_count = $choice_way["next_count"];
        if(4 >= $next_level)
        {
            header("Location: story.php?l=$next_level&c=$next_count");
        }
        else
        {
            header("Location: final.php");
        }
    }
    else if(4 > $content_level - 1)
    {
        header("Location: story.php?l=$content_level&c=1");
    }
    else
        header("Location: final.php");

?>