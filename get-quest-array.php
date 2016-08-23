<?php
$quizid=$_GET['quiz_id'];
$SID=$_SESSION['ST_ID'];
        $sel_user ="select * from QUIZ_QUESTION where QUIZ_ID='$quizid'";
        $run_user =mysqli_query($con,$sel_user);
        while($row = $run_user->fetch_array())
                {
                    $question=$row['QUESTION'];
                    $choice0=$row['CHOICE0'];
                    $choice1=$row['CHOICE1'];
                    $choice2=$row['CHOICE2'];
                    $choice3=$row['CHOICE3'];
                    $correct=$row['ANSWER'];
                    $send+='{"question: '.$question.'", choices: ['.$choice0.','.$choice1.','.$choice2.','.$choice3.'], correctAnswer:'.$correct.'},';
                }
        echo "$send";



?>