<?php
include "sessioncheck.php";
?>
<html>
    <head>
        <?php include "head.php";?>
        <title>Logged in as <?php include 'get-name.php'; ?></title>
    </head>
    <body>
        <?php include 'navbar.php';?>
        
        
        <header id="head" class="secondary">
            <div class="container">
                <h1>Subjects</h1>
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
                            <?php include 'subject-list.php';?>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>