 <?php  
   // define variables and set to empty value
  $libidErr = $regnoErr = $stunameErr = $branchErr = $semesterErr = $sectionErr = $yearofadmErr = $usernameErr = $passwordErr = ""; $libid = $regno = $stuname = $branch = $semester = $section = $yearofadm = $username = $password = ""; 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
 
   if (empty($_POST["libid"]))      {$libidErr = "libid is required";    echo $libidErr;      include("createaccount.php");      } 

 
   else      {$libid= test_input($_POST["libid"]);}        if (empty($_POST["regno"]))      {$regnoErr = "Registration number is required";   echo $regnoErr;       include("createaccount.php");    }    else      {$regno = test_input($_POST["regno"]);}          if (empty($_POST["stuname"]))      { $stunameErr = "student name is required";    echo $stunameErr;      include("createaccount.php");    }       else      {$stuname = test_input($_POST["stuname"]);} 
 
   if (empty($_POST["branch"]))      {$branchErr = " branch is required" ;        echo $branchErr;      include("createaccount.php");      }    else      {$branch = test_input($_POST["branch"]);        } 
 
   if (empty($_POST["semester"]))      {$semesterErr = "semester is required";   echo $semesterErr;      include("createaccount.php");    }    else      {$semester = test_input($_POST["semester"]);}        if (empty($_POST["section"]))      {$sectionErr = "section is required";   echo $sectionErr;      include("createaccount.php");    }    else      {$section = test_input($_POST["section"]);}     

 
 
   if (empty($_POST["yearofadm"]))      {$yearofadmErr = "year of adm. is required";   echo $yearofadmErr;      include("createaccount.php");    }    else      {$yearofadm = test_input($_POST["yearofadm"]);      }    if (empty($_POST["username"]))      {$usernameErr = "username is required";   echo $usernameErr;      include("createaccount.php");    }    else      {$username = test_input($_POST["username"]);      }    if (empty($_POST["password"]))      {$passwordErr = "password is required";   echo $passwordErr;      include("createaccount.php");    }    else      {$password = test_input($_POST["password"]);}     }     function test_input($data) {      $data = trim($data);      $data = stripslashes($data);      $data = htmlspecialchars($data);   return $data;    } ?> <?php $con=mysqli_connect("localhost","root","","admin"); // Check connection
    if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   } 
 

 
 $sql="INSERT INTO student(libid,regno,stuname,branch,semester,section,yearofadm,email,username,pass word) VALUES ('$_POST[libid]','$_POST[regno]','$_POST[stuname]','$_POST[branch]','$_POST[s emester]','$_POST[section]','$_POST[yearofadm]','$_POST[email]','$_POST[userna me]','$_POST[password]')"; if (!mysqli_query($con,$sql))   {   die('Error: ' . mysqli_error($con));   }   echo "wait for conformation";   mysqli_close($con); ?> 
 
  
 
 
                   <?php     //Start session    
 session_start();     //Unset the variables stored in session   
   unset($_SESSION['SESS_username']);    
            unset($_SESSION['SESS_password']);  ?> <!DOCTYPE html> <html  xml:lang="EN" lang="EN" dir="ltr"> <head> <title>SOE LIBRARY INFORMATION SYSTEM</title> <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> <meta http-equiv="imagetoolbar" content="no" /> <link rel="stylesheet" href="../styles/layout.css" type="text/css" /> <!-- Homepage Specific Elements --> <script type="text/javascript" src="../scripts/jquery-1.4.1.min.js"></script> <script type="text/javascript" src="../scripts/jquery-ui1.7.2.custom.min.js"></script> <script type="text/javascript" src="../scripts/jquery.tabs.setup.js"></script> <!-- End Homepage Specific Elements --> </head> <body id="top"> <div class="wrapper row1">   <div id="header" class="clear">     <div class="fl_left"> 

      <h1><a href="homepage.php">SOE LIBRARY MANAGEMENT SYSTEM</a></h1>      <p></p>      </div>     <div class="fl_right">       <ul>         <li><a href="http://localhost/xampp/project/library/homepage.php">Home</a></li>         <li><a href="http://localhost/xampp/project/library/contact/Contactus.php">Contact Us</a></li>         <li><a href="http://localhost/xampp/project/library/egateway/egateway.php">EGateway</a></li>         <li><a href="http://localhost/xampp/project/library/studentlogin/studentlogin.php">Student Login</a></li>         <li ><a href="teacherlogin.php">Teacherlogin</a></li>   <li><a href="http://localhost/xampp/project/library/admin/adminlogin.php">Adminlogin</a ></li>       </ul>       <form action="#" method="post" id="sitesearch">         <fieldset>           <strong>Search:</strong>           <input type="text" value="Search Our webiste for books;" onfocus="this.value=(this.value=='Search Our website for books;')? '' : this.value ;" />           <input type="image" src="../images/search.gif" id="search" alt="Search" />         </fieldset>       </form>     </div>   </div> </div> <!-- #################################################################### ################################### --> <div class="wrapper row2">   <div class="rnd">     <!-- ###### -->     <div id="topnav">       <ul>         <li class="active"><a href="http://localhost/xampp/project/library/homepage.php">Home</a></li>         <li><a href="http://localhost/xampp/project/library/newarrivals.php">New Arrivals</a></li> 
 
 
        <li><a href="http://localhost/xampp/project/library/onlinebooks.php">Online Books</a></li>         <li><a href="http://localhost/xampp/project/library/egallery.php">E Gallery</a></li>         <li><a href="http://localhost/xampp/project/library/questionpaper.php">Question Paper</a></li>         <li><a href="http://localhost/xampp/project/library/aboutus.php">About Us</a></li>         <li><a href="http://localhost/xampp/project/library/bookissue.php">Book Issue </a></li>         <li class="last"><a href="#"></a></li>       </ul>     </div>     <!-- ###### -->   </div> </div> <!-- #################################################################### ################################### --> <div class="wrapper">   <div id="featured_slide" class="clear">     <!-- ###### -->     <div class="overlay_left"></div>     <div id="featured_content">       <div class="featured_box" id="fc1"><img src="../images/demo/slider/1.gif" alt="" />         <div class="floater">           <h2>All ABOUT SOE LIBRARY</h2>           <p>School oF Engineering Library or the S.O.E library is one of the finest library in kerela having a good collection of books related to various subjects</p>           <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>         </div>       </div>       <div class="featured_box" id= "fc2"><img src="../images/demo/slider/2.gif" alt="" />         <div class="floater">           <h2>Existence</h2>           <p>School oF Engineering library came into existence in year 1995 and from then on it has been a premier source of information for college students</p>           <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>         </div>       </div>       <div class="featured_box" id="fc3"><img src="../images/demo/slider/3.gif" alt="" />         <div class="floater"> 

 
          <h2>Collection</h2>           <p> Library has a collection of over 25000 books related to various subjects in engineering</p>           <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>         </div>       </div>       <div class="featured_box" id="fc4"><img src="../images/demo/slider/4.gif" alt="" />         <div class="floater">           <h2>E-Repository</h2>           <p>School oF Engineering Library has a collection of 6000 cds and 2800 online journals and also has a section where teachers upload their lectures notes and student can download them.</p>           <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>         </div>       </div>       <div class="featured_box" id="fc5"><img src="../images/demo/slider/5.gif" alt="" />         <div class="floater">           <h2>Latest News and events</h2>           <p></p>           <p class="readmore"><a href="#">Click here to go to latest news page;</a></p>         </div>       </div>     </div>     <ul id="featured_tabs">       <li><a href="#fc1">All About The Library</a></li>       <li><a href="#fc2">Existence</a></li>       <li><a href="#fc3">Collection of Books</a></li>       <li><a href="#fc4">E-Repository</a></li>       <li class="last"><a href="#fc5">Latest News &amp; Events</a></li>     </ul>     <div class="overlay_right"></div>     <!-- ###### -->   </div> </div> 
 
<!-- #################################################################### ################################### --> <div class="wrapper row3">   <div class="rnd">     <div id="container" class="clear"> 

 
      <!-- #################################################################### ################################### -->       <div id="homepage" class="clear">         <!-- ###### -->         <div id="left_column">           <h2>Sugeestion</h2>           <div class="imgholder"><a href="#"><img src="../images/images/suggestions.jpg" alt="" /></a></div>           <h2>Book request</h2>           <div class="imgholder"><a href="#"><img src="../images/images/bookrequest1.jpg" alt="" /></a></div>           <h2>Account creation</h2>           <div class="imgholder"><a href="#"><img src="../images/images/account.jpg" alt="" /></a></div>           <h2>Photos</h2>           <div class="imgholder"><a href="#"><img src="../images/images/photos.jpg" alt="" /></a></div>         </div>         <!-- ###### -->         <div id="latestnews">           <h2>Pls enter username and password to login</h2>     <table> <form action="checklogin.php" method="post"><br><br> Username:<input name="username" type="text" maxlength="12"><br><br> Password:<input name="password" type="password" maxlength="12"> <input name="submit" type="submit"> </form> </table> 
 
        </div>         <!-- ###### -->                  <!-- ###### -->       </div>       <!-- #################################################################### ################################### -->       <!-- #################################################################### ################################### -->       <div id="academiclinks" class="clear">         <h2>Quickly Find What You Are Looking For</h2>         <div class="linkbox">           <ul> 

 
            <li><a href="http://localhost/xampp/project/library/homepage.php">&raquo; Home</a></li>             <li><a href="http://localhost/xampp/project/library/studentlogin.php">&raquo; Student Login</a></li>             <li><a href="teacherlogin.php">&raquo; Teacher Login</a></li>             <li><a href="http://localhost/xampp/project/library/adminlogin.php">&raquo; Adminlogin</a></li>             <li><a href="http://localhost/xampp/project/library/newarrival.php">&raquo; New Arrivals</a></li>             <li><a href="http://localhost/xampp/project/library/onlinebooks.php">&raquo; Online Books</a></li>             <li><a href="http://localhost/xampp/project/library/egallery.php">&raquo; E-Gallery</a></li>             <li><a href="http://localhost/xampp/project/library/aboutus.php">&raquo; About Us</a></li>             <li><a href="http://localhost/xampp/project/library/contactus.php">&raquo; Contact Us</a></li>             <li><a href="http://localhost/xampp/project/library/questionpaper.php">&raquo; Question Papers</a></li>             <li><a href="http://localhost/xampp/project/library/latestnews.php">&raquo; Latest Events & News</a></li>           </ul>         </div>                <!-- #################################################################### ################################### -->     </div>   </div> </div> <!-- #################################################################### ################################### --> 
 
<!-- #################################################################### ################################### --> <div class="wrapper">   <div id="copyright" class="clear">     <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved  for SOE LIBRARY-</p> 

  </div> </div> </body> </html> 
 
<?php            session_start();           $host="localhost";
 // Host name         
   $username="root";
    // Mysql username           
    $password=""; // Mysql password         
                                 $db_name="library"; // Database name         
                                   $tbl_name="studentlogin"; // Table name 
 
                      // Connect to server and select databse.         
                        mysql_connect("$host", "$username", "$password")or die("cannot connect");      
                             mysql_select_db("$db_name")or die("cannot select DB"); 
 
         // username and password sent from form        

           $myusername=$_POST['username'];     
                $mypassword=$_POST['password'];      
                    $sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";        
                      $result=mysql_query($sql); 
 
        // Mysql_num_row is counting table row        
         $count=mysql_num_rows($result); 
 
         // If result matched$myusername and $mypassword, table row must be 1 row 
 
         if($count>0)          { session_regenerate_id(); $member = mysql_fetch_assoc($result); $_SESSION['SESS_username'] = $member['username']; $_SESSION['SESS_password'] = $member['password']; session_write_close(); header("location:studentlogin1.php"); exit(); }else { //Login failed
          $errmsg_arr[] = 'user name and password not found'; $errflag = true; if($errflag) { $_SESSION['ERRMSG_ARR'] = $errmsg_arr; session_write_close(); header("location: studentlogin.php"); exit(); 

 
}
 }    ?> 
 

<?php 
$con=mysqli_connect("localhost","root","","admin"); // Check connection
 if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   } 
 
 $sql="INSERT INTO event(Name,date,time,venue,mname,contactno,email) VALUES ('$_POST[ename]','$_POST[date]','$_POST[time]','$_POST[venue]','$_POST[name ]','$_POST[phno]','$_POST[email]')"; if (!mysqli_query($con,$sql))   {   die('Error: ' . mysqli_error($con));   }   echo "wait for conformation";  mysqli_close($con); 


 ?> 





 <?php            session_start();           $host="localhost"; // Host name       
     $username="root"; // Mysql username       
         $password=""; // Mysql password         
           $db_name="library"; // Database name       
               $tbl_name="teacherlogin"; // Table name 
 
          // Connect to server and select databse.       
              mysql_connect("$host", "$username", "$password")or die("cannot connect");        
                 mysql_select_db("$db_name")or die("cannot select DB"); 
 
         // username and password sent from form         
          $myusername=$_POST['username'];         
           $mypassword=$_POST['password'];        
             $sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'"; 

 
         $result=mysql_query($sql); 
 
        // Mysql_num_row is counting table row        
         $count=mysql_num_rows($result); 
 
         // If result matched $myusername and $mypassword, table row must be 1 row 
 
         if($count>0)          { session_regenerate_id(); $member = mysql_fetch_assoc($result); $_SESSION['SESS_username'] = $member['username']; $_SESSION['SESS_password'] = $member['password']; session_write_close(); header("location:teacherlogin1.php"); exit(); }else { //Login failed
          $errmsg_arr[] = 'user name and password not found'; $errflag = true; if($errflag) { $_SESSION['ERRMSG_ARR'] = $errmsg_arr; session_write_close(); header("location: teacherlogin.php"); exit(); } }    ?> 
 
                            
 

 
 
          <?php         


               session_start();                 require '../include/connection1.php';     

                $sql = mysqli_query($connection,"SELECT * FROM studentlogin where username='$_SESSION[SESS_username]'&& password='$_SESSION[SESS_password]'");          
                  $rocount=mysqli_num_rows($sql);      if($rocount==1)     {       while($row = mysqli_fetch_array($sql))              {     $logid=$row['logid'];              $username= $row['username'] ;              $password= $row['password'] ;              $numbooks= $row['numbooks'];              }     }      $result = mysqli_query($connection,"SELECT * FROM student where libid='$logid'");            $rowcount=mysqli_num_rows($result);      if($rowcount==1)     {       while($row = mysqli_fetch_array($result))             {              $libid=$row['libid'];              $regno= $row['regno'] ;              $stuname= $row['stuname'] ;              $branch= $row['branch'] ;              $semester= $row['semester'] ; 

             $section= $row['section'] ;              $yearofadm= $row['yearofadm'] ;     }         }                 mysqli_close($connection);   ?>    <?php      require'../include/connection.php';    $sql="INSERT INTO suggest ( libid,suggestion) VALUES ('$libid','$_POST[suggestion]')"; 
 
if (!mysqli_query($con,$sql))   {   echo "error";   } echo "successs";  mysqli_close($con); 
  ?> 
 
 
 4.1.4.1  Code For Adding New books                                                    <?php $con=mysqli_connect("localhost","root","","library"); // Check connection if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   } 
 
$sql="INSERT INTO books (code, bookname, author, publication, subject, numberofbooks) VALUES ('$_POST[bookid]','$_POST[bookname]','$_POST[author]','$_POST[publication]','$_P OST[subject]','$_POST[numberofbooks]')"; 
 
if (!mysqli_query($con,$sql))   {   echo "error";   } echo "successs"; 
 
BOOK MAINTENANCE 
ADD NEW BOOK SEARCH BOOK 
Library Management System 
 
 Division Of Computer Science And Engineering Page 70 
 
mysqli_close($con); ?> <?php $con=mysqli_connect("localhost","root","","admin"); // Check connection if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   } 
 
$sql="INSERT INTO newarrivals (code, bookname, author, publication, subject, numberofbooks,arrivaldate) VALUES ('$_POST[bookid]','$_POST[bookname]','$_POST[author]','$_POST[publication]','$_P OST[subject]','$_POST[numberofbooks]','$_POST[arrivaldate]')"; 
 
if (!mysqli_query($con,$sql))   {   echo "error";   } echo "successs"; mysqli_close($con); ?> 
 
4.1.4.2  Code For Book Search 
 
 
<!DOCTYPE html> <html  xml:lang="EN" lang="EN" dir="ltr"> <head> <title>SOE LIBRARY INFORMATION SYSTEM</title> <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> <meta http-equiv="imagetoolbar" content="no" /> <link rel="stylesheet" href="../styles/layout.css" type="text/css" /> <!-- Homepage Specific Elements --> <script type="text/javascript" src="../scripts/jquery-1.4.1.min.js"></script> <script type="text/javascript" src="../scripts/jquery-ui-1.7.2.custom.min.js"></script> <script type="text/javascript" src="../scripts/jquery.tabs.setup.js"></script> <!-- End Homepage Specific Elements --> </head> <body id="top"> <div class="wrapper row1">   <div id="header" class="clear">     <div class="fl_left">       <h1><a href="homepage.php">SOE LIBRARY MANAGEMENT SYSTEM</a></h1> 
Library Management System 
 
 Division Of Computer Science And Engineering Page 71 
 
     <p></p>      </div>     <div class="fl_right">       <ul>         <li><a href="homepage.php">Home</a></li>        <li><a href="http://localhost/xampp/project/library/contact/Contactus.php">Contact Us</a></li>         <li><a href="http://localhost/xampp/project/library/egateway/egateway.php">EGateway</a></li>         <li><a href="http://localhost/xampp/project/library/studentlogin/studentlogin.php">Student Login</a></li>         <li ><a href="http://localhost/xampp/project/library/teachrlogin/teacherlogin.php">Teacherlogi n</a></li>   <li><a href="http://localhost/xampp/project/library/admin/adminlogin.php">Adminlogin</a></ li>       </ul>       <form action="#" method="post" id="sitesearch">         <fieldset>           <strong>Search:</strong>           <input type="text" value="Search Our webiste for books;" onfocus="this.value=(this.value=='Search Our website for books;')? '' : this.value ;" />           <input type="image" src="images/search.gif" id="search" alt="Search" />         </fieldset>       </form>     </div>   </div> </div> 
 
<!-- ####################################################################### ################################ --> <div class="wrapper row2">   <div class="rnd">     <!-- ###### -->     <div id="topnav">       <ul>         <li class="active"><a href="homepage.php">Home</a></li>         <li><a href="http://localhost/xampp/project/library/newarrivals/newarrivals.php">New Arrivals</a></li>         <li><a href="http://localhost/xampp/project/library/onlinebooks/onlinebooks.php">Online Books</a></li> 
Library Management System 
 
 Division Of Computer Science And Engineering Page 72 
 
        <li><a href="http://localhost/xampp/project/library/egallery/egallery.php">E Gallery</a></li>         <li><a href="http://localhost/xampp/project/library/questionpaper/questionpaper.php">Questio n Paper</a></li>         <li><a href="http://localhost/xampp/project/library/aboutus/aboutus.php">About Us</a></li>         <li><a href="http://localhost/xampp/project/library/abouts/bookissue.php">Book Issue </a></li>         <li class="last"><a href="#"></a></li>       </ul>     </div>     <!-- ###### -->   </div> </div> <!-- ####################################################################### ################################ --> <div class="wrapper">   <div id="featured_slide" class="clear">     <!-- ###### -->     <div class="overlay_left"></div>     <div id="featured_content">       <div class="featured_box" id="fc1"><img src="../images/demo/slider/12.gif" alt="" />         <div class="floater">           <h2>All ABOUT SOE LIBRARY</h2>           <p>School oF Engineering Library or the S.O.E library is one of the finest library in kerela having a good collection of books related to various subjects</p>           <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>         </div>       </div>       <div class="featured_box" id= "fc2"><img src="../images/demo/slider/21.gif" alt="" />         <div class="floater">           <h2>Existence</h2>           <p>School oF Engineering library came into existence in year 1995 and from then on it has been a premier source of information for college students</p>           <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>         </div>       </div>       <div class="featured_box" id="fc3"><img src="../images/demo/slider/31.gif" alt="" />         <div class="floater">           <h2>Collection</h2> 
Library Management System 
 
 Division Of Computer Science And Engineering Page 73 
 
          <p>School of Engineering Library has a collection of over 25000 books related to various subjects in engineering</p>           <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>         </div>       </div>       <div class="featured_box" id="fc4"><img src="../images/demo/slider/41.gif" alt="" />         <div class="floater">           <h2>E-Repository</h2>           <p>School oF Engineering Library has a collection of 6000 cds and 2800 online journals and also has a section where teachers upload their lectures notes and student can download them.</p>           <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>         </div>       </div>       <div class="featured_box" id="fc5"><img src="../images/demo/slider/51.gif" alt="" />         <div class="floater">           <h2>Latest News and events</h2>           <p></p>           <p class="readmore"><a href="#">Click here to go to latest news page;</a></p>         </div>       </div>     </div>     <ul id="featured_tabs">       <li><a href="#fc1">All About The Library</a></li>       <li><a href="#fc2">Existence</a></li>       <li><a href="#fc3">Collection of Books</a></li>       <li><a href="#fc4">E-Repository</a></li>       <li class="last"><a href="#fc5">Latest News &amp; Events</a></li>     </ul>     <div class="overlay_right"></div>     <!-- ###### -->   </div> </div> <!-- ####################################################################### ################################ --> <div class="wrapper row3">   <div class="rnd">     <div id="container" class="clear">       <!-- ####################################################################### ################################ -->       <div id="homepage" class="clear">         <!-- ###### --> 
Library Management System 
 
 Division Of Computer Science And Engineering Page 74 
 
        <div id="left_column">           <h2>Sugeestion</h2>           <div class="imgholder"><a href="#"><img src="../images/images/suggestions.jpg" alt="" /></a></div>           <h2>Book request</h2>           <div class="imgholder"><a href="#"><img src="../images/images/bookrequest1.jpg" alt="" /></a></div>           <h2>Account creation</h2>           <div class="imgholder"><a href="http://localhost/xampp/project/library/create/createaccount.php"><img src="../images/images/account.jpg" alt="" /></a></div>           <h2>Photos</h2>           <div class="imgholder"><a href="#"><img src="../images/images/photos.jpg" alt="" /></a></div>         </div>         <!-- ###### -->         <div id="latestnews">           <h2>ENTER BOOK DETAILS</h2>      
 
    <table> <form action="advancesearchresult.php" method="POST"> <legend>Book Information:</legend> <tr> <td>Book Code:</td> <td><input type="text" name="bookcode" size="30"><br><br></td> </tr> <tr> <td>Book Name:  </td> <td><input type="text" name="bookname" size="30"><br><br></td> </tr> <tr> <td>Publication:   </td> <td>   <input type="text" name="publication" size="30"><br><br></td> </tr> <tr> <td>Author Name:     </td> <td>       <input type="text"name="authorname" size="30"><br><br></td> </tr> <tr> <td><p>Click the submit</p></td> </tr> <tr> <td height="40"><input type="submit" name= "submit" value="submit" action= "insertaccount.php"></td> </tr> 
Library Management System 
 
 Division Of Computer Science And Engineering Page 75 
 
</form> </table>                      <p class="readmore"><a href="#"></a></p>         </div>         <!-- ###### -->         </div>       
 
           <!-- ###### -->       </div>           <!-- ####################################################################### ################################ -->       <!-- ####################################################################### ################################ -->       <div id="academiclinks" class="clear">         <h2>Quickly Find What You Are Looking For</h2>         <div class="linkbox">           <ul>             <li><a href="http://localhost/xampp/project/library/homepage.php">&raquo; Home</a></li>             <li><a href="http://localhost/xampp/project/library/studentlogin.php">&raquo; Student Login</a></li>             <li><a href="http://localhost/xampp/project/library/teacherlogin.php">&raquo; Teacher Login</a></li>             <li><a href="http://localhost/xampp/project/library/adminlogin.php">&raquo; Adminlogin</a></li>             <li><a href="http://localhost/xampp/project/library/newarrivals.php">&raquo; New Arrivals</a></li>             <li><a href="http://localhost/xampp/project/library/onlinebooks.php">&raquo; Online Books</a></li>             <li><a href="http://localhost/xampp/project/library/egallery.php">&raquo; EGallery</a></li>             <li><a href="http://localhost/xampp/project/library/aboutus.php">&raquo; About Us</a></li>             <li><a href="http://localhost/xampp/project/library/contactus.php">&raquo; Contact Us</a></li>             <li><a href="http://localhost/xampp/project/library/questionpaper.php">&raquo; Question Papers</a></li>             <li><a href="http://localhost/xampp/project/library/latestnews.php">&raquo; Latest Events & News</a></li> 
Library Management System 
 
 Division Of Computer Science And Engineering Page 76 
 
          </ul>         </div>                <!-- ####################################################################### ################################ -->     </div>   </div> </div> <!-- ####################################################################### ################################ --> 
 
<!-- ####################################################################### ################################ --> <div class="wrapper">   <div id="copyright" class="clear">     <p class="fl_left">DEVELOPER: VIKRAM,RAHUL,PRABHAKAR,RAJAT</p>   </div> </div> </body> </html> 
 
<?php $con=mysqli_connect("localhost","root","","library"); // Check connection if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   } $code=$_POST['bookcode']; $name=$_POST['bookname']; $aname=$_POST['authorname']; $publication=$_POST['publication']; $result = mysqli_query($con,"SELECT * FROM books WHERE code = '$code' || bookname = '$name' || author = '$aname' || publication = '$publication'"); 
 
echo "<table border='1'> <tr> <th>Book code</th> <th>Book Name</th> <th>Author</th> <th>Publication</th> <th>Subject</th> <th>No of Books</th> 
Library Management System 
 
 Division Of Computer Science And Engineering Page 77 
 
</tr>"; 
 
while($row = mysqli_fetch_array($result))   {   echo "<tr>";   echo "<td>" . $row['code'] . "</td>";   echo "<td>" . $row['bookname'] . "</td>";   echo "<td>" . $row['author'] . "</td>";    echo "<td>" . $row['publication'] . "</td>";   echo "<td>" . $row['subject'] . "</td>";   echo "<td>" . $row['numberofbooks'] . "</td>";   echo "</tr>";   } echo "</table>"; 
 
mysqli_close($con); ?> 
 
 
 
 
 
 
 
<?php require'../include/connection1.php';  $result = mysqli_query($connection,"SELECT * FROM studentlogin");           while($row = mysqli_fetch_array($result))           {              $libid=$row['logid'] ;     $username= $row['username'];     $password= $row['password'];     $numbooks=$row['numbooks'];           }         if($numbooks>3)           {      echo"cannnot issue books limit exceeded";           }      else     {      $libid=$_POST['libid'];            $bookid=$_POST['bookid'];            $issuedate=$_POST['issuedate'];      $returndate=date_add($issuedate,date_interval_create_from_date_string("15 days"));      $sql="INSERT INTO issuebooks(libid,bookid,issuedate,returndate)             VALUES            ('$libid','$bookid','$issuedate','$returndate')";      mysqli_query($connection,"UPDATE studentlogin SET numbooks=numbooks+1            WHERE logid='$libid'");        mysqli_query($connection,"UPDATE book SET numberofbooks=numberofbooks-1            WHERE code='$bookid'");      if (!mysqli_query($connection,$sql))          {           die('Error1: ' . mysqli_error($connection));          }          else           echo"added 1 record";         }   mysqli_close($connection);   ?> 
 

 
 
<?php require'../include/connection1.php'; $libid=$_POST['libid']; $bookid=$_POST['bookid'];  $result = mysqli_query($connection,"SELECT * FROM issuebooks where libid= '$libid' && bookid='$bookid'");    $rowcount=mysqli_num_rows($result);    if($rowcount>0)    {    $sql=mysqli_query($connection,"UPDATE studentlogin SET numbooks=numbooks-1            WHERE logid='$libid'");        $sql1=mysqli_query($connection,"UPDATE book SET numberofbooks=numberofbooks+1            WHERE code='$bookid'");      $sql2=mysqli_query($connection,"DELETE FROM issuebooks WHERE libid=$libid && bookid='$bookid'");     }          else    echo"no book  issued";         mysqli_close($connection);   ?> 
 

                      <?php          require '../include/connection1.php';       $result = mysqli_query($connection,"SELECT * FROM teacher");                  $count=mysqli_num_rows($result); echo "<table border='1' style='width=100px'> <tr> <td>Teacher id</td> <td>Name</td> <td>Designation</td> <td>Branch</td> <td>Contact no</td> </tr>";   while($count>0)    {   while($row = mysqli_fetch_array($result)) 

 
  {echo "<tr>";   echo "<td>" . $row['tid'] . "</td>";   echo "<td>" . $row['name'] . "</td>";   echo "<td>" . $row['designation'] . "</td>";   echo "<td>" . $row['branch'] . "</td>";   echo "<td>" . $row['contactno'] . "</td>";   echo"</tr>";   }   $count=$count-1;   }      mysqli_close($connection); ?> </table> 
 

 
 
                      <?php          require '../include/connection1.php';       $result = mysqli_query($connection,"SELECT * FROM student");                  $count=mysqli_num_rows($result); echo "<table border='1' style='width=100px'> <tr> <td>Libraryid</td> <td>Registration number</td> <td>Name</td> <td>Branch</td> <td>Semester</td> <td>Section</td> <td>Year of adm</td> </tr>";   while($count>0)    {   while($row = mysqli_fetch_array($result))   {echo "<tr>";   echo "<td>" . $row['libid'] . "</td>";   echo "<td>" . $row['regno'] . "</td>";   echo "<td>" . $row['stuname'] . "</td>";   echo "<td>" . $row['branch'] . "</td>";   echo "<td>" . $row['semester'] . "</td>";   echo "<td>" . $row['section'] . "</td>";   echo "<td>" . $row['yearofadm'] . "</td>"; 

 
  echo"</tr>";   }   $count=$count-1;   }      mysqli_close($connection); ?> </table> 
 
 
 
 
                      <?php          require '../include/connection1.php';       $result = mysqli_query($connection,"SELECT * FROM issuebooks order by libid");                  $count=mysqli_num_rows($result); echo "<table border='1' style='width=100px'> <tr> <td>Libraryid</td> <td>Bookid</td> <td>Issue date</td> <td>Return date</td> </tr>";   while($count>0)    {   while($row = mysqli_fetch_array($result))   {echo "<tr>";   echo "<td>" . $row['libid'] . "</td>";   echo "<td>" . $row['bookid'] . "</td>";   echo "<td>" . $row['issuedate'] . "</td>";   echo "<td>" . $row['returndate'] . "</td>";   echo"</tr>";   }   $count=$count-1;   }      mysqli_close($connection); ?> </table> 
             
 

 
 
         <?php        require '../include/connection1.php';    $result = mysqli_query($connection,"SELECT * FROM books")            $count=mysqli_num_rows($result); echo "<table border='1' style='width=100px'> <tr> <td>Book Id</td> <td>Name</td> <td>Publication</td> <td>Author</td> <td>Subject</td> <td>Number Of Books</td> </tr>";   while($count>0)    {   while($row = mysqli_fetch_array($result))   {echo "<tr>";   echo "<td>" . $row['code'] . "</td>";   echo "<td>" . $row['bookname'] . "</td>";   echo "<td>" . $row['publication'] . "</td>";   echo "<td>" . $row['author'] . "</td>";   echo "<td>" . $row['subject'] . "</td>";   echo "<td>" . $row['numberofbooks'] . "</td>";   echo"</tr>";   }   $count=$count-1;   }   mysqli_close($connection); ?></table>

