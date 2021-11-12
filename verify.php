<?php 
 session_start();
 if(isset($_SESSION["Username"]) && $_SESSION["id"]==session_id()){
     header("location:Star.php");
     die();
 }
    $u = $_POST['Username'];
    $p = $_POST['pass'];
    $conn = new PDO("mysql:host=localhost;dbname=spaceutopai;charset=utf8","root","");
    $sql = "select * from user where Username = '$u' and Pass = sha1('$p') ";
    $result =  $conn -> query($sql);
    if($result -> rowCount() == 1){
        $data = $result -> fetch(PDO::FETCH_ASSOC);
        $_SESSION["Username"] = $data["Username"];
        $_SESSION["id"] = session_id();
        header("location:Star.php");
        die();
    }else{
        $_SESSION["error"] = 1;
        header("location:login.php");
        die();
    }
    $conn = null;
?>