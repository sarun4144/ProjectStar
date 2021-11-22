
<!DOCTYPE html>
<html lang="en">
<head>
<style>
  img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.h1 {
  font-size: 40px;
}
hr.new1 {
  border: 1px solid #f25fd0;
}

.center {
  margin-left: auto;
  margin-right: auto;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
button{
    background: #a65ff2;
    color: whitesmoke;
    font-size: 12px;
    margin-top: 30px;
    font-weight: bold;
    padding: 8px 20px;
  }
.gradient-border {
	 --border-width: 3px;
	 position: relative;
	 justify-content: center;
	 align-items: center;
	 font-family: Lato, sans-serif;
	 color: white;
	 background: #222;
	 border-radius: var(--border-width);
}
 .gradient-border::after {
	 position: absolute;
	 content: "";
	 top: calc(-1 * var(--border-width));
	 left: calc(-1 * var(--border-width));
	 z-index: -1;
	 width: calc(100% + var(--border-width) * 2);
	 height: calc(100% + var(--border-width) * 2);
	 background: linear-gradient(60deg, #5f86f2, #a65ff2, #f25fd0, #f25f61);
	 background-size: 300% 300%;
	 background-position: 0 50%;
	 border-radius: calc(2 * var(--border-width));
	 animation: moveGradient 4s alternate infinite;
}
@keyframes moveGradient {
	 50% {
		 background-position: 100% 50%;
	}
}

.headshot-2 {
	border-radius: 50%;
  margin-left: auto;
  margin-right: auto;
}

</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <title>SpaceUtopiaMarket</title>
    <link rel="icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/s261x260/245799487_267531408630886_2729645764553798750_n.png?_nc_cat=111&ccb=1-5&_nc_sid=aee45a&_nc_ohc=SdR8eRCLh24AX8iffW2&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=5bcf13950dee4473d137c76a46870f42&oe=61911213">
    <link rel="stylesheet" href="Card1.css">
  </head>
<body style="background-color: #222">
          
    <div class="container">
        <?php 
        session_start();
        include 'navbar.php';
        if(isset($_SESSION["ItemSoldError"])){
          echo "<script> alert('You can not by your own item OR Not enough gem'); </script>";
          unset($_SESSION["ItemSoldError"]);
        }
        ?>
            <div class="mt-1"></div>

        <div class="gradient-border mt-4">
            <div class="conatiner">
              <div class="row">
                    <?php
                        $user = 0;
                        $item_id=$_GET['item_id'];
                        if(isset($_SESSION["Username"])){
                          $user=$_SESSION["UserID"];
                      }
                        $conn=new PDO("mysql:host=localhost;dbname=spaceutopia;charset=utf8","root","");
                        $sql1="SELECT t1.Id_Item,t1.Name,t1.Atk,t1.Def,t1.Int,t1.Vit,t1.Cha,t1.Agi,t1.Tal,t1.Img,t1.Hold_Or_Sell,t2.Name,t3.Name,t4.Username,t4.ID,t5.Price
                        FROM item AS t1 
                        INNER JOIN catagory AS t2 ON (t1.Category_Id=t2.Id_Category) 
                        INNER JOIN rarity AS t3 ON (t1.Rarity_Id=t3.Rarity) 
                        INNER JOIN user AS t4 ON (t1.User_Id=t4.ID) 
                        INNER JOIN market AS t5 ON (t1.Id_Item=t5.Item_Id) WHERE t1.Id_Item = $item_id";
                        $result1 =  $conn -> query($sql1);
                        $sql="SELECT t1.Id_Item,t1.Name,t1.Atk,t1.Def,t1.Int,t1.Vit,t1.Cha,t1.Agi,t1.Tal,t1.Img,t1.Hold_Or_Sell,t2.Name,t3.Name,t4.Username,t4.ID
                        FROM item AS t1 
                        INNER JOIN catagory AS t2 ON (t1.Category_Id=t2.Id_Category) 
                        INNER JOIN rarity AS t3 ON (t1.Rarity_Id=t3.Rarity) 
                        INNER JOIN user AS t4 ON (t1.User_Id=t4.ID) 
                        WHERE t1.Id_Item = $item_id";
                        $result =  $conn -> query($sql);

                        while($row=$result->fetch()){
                            echo "<div class='col-1'></div>";
                            echo "<div class='col-5' style='margin-left:auto ; margin-right:auto ;'>
                             <img src='Stone.png' alt='Item' style='width: 500px;'>
                            </div> ";
                            echo "<div class='col-1'></div>";

                            echo "<div class='col-5'>";
                            echo "<div class='mt-5' style='font-size: 30px'>";
                            echo '#'.$row[0].'<br>';
                            echo ''.$row[1].'';
                            echo "</div>";

                            echo "<div class='mt-3' style='font-size: 20px'>";
                            echo 'Category: '.$row[11].'<br>';
                            echo 'Rarity: '.$row[12].'<br>';
                            echo 'Owner: '.$row[13].'<br>';
                            echo "</div>";
                            
                            echo "<div class='mt-3' style='font-size: 15px'>";
                            echo 'Attack: '.$row[2].'<br>';
                            echo 'Defence: '.$row[3].'<br>';
                            echo 'Intelligent: '.$row[4].'<br>';
                            echo 'Vitality: '.$row[5].'<br>';
                            echo 'Charisma: '.$row[6].'<br>';
                            echo 'Agility: '.$row[7].'<br>';
                            echo 'Talent: '.$row[8].'<br>';
                            echo 'Image: '.$row[9].'<br>';
                            echo "</div>";

                            $hos=$row[10];
                            $item_id=$row[0];
                            
                            if($hos==='S' && $user != $row[14]){
                              $row1=$result1->fetch();
                                    echo "<a href='buyitemupdate.php?item_id=$item_id'>
                                            <div class='text-end me-3'>
                                                <button class='btn btn-success text-white fw-bold mt-2' 'data-bs-target='#buy' data-bs-toggle='modal'>
                                                    Buy for ".$row1[15]." Gem
                                                </button>
                                            </div>
                                        </a>";
                            }else if($hos==='S' && $user === $row[14]){
                                  echo "<a href='cancelsell.php?item_id=$item_id'>
                                          <div class='text-end me-3'>
                                              <button class='btn btn-danger text-white fw-bold mt-2' 'data-bs-target='#buy' data-bs-toggle='modal'>
                                                  Cancel
                                              </button>
                                          </div>
                                      </a>";
                          }
                        }
                        $conn=null;
                    ?>
              </div>
            </div>
        </div>
    </div>
  
</body>
</html>