
<?php
require 'inc/secure.inc.php';
require 'inc/header.inc.php';
require 'inc/init.inc.php';

if (isset($_REQUEST['Submit'])) {
try {
	
echo "<section style='border: 7px solid orange; border-radius: 20px; border-style: groove; padding: 50px;'>";
  $name= $_POST['name'];
  $field='name';
  $result = $user->finduser($field,$name);
  $count=count($result);
echo "<h2>[".$name."]'s Search Result(s): </h2>";
  if ($count>0)
  {
    displayrecs($result);
  }
  else echo ("<br>There are no users to view!");
  
  
echo "</section>";
}
catch(PDOException $e) {
 echo '<br>Problem with the Selecting from the User table - ';
 echo $e->getMessage();
 exit;
}
}

else {
?>
<section style='border: 7px solid orange; border-radius: 20px; border-style: groove; padding: 50px;'>
<h1 class='text-center'>Search User by Name</h1><br>
<form action="" method="post" id = "form" class = form-horizontal>
<div class="form-group">
 <label for="name" class="col-sm-3 control-label">Name of User (full or partial): </label>
 <div class="col-sm-9">
 <input type="text" id = "name" name="name"  autofocus required data-h5-errorid="invalid-name"
                     autofocus title="Please enter a valid name with first letter uppercase" class="form-control">
					 <div id="invalid-name" class="ui-state-error" style="display:none;"></div>
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



























