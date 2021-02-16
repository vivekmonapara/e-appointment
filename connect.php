<?php
    $name = $_post['name'];
    $mail id = $_post['mail id'];
    $password = $_post['password'];

    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('connection failed   : '.$conn->connect_error);

        }else{
            $stmt = $conn->("insert into sign up(name,mail id,password)values(?,?,?)");
            $stmt->bind_param("sssssi",$name,$mail id,$password);
            $stmt->execute();
            echo "registration successfully....";
            $stmt->close();
            $conn->close();
        } 