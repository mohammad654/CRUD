<?php
//
session_start();
include_once('config.php');



//mohammad.ali.shikhi.55@gmail.com
//Mohammad.55@
// php mailer


function sendemail($user,$email,$verify_token){


}
    if (isset($_POST['register'])){
        $user = trim(htmlspecialchars($_POST['user'])) ;
        $email  = trim(htmlspecialchars($_POST['email']));
        $password  = trim(htmlspecialchars($_POST['password']));
        $verify_token = md5(rand());

    //    check email exists
        $check_emil='SELECT email FROM users WHERE  email="$email" LIMIT 1';
        $statement=$connection->prepare($check_emil);
        $statement->execute();
        $result = $statement->fetch();

        if ($result>0){
            $_SESSION['status']='Email is already exist';
            header("Location: register.php;");
        }else{
    //       Insert user
            $sql='INSERT INTO users (user, email,password,verify_token)VALUES (:user,:email,:password,:verify_token)';
            $stmt=$connection->prepare($sql);
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':verify_token', $verify_token);
            $stmt->execute();
            $result= $stmt->execute();
            echo 'execute ';
            if ( $result){
                sendemail("$user","$email","$verify_token");
                $_SESSION['status']='Registration Successful! please verify your email';
                header("Location: ../login.php");
            }else{
                $_SESSION['status']='Registration failed';
                header("Location: ../register.php");
            }
        }
    }