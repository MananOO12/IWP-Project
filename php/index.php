<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/styles.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <header>
      <h1>Chit-Chat</h1>
    </header>

    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form autocomplete="off" action="#" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="#" autocomplete="off" class="sign-up-form" id="form" class="invalid valid">
            <h2 class="title">Sign up</h2>
            <div id="tab">
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input
                type="text"
                placeholder="Username"
                id="username"
                name="username"
                onkeyup="validateusername();"
                required
              />
              <span class="indicator3"></span>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input
                type="text"
                placeholder="Email"
                id="email"
                name="email"
                required
                onkeyup="validateemail();"
              />
              <span class="indicator"></span>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input
                type="password"
                placeholder="Password"
                name="pwd"
                id="pwd"
                required
                onkeyup="validatepwd();"
              />
              <span class="indicator1"></span>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input
                type="password"
                placeholder="Reenter Password"
                name="pwd1"
                id="pwd1"
                onblur="vaildatereenterpwd();"
                required
              />
              <span class="indicator2"></span>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="button" class="btn" value="NEXT" onclick="Nextpage()" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>    
        </div>
            
        <div id = "tab1">
            <div class="input-field">
                <i class="fas fa-flag"></i>
                  <input type="text" placeholder="Country" name="nationality" id="nationality" required onblur="vaildateNationality();" />
                  <span class="indicator4"></span>
            </div>
                 <!-- <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="radio" name="Male" id="Male" value="Male"/>
                    <label for="Male">Male</label>
                    <input type="radio" name="Female" id="Female" value="Female"/>
                    <label for="Female">Female</label>
                    
                    <input type="radio" name="Others" id="Others" value="Others"/>
                    <label for="Others">Others</label>
                    <span class="indicator5"></span>
                  </div>-->
                  <!-- Old radio button -->
                  
                  <div class="input-field">
						<i class="fas fa-user"></i>
						<select class="form-control input-md" name="u_gender" required="required">
							<option disabled>Select your Gender</option>
							<option>Male</option>
							<option>Female</option>
							<option>Others</option>
						</select>
            <span class="indicator5"></span>
					</div>
          <!-- Drop down menu ends-->
                  <div class="input-field">
                    <i class="fas fa-calendar-day"></i>
                    <input type="date" placeholder="date" name="dat" id="dat" required />
                  </div>
                  <input type="button" class="btn" value="PREVIOUS" onclick="Previouspage()"/>
                  <input type="submit" class="btn" value="SUBMIT" />
                  <p class="social-text">Or Sign up with social platforms</p>
                  <div class="social-media">
                    <a href="#" class="social-icon">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                      <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </div>
            </div>
          </form>
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Please fill the following form after clicking the below button to sign up to <b>Chit-Chat</b> .
            </p>
            <button class="btn transparent" id="sign-up-btn">Sign up</button>
          </div>
          <img src="images/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Please sign into <b>Chit-Chat</b> by filling up the following form after clicking the below button
            </p>
            <button class="btn transparent" id="sign-in-btn">Sign in</button>
          </div>
          <img src="images/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="js/app.js"></script>
    <script src="js/valform.js"></script>
  </body>
</html>
