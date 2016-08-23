<?php
include "tsessioncheck.php";
?>
    <head>
        <?php include "head.php";?>
        <title>Logged in as <?php include 'get-name.php'; ?></title>
    </head>
<body>
    <?php include 'tnavbar.php';?>
    
        <header id="head" class="secondary">
            <div class="container">
                <h1><?php include 'get-section.php';?></h1>
            </div>
        </header>
    
        <div class="container">
            <br>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span9" id="content">
                
                   <div class="row-fluid">
                        <!-- block -->
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <?php include 'get-lesson.php';?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                 
                   
                </div>
            </div>
            <hr>
       
    </body>