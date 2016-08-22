<?php
include "tsessioncheck.php";
?>
    <head>
        <script src="wysiwyg/wysiwyg.js"></script>
        <?php include "head.php";
        
        ?> 
        <title>Logged in as <?php include 'get-name.php'; ?></title>
    </head>
<body onLoad="iFrameOn();">
    <?php include 'tnavbar.php';?>
    
        <header id="head" class="secondary">
            <div class="container">
                <h1>Add Lesson</h1>
            </div>
        </header>
    
        <div class="container">
            <br>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Category</div>
                            </div>
                            <div class="block-content collapse in">
                             <?php
                            echo '<form action="my_parse_file.php?sid='.$_GET['sid'].'" name="myform" id="myform" method="post">
                                <label>Title</label>
                                <input name="title" id="title" type="text" size="80" maxlength="80" >
                               
                            <!-- block -->
                             <div class="block-content collapse in">
                                        Entry Body:<br>
                                        <div id="wysiwyg_cp" style="padding:8px; width:700px;">
                                          <input type="button" onClick="iBold()" value="B"> 
                                          <input type="button" onClick="iUnderline()" value="U">
                                          <input type="button" onClick="iItalic()" value="I">
                                          <input type="button" onClick="iFontSize()" value="Text Size">
                                          <input type="button" onClick="iForeColor()" value="Text Color">
                                          <input type="button" onClick="iHorizontalRule()" value="HR">
                                          <input type="button" onClick="iUnorderedList()" value="UL">
                                          <input type="button" onClick="iOrderedList()" value="OL">
                                          <input type="button" onClick="iLink()" value="Link">
                                          <input type="button" onClick="iUnLink()" value="UnLink">
                                          <input type="button" onClick="iImage()" value="Image">
                                        </div>
                                        <!-- Hide(but keep)your normal textarea and place in the iFrame replacement for it -->
                                        <textarea style="display:none;" name="myTextArea" id="myTextArea" cols="100" rows="14"></textarea>
                                        <iframe name="richTextField" id="richTextField" style="border:#000000 1px solid; width:700px; height:300px;"></iframe>
                                        <!-- End replacing your normal textarea -->

                                        <br /><br /><input name="myBtn" type="button" value="Submit Data" onClick="javascript:submit_form();">
                                </div>
                            <!-- /block -->
                                    </form>'
                                ?>
                                                  
                            </div>
                            </div>
                   
                </div>
            </div>
            <hr>
       
    </body>