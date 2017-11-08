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
	<?php
	  require 'inc/init.inc.php';
		$q1=0;
		$q2=0;
		$q3=0;
		$q4=0;
		$q5=0;
		$comment=0;
		$overall=0;
		$name = '';
		$email = '';
		$age = '';
		if(isset($_POST['Submit'])){
		  $q1 = $_POST['q1'];
		  $q2 = $_POST['q2'];
		  $q3 = $_POST['q3'];
		  $q4 = $_POST['q4'];
		  $q5 = $_POST['q5'];
		  $comment = $_POST['comment'];
		  $overall = ($q1+$q2+$q3+$q4+$q5)/5;
		  $name = $_POST['name'];
		  $email = $_POST['email'];
		  $age = $_POST['age'];
		  $media = $_POST['media'];
		
		try {
		$user->adduser($email, $name, $age);
		$rating->addrating($q1, $q2, $q3, $q4, $q5, $overall, $comment, $email, $media);
		$stat ="add";
		header("Location:process.php?stat=$stat");
		}
			 
		catch (PDOException $e)
		{
			if ($e->errorInfo[1] == 1062) { 
				echo "<h3>You are already submitted your review before, thanks for your support!</h3>";
				echo "<h3><a href='index.htm'>Back to Home Page</a></h3>";
			}else {
				echo '<br>PDO Exception Caught.';
				echo 'Error with the database: <br>';
				echo 'SQL Query: ', $sql;
				echo 'Error: ' . $e->getMessage().'</p>';
			}
		}
		} else {
	  ?>
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
       <form action="" method="POST" name="feedback" id = "feedback" class="form-horizontal" role="form">
       <div class="row">
        <h1>Feedback For Website</h1>
       </div>
	    <div class ="form-group">
        <label for="media" class="control-label">Type of Media</label>
         <select style="width: 150px;" name="media" id = "media" class="form-control">
         <?php
		   $result =$media->media();
           foreach ($result as $row){
			$mediaid=$row->mediaid;
		   	$media=$row->media;
            echo "<option value='$mediaid'>$media</option>\n";
           }
         ?>
	     </select>
     </div>
        <div class="row">
          <div class="form-group">
            <label for="q1" class="control-label">1. Overall, how well my website meet your needs?</label>
            <div class="col-sm-12">
              <input type="radio" name="q1" id="q1" value="5" checked=""> Extremely well<br>
              <input type="radio" name="q1" id="q1" value="4"> Very well<br>
              <input type="radio" name="q1" id="q1" value="3"> Somewhat well<br>
              <input type="radio" name="q1" id="q1" value="2"> Not so well<br>
              <input type="radio" name="q1" id="q1" value="1"> Not at all well<br>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="q2" class="control-label">2. How easy was it to find what you were looking on my website?</label>
            <div class="col-sm-12">
              <input type="radio" name="q2" id="q2" value="5"checked=""> Extremely easy<br>
              <input type="radio" name="q2" id="q2" value="4"> Very easy<br>
              <input type="radio" name="q2" id="q2" value="3"> Somewhat easy<br>
              <input type="radio" name="q2" id="q2" value="2"> Not so easy<br>
              <input type="radio" name="q2" id="q2" value="1"> Not at all easy<br>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="q3" class="control-label">3. Did it take you more or less time than you expected to find what youy were looking for on my website?</label>
            <div class="col-sm-12">
              <input type="radio" name="q3" id="q3" value="5" checked=""> A lot less time<br>
              <input type="radio" name="q3" id="q3" value="4"> A little less time<br>
              <input type="radio" name="q3" id="q3" value="3"> About what I expected<br>
              <input type="radio" name="q3" id="q3" value="2"> A little more time<br>
              <input type="radio" name="q3" id="q3" value="1"> A lot more time<br>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="q4" class="control-label">4. How visually appealing is my website?</label>
            <div class="col-sm-12">
              <input type="radio" name="q4" id="q4" value="5" checked=""> Extremely appealing<br>
              <input type="radio" name="q4" id="q4" value="4"> Very appealing<br>
              <input type="radio" name="q4" id="q4" value="3"> Somewhat appealing<br>
              <input type="radio" name="q4" id="q4" value="2"> Not so appealing<br>
              <input type="radio" name="q4" id="q4" value="1"> Not at appealing<br>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="q5" class="control-label">5. How easy is it to understand the information on my website?</label>
            <div class="col-sm-12">
              <input type="radio" name="q5" id="q5" value="5" checked=""> Extremely easy<br>
              <input type="radio" name="q5" id="q5" value="4"> Very easy<br>
              <input type="radio" name="q5" id="q5" value="3"> Somewhat easy<br>
              <input type="radio" name="q5" id="q5" value="2"> Not so easy<br>
              <input type="radio" name="q5" id="q5" value="1"> Not at all easy<br>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="comment" class="control-label">6. Do you have any other comments about I can improve my website?</label>
            <div class="col-sm-12">
                <textarea name="comment" form="feedback" rows="4" cols="50"></textarea>
            </div>
          </div>
        </div>
                        
        <div class="row">
          <h1>Provide Your Information</h1>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Full Name</label>
            <div class="col-sm-5">
              <input class="form-control" type="text" name="name" id="name" data-h5-errorid="invalid-name"
              required="" pattern="^[A-Z][a-zA-Z ]{1,30}$" title="Please enter a valid name with first letter uppercase" />
              <div id="invalid-name" class="ui-state-error" style="display:none;"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email Address</label>
            <div class="col-sm-5">
              <input type="text" name="email" id="email" class="form-control" data-h5-errorid="invalid-email" required=""
              pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$" title="Please enter a valid email" />
              <div id="invalid-email" class="ui-state-error" style="display:none;"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="age" class="col-sm-2 control-label">Age</label>
            <div class="col-sm-5">
              <div class="input-group date">
                <input id="age" type="text" name='age' class="form-control" data-h5-errorid="invalid-age" required="" 
                pattern="[0-9]{1,3}" title="Please enter a valid age"/>
                <div id="invalid-age" class="ui-state-error" style="display:none;"></div>
              </div>
            </div>
          </div>
        </div>
        
        <div class = "form-group">
         <div class="col-sm-6 col-sm-offset-2">
          <input type="submit" class="btn btn-primary" value="Submit" name="Submit">
          <input type="reset" class="btn btn-primary" value="Clear the Info">
        </div>
        </div>
        
	</form>	
	<?php
	}
	?>
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
