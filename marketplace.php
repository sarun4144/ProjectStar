<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<title>Marketplace</title>
<link rel="icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/s261x260/245799487_267531408630886_2729645764553798750_n.png?_nc_cat=111&ccb=1-5&_nc_sid=aee45a&_nc_ohc=SdR8eRCLh24AX8iffW2&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=5bcf13950dee4473d137c76a46870f42&oe=61911213">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="categories.css">
<link rel="stylesheet" href="Card1.css">
<body style="background-color: #222;">
<button style="border-radius: 70%; opacity: 0.7;" onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-arrow-up"></i></button>
<div class="ms-3 me-3 sticky-top">

<?php 
    session_start();
    include 'navbar-login.php';?>
    <br>
    
<div id="sidebar" class="sider" style="margin-left: -5px;">
    <h3>CATEGORIES</h3>
    <div class="checklist categories">
      	<ul>
			<li><label style="color: #fff; cursor:pointer;"><input type="checkbox" id="Armor" style="margin-left: -20px; margin-right: 8px;"><img src="" width="15px" height="">&nbsp;Armor</label></li>
        	<li><label style="color: #fff; cursor:pointer;"><input type="checkbox" id="Weapon" style="margin-left: -20px; margin-right: 8px;"><img src="" width="15px" height="">&nbsp;Weapon</label></li>
            <li><label style="color: #fff; cursor:pointer;"><input type="checkbox" id="Vehicle" style="margin-left: -20px; margin-right: 8px;"><img src="" width="15px" height="">&nbsp;Vehicle</label></li>
            <li><label style="color: #fff; cursor:pointer;"><input type="checkbox" id="Accensories" style="margin-left: -20px; margin-right: 8px;"><img src="" width="15px" height="">&nbsp;Accensories</label></li>
            <li><label style="color: #fff; cursor:pointer;"><input type="checkbox" id="Consumable" style="margin-left: -20px; margin-right: 8px;"><img src="" width="15px" height="">&nbsp;Consumable</label></li>
            <li><label style="color: #fff; cursor:pointer;"><input type="checkbox" id="Crafting_Materials" style="margin-left: -20px; margin-right: 8px;"><img src="" width="15px" height="">&nbsp;Crafting Materials</label></li>
        </ul>
    </div>
    <h3>Rarelity</h3>
    <div class="checklist categories">
      	<ul>
			<li><label style="color: #fff; cursor:pointer;"><input type="checkbox" id="Common" style="margin-left: -20px; margin-right: 8px;"><img src="" width="15px" height="">&nbsp;Common</label></li>
        	<li><label style="color: #fff; cursor:pointer;"><input type="checkbox" id="Rare" style="margin-left: -20px; margin-right: 8px;"><img src="" width="15px" height="">&nbsp;Rare</label></li>
            <li><label style="color: #fff; cursor:pointer;"><input type="checkbox" id="Epic" style="margin-left: -20px; margin-right: 8px;"><img src="" width="15px" height="">&nbsp;Epic</label></li>
            <li><label style="color: #fff; cursor:pointer;"><input type="checkbox" id="Legendary" style="margin-left: -20px; margin-right: 8px;"><img src="" width="15px" height="">&nbsp;Legendary</label></li>
        </ul>
    </div>
</div>
<div class="dropdown">
    <button type="button" class="btn text-white fw-bold dropdown-toggle ms-3" style="background-color:#E95589" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><span id='select'>All</span></button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><label class="dropdown-item" id='all'>All</label></li>
            <li><label class="dropdown-item" id='sell'>For Sale</label></li>
            <li><label class="dropdown-item" id='notsell'>Not For Sale</label></li>
        </ul>
</div>
</div>  
                        <div class="wrap container" id="card-8">
                            
                        </div>          
</body>

    <script>
        let temp = [];                  /* Filter */
        $(document).ready(function(){
            temp["Armor"] = "";
            temp["Weapon"] = "";
            temp["Vehicle"] = "";
            temp["Accensories"] = "";
            temp["Consumable"] = "";
            temp["Crafting_Materials"] = "";
            temp["Common"] = "";
            temp["Rare"] = "";
            temp["Epic"] = "";
            temp["Legendary"] = "";
            temp["type"] = "all";
            getBack();
        });

        var button = document.getElementById("myBtn");
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            if (document.body.scrollTop > 25|| document.documentElement.scrollTop >25) {
                button.style.display = "block";
            } else {
                button.style.display = "none";
            }
        }
        function showDiv(Div) {
            var x = document.getElementById(Div);
            if(x.style.display=="none") {
                x.style.display = "flex";
            } else {
                x.style.display = "none";
            }
        }
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
        
        $('input').click(function () {
            $('input').each(function(){
                if($(this).prop('checked') == true){
                    temp[$(this).attr('id')] = "a";
                }else{
                    temp[$(this).attr('id')] = "";
                }
            })
            console.log(temp);
            getBack();
        });
        $('.dropdown-item').click(function () {
            temp["type"]=$(this).attr('id');
            if($(this).attr('id') == 'all'){
                $('#select').text('All');
            }
            if($(this).attr('id') == 'sell'){
                $('#select').text('For Sale');
            }
            if($(this).attr('id') == 'notsell'){
                $('#select').text('Not For Sale');
            }
            getBack();
        });
        function getBack(){
            $.ajax({
                url: 'back-end.php', type: 'post', dataType: 'json', 
                data: { 
                    Armor: temp["Armor"],
                    Weapon : temp["Weapon"],
                    Vehicle: temp["Vehicle"],
                    Accensories: temp["Accensories"],
                    Consumable: temp["Consumable"],
                    Crafting_Materials: temp["Crafting_Materials"],
                    Common: temp["Common"],
                    Rare : temp["Rare"],
                    Epic : temp["Epic"],
                    Legendary : temp["Legendary"],
                    type: temp["type"]
                },
                success: function(response){
                    $('#card-8').html(response.code);
                }
            });
        }
    </script>