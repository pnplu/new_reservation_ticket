<?php  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Manage</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css">
    <script src="../vendor/twbs/bootstrap/dist/js/jquery.min.js"></script>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Css -->
    <link rel="stylesheet" href="../stylesheets/css/style_index.css">
    <style media="screen">
      .wrap_login{

      }
      .wrap_login h2{
        font-family: 'Kanit', sans-serif;
        text-align: center;
      }
      .wrap_login .in_pass{
        height: 40px;
      }
      .wrap_login button{
        margin-top: 20px;
        height: 40px;
      }
    </style>
  </head>
  <body>
    <section class="container-fluid">
      <section class="row">
        <article class="col-xs-12 wrap_top_menu">
          <article class="col-xs-3 wrap_logo">
            <a href="index.php"><img src="../image/logo/logo_ict.png" alt="ICTSILPAKORN"></a>
          </article>
          <article class="col-xs-9 wrap_r_top_menu">
          </article>
        </article> <!-- wrap_top_menu -->
        <article class="col-xs-12">
          <article class="col-md-offset-4 col-md-4 wrap_login">
            <h2>Login</h2>
            <form action="login_process.php" method="post">
              <p>Password</p>
              <input class="col-xs-12 in_pass" type="password" name="password">
              <button class="col-xs-12" type="submit" name="button">Login</button>
            </form>
          </article>
        </article>
      </section>
    </section>
  </body>
</html>
