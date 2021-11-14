<?php
session_start();

    $item_id=$_POST['item_id'];
    $user=$_SESSION["UserID"];
    $conn=new PDO("mysql:host=localhost;dbname=spaceutopia;charset=utf8","root","");
    $sql="SELECT User_Id FROM item WHERE Id_Item = '$item_id'";
    $result =  $conn -> query($sql);
    $sql1="SELECT * FROM item WHERE Id_Item = '$item_id'";
    $result1 =  $conn -> query($sql1);
    while($row=$result1->fetch()){
        if($row[13]===null|| $row[13]==='0' || $item_id <= 0 || $item_id > 159){
            $sql="UPDATE item SET User_Id = '$_SESSION[UserID]' WHERE Id_Item = '$item_id'";
            $result=$conn->query($sql);
            $sql="INSERT INTO log (User_Id_Seller,Item_Id,State) VALUES ('$user','$item_id','Claim')";
            $conn->exec($sql);
            $_SESSION["ItemSync"] = 1;
            header("location:Profile.php");
            die();
        }
        else{
            $_SESSION["ItemError"] = 1;
            header("location:Profile.php");
            die();
        }
    }
    $conn=null;
?>
