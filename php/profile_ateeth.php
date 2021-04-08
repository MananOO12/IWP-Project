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

  <link rel="stylesheet" href="../css/profile.css?v=<?php echo time();?>" />
  <link rel="stylesheet" href="../css/navbar.css?v=<?php echo time();?>" />

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
      <!-- below cover area -->
      <div id="box">
        <!-- frineds-box -->
        <div id="box-1">
          <div id="friends-bar">
            <div style="color: gray">Friends <br /></div>

            <div class="friends">
              <img src="../images/Profile-images/user11.jpg" class="f-img" />
              <br />
              Aryan Rathore
            </div>
            <div class="friends">
              <img src="../images/Profile-images/manan.jpg" class="f-img" />
              <br />
              Manan Jain
            </div>
            <div class="friends">
              <img src="../images/Profile-images/namanprofilepic.jpeg" class="f-img" />
              <br />
              Naman
            </div>
            <div class="friends">
              <img src="../images/Profile-images/selfie.jpg" class="f-img" />
              <br />
              Elli Abraham
            </div>
          </div>
        </div>
        <!-- posts area -->
        <div id="box-2">
          <div class="post-box">
            <textarea id="post-text" placeholder="What are you thinking?"></textarea>
            <input type="submit" value="Post" id="post-btn" />
            <br />
          </div>

          <!-- posts -->
          <div id="post-bar">
            <!-- post-1 -->


            <div id="post">
              <div>
                <img src="../images/Profile-images/user2.jpg" style="width: 75px; float: left" />
              </div>
              <div>

                <!-- Changed css -->
                <div class="friends" style="font-weight: bold; float: left ">
                    <p style="margin-left:5px;">Jack Moore</p>
                </div>
                <br />
                <div>
                  <p id="comments">
                  Hey,how are you?
                    <br /><br />
                  </p>


                  <!-- Like comment button -->
                  <!-- <a href="#">Like &nbsp</a> -->
                  <button class="btn like__btn">
                    <span id="icon"><i class="far fa-thumbs-up"></i></span>
                    <span id="count">0</span> Like
                  </button>

                  <!-- <a href="#" onclick="EnterComment();"> Comment </a> -->
                  <button class="btn" onclick="EnterComment();">
                    Comment
                  </button>
             <!-- end changed -->

                  <span style="color: #999"> </span>
                  <br /><br />
                  <textarea id="txt" name="txt" rows="10" cols="50">
                    </textarea>

                <!-- changed -->
                  <button id="bt1" class="btn" value="Close Comment" onclick="PostComment();">
                    Post
                  </button>
                <!-- end changed -->

                  POSTED COMMENTS
                  <div id="comments"></div>
                </div>
              </div>
            </div>

            <!-- post-2 -->
            <div id="post">
              <div>
                <img src="../images/Profile-images/user3.jpg" style="width: 75px; float: left" />
              </div>
              <div>


                <!-- Changed css -->
                <div class="friends" style="font-weight: bold; float: left ">
                    <p style="margin-left:5px;">Sneha Singh</p>
                </div>
                <br />
                <div>
                  <p id="comments">
                  Can we meet today?
                    <br /><br />
                  </p>


                  <!-- Like comment button -->
                  <!-- <a href="#">Like &nbsp</a> -->
                  <button class="btn like__btn2">
                    <span id="icon2"><i class="far fa-thumbs-up"></i></span>
                    <span id="count2">0</span> Like
                  </button>

                  <!-- <a href="#" onclick="EnterComment();"> Comment </a> -->
                  <button class="btn" onclick="EnterComment2();">
                    Comment
                  </button>
                <!-- end changed -->

                  <span style="color: #999">  </span>
                  <br /><br />
                  <textarea id="txt2" name="txt" rows="10" cols="50">
                    </textarea>

                    <!-- changed -->
                      <button id="bt2" class="btn" value="Close Comment" onclick="PostComment2();">
                        Post
                      </button>
                    <!-- end changed -->


                  POSTED COMMENTS
                  <div id="comments2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="../js/profile.js"></script>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
