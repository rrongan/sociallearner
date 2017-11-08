<?php
require 'inc/secure.inc.php';
require 'inc/header.inc.php';
require 'inc/init.inc.php';
if (isset($_REQUEST['Submit'])) {
try
{   $name = $_POST['name'];
	$email = $_GET['email'];
	$age = $_POST['age'];
    $user->updaterecord($name, $email, $age);
    $stat ="edit";
    header("Location:adminuser.php?stat=$stat");
}
catch (PDOException $e)
{
   echo '<br>PDO Exception Caught.';
   echo 'Error with the database: <br>';
   echo 'SQL Query: ', $sql;
   echo 'Error: ' . $e->getMessage().'</p>';
}
}
 else {
$email = $_GET['email'];
try
{
   $userrec = $user->oneuser($email);
   retrieveonerec($userrec);
}
catch (PDOException $e)
{
   echo '<br>PDO Exception Caught.';
   echo 'Error with the database: <br>';
   echo 'SQL Query: ', $sql;
   echo 'Error: ' . $e->getMessage().'</p>';
}

?>
</p>
<section style='border: 7px solid orange; border-radius: 20px; border-style: groove; padding: 50px;'>
<form action = "" method = "post" class="form-horizontal" id="insertuser" name ="insertuser">
    <fieldset><legend>Update a User Record</legend>
	 <div class="row">
          <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Full Name</label>
            <div class="col-sm-5">
              <input class="form-control" type="text" name="name" id="name" data-h5-errorid="invalid-name" value="<?php echo $name?>"
              required="" pattern="^[A-Z][a-zA-Z ]{1,30}$" title="Please enter a valid name with first letter uppercase" />
              <div id="invalid-name" class="ui-state-error" style="display:none;"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email Address</label>
            <div class="col-sm-5">
              <input type="text" name="email" id="email" class="form-control" disabled value = "<?php echo $email;?>"/>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="age" class="col-sm-2 control-label">Age</label>
            <div class="col-sm-5">
              <div class="input-group date">
                <input id="age" type="text" name='age' class="form-control" data-h5-errorid="invalid-age" value="<?php echo $age?>"
				required="" pattern="[0-9]{1,3}" title="Please enter a valid age"/>
                <div id="invalid-age" class="ui-state-error" style="display:none;"></div>
              </div>
            </div>
          </div>
        </div>
		<div class = "form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input type="submit" class="btn btn-primary" value="Update User Record" name = "Submit">
			<input type="reset" class="btn btn-primary" value="Clear the Info" >
		</div>
		</div>
    </fieldset>
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
<?php
}
?>
</section>
</div>
</body>
</html>
