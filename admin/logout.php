 <?php

                                session_start();
								
								print_r($_SESSION);
                                session_unset();
                                header("Location: login.php"); 
                                ?>