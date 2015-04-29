<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <?php 
    require 'connect.php';
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
     $username=$_POST['username'];
     $password=$_POST['password'];
 
 try{
     $conn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     $stmt=$conn->query("SELECT * FROM admin WHERE admin_ID ='$username' AND admin_Password='$password'" );
         if($stmt->rowCount()>0)
             {
             session_start();
             $_SESSION['username']=$username;
                 header("Location:home.php");
                     exit;
             }
            else
            {
            $status="Invalid password or admin ID.";
            }
            
 }
 catch (Exception $ex) 
  {
     echo 'Error:'.$ex->getMessage();
 
  }
 }
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" media="screen" href="loginstyle.css"/>
        <title></title>
    </head>
    
     
    <body>
      

            <div id='header'>
            </div>
            <div id="login_block">


            <h1> Log-in </h1>
            <form id='login' action="index.php" method="POST" >


                    <input type='text' name='username' id='email' placeholder="Username" />

                    <input type='password' name='password' id='password' placeholder="Password" />

                <input type='submit' name='login' id="login_button" value='Login' />

            </form>  
            </div>


             <div id="footer">

                         <p> 2015- SARDA GAUTENG</p> 

                        </div>


      
       
    </body>
</html>
