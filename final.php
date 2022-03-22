<?php
    include "database.php";
    session_start();
    
    $question_no = $_SESSION["question_number"];
    $score = $_SESSION["user_score"];
    $percent = $score*100/$question_no
?>

<html lang="fa" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="bootstrap\bootstrap.rtl.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">

        <title>آزمونک</title>
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img\quiz-logo.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
                </a>
                <a class="navbar-brand" href="index.php">آزمونک</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">خانه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">آزمون های دیگر</a>
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
                <div class="col d-flex justify-content-center">
                    <div class="card bg-dark text-light p-5 pt-2 pb-2">
                        <h5 class="card-header text-center">کارنامه</h5>
                        <div class="card-body text-center">
                            <h6 class="card-text">
                            </h6>
                            <p class="card-text">
                                <?php echo $score; ?>
                                از
                                <?php echo $question_no; ?>
                            </p>
                            <p class="card-text">
                                <?php echo $percent ?>%
                            </p>
                            <p class="card-text">
                                <?php 
                                    if($percent < 50) echo "هنوز کلی فیلم و سریال هست که باید ببینی ! 😒";
                                    else if($percent >= 50 && $percent < 90) echo "اطلاعات فیلم و سریالیت بد نیست 🤓";
                                    else echo "معلومه حسابی فیلمبازیا ! 😎🔥";
                                ?>
                            </p>
                            <a href="index.php" class="btn btn-danger mt-3">بازگشت</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="bootstrap\bootstrap.js"></script>
    </body>
</html>