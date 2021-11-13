<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
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
<div class="ms-3 me-3">
    
    <?php 
    session_start();
    include 'navbar-login.php';?>
</div>
<hr>
<div id="sidebar" class="sider sticky-top">
    <h3>CATEGORIES</h3>
    <div class="checklist categories">
      	<ul>
			<li><a href=""><span></span><img src="https://cdn-icons-png.flaticon.com/512/2845/2845328.png" width="15px" height="">&nbsp;Armor</a></li>
        	<li><a href=""><span></span><img src="https://cdn-icons.flaticon.com/png/512/3430/3430797.png" width="15px" height="">&nbsp;Weapon</a></li>
            <li><a href=""><span></span><img src="https://cdn-icons-png.flaticon.com/512/703/703623.png" width="15px" height="">&nbsp;Vehicle</a></li>
            <li><a href=""><span></span><img src="https://cdn-icons.flaticon.com/png/512/1289/1289506.png" width="15px" height="">&nbsp;Accensories</a></li>
            <li><a href=""><span></span><img src="https://cdn-icons.flaticon.com/png/512/2579/2579397.png" width="15px" height="">&nbsp;Consumable</a></li>
            <li><a href=""><span></span><img src="https://cdn-icons-png.flaticon.com/512/1021/1021357.png" width="15px" height="">&nbsp;Crafting Materials</a></li>
        </ul>
    </div>
    <h3>Rarelity</h3>
    <div class="checklist categories">
      	<ul>
			<li><a href=""><span></span><img src="" width="15px" height=""> Common</a></li>
        	<li><a href=""><span></span><img src="" width="15px" height=""> Rare</a></li>
            <li><a href=""><span></span><img src="" width="15px" height=""> Epic</a></li>
            <li><a href=""><span></span><img src="" width="15px" height=""> Legendary</a></li>
        </ul>
    </div>
    <h3>Status</h3>
    <div class="checklist categories">
      	<ul><div>
			<li><a onclick="showDiv('hidden-a')" style="cursor: pointer;"><span></span>Attack</a></li>
                <div class="filter level-filter level-req" id="hidden-a" style="display: none;">
                <form>
    <div data-role="rangeslider" data-mini="true">
        <label for="range-4a">Rangeslider:</label>
        <input type="range" name="range-4a" id="range-4a" min="0" max="100" value="0">
        <label for="range-4b">Rangeslider:</label>
        <input type="range" name="range-4b" id="range-4b" min="0" max="100" value="100">
    </div>
</form>
                </div>
            </div>
            <div>
        	<li><a onclick="showDiv('hidden-d')" style="cursor: pointer;"><span></span>Defence</a></li>
                <div class="filter level-filter level-req" id="hidden-d" style="display: none;">
                    <div id="rangeSlider-a-d" class="range-slider">
                        <div class="number-group">
                            <input class="number-input" type="number" value="1" min="0" max="500" name="d"/> to 
                            <input class="number-input" type="number" value="500" min="0" max="500" name="d"/>
                        </div>
                        <div class="range-group">
                            <input class="range-input" value="1" min="1" max="500" step="1" type="range" name="d"/>
                            <input class="range-input" value="500" min="1" max="500" step="1" type="range" name="d"/>
                        </div>
                    </div>
                </div>
            </div>
            <div>
            <li><a onclick="showDiv('hidden-v')" style="cursor: pointer;"><span></span>Vitality</a></li>
                <div class="filter level-filter level-req" id="hidden-v" style="display: none;">
                    <div id="rangeSlider" class="range-slider">
                        <div class="number-group">
                            <input class="number-input" type="number" value="1" min="0" max="500" /> to 
                            <input class="number-input" type="number" value="500" min="0" max="500" />
                        </div>
                        <div class="range-group">
                            <input class="range-input" value="1" min="1" max="500" step="1" type="range" />
                            <input class="range-input" value="500" min="1" max="500" step="1" type="range" />
                        </div>
                    </div>
                </div>
            </div>
            <div>
            <li><a onclick="showDiv('hidden-c')" style="cursor: pointer;"><span></span>Charisma</a></li>
                <div class="filter level-filter level-req" id="hidden-c" style="display: none;">
                    <div id="rangeSlider" class="range-slider">
                        <div class="number-group">
                            <input class="number-input" type="number" value="1" min="0" max="500" /> to 
                            <input class="number-input" type="number" value="500" min="0" max="500" />
                        </div>
                        <div class="range-group">
                            <input class="range-input" value="1" min="1" max="500" step="1" type="range" />
                            <input class="range-input" value="500" min="1" max="500" step="1" type="range" />
                        </div>
                    </div>
                </div>
            </div>
            <div>
            <li><a onclick="showDiv('hidden-ag')" style="cursor: pointer;"><span></span>Agility</a></li>
                <div class="filter level-filter level-req" id="hidden-ag" style="display: none;">
                    <div id="rangeSlider" class="range-slider">
                        <div class="number-group">
                            <input class="number-input" type="number" value="1" min="0" max="500" /> to 
                            <input class="number-input" type="number" value="500" min="0" max="500" />
                        </div>
                        <div class="range-group">
                            <input class="range-input" value="1" min="1" max="500" step="1" type="range" />
                            <input class="range-input" value="500" min="1" max="500" step="1" type="range" />
                        </div>
                    </div>
                </div>
            </div>
            <div>
            <li><a onclick="showDiv('hidden-t')"><span></span>Talent</a></li>
                <div class="filter level-filter level-req" id="hidden-t" style="display: none;">
                    <div id="rangeSlider" class="range-slider">
                        <div class="number-group">
                            <input class="number-input" type="number" value="1" min="0" max="500" /> to 
                            <input class="number-input" type="number" value="500" min="0" max="500" />
                        </div>
                        <div class="range-group">
                            <input class="range-input" value="1" min="1" max="500" step="1" type="range" />
                            <input class="range-input" value="500" min="1" max="500" step="1" type="range" />
                        </div>
                    </div>
                </div>
            </div>
        </ul>
    </div>
</div>
    <script src="slider.js"></script>
    <script>
        function showDiv(Div) {
            var x = document.getElementById(Div);
            if(x.style.display=="none") {
                x.style.display = "flex";
            } else {
                x.style.display = "none";
            }
        }
    </script>
    