<?php 
    session_start();
    if(isset($_SESSION["Username"]) && $_SESSION["id"]==session_id()){
        header("location:Star.php");
        die();
    }
    
    $Username = $_POST['Username'];
    $pass = $_POST['pass'];
    $pass_c = $_POST['pass-check'];
    if($pass != $pass_c){
        $_SESSION["add_login"] = "error";
    }else{
    $email = $_POST['Email'];
    $conn = new PDO("mysql:host=localhost;dbname=spaceutopai;charset=utf8","root","");
    $pass = sha1($pass);
    $sql = "SELECT * FROM user where Username = '$Username'";
    $result = $conn -> query($sql);
    if($result -> rowCount()==1){
        $_SESSION["add_login"] = "error";
    }else{
        $sql1 = "INSERT INTO user(Username,Pass,Email,role) 
            VALUES ('$Username','$pass','$email','m')";
            $conn->exec($sql1);
            $_SESSION["add_login"] = "success";
    }
    }
    $conn = null;
    header("location:login.php");
    die();
?>