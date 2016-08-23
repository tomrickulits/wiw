<?php
include 'sessioncheck.php';
?>

<html>
    <head>
        <?php include "head.php";?>
        <title>lesson</title>
    </head>
    <body>
        
        <?php include 'navbar.php';?>
        
        <header id="head" class="secondary">
                <div class="container">
                        <h1>Lessons</h1>
                </div>
        </header>

        <div class="container">
        </div>
        <div id="courses">
            <section class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="featured-box">
                            <div class ="list-group">
                            <?php include 'get-lesson.php';?>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>