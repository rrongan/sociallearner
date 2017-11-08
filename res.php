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
	
	<?php
	  require 'inc/init.inc.php';
	  $overallavg = $result->overallavg();
	  $q1avg = $result->q1avg();
	  $q2avg = $result->q2avg();
	  $q3avg = $result->q3avg();
	  $q4avg = $result->q4avg();
	  $q5avg = $result->q5avg();
	  $onestar = $result->onestar();
	  $twostar = $result->twostar();
	  $threestar = $result->threestar();
	  $fourstar = $result->fourstar();
	  $fivestar = $result->fivestar();
	  $countoverall = $result->countoverall();
	  $overallavgperc = round($overallavg[0][0]*100/5,2);
	  $q1avgperc = round($q1avg[0][0]*100/5/5,2);
	  $q2avgperc = round($q2avg[0][0]*100/5/5,2);
	  $q3avgperc = round($q3avg[0][0]*100/5/5,2);
	  $q4avgperc = round($q4avg[0][0]*100/5/5,2);
	  $q5avgperc = round($q5avg[0][0]*100/5/5,2);
	  $countonestar =  $onestar[0][0];
	  $counttwostar = $twostar[0][0];
	  $countthreestar = $threestar[0][0];
	  $countfourstar = $fourstar[0][0];
	  $countfivestar = $fivestar[0][0];
	  $numberofuser = $countoverall[0][0];
	?>
	
    <section style="border: 7px solid orange; border-radius: 20px; border-style: groove; padding: 50px;">
		<h1 style='text-align: center; margin-bottom: 30px; text-decoration: underline; font-weight: bold; font-family: Arial Black;'>Rating Statistics</h1>
		<div id="overall" style="height: 500px; width: 100%;margin-bottom: 50px;"></div>
		<div id="rating" style="height: 500px; width: 100%;"></div>
		<?php
		$user = $result->review();
		$count=count($user);
		if ($count>0)
		{
			echo "<div class='row'>";
			displayreviews($user);
			echo "</div>";
		}
		?>
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
  <script src="js/jquery.canvasjs.min.js"></script>
  <script src="js/canvasjs.min.js"></script>
  <script src="//my.hellobar.com/06199d58a90f07c4c9d72e5d3b61c65f1f69a67a.js" type="text/javascript" charset="utf-8"
  async="async"></script>
  <script>
  $(document).ready(function () {
    $('form').h5Validate({errorClass:'validationError' });
  });
  
  $.fn.stars = function() {
    return $(this).each(function() {
        // Get the value
        var val = parseFloat($(this).html());
        // Make sure that the value is in 0 - 5 range, multiply to get width
        var size = Math.max(0, (Math.min(5, val))) * 16;
        // Create stars holder
        var $span = $('<span />').width(size);
        // Replace the numerical value with stars
        $(this).html($span);
    });
   }
	$(function() {
		$('span.stars').stars();
	});
	
  window.onload = function () {
    var chart = new CanvasJS.Chart("overall",
    {
      title:{
        text: "Overall Rating of SocialLearner: <?php echo $overallavgperc; ?>%",
        fontFamily: "Impact",
        fontWeight: "normal",
		fontSize: "30",
      },
      animationEnabled: true,
	  animationDuration: 500,
      data: [
      {
       indexLabelFontSize: 20,
       indexLabelFontFamily: "Garamond",
       indexLabelFontColor: "black",
       indexLabelLineColor: "black",
       indexLabelPlacement: "outside",
       type: "doughnut",
       dataPoints: [
       {  y: <?php echo $q1avgperc; ?>, indexLabel: "Meet Requirement <?php echo $q1avgperc; ?>%" },
       {  y: <?php echo $q2avgperc; ?>, indexLabel: "Easy to Find Information <?php echo $q2avgperc; ?>%" },
       {  y: <?php echo $q3avgperc; ?>, indexLabel: "Time taken to Find Information <?php echo $q3avgperc; ?>%" },
       {  y: <?php echo $q4avgperc; ?>, indexLabel: "Visual <?php echo $q4avgperc; ?>%" },
       {  y: <?php echo $q5avgperc; ?>, indexLabel: "Easy to Understand Information <?php echo $q5avgperc; ?>%" }
       ]
     }
     ]
   });

    chart.render();
	
	var chart2 = new CanvasJS.Chart("rating",
    {
      title:{
        text: "Number of User Rating: <?php echo $numberofuser ?>",
		fontFamily: "Impact",
        fontWeight: "normal",
		fontSize: "30",		
      },
      animationEnabled: true,
	  animationDuration: 500,
      axisY: {
        title: "Number of User",
		interval: 1,
      },
      theme: "theme2",
      data: [

      {        
        type: "bar",
        dataPoints: [      
        {y: <?php echo $countonestar ?>, label: "1 Star"},
        {y: <?php echo $counttwostar ?>, label: "2 Star"},
		{y: <?php echo $countthreestar ?>, label: "3 Star"},
		{y: <?php echo $countfourstar ?>, label: "4 Star"},
		{y: <?php echo $countfivestar ?>, label: "5 Star"},		
        ]
      }   
      ]
    });

    chart2.render();
  }
  </script>
</body>
</html>
