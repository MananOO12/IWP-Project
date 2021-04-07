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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../css/settings.css?v=<?php echo time();?>" />
    <link rel="stylesheet" href="../css/navbar.css?v=<?php echo time();?>" />

    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>

 <!-- <body id="profile-body"-->
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


    <br><br><br>
    <div id = "body">
        <form action="#" autocomplete="off" class="settings-form" id="form" class="invalid valid">
            <h2 class="title">Settings</h2>

            <!--USERNAME-->
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input
                  type="text"
                  placeholder="Enter New Username"
                  id="username"
                  name="username"
                  onkeyup="validateusername();"
                  required
                />
                <span class="indicator3"></span>
                </div>

                <!--EMAIL-->
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input
                      type="text"
                      placeholder="Enter New Email"
                      id="email"
                      name="email"
                      required
                      onkeyup="validateemail();"
                    />
                    <span class="indicator"></span>
                </div>

                <!--PASSWORD-->
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input
                      type="password"
                      placeholder="Enter New Password"
                      name="pwd"
                      id="pwd"
                      required
                      onkeyup="validatepwd();"
                    />
                    <span class="indicator1"></span>
                </div>

                <!--REENTER NEW PASSWORD-->
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input
                      type="password"
                      placeholder="Reenter New Password"
                      name="pwd1"
                      id="pwd1"
                      onblur="vaildatereenterpwd();"
                      required
                    />
                    <span class="indicator2"></span>
                </div>
                <input type="btn" class="savebtn" value="SAVE CHANGES" onclick="display();"/>
        </form>
        <p id="demo"></p>
    </div>

  <script type="text/javascript" src="../js/settings.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="../js/settingsjs.js"></script>
  </body>
</html>
