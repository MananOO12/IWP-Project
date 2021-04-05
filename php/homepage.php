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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="../css/profile-navbar.css?v=<?php echo time();?>" />
  <link rel="stylesheet" href="../css/homepage.css?v=<?php echo time();?>" />

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
<!-- Firends list -->

<section class="live">
    <div class="person">
    <div class="profile-pic"></div>
    <p class="name">Ateeth Arun</p>
    </div>
    <div class="person live-active">
    <div class="profile-pic"></div>
    <p class="name">Elli Abraham</p>
      <span><i class="fas fa-video"></i> Live</span>
      </div>
      <div class="person">
      <div class="profile-pic"></div>
      <p class="name">Jack Moore</p>
    </div>
    <div class="person">
      <div class="profile-pic"></div>
      <p class="name">Sneha Singh</p>
    </div>
    <div class="person">
      <div class="profile-pic"></div>
      <p class="name">Miranda</p>
    </div>
    <div class="person">    
      <div class="profile-pic"></div>
      <p class="name">Piyush</p>  
    </div>
    <div class="person">
      <div class="profile-pic"></div>
      <p class="name">Jamie</p>
    </div>
    <div class="person">
      <div class="profile-pic"></div>
      <p class="name">Oliver</p>
    </div>
    </section>
    <!-- bottom bar -->

    <section class="nav">
    <div class="icon active">
      <i class="fas fa-fire"></i>
      <p>Home</p>
    </div>
    <div class="icon">
      <i class="fas fa-globe"></i>
      <p>Live</p>
    </div>
    <div class="icon">
      <i class="fas fa-comment-dots"></i>
      <p>Chats</p>
    </div>
    <div class="icon">
      <i class="fas fa-bell"></i>
      <p>Notifications</p>
    </div>
    <div class="icon">
      <i class="fas fa-user"></i>
      <p>Profile</p>
    </div>
  </section>
  <!-- posts -->
  <section class="newsfeed">
	  <!-- post-1 -->

<div class="card">
  <div class="picture-1"></div>
  <div class="content">
    <div class="header">
      <div class="profile-pic-1"></div>
      <div class="detail">
        <p class="name">Miranda</p>
        <p class="posted">2 hours ago</p>
      </div>
    </div>
    <div class="desc">
      "Actually, the best gift you could have given her was a lifetime or adventures" Alice in Wonderland- I've
      always loved this quote. what's your favourite quote?
    </div>
    <div class="tags">
      <span>#party</span>
      <span>#colorful</span>
    </div>
    <div class="footer">
      <div class="like">
        <i class="fas fa-heart"></i>
        <span>12k</span>
      </div>
      <div class="comment">
        <i class="fas fa-comment"></i>
        <span>12k</span>
      </div>
      <div class="share">
        <i class="fas fa-share"></i>
        <span>12k</span>
      </div>
    </div>
  </div>
</div>

<!-- post2 -->

<div class="card">
  <div class="picture-2"></div>
  <div class="content">
    <div class="header">
      <div class="profile-pic-2"></div>
      <div class="detail">
        <p class="name">Jack Moore</p>
        <p class="posted">5 hours ago</p>
      </div>
    </div>
    <div class="desc">
      Will miss you brother and my little buddy....
    </div>
    <div class="tags">
      <span>#missyou</span>
      <span>#goodbye</span>
    </div>
    <div class="footer">
      <div class="like">
        <i class="fas fa-heart"></i>
        <span>12k</span>
      </div>
      <div class="comment">
        <i class="fas fa-comment"></i>
        <span>12k</span>
      </div>
      <div class="share">
        <i class="fas fa-share"></i>
        <span>12k</span>
      </div>
    </div>
  </div>
</div>
<!-- post-3 -->

<div class="card">
  <div class="picture-3"></div>
  <div class="content">
    <div class="header">
      <div class="profile-pic-3"></div>
      <div class="detail">
        <p class="name">Elli Abraham</p>
        <p class="posted">3 hours ago</p>
      </div>
    </div>
    <div class="desc">
      What a marvellous piece of art!
    </div>
    <div class="tags">
      <span>#Beauty</span>
      <span>#IncredibleIndia</span>
    </div>
    <div class="footer">
      <div class="like">
        <i class="fas fa-heart"></i>
        <span>12k</span>
      </div>
      <div class="comment">
        <i class="fas fa-comment"></i>
        <span>12k</span>
      </div>
      <div class="share">
        <i class="fas fa-share"></i>
        <span>12k</span>
      </div>
    </div>
  </div>
</div>



</section>
    
  
  <script type="text/javascript" src="../js/profile.js"></script>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
