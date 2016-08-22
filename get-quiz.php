<?php
include 'functions/connect.php';

    $STID=$_SESSION['ST_ID'];
    $sel_user ="select * from enroll_list where ST_ID='$STID'";
    $run_user =mysqli_query($con,$sel_user);
    $check_user = mysqli_num_rows($run_user);
    while($row=$run_user->fetch_array())
    {
        $opsubid=$row['OPEN_SUB_ID'];
        $sel_opsub="select * from open_subjects where OPEN_SUB_ID='$opsubid'";
        $run_opsub=mysqli_query($con,$sel_opsub);
        
        while($opsubrow=$run_opsub->fetch_array())
        {
            $subid=$opsubrow['SUB_ID'];
            $sel_sub="select * from subject where SUB_ID=$subid";
            $run_sub=mysqli_query($con,$sel_sub);
            while($subrow=$run_sub->fetch_array())
            {
                $subtitle=$subrow['SUB_NAME'];
            echo "<h1>$subtitle</h3>";
            }
            
            $sel_quiz="select * from quiz where SUB_ID=$subid";
            $run_quiz=mysqli_query($con,$sel_quiz);
            while($quizrow=$run_quiz->fetch_array())
            {
             $title=$quizrow['QUIZ_TITLE'];
             $quizid=$quizrow['QUIZ_ID'];
             echo "<h3><a href='quiz.php?quiz_id=".$quizid."'>$title</a></h3><br>";   
            }
            
        }
        
        
        
        
        
    }


?>