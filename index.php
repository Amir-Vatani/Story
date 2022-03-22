<?php
    include "database.php";
    session_start();
    
    $contents = $db->query("SELECT * FROM content");
    $contents_end = $db->query("SELECT * FROM content WHERE end_true = 1");
    $contents_end_no = $contents_end->num_rows;

//    $_SESSION["question_number"] = $question_no;
//    $_SESSION["user_score"] = 0;
?>
<html lang="fa" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="bootstrap\bootstrap.rtl.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">

        <title>داستانک</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img\quiz-logo.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
                </a>
                <a class="navbar-brand" href="#">داستانک</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">خانه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">داستان های دیگر</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active btn btn-outline-danger" aria-current="page" href="admin.php">ورود
                                <img src="img\admin-logo.png" alt="" width="30" height="26" class="d-inline-block align-text-top">
                            </a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-danger" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>                 

        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <div class="card bg-dark text-light">
                        <h5 class="card-header">داستانک</h5>
                        <div class="card-body">
                            <h6 class="card-text">این داستان دارای
                                <?php echo $contents_end_no; ?>
                                پایان مختلف است.
                            </h6>
                            <br>
                            <a href="story.php?l=1&c=1" class="btn btn-danger">شروع 🤓🔥</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="bootstrap\bootstrap.js"></script>
    </body>
</html>