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
  

  <link rel="stylesheet" href="../css/friends.css?v=<?php echo time();?>" />
  <link rel="stylesheet" href="../css/profile-navbar.css?v=<?php echo time();?>" />

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
      <img src="../images/Profile-images/back.jpg" id="cover-photo" />
      <img src="../images/Profile-images/ateethprofilepic.jpg" id="profile-photo" />
      <br />
      <div id="profile-name">Ateeth Arun</div>

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
      <!--top part ends-->

      <div style="color: black ; "><h2>Friends</h2></div>
      <!--Friends part begins-->
      <!--left side of friends -->
      <div id="box-1">
        <div id="friends-bar">

          <div class="friends">
            <img src="../images/Profile-images/user11.jpg" class="f-img" />
            <br />
            Aryan Rathore
            &nbsp;&nbsp;&nbsp;
            <button type="button" id="friends_btn"><b>Friends</b></button>
            <br><span style="color: black; font-size: 10px;">7 mutual friends</span>
          </div>
          <div class="friends">
            <img src="../images/Profile-images/manan.jpg" class="f-img" />
            <br />
            Manan Jain
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" id="friends_btn"><b>Friends</b></button>
            <br><span style="color: black; font-size: 10px;">5 mutual friends</span>
          </div>
          <div class="friends">
            <img src="../images/Profile-images/namanprofilepic.jpeg" class="f-img" />
            <br />
            Naman
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" id="friends_btn"><b>Friends</b></button>
            <br><span style="color: black; font-size: 10px;">12 mutual friends</span>
          </div>
          <div class="friends">
            <img src="../images/Profile-images/selfie.jpg" class="f-img" />
            <br />
            Elli Abraham
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" id="friends_btn"><b>Friends</b></button>
            <br><span style="color: black; font-size: 10px;">3 mutual friends</span>
          </div>
        </div>
      </div>

      <!--Right side of friends-->
      <div id="box-2">
        <div id="friends-bar">

          <div class="friends">
            <img src="../images/Profile-images/user8.jfif" class="f-img" />
            <br />
            Miranda
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;
            <button type="button" id="friends_btn"><b>Friends</b></button>
            <br><span style="color: black; font-size: 10px;">4 mutual friends</span>
          </div>
          <div class="friends">
            <img src="../images/Profile-images/user2.jpg" class="f-img" />
            <br />
            Jack Moore
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" id="friends_btn"><b>Friends</b></button>
            <br><span style="color: black; font-size: 10px;">2 mutual friends</span>
          </div>
          <div class="friends">
            <img src="../images/Profile-images/user6.jpg" class="f-img" />
            <br />
            Jamie
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" id="friends_btn"><b>Friends</b></button>
            <br><span style="color: black; font-size: 10px;">0 mutual friends</span>
          </div>
          <div class="friends">
            <img src="../images/Profile-images/user7.jpg" class="f-img" />
            <br />
            Oliver
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" id="friends_btn"><b>Friends</b></button>
            <br><span style="color: black; font-size: 10px;">10 mutual friends</span>
          </div>
        </div>
      </div>
    
    </div>
    </div>
  
  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
