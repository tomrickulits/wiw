<?php 
include 'functions/connect.php';
$lestitle=$_POST['title'];
$lescontent=$_POST['myTextArea'];
$osid=$_GET['sid'];
$get_subid="select * from open_subjects where OPEN_SUB_ID=$osid";
$run_subid=mysqli_query($con,$get_subid);
while($row=$run_subid->fetch_array())
{
    $subid=$row['SUB_ID'];
    $sql = "insert into lesson (`LES_TITLE`,`LES_CONTENT`,`OPEN_SUB_ID`) VALUES ('$lestitle','$lescontent','$osid')";

        if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
            $get_lesid="select * from lesson where LES_TITLE='$lestitle' AND LES_CONTENT='$lescontent' AND OPEN_SUB_ID='$osid'";
            $run_lesid=mysqli_query($con,$get_lesid);
            while($row2=$run_lesid->fetch_array())
            {
                $lid=$row2['LES_ID'];
                header("Location:preview-lesson.php?LES_ID=$lid&osi=$osid");
            }
            
            
        } 
        else 
        {
        echo "Error: " . $sql . "<br>" . $con->error;
        }$con->close();
}

echo '<h2>You posted:</h2><hr />'. $lestitle . '<hr />' . stripslashes($lescontent);
    
?>