<?php
    include "database.php";

//    $content = $db->query("SELECT * FROM content");
//    $content_no = $content->num_rows;

    $level = $_GET["l"];
    $count = $_GET["c"];

    $contents = $db->query("SELECT * FROM content WHERE level = $level AND count = $count");
    $content = $contents->fetch_assoc();

    $ways = $db->query("SELECT * FROM ways WHERE level = $level AND count = $count");
    $ways_no = $ways->num_rows;
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
                <a class="navbar-brand" href="index.php">داستانک</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">خانه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">داستان های دیگر</a>
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

                        <div class="card-body">
                            <p class="card-text">
                            <?php echo $content["text"]; ?>
                            </p>
                            <form action="process.php" method="post">
                                <input type="hidden" name="content_level" value="<?php echo $content["level"]; ?>">
                                <input type="hidden" name="ways_no" value="<?php echo $ways_no; ?>">
                                <?php foreach($ways as $way): ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="<?php echo $way["id"]; ?>" name="way" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            <?php echo $way["text"]; ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                                <button type="sumbit" class="btn btn-danger">بعدی</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="bootstrap\bootstrap.js"></script>
    </body>
</html>