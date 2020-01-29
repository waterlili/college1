                   <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            
                                <?php 
								  //echo '<img src="'.$_SESSION['img'].'" alt="..." width="50px" height="50px">';
                               ?>
                                
                            <span class="username"><?php echo $_SESSION['student_name']; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            
                            <li class="foryou"><a href="../student/index.php" ><i class="icon-suitcase"></i>پروفایل</a></li>
                            <li><a href="inc_temp/logout.php"><i class="icon-key"></i> خروج</a></li>
                        </ul>
                    </li>
                   
                