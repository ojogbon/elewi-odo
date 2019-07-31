<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
          <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="author" content="Grayrids">

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
        <link rel="stylesheet" href="vendor/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="vendor/css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="vendor/css/line-icons.css">
        <link rel="stylesheet" href="vendor/css/nivo-lightbox.css">
        <link rel="stylesheet" href="vendor/css/icomoon.css">
        <link rel="stylesheet" href="vendor/css/ionicons.min.css">
        <link rel="stylesheet" href="vendor/css/jquery.timepicker.css">
        <link rel="stylesheet" href="vendor/css/animate.css">
        <!-- <link rel="stylesheet" href="vendor/css/style.css"> -->
        <link rel="stylesheet" href="vendor/css/main.css">
        <link rel="stylesheet" href="vendor/css/responsive.css">
        <!-- Custome CSS -->
        <link rel="stylesheet" href="custome/css/self.css">

    <title>Ewi-odo</title>
  </head>
  <body class="header-body">
    <!-- Header Section Start -->
<header id="home" class="hero-area-2">
<div class="overlay"></div>
<nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
  <div class="container">
    <a href="index.html" class="navbar-brand"><img src="img/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <i class="lni-menu"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto w-100 justify-content-end">
        <li class="nav-item">
          <a class="nav-link page-scroll log" href="#home">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll reg" href="#app-features">Register</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row space-100">
    <div class="col-lg-7 col-md-12 col-xs-12">
      <div class="contents">
        <h5 class="head-title"><span class="icon">
                  <i class="lni-brush lni"></i>
                </span>We Paint</h5>
        <h5 class="head-title"><span class="icon">
                  <i class="lni-home lni"></i>
                </span>We Create</h5>
        <h5 class="head-title"><span class="icon">
                  <i class="lni-book lni"></i>
                </span>We Educate</h5>

        <div class="header-button">
          <a href="#" class="btn btn-border-filled">.....All with Words.....</a>
        </div>
      </div>
    </div>
    <div class="col-lg-5 col-md-12 col-xs-12">
      <div class="intro-img">
        <form class="form in-out" role="form" action="index.html" method="post">
          <h1>Register</h1>
              <div class="form-group">
                <input type="text" name="username" class="form-control" value="" placeholder="Username...">
              </div>
              <div class="form-group">
                <input type="text" name="email_phone" class="form-control" value="" placeholder="Email OR PhoneNumber...">
              </div>
              <div class="form-group">
                <input type="text" name="password" class="form-control" value="" placeholder="Password...">
              </div>
              <div class="form-group">
                <input type="text" name="confirm_password" class="form-control" value="" placeholder="Confirm Password...">
              </div>
              <div class="form-group">
                  <button type="button" class="form-control btn for-link in" name="button">Register</button>
                  <a href="#"> Login Instead?</a>

              </div>
              <hr>
              <div class="form-group">
                  <button type="button" class="form-control btn for-link" name="button">Sign up with Google</button>
              </div>
        </form>
        <form class="form login" role="form" action="index.html" method="post">
          <h1>Login</h1>
              <div class="form-group">
                <input type="text" name="username_email" class="form-control" value="" placeholder="Username or Email...">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" value="" placeholder="Password...">
              </div>

              <div class="form-group">
                  <button type="button" class="form-control btn for-link in" name="button">Login</button>
                  <ul class="ul-log">
                    <li class="li-log" >  <a href="#">issues with Login?</a></li>
                    <li class="li-log lefts" > <a href="#">Register instead!</a></li>
                  </ul>

              </div>

              <hr>

              <div class="form-group">
                  <button type="button" class="form-control btn for-link" name="button">Sign UP with Google</button>

              </div>
        </form>
      </div>
    </div>
  </div>
</div>
</header>
<!-- Header Section End -->


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="vendor/js/jquery-min.js"></script>
    <script src="vendor/js/jquery-nav.js"></script>
    <script src="vendor/js/owl.carousel.js"></script>
    <script src="vendor/js/main.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    $(".log").click(function(){
          $(".in-out").fadeOut(100);
          $(".login").fadeIn(700);
          $(".login").animate({right: '250px'});
          $(".login").css({'display': 'block'});

      });
    $(".reg").click(function(){
          $(".login").fadeOut(100);
          $(".in-out").fadeIn(700);
          $(".login").css({'display': 'block'});

      });
    </script>
  </body>
</html>
