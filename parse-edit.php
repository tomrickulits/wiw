<?php 
include 'functions/connect.php';
$lestitle=$_POST['title'];
$lescontent=$_POST['myTextArea'];
$lesid=$_GET['lid'];
$subid=$row['SUB_ID'];
$sql = "update lesson set LES_TITLE='$lestitle', LES_CONTENT='$lescontent' where LES_ID=$lesid";
if ($con->query($sql) === TRUE) {
echo "New record created successfully";
    $get_lesid="select * from lesson where LES_ID=$lesid";
    $run_lesid=mysqli_query($con,$get_lesid);
    while($row2=$run_lesid->fetch_array())
    {
        $lid=$row2['LES_ID'];
        $osid=$row2['OPEN_SUB_ID'];
        header("Location:preview-lesson.php?LES_ID=$lid&osi=$osid");
    }


} 
else 
{
echo "Error: " . $sql . "<br>" . $con->error;
}$con->close();

echo '<h2>You posted:</h2><hr />'. $lestitle . '<hr />' . stripslashes($lescontent);
    
?>