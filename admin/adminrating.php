<?php
require 'inc/header.inc.php';
require 'inc/init.inc.php';
if (isset($_GET['stat'])) {
if($_GET['stat'] =='delete') {
  echo "<h3>Rating has been deleted successfully!</h3>";
}
}

echo "<section style='border: 7px solid orange; border-radius: 20px; border-style: groove; padding: 50px;'>";
echo "<h1 class='text-center'>Rating</h1>";
echo "<table width='100%'><tr>";
echo "<td><h2 class='text-left'><a class='btn btn-primary' href='ratingbyEmail.php' role='button'><span class='glyphicon glyphicon-search'></span><b> Search (Email)</b></a></h2></td></tr></table>";


$result =$rating->allrating();
$count=count($result);
if ($count>0)
 {
  displayrecs2($result);
  }
  else echo ("<br>There are no users to view!");

  echo "</section></div>";
?>  

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



























