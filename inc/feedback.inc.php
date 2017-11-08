<?php
function displayrecs($result) {
 echo '<div class="table-responsive">';
 echo '<table class="table table-striped table-hover table-bordered table-condensed"><thead><tr><th>Email</th><th>Name</th>
 <th>Age</th><th>Edit/Delete</th></tr></thead><tbody>';
   foreach ($result as $row){
	echo "<tr>";
	echo "<td><a href='mailto:".$row->email."'>".$row->email."</td>";
	$email = $row->email;
	echo "<td>".$row->name."</td>";
	echo "<td>".$row->age."</td>";
    echo "<td><div class='btn-group'>
		  <a href='edituser.php?email=$email' class='btn btn-default'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></a>
		  <a href='deleteuser.php?email=$email' class='btn btn-default'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></td>";
    echo"</tr>";
   }
  echo '</tbody></table>';
}


function displayrecs2($result) {

 echo '<div class="table-responsive">';
 echo '<table class="table table-striped table-hover table-bordered table-condensed"><thead><tr><th>Email</th><th>Q1</th>
	  <th>Q2</th><th>Q3</th><th>Q4</th><th>Q5</th><th>Overall</th><th>Comment</th></tr></thead><tbody>';
   foreach ($result as $row){
	echo "<tr>";
	echo "<td><a href='mailto:".$row->email."'>".$row->email."</td>";
	$email = $row->email;
	echo "<td>".$row->q1."</td>";
	echo "<td>".$row->q2."</td>";
	echo "<td>".$row->q3."</td>";
	echo "<td>".$row->q4."</td>";
	echo "<td>".$row->q5."</td>";
	echo "<td>".$row->overall."</td>";
	echo "<td>".$row->comment."</td>";
    echo"</tr>";
   }
  echo '<tbody></table>';
}

function displayreviews($result) {
	echo "<h1 style='text-align: center; margin-bottom: 30px; text-decoration: underline; font-weight: bold; font-family: Arial Black;'>User Reviews</h1>";
	foreach ($result as $row){
	echo "<div class='col-md-4 col-xs-12'>";
    echo "<div class='d1' style='border: 3px dashed yellow; border-radius: 20px; padding: 10px; margin-bottom: 10px;'>";
	echo "<span class='stars'>".$row->overall."</span>";
	echo "<br><u>By <span class='c2' style='color: blue;'>".$row->name."</span>";
	echo "<span class='c1'> (".$row->media.")</span>";
	echo "<span class='c1'> On ".$row->date."</span></u>";
	echo "<p>".$row->comment."</p>";
	echo "</div>";
	echo "</div>";
   }
}

function retrieveonerec($user) {
    global $name, $email, $age;
    $name = $user->name;
    $email=$user->email;
    $age=$user->age;
}
?>