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
  <link rel="stylesheet" href="../css/navbar.css?v=<?php echo time();?>" />
  <link rel="stylesheet" href="../css/timeline.css?v=<?php echo time();?>" />

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
  <!--Timeline code-->
  <p>Timeline</p>
  <div id="box">
  <div class="timeline">
  <div class="container left">
    <div class="date">15 Dec</div>
    <i class="icon fa fa-home"></i>
    <div class="content">
      <h2>Lorem ipsum dolor sit amet</h2>
      <p>
        Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
      </p>
    </div>
  </div>
  <div class="container right">
    <div class="date">22 Oct</div>
    <i class="icon fa fa-gift"></i>
    <div class="content">
      <h2>Lorem ipsum dolor sit amet</h2>
      <p>
        Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
      </p>
    </div>
  </div>
  <div class="container left">
    <div class="date">10 Jul</div>
    <i class="icon fa fa-user"></i>
    <div class="content">
      <h2>Lorem ipsum dolor sit amet</h2>
      <p>
        Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
      </p>
    </div>
  </div>
  <div class="container right">
    <div class="date">18 May</div>
    <i class="icon fa fa-running"></i>
    <div class="content">
      <h2>Lorem ipsum dolor sit amet</h2>
      <p>
        Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
      </p>
    </div>
  </div>
  <div class="container left">
    <div class="date">10 Feb</div>
    <i class="icon fa fa-cog"></i>
    <div class="content">
      <h2>Lorem ipsum dolor sit amet</h2>
      <p>
        Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
      </p>
    </div>
  </div>
  <div class="container right">
    <div class="date">01 Jan</div>
    <i class="icon fa fa-certificate"></i>
    <div class="content">
      <h2>Lorem ipsum dolor sit amet</h2>
      <p>
        Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
      </p>
    </div>
  </div>
</div>
</div>

<script type="text/javascript">
//navbar
var dd_main = document.querySelector(".dd_main");

function toggle(){

  flag = true;
  if(dd_main){
    if(flag){
      dd_main.classList.toggle("active");
      flag=false;
    }
   }

}
</script>

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>