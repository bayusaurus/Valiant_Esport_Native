<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <!-- Custon CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/custom.css">
    <!-- Google Fonts -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Quattrocento'>
    <!-- Favicon -->
    <link rel="icon" type="image/gif" href="<?= BASEURL; ?>/image/favicon.png">

    <title>LOGIN | TEAM VALIANT</title>
  </head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12 min-vh-100 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded shadow shadow-sm">
                        <div class="card-header">
                            <h3 class="mb-0 text-center">Login</h3>
                        </div>
                        <div class="card-body">
                            <?php Flasher::flash(); ?>
                            <?php  
                                if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
                                    header('Location: '. BASEURL .'/Admin/index');
                                }else{
                                    session_destroy();
                                }
                            ?>
                            <form class="form" autocomplete="off" id="formLogin" method="POST" action="<?= BASEURL; ?>/Admin/Login">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="username" id="uname1" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="password" id="password" required="" autocomplete="new-password">
                                    <div class="invalid-feedback">Enter your password too!</div>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>

  <script src="<?= BASEURL; ?>/js/jquery-3.4.1.min.js"></script>
  <script src="<?= BASEURL; ?>/js/popper.min.js"></script>
  <script src="<?= BASEURL; ?>/js/bootstrap.min.js"></script>
</body>
</html>