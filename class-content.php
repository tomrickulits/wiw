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
                                   <div class="table-toolbar">
                                    <?php
                                 echo '<div class="btn-group">
                                         <a href="add-lesson.php?sid='.$_GET['osi'].'"><button class="btn btn-success">Add New <i class="icon-plus icon-white"></i></button></a>
                                      </div>'
                                    ?>
                                   </div>
                                    <br>
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                              <thead>
                                        <tr>
                                           
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php include 'get-lesson-list.php';?>
                                   
                                        
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                 
                   
                </div>
            </div>
            <hr>
       
    </body>