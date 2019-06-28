
 <?php         
                       session_start();           $host="localhost"; 
                        // Host name         
 						 $username="root"; 
						  // Mysql username          

    $password=""; 
    // Mysql password 

 
          $db_name="admin"; // Database name          
           $tbl_name="adminlogin"; // Table name 
 
          // Connect to server and select databse.          
           mysql_connect("$host", "$username", "$password")or die("cannot connect");          
            mysql_select_db("$db_name")or die("cannot select DB"); 
 
         // username and password sent from form        
           $myusername=$_POST['username'];          $mypassword=$_POST['password'];         
          $sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";          $result=mysql_query($sql); 
 
        // Mysql_num_row is counting table row        
         $count=mysql_num_rows($result); 
 
         // If result matched
          $myusername and $mypassword, table row must be 1 row 
 
         if($count>0)         
          { session_regenerate_id();
           $member = mysql_fetch_assoc($result); $_SESSION['SESS_FIRST_NAME'] = $member['username']; $_SESSION['SESS_LAST_NAME'] = $member['password']; session_write_close(); 

           header("location: adminlogin1.php");

            exit();
             }else {
              //Login failed
               $errmsg_arr[] = 'user name and password not found'; 
               $errflag = true; 
               if($errflag) {
                $_SESSION['ERRMSG_ARR'] = $errmsg_arr; session_write_close();
                 header("location: adminlogin.php"); 
                 exit(); 
             }

              }
                  ?>
                   <?php
                    require '../include/connection.php';         
                           $result = mysqli_query($con,"SELECT * FROM student");      
                                while($row = mysqli_fetch_array($result))           {              $libid=$row['libid'] ; 
 
 

             $regno= $row['regno'] ;            
               $name= $row['stuname'] ;            
                 $branch= $row['branch'] ;            
                   $semester= $row['semester'] ;             
                    $section= $row['section'] ;             
                     $yearofadm= $row['yearofadm'];    
                      $email=$row['email'];    
                  $username= $row['username'];    

                   $password= $row['password'];         
                     }    
                      mysqli_close($con);   
                   ?> 
                   <?php 

            require '../include/connection1.php'; 
            $admin="admin@soelibrary.com"; 
            $sql="INSERT INTO student(Libid,regno,stuname,branch,semester,section,yearofadm)
             VALUES
             ('$libid','$regno','$name','$branch','$semester','$section','$yearofadm')";
               $result="INSERT INTO studentlogin(logid,username,password,numbooks) 
               VALUES
                ('$libid','$username','$password','')";
                 if (!mysqli_query($connection,$sql))  
                  {   
                  	die('Error1: ' . mysqli_error($connection));   
                  }  
                   else if (!mysqli_query($connection,$result)) 
                    {   die('Error2: ' . mysqli_error($connection));
                       } 
                         else     mail($email,"registrationdetails","you are registered pls login with ur email id and password","From: $admin\n");

                         echo"added 1 record";  
                          mysqli_close($connection);  
                          ?> 
        <?php   require '../include/connection.php'; 
           $result = mysqli_query($con,"SELECT * FROM student"); 
                     while($row = mysqli_fetch_array($result))         
                       {          $libid=$row['libid'];            
                       $regno= $row['regno'] ;             
                        $name= $row['stuname'] ;             

                         $branch= $row['branch'] ;             
                          $semester= $row['semester'];           
                             $section= $row['section'] ; 

 
             $yearofadm= $row['yearofadm'];    
              $email=$row['email']; 
                 $username= $row['username'];   
                   $password= $row['password'];  
                            }
                   $sql=mysqli_query($con,"DELETE FROM student WHERE libid='$libid'");      
                     mysqli_close($con); 
                     ?>




<?php
   $con=mysqli_connect("localhost","root","rahul#1991","library"); // Check connection
    if (mysqli_connect_errno())  
     {   echo "Failed to connect to MySQL: " . mysqli_connect_error();  
      }  
       $loginid=$_POST['teacherid']; 
         $username=$_POST['username'];

            $password=$_POST['password']; 

              $teachername=$_POST['teachername']; 
                $designation=$_POST['designation']; 
                  $branch=$_POST['branch']; 
                    $contactno=$_POST['contact'];  

                   $lecture='';
                    $sql="INSERT INTO teacher (Tid, name, designation, branch, contactno,lectures) VALUES ( $loginid,$teachername,$designation,$branch,$contactno,$lecture)";
                     $tql="INSERT INTO teacherlogin ($loginid,$username,$password) VALUES ( $loginid,$username, $password)"; if (!mysqli_query($con,$sql)) 
                       {   echo "error";   }  
                        if (!mysqli_query($con,$tql))  
                         {   echo "error1"; 
                           }
                            echo "successs"; 
 
mysqli_close($con); 

?> 

 
<?php $con=mysqli_connect("localhost","root","","library");
 // Check connection 
if (mysqli_connect_errno())
   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   } 
 
$sql="INSERT INTO books (code, bookname, author, publication, subject, numberofbooks) VALUES ('$_POST[bookid]','$_POST[bookname]','$_POST[author]','$_POST[publication]','$_P OST[subject]','$_POST[numberofbooks]')"; 
 
if (!mysqli_query($con,$sql))   {   echo "error";   } echo "successs"; 
 
mysqli_close($con); ?> <?php $con=mysqli_connect("localhost","root","","admin"); // Check connection 
if (mysqli_connect_errno())   { 
  echo "Failed to connect to MySQL: " . mysqli_connect_error();   } 
 
$sql="INSERT INTO newarrivals (code, bookname, author, publication, subject, numberofbooks,arrivaldate) VALUES ('$_POST[bookid]','$_POST[bookname]','$_POST[author]','$_POST[publication]','$_P OST[subject]','$_POST[numberofbooks]','$_POST[arrivaldate]')"; 
 
if (!mysqli_query($con,$sql))   {   echo "error";   } echo "successs"; mysqli_close($con); 
 
 
?> 

 