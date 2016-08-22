<?php 
                    if (isset($_SESSION['ST_ID']))
                    {
                            echo $_SESSION['ST_FNAME'];

                    }
                    if (isset($_SESSION['T_ID']))
                    {
                            echo $_SESSION['T_FNAME'];
                    }
                    else
                    {
                        echo 'something went wrong';
                    }
?>