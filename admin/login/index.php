<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.5
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <!-- Icons-->
    <link href="../asset/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="../asset/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="../asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../asset/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="../asset/css/style.css" rel="stylesheet">
    <link href="../asset/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>Login</h1>
                <p class="text-muted">Sign In to your account</p>
                <form action="login_action.php" method="POST">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="icon-user"></i>
                      </span>
                    </div>
                    <input class="form-control" type="text" placeholder="Username" name="username">
                  </div>
                  <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="icon-lock"></i>
                      </span>
                    </div>
                    <input class="form-control" type="password" placeholder="Password" name="password">
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <button type="submit" class="btn btn-primary px-4">Login</button>
                    </div>
                    <div class="col-6 text-right">
                      <button class="btn btn-link px-0" type="button">Forgot password?</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="../asset/asset/vendors/jquery/js/jquery.min.js"></script>
    <script src="../asset/asset/vendors/popper.js/js/popper.min.js"></script>
    <script src="../asset/asset/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="../asset/asset/vendors/pace-progress/js/pace.min.js"></script>
    <script src="../asset/asset/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="../asset/asset/vendors/@coreui/coreui/js/coreui.min.js"></script>
  </body>
</html>
