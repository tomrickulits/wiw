<?php
include "sessioncheck.php";
?>

<html>
    <head>
        <?php include "head.php";?>
        <title>Subject</title>
    </head>
    <body>
        <?php include 'navbar.php';?>
        <header id="head" class="secondary">
            <div class="container">
                    <h1>Course Outline</h1>
            </div>
        </header>
        
        <div class="container">
        </div>
        <div id="courses">
            <section class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="featured-box">
                            <?php include 'get-subject-outline.php';?>                            
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>