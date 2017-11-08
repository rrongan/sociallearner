<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Social Learner - Feedback</title>
    <link rel="shortcut icon" href="images/logotitle.png" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="css/mycss.css" rel="stylesheet" />
  </head>
  <body>
  <div class="container" id="settop">
    <div class="navwrap">
      <div class="row">
        <div class="col-md-3 col-xs-5">
          <div style="margin-top: 0;" class="nav navbar-nav">
            <a class="navbar-brand" href="index.htm">
              <img alt="Logo" src="images/logo.png" class="img-responsive" />
            </a>
          </div>
        </div>
        <div class="col-md-9 col-xs-12">
          <div class="row">
            <div class="col-md-2 col-xs-2">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-hover" data-toggle="dropdown" data-hover="dropdown">Facebook<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="fIntro.htm">Introduction</a>
                    </li>
                    <li>
                      <a href="fGuide.htm">Guide</a>
                    </li>
                    <li>
                      <a href="fTips.htm">Tips</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="col-md-2 col-xs-2">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-hover" data-toggle="dropdown" data-hover="dropdown">WhatsApp<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="wIntro.htm">Introduction</a>
                    </li>
                    <li>
                      <a href="wGuide.htm">Guide</a>
                    </li>
                    <li>
                      <a href="wTips.htm">Tips</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="col-md-2 col-xs-2">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-hover" data-toggle="dropdown" data-hover="dropdown">Skype<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="sIntro.htm">Introduction</a>
                    </li>
                    <li>
                      <a href="sGuide.htm">Guide</a>
                    </li>
                    <li>
                      <a href="sTips.htm">Tips</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="col-md-2 col-xs-2">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a class="dropdown-hover" href="diss.php">Feedback</a>
                </li>
              </ul>
            </div>
			<div class="col-md-2 col-xs-2">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a class="dropdown-hover" href="res.php">Statistic</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section style="border: 7px solid orange; border-radius: 20px; border-style: groove; padding: 50px;">
      <div class="row">
          <div class="col-md-12">
	    <div class="logo">
	      <a class="sociallerner" href="index.htm">
                <img alt="Social Lerner" src="images/logo.png" class="img-responsive"/>
              </a>
              <br>
            </div>
          </div>
      </div>
      
      <div class="container">
		<?php
		if($_GET['stat'] =='add') {
		echo "<h3>Thanks for your feedback!</h3>";
		}
		?>
		<h3><a href="index.htm">Back to Home Page</a></h3>
      </div>
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
      <div class="subfooter">
        <ul class="subfooter-menu">
          <li>
            <a href="reference.htm">Reference</a>
          </li>
          <li>·</li>
          <li>
            <a href="contact.htm">Contact Me</a>
          </li>
          <li>·</li>
          <li>
            <a href="disclaimer.htm">Disclaimer</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <script src="js/jquery-1.11.1.min.js"></script> 
  <script src="js/bootstrap.min.js"></script> 
  <script src="js/jquery.h5validate.js"></script>
  <script src="//my.hellobar.com/06199d58a90f07c4c9d72e5d3b61c65f1f69a67a.js" type="text/javascript" charset="utf-8"
  async="async"></script>
  <script>
  $(document).ready(function () {
    $('form').h5Validate({errorClass:'validationError' });
  });
  </script>
</body>
</html>
