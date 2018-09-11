<?php 
require_once('functions.php');
session_start();

    if(isset($_POST['login']))
    {
       if(empty($_POST['username']) || empty($_POST['password']))
       {
            header("location:login.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="SELECT * FROM admin WHERE username='".$_POST['username']."' and password='".$_POST['password']."'";
            $result=mysqli_query($con,$query);
 
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['login']=$_POST['username'];
                header("location:index.php");
            }
            else
            {
                header("location:login.php?Invalid= Masukin NAMA sama NPM yang bener bangsad !!!");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }
 
?>