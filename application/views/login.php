<!DOCTYPE html>

<?php
if (isset($this->session->userdata['logged_in'])) {

    header("location: http://localhost/perpus/Login.php/dashboard");
}


?>


<html lang="en">
  <head>
    <title>Login|Perpustakaan</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="http://localhost/perpus/assets/css/style.css" />
  </head>
  <body class="img js-fullheight" style="background-image: url(http://localhost/perpus/assets/images/bg.jpg)">
  <?php
    if (isset($logout_message)) {
        echo $logout_message;
    }
    if (isset($message_display)) {
        echo $message_display;
    }
?>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <h1 class="heading-section">Perpustakaan Online</h1>
            <img src="http://localhost/perpus/assets/images/unnamed.png" alt="Harry Nugroho" class="rounded-circle img-thumbnail" width="150" />
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4">
            <div class="login-wrap p-0">
              <h3 class="mb-4 text-center">System Login</h3>
              <?= form_open('login/dashboard'); ?>
              <?php
                if (isset($error_message)) {
                    echo $error_message;
                }
                echo validation_errors();
              
              ?>
                <div class="form-group">
                  <input type="text" name="username" id="username" class="form-control" placeholder="Username" required />
                </div>
                <div class="form-group">
                  <input name="password" id="password" type="password" class="form-control" placeholder="Password" required />
                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                </div>
<!--                 <div class="form-group d-md-flex">
                  <div class="w-50">
                    <label class="checkbox-wrap checkbox-primary"
                      >Remember Me
                      <input type="checkbox" checked />
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="w-50 text-md-right">
                    <a href="#" style="color: #fff">Forgot Password</a>
                  </div>
                </div> -->
                <?= form_close(); ?>
                <a href="<?= base_url(); ?>index.php/dashboard"> <button type="submit" class="form-control btn btn-success submit px-3">GO TO DASHBOARD</button></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="http://localhost/perpus/assets/js/jquery.min.js"></script>
    <script src="http://localhost/perpus/assets/js/popper.js"></script>
    <script src="http://localhost/perpus/assets/js/bootstrap.min.js"></script>
    <script src="http://localhost/perpus/assets/js/main.js"></script>
  </body>
</html>