<?php
include "asessioncheck.php";
?>
    <head>
        <script src="wysiwyg/wysiwyg.js"></script>
        <?php include "head.php";
        
        ?> 
        <title>Logged in as <?php include 'get-name.php'; ?></title>
    </head>
<body onLoad="iFrameOn();">
    <?php include 'anavbar.php';?>
    
        <header id="head" class="secondary">
            <div class="container">
                <h1>Subjects</h1>
            </div>
        </header>
    
        <div class="container">
            <br>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <?php
                 echo '<div class="btn-group">
                     <a href="add-subject.php"><button class="btn btn-success">Add Subject <i class="icon-plus icon-white"></i></button></a>
                      </div>'
                ?>
                <div class="block">
                                <div class="muted pull-left"><h2>Open a Subject</h2></div>
                            
                            <div class="block-content collapse in">
                             <?php
                            echo '<br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <form action="parse-add-open-subject.php" name="myform" id="myform" method="post">
                                <label>Subject ID&nbsp</label>
                                <input name="sid" id="sid" type="text" size="80" maxlength="80" >
                                <br>
                                <label>Section ID&nbsp</label>
                                <input name="subid" id="subid" type="text" size="80" maxlength="80" >
                                <br>
                                <label>Year&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                                <input name="y" id="y" type="text" size="80" maxlength="80" >
                                <br>
                                <label>Teacher ID</label>
                                <input name="tid" id="tid" type="text" size="80" maxlength="80" >
                                <br>
                                <input name="myBtn" type="button" value="Submit Data" onClick="javascript:submit_form();">

                                </form>'
                                ?>
                                                  
                            </div>
                            </div>
                   
                </div>
            </div>
            <hr>
       
    </body>