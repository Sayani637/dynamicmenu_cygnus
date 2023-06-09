<?php
session_start();
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Dynamic Menu</title>
  </head>
  <body>
    
   <!--  navbar -->

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand me-auto" href="#" style="color:#1E9E1E;"><b>MENTOR</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Trainers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Courses
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Add Menu</a>
          <a class="dropdown-item" href="#">Add Sub Menu</a>
          <a class="dropdown-item" href="#">Permission</a>
        </li> -->
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
</ul>

<?php
   if(isset($_SESSION['ACTIVE-USER']))
?>

    <div style="float:right">
   Welcome <span style="color:red"><?php echo $_SESSION['ACTIVE-USER'];?></span>
   <a href="logout.php"> <button class="btn btn-success navbar-btn">Log Out</button></a>
</div>
    </div>
</nav>

<div class="container-fluid bg-success textclass">
	<h2 class="text-center" style="color: white;">About Us</h2>
	<p style="color: white; text-align: center;">Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum <br> praesentium.</p>
</div>



<?php
  if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    session_destroy();
  }
  ?>


<div class="img">
	<img src="img/1.jpg" height="500" width="700">
</div>

<div>
	<h2 class="text">Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h2>
	<i class="italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temmpor incididunt ut labore et dolore magna aliqua.</i>
	<ul class="list">
		<li>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
		<li>Duis aute irure dolor in reprehenderit in voluptate velit.</li>
		<li>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
	</ul>
	<p class="ntext">Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
</div>

<!-- Footer -->

<!-- <footer  class="container-fluid bg-light text-dark">
    <hr>
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>© 2023-2025 MENTOR, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    <hr>
</footer> -->




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>