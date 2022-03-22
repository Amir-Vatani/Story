<?php
    include "database.php";
    session_start();

    $question = $_POST["question"];
    $answers = array($_POST["answer1"], $_POST["answer2"], $_POST["answer3"], $_POST["answer4"]);
    $is_true = $_POST["answer_id"];

    $db->query("INSERT INTO questions(text) VALUES('$question')");

    $q_id = $_SESSION["question_number"] + 1;
    $cnt = 1;
    $temp = 0;
    foreach($answers as $answer) :
        if($cnt == $is_true)
            $temp = 1;
        if($answer != "")
            $db->query("INSERT INTO answers(text, is_true, question_id) VALUES('$answer', '$temp', '$q_id')");
        $cnt++;
        $temp = 0;
    endforeach;

    header("Location: admin.php");
?>