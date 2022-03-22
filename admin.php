<?php
    include "database.php";
    
    $questions = $db->query("SELECT * FROM questions");
    $question_no = $questions->num_rows;

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
                            <a class="nav-link active" aria-current="page" href="index.php">آزمون های دیگر</a>
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
            <div class="row mt-4">
                <div class="col d-flex justify-content-center">
                    <div class="card bg-dark text-light p-5 pt-2 pb-2">
                        <h5 class="card-header text-center">صفحه ادمین</h5>
                        <div class="card-body text-center">
                            <h6 class="card-text">
                                میخواهید چه کاری انجام دهید؟
                            </h6>
                            <!-- <a href="index.php" class="btn btn-success mt-3 me-2">افزودن سوال</a> -->
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success mt-3 me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            افزودن سوال
                            </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-dark text-light">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">افزودن سوال</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form method="post" action="add_question.php">
                                                    <div class="modal-body">
                                                        <p class="text-start">
                                                            متن سوال
                                                        </p>
                                                        <div class="mb-3">
                                                            <input type="textarea" name="question" class="form-control" id="exampleFormControlInput1" placeholder="">
                                                        </div>
                                                        <p class="text-start">
                                                            گزینه های مورد نظر خود را اضافه کنید و گزینه درست را انتخاب کنید.
                                                        </p>
                                                        <div id="answers">                                                           
                                                            <div class="input-group">
                                                                <div class="input-group-text">
                                                                    <input class="form-check-input mt-0" name="answer_id" type="radio" value="1" aria-label="Radio button for following text input">
                                                                </div>
                                                                <input type="text" class="form-control" name="answer1" aria-label="Text input with radio button">
                                                            </div>
                                                            <div class="input-group mt-2">
                                                                <div class="input-group-text">
                                                                    <input class="form-check-input mt-0" name="answer_id" type="radio" value="2" aria-label="Radio button for following text input">
                                                                </div>
                                                                <input type="text" class="form-control" name="answer2" aria-label="Text input with radio button">
                                                            </div>
                                                                                                                        
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
                                                        <button type="sumbit" class="btn btn-success">افزودن</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                            
                            <a href="index.php" class="btn btn-primary mt-3 me-2">ویرایش سوال</a>
                            <a href="index.php" class="btn btn-danger mt-3">حذف سوال</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
         
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="bootstrap\bootstrap.js"></script>
    </body>
</html>