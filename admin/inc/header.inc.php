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
  </head>
  <body>
  <div class="container" id="settop">
    <div class="navwrap">
      <div class="row">
        <div class="col-md-4 col-xs-5">
          <div style="margin-top: 0;" class="nav navbar-nav">
            <a class="navbar-brand" href="index.php">
              <img alt="Logo" src="images/logo.png" class="img-responsive" />
            </a>
          </div>
        </div>
		
        <div class="col-md-8 col-xs-12">
          <div class="row">
		<div class="col-md-3 col-xs-3">
          <ul class="nav navbar-nav">
           <li class="dropdown">
             <a class="dropdown-hover" href="adminrating.php">Rating</a>
		   </li>
          </ul>
         </div>
         <div class="col-md-3 col-xs-3">
          <ul class="nav navbar-nav">
           <li class="dropdown">
             <a class="dropdown-hover" href="adminuser.php">User</a>
           </li>
          </ul>
         </div>
            <div class="col-md-3 col-xs-3">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-hover" data-toggle="dropdown" data-hover="dropdown">Administration<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="editadmin.php">Edit Administration <br>Password</a>
                    </li>
                    <li>
                      <a href="<?php echo 'index.php'?>?logout=1">Log Out</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>