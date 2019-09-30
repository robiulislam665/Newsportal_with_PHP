<?php
//back button protection
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
    if (isset($_SESSION["user_id"])) {
        header('Location: ' . BASE_URL . 'dashboard');
    }
} else {
    if (isset($_SESSION["user_id"])) {
        header('Location: ' . BASE_URL . 'dashboard');
    }
}
?>

<?php
//back button protection
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
    if (isset($_SESSION["user_id"])) {
        header('Location: ' . BASE_URL . 'dashboard');
    }
} else {
    if (isset($_SESSION["user_id"])) {
        header('Location: ' . BASE_URL . 'dashboard');
    }
}
?>

<!DOCTYPE html>
<html>
    
<head>
  <title>Fish Expert Login form</title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
  <link rel="stylesheet" type="text/css" href="resources/backend2/css/bootstrap.min.css">
  <link href="resources/backend2/css/unpkg.css" rel="stylesheet">
  
  <style type="text/css">
    
    /* Coded with love by Mutiullah Samim */
      body,
      html {
        margin: 0;
        padding: 0;
        height: 100%;
        background: #eaedef !important;
      }
      .user_card {
        height: 400px;
        width: 350px;
        margin-top: auto;
        margin-bottom: auto;
        background: #fff;
        position: relative;
        display: flex;
        justify-content: center;
        flex-direction: column;
        padding: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 5px;

      }
      .brand_logo_container {
        position: absolute;
        height: 170px;
        width: 170px;
        top: -75px;
        border-radius: 50%;
        background: #eaedef;
        padding: 10px;
        text-align: center;
      }
      .brand_logo {
        height: 150px;
        width: 150px;
        border-radius: 50%;
        border: 2px solid white;
      }
      .form_container {
        margin-top: 100px;
      }
      .login_btn {
        width: 100%;
        background: #3A73B8 !important;
        color: white !important;
      }
      .login_btn:focus {
        box-shadow: none !important;
        outline: 0px !important;
      }
      .login_container {
        padding: 0 2rem;
      }
      .input-group-text {
        background: #3A73B8 !important;
        color: white !important;
        border: 0 !important;
        border-radius: 0.25rem 0 0 0.25rem !important;
      }
      .input_user,
      .input_pass:focus {
        box-shadow: none !important;
        outline: 0px !important;
      }
      .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
        background-color: #3A73B8 !important;
      }

  </style>


</head>
<!--Coded with love by Mutiullah Samim-->
<body>
  <div class="container h-100">
    <p class="text-center">
      <?php

                if (isset($_SESSION['message'])) {
                    echo "<h5 class='text-success text-center'>" . $_SESSION['message'] . "</h5>";
//                    session_unset();
                    session_destroy();
                }

                if (isset($_SESSION['exception'])) {
                    echo "<h5 class='text-danger text-center'>" . $_SESSION['exception'] . "</h5>";
//                    session_unset();
                    session_destroy();
                }
                ?>
    </p>
    <div class="d-flex justify-content-center h-100">
      <div class="user_card">
        <div class="d-flex justify-content-center">
          <div class="brand_logo_container">
            <img data-aos="fade-down" data-aos-duration="2000" src="resources/backend2/img/logo/logo.jpg" class="brand_logo" alt="Logo">
          </div>
        </div>

        <div class="d-flex justify-content-center form_container">
         
          <form action="admin_store_registration" method="post">
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" name="name" class="form-control input_user" value="" placeholder="enter name">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="email" name="email" class="form-control input_pass" value="" placeholder="enter email">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" name="confirm_password" class="form-control input_pass" value="" placeholder="password">
            </div>
            
             <input type="submit" name="submit" value="submit" class="btn login_btn">
          </form>
        </div>
        <!-- <div class="d-flex justify-content-center mt-3 login_container">
          <a href="admin/index.php" type="button" name="button" class="btn login_btn">Login</a>
        </div> -->
        <div class="mt-4">
          <div class="d-flex justify-content-center links">
            Don't have an account? <a href="#" class="ml-2">Sign Up</a>
          </div>
          <div class="d-flex justify-content-center links">
           <!--  <a href="#">Forgot your password?</a> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="resources/backend2/js/jquery.min.js"></script>
  <script src="resources/backend2/js/unpkg.js/"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>


