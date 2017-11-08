
<?php
require 'inc/secure.inc.php';
require 'inc/header.inc.php';
require 'inc/init.inc.php';

if (isset($_REQUEST['Submit'])) {
try {
	
echo "<section style='border: 7px solid orange; border-radius: 20px; border-style: groove; padding: 50px;'>";
  $email= $_POST['email'];
  $field='email';
  $result = $rating->findrating($field,$email);
  $count=count($result);
echo "<h2>[".$email."]'s Search Result(s): </h2>";
  if ($count>0)
  {
    displayrecs2($result);
  }
  else echo ("<br>There are no ratings to view!");
  
  
echo "</section>";
}
catch(PDOException $e) {
 echo '<br>Problem with the Selecting from the Rating table - ';
 echo $e->getMessage();
 exit;
}
}

else {
?>
<section style='border: 7px solid orange; border-radius: 20px; border-style: groove; padding: 50px;'>
<h1 class='text-center'>Search Rating by Email</h1><br>
<form action="" method="post" id = "form" class = form-horizontal>
<div class="form-group">
 <label for="email" class="col-sm-3 control-label">Full Email of User: </label>
 <div class="col-sm-9">
 <input type="text" id = "email" name="email"  autofocus required data-h5-errorid="invalid-email"
               pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$" autofocus title="Please enter a full email" class="form-control">
			   <div id="invalid-email" class="ui-state-error" style="display:none;"></div>
 </div>
 </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
 <input type="submit" name = "Submit" class="btn btn-primary">
 </div></div>
</form>
</section>
<?php
}
?>
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
  <script src="js/jquery.h5validate.js"></script>
  <script>
  $(document).ready(function () {
    $('form').h5Validate({errorClass:'validationError' });
  });
  </script>
</body>
</html>



























