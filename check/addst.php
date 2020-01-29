<?php
 include '../object/main.php';
$security=new security;
$connect=new connect;
$template=new template;

                          if(isset($_POST['submit']))
						  {
							if($_POST['codemeli']=='' || $_POST['shomareshenasname']=='' || $_POST['name']=='' 
							|| $_POST['family']=='' || $_POST['fathername']=='' || $_POST['field']=='' || $_POST['job']==''||$_POST['username']==''|| $_POST['password']==''|| $_POST['mobile']==''|| $_POST['date']==''|| $_POST['level']==''|| $_POST['address']=='')
							{
								$security->Redirect("../admin/addst","empty=4020");
								
								
								
								}  
								else{
							      $target_dir = "../admin/upload/";
								  $_SESSION['dir']=$target_dir;
								  $results = scandir('upload');
								  $_SESSION['res']=$results;
                                  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
								  $image=$_FILES["fileToUpload"]["name"];
								  $_SESSION['img']=$target_file;
                                  $uploadOk = 1;
                                  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
								 
                               // Check if image file is a actual image or fake image

                                 $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                                  if($check !== false) {
                                    echo "File is an image - " . $check["mime"] . ".";
                                    $uploadOk = 1;
                                   } else {
                                         echo "File is not an image.";
                                         $uploadOk = 0;
                                        }
                                    }
                                        // Check if file already exists
                                    if (file_exists($target_file)) {
                                           echo "Sorry, file already exists.";
                                            $uploadOk = 0;
                                     }
                                       // Check file size
                                    if ($_FILES["fileToUpload"]["size"] > 500000) {
                                            echo "Sorry, your file is too large.";
                                            $uploadOk = 0;
                                     }
                                      // Allow certain file formats
                                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                     && $imageFileType != "gif" ) {
                                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                     $uploadOk = 0;
                                      }
                                       // Check if $uploadOk is set to 0 by an error
                                    if ($uploadOk == 0) {
                                               echo "Sorry, your file was not uploaded.";
                                        // if everything is ok, try to upload file
                                       } else {
                                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                     echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                                    } else {
                                       echo "Sorry, there was an error uploading your file.";
                                     }
                                    }  
				
									$codemeli=$security->Check_Post($_POST['codemeli']);
									$shenasname=$security->Check_Post($_POST['shomareshenasname']);
									$name=$security->Check_Post($_POST['name']);
									$family=$security->Check_Post($_POST['family']);
									$fathername=$security->Check_Post($_POST['fathername']);
									$field=$security->Check_Post($_POST['field']);
									$job=$security->Check_Post($_POST['job']);
									$username=$security->Check_Post($_POST['username']);
									$password=$security->Check_Post($_POST['password']);
									$mobile=$security->Check_Post($_POST['mobile']);
									$date=$security->Check_Post($_POST['date']);
									$level=$security->Check_Post($_POST['level']);
									$address=$security->Check_Post($_POST['address']);
									$sql="INSERT INTO `students` (`codemeli`, `shenasname`, `fname`, `lname`, `fathername`, `field`,`job`,`username`,`password`, `mobile`, `date`,`level`, `address`) VALUES ('".$codemeli."','".$shenasname."','".$name."','".$family."','".$fathername."','".$field."','".$job."','".$username."','".$password."','".$mobile."','".$date."','".$level."','".$address."')";
									$result=$connect->query($sql);
						if($result)
			  {
				  $security->Redirect("../admin/addst","send=1010");
			  }
			  else{
				   $security->Redirect("../admin/addst","error=1020");
			  }
								}
							  
							  
							  
							  
							  
							  
						  ?>
                           
                            