                        <?php
                                
                                $server             ="localhost";
                                $username               ="aurevoir";
                                $password               ="qwSIM+[y}lQo";
                                $db_name                ="aurevoir";
                                $connect                =mysqli_connect($server,$username,$password,$db_name);
                                
                                if (mysqli_connect_errno()) {
                                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                        exit();
                                }

                        ?>