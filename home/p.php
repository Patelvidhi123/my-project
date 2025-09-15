<?php

if(isset($_POST["OK"]))
{
    if(empty($_POST["fn"])){
        echo"<script>alert('please enter firstname');</script>";  
    } else {
        echo"DONE";
    }

    if(empty($_POST["ln"])){
        echo"<script>alert('please enter lastname');</script>"; 
    } else {
        echo"DONE";
    }

    $email = $_POST["em"];   
    $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)@[a-z0-9-]+(\.[a-z0-9]+)(\.[a-z]{2,3})$/";   

    if(empty($_POST["em"])){
        echo"<script>alert('please enter email ');</script>"; 
    } elseif (!preg_match($pattern, $email)) {   
        echo "Email is not valid.";      
    } else {   
        echo "done";   
    }  

    if(empty($_POST["pass"])){
        echo"<script>alert('please enter password');</script>"; 
    } else {
        $ps = $_POST["pass"];  
        if(!preg_match("/^[0-9]*$/", $ps)) {   
            echo"Only numeric value is allowed";  
        } else {   
            echo"done";   
        }  
    }

    if(empty($_POST["pass1"])) {
        echo"<script>alert('please enter confirm password');</script>"; 
    } else {
        $pass1 = $_POST["pass1"];
        if($pass1 != $_POST["pass"]) {
            echo"Passwords do not match";
        } else {
            echo"done";
        }
    }
}
?>