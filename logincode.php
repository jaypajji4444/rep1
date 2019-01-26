<?php
   include("database.php");
   include("page1.php");
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $myusername =$_POST['user'];
      $mypassword = $_POST['pass']; 
      if(!empty($myusername)&&!empty($mypassword))
      {
      $sql="SELECT id FROM register WHERE username='$myusername' AND password='$mypassword'";
      $result=mysqli_query($conn,$sql);
      $count=mysqli_num_rows($result);
      
      if($count!=0)
      {
        
        header("location: welcome.php");
      }
      else
      {
          echo "<h1>Invalid Login Details.</h1>";
      }
   }
   else
   {
      echo "<h1>Please do not leave any field blank.</h1>";
   }
   
   }
?>


