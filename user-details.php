<?php include 'sessioncheck.php';?>
<html>
    <head>
        <?php include "head.php";?>
        <title>My Profile</title>
    </head>
    <body>
        <?php include 'navbar.php';?>
        
        <header id="head" class="secondary">
            <div class="container">
                <h1>User Details</h1>
            </div>
        </header>
        
        <div class="container"></div>
        
        <div id="courses">
            <section class="container">
                <h3>Account Information</h3>
                <div class="row">
                    <div class="col-md-8">
                        <div class="featured-box">
                            <?php
                            include 'functions/connect.php';
                            $SID=$_SESSION['ST_ID'];
                            $sel_user ="select * from students where ST_ID='$SID'";
                            $run_user =mysqli_query($con,$sel_user);
                            $check_user = mysqli_num_rows($run_user);

                            while($row = $run_user->fetch_array())
                            {
                                $id=$row['ST_ID'];
                                $fname=$row['ST_FNAME'];
                                $mname=$row['ST_MNAME'];
                                $lname=$row['ST_LNAME'];
                                
                                $sel_el ="select * from enroll_list where ST_ID='$SID'";
                                $run_el =mysqli_query($con,$sel_el);
                                while ($elrow=$run_el->fetch_array())
                                {
                                    $opsubid=$elrow['OPEN_SUB_ID'];
                                    $sel_opsub="select * from open_subjects where OPEN_SUB_ID=$opsubid";
                                    $run_opsub=mysqli_query($con,$sel_opsub);
                                    while($opsubrow=$run_opsub->fetch_array())
                                    {
                                        $secid=$opsubrow['SEC_ID'];
                                        $sel_sec="select * from section where SEC_ID=$secid";
                                        $run_sec=mysqli_query($con,$sel_sec);
                                        while($secrow=$run_sec->fetch_array())
                                        {
                                            $secname=$secrow['SEC_NAME'];
                                        }
                                        
                                    }
                                }
                                
                                
                            }
                            ?>
                            <form>
                                <label>First Name</label><br>
                                <input type="text" name="fname" id="form" value="<?php echo $fname;?>" readonly>
                                <br>
                                <label>Middle Name</label><br>
                                <input type="text" id="form" value="<?php echo $mname; ?>" readonly>
                                <br>
                                <label>Last Name</label><br>
                                <input type="text" id="form" value="<?php echo $lname;?>" readonly>
                                <br>
                                <label>Section</label><br>
                                <input type="text" id="form" value="<?php echo $secname;?>" readonly>
                            </form>
                                <tr>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
    </body>
</html>