<?php 
require 'inc/access.inc.php';
if (loggedIn())
{   header('Location:adminuser.php');}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Social Learner</title>
    <link rel="shortcut icon" href="images/logotitle.png" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="css/mycss.css" rel="stylesheet" />
    <link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
    <title>Social Learner</title>
  </head>
  <body>
  <div class="container" id="settop">
    <div class="navwrap">
      <div class="row">
        <div class="col-md-4 col-xs-5">
          <div style="margin-top: 0;" class="nav navbar-nav">
            <a class="navbar-brand" href="../index.htm">
              <img alt="Logo" src="images/logo.png" class="img-responsive" />
            </a>
          </div>
        </div>
      </div>
    </div>
    <section style='border: 7px solid orange; border-radius: 20px; border-style: groove; padding: 50px;'>
      <header class="col-md-12">
        <h1>Feedback Database Access</h1>
      </header>
      <form action="<?php echo  $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal">
        <div class="modal-body">
          <div class="form-group">
            <label for="uname" class="col-lg-2 control-label">Username:</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="uname" name="uname" autofocus="" />
            </div>
          </div>
          <div class="form-group">
            <label for="password1" class="col-lg-2 control-label">Password:</label>
            <div class="col-lg-10">
              <input type="password" class="form-control" id="password1" name="password1" />
            </div>
          </div>
          <div class="modal-footer">
          <a class="btn btn-default" data-dismiss="modal">Close</a> 
          <button class="btn btn-primary" type="submit">Login</button></div>
        </div>
      </form>
    </section>
  </div>
    <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <a class="wit" href="http://www.wit.ie">
            <img alt="Waterford Institute of Technology" src="images/witlogo.png" class="img-responsive" />
          </a>
        </div>
        <div class="content col-md-8">
          <p>This project is a school project and everything in here is part of my assignment for Human Computer Interaction
          subject in BSc of Software System Development course at Waterford Institute of Technology.</p>
          <p>2015 | Social Learner</p>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery-1.11.1.min.js"></script> 
  <script src="js/bootstrap.min.js"></script> 
  </body>
</html>
