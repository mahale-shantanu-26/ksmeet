<?php
include_once 'dbh.php';
session_start();
if(!isset($_SESSION['email']))
	header("Location: login.html?Can't go back");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KS Meet</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">
  <!-- AJAX/ JavaScript -->
  <script> src="js/add_meeting.js"></script>
  

</head>
<style>

.leftcolumn {   
    padding-left: 30%;
    width: 70%;
}

.card {
     background-color: #eee;
     padding: 20px;
     margin-top: 15px;
     text-align: center;
}
.row:after {
    content: "";
    display: table;
    clear: both;
}

@media screen and (max-width: 800px) {
    .leftcolumn {   
        width: 100%;
        padding: 0;
    }
}
</style>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="logined.php"><h2>KS Meet</h2></a>
      <div class="navbar">
	 	<a class="btn btn-lg btn-light" href="#">Settings</a>&nbsp;&nbsp;&nbsp;
		<a class="btn btn-lg btn-dark" href="logout.php">Logout</a>&nbsp;&nbsp;&nbsp;
    </div>
  </nav>
<br>



<?php
include_once 'dbh.php';
$meetid = $_GET['link'];
if($meetid!=null)
{
    echo '<center><h2 class="mb-5">Are you sure you want to delete this meeting?</h2><center>';
    echo '<br>';
    echo '<a class="btn btn-lg btn-dark" href="logined.php">NO</a>&nbsp;&nbsp;&nbsp;';
    echo '<a class="btn btn-lg btn-dark" href="delete.php?delete='.$meetid.'">YES</a>';
}
?>
<?php
include_once 'dbh.php';
$meetid = $_GET['delete'];
if($meetid!=null)
{
    $sql = "DELETE FROM meet where meetid = $meetid";
    mysqli_query($conn,$sql);
    echo '<center><h2 class="mb-5">Your meeting has been deleted!</h2><center>';
    
}
?>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


  <!-- Footer -->
  <footer class="footer bg-light" style="padding-down:-10px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2020. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="https://facebook.com/mahale.shantanu.26">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://instagram.com/shaantnu_/">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>








  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>