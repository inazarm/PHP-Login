<?php 
session_start();

 include("connection.php");

    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from tblusers where Email='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
        $_SESSION["uname"]=$uname;
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    } 
?>
