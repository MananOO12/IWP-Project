<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <!-- bootstrap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

  <link rel="stylesheet" href="../css/profile.css?v=<?php echo time();?>" />
  <link rel="stylesheet" href="../css/profile-navbar.css?v=<?php echo time();?>" />
  <link rel="stylesheet" href="../css/photos1.css?v=<?php echo time();?>" />
  <link rel="stylesheet" href="../css/photos2.css?v=<?php echo time();?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">



  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

</head>

<body id="profile-body">

  <!-- nav bar -->
  <div class="wrapper">
  	<div class="navbar">
  		<div class="logo">
  			<a href="homepage.php">Chit-Chat</a>
  		</div>

      <div class="search_box">

        <input type="text" class="input_search" placeholder="What are you looking for?">
        <div class="search_btn"><i class="fas fa-search"></i></div>
      </div>


  		<div class="nav_right">
  			<ul>
  				<li class="nr_li dd_main">
            <i class="fas fa-caret-down"></i>
            <i class="fas fa-user-alt"></i>

  					<div class="dd_menu">
  						<div class="dd_left">
  							<ul>
                  <li><i class="fas fa-home"></i></li>
  								<li><i class="fas fa-blog"></i></li>
                  <li></li>
  								<li><i class="far fa-plus-square"></i></li>
  								<li><i class="fas fa-cog"></i></li>
  								<!-- <li><i class="fas fa-sign-out-alt"></i></li> -->
  							</ul>
  						</div>
  						<div class="dd_right">
  							<ul>
                  <li>Home</li>
  								<li style="font-size:18px">My Posts</li>
                  <li></li>
  								<li>Friends</li>
  								<li>Settings</li>
  								<!-- <li>Logout</li> -->
  							</ul>
  						</div>
  					</div>
  				</li>
  				<li class="nr_li">

            <button type="button" id="log-out" class="btn btn-light" data-toggle="tooltip" data-placement="bottom" title="Log Out">
                <i class="fas fa-sign-out-alt"></i>
            </button>
            <!-- <p id="sign-out">Log Out</p> -->
  				</li>
  			</ul>
  		</div>
  	</div>
  </div>
<!-- nav-bar ended -->


  <!-- cover area: -->
  <div id="ca1">
    <div id="ca2">
      <img src="../images/Profile-images/uwu.jpg" id="cover-photo" />
      <img src="../images/Profile-images/namanprofilepic.jpeg" id="profile-photo" />
      <br />
      <div id="profile-name">Naman Rastogi</div>

      <br />
      <div class="menu-btn">
        <a href="#">Timeline</a>
      </div>
      <div class="menu-btn">
        <a href="#">About</a>
      </div>
      <div class="menu-btn">
        <a href="#">Friends</a>
      </div>
      <div class="menu-btn">
        <a href="#">Photos</a>
      </div>
      <script type="text/javascript" src="../js/profile.js"></script>
  <!--Photos code-->
  <section class="u-clearfix u-valign-middle-sm u-valign-middle-xs u-section-1" id="sec-b69e">
    <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-no-transition u-show-text-on-hover u-gallery-1">
      <div class="u-gallery-inner u-gallery-inner-1">
        <div class="u-effect-fade u-gallery-item">
          <div class="u-back-slide" data-image-width="1000" data-image-height="1500">
            <img class="u-back-image u-expanded u-back-image-1" src="../images/Photos-images/pexels-photo-5325840.jpeg">
          </div>
          <div class="u-over-slide u-shading u-over-slide-1">
            <h3 class="u-gallery-heading"></h3>
            <p class="u-gallery-text"></p>
          </div>
        </div>
        <div class="u-effect-fade u-gallery-item">
          <div class="u-back-slide" data-image-width="1000" data-image-height="1500">
            <img class="u-back-image u-expanded u-back-image-2" src="../images/Photos-images/pexels-photo-3916422.jpeg">
          </div>
          <div class="u-over-slide u-shading u-over-slide-2">
            <h3 class="u-gallery-heading"></h3>
            <p class="u-gallery-text"></p>
          </div>
        </div>
        <div class="u-effect-fade u-gallery-item">
          <div class="u-back-slide" data-image-width="1000" data-image-height="1500">
            <img class="u-back-image u-expanded" src="../images/Photos-images/pexels-photo-1719641.jpeg">
          </div>
          <div class="u-over-slide u-shading u-over-slide-3">
            <h3 class="u-gallery-heading"></h3>
            <p class="u-gallery-text"></p>
          </div>
        </div>
        <div class="u-effect-fade u-gallery-item">
          <div class="u-back-slide" data-image-width="1125" data-image-height="1500">
            <img class="u-back-image u-expanded" src="../images/Photos-images/pexels-photo-3006003.jpeg">
          </div>
          <div class="u-over-slide u-shading u-over-slide-4">
            <h3 class="u-gallery-heading"></h3>
            <p class="u-gallery-text"></p>
          </div>
        </div>
        <div class="u-effect-fade u-gallery-item u-gallery-item-5">
          <div class="u-back-slide" data-image-width="1125" data-image-height="1500">
            <img class="u-back-image u-expanded" src="../images/Photos-images/pexels-photo-2438210.jpeg">
          </div>
          <div class="u-over-slide u-shading u-over-slide-5">
            <h3 class="u-gallery-heading"></h3>
            <p class="u-gallery-text"></p>
          </div>
        </div>
        <div class="u-effect-fade u-gallery-item u-gallery-item-6">
          <div class="u-back-slide" data-image-width="1000" data-image-height="1500">
            <img class="u-back-image u-expanded u-back-image-6" src="../images/Photos-images/pexels-photo-3850989.jpeg">
          </div>
          <div class="u-over-slide u-shading u-over-slide-6">
            <h3 class="u-gallery-heading"></h3>
            <p class="u-gallery-text"></p>
          </div>
        </div>
        <div class="u-effect-fade u-gallery-item">
          <div class="u-back-slide" data-image-width="1001" data-image-height="1500">
            <img class="u-back-image u-expanded" src="../images/Photos-images/pexels-photo-4099388.jpeg">
          </div>
          <div class="u-over-slide u-shading u-over-slide-7">
            <h3 class="u-gallery-heading"></h3>
            <p class="u-gallery-text"></p>
          </div>
        </div>
        <div class="u-effect-fade u-gallery-item">
          <div class="u-back-slide" data-image-width="1000" data-image-height="1500">
            <img class="u-back-image u-expanded" src="../images/Photos-images/pexels-photo-6003915.jpeg">
          </div>
          <div class="u-over-slide u-shading u-over-slide-8">
            <h3 class="u-gallery-heading"></h3>
            <p class="u-gallery-text"></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>