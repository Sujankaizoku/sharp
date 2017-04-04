<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .bg-1 {
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 {
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 {
      background-color: #fff; /* White */
      color: #555555;
  }
  </style>
</head>
<body>

<div class="container-fluid bg-1 text-center">
  <br><br><br>
<section>
  <img class="mySlides" src="img/a.jpg"
  style="width:1350px;height:300px;">
  <img class="mySlides" src="img/b.jpg"
  style="width:1350px;height:300px;">
  <img class="mySlides" src="img/c.jpg"
  style="width:1350px;height:300px;">
</section>
<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}
</script>


<h3>Open Government?</h3>
<div class="container-fluid bg-2 text-center">
  <h3>This website can simple suggest the public</h3>
  <p>We can speak however we want and do things whatever the way we want </p>
</div>

<div class="container-fluid bg-3 text-center">
  <h3>Democracy</h3>
  <p>We can do tghinfksbdhfjsdfkjsdhfkldsfjfkjlkjsdk;hjvfknsdmdhfkjsdlfghklfgvnhjk.</p>
</div>
<nav class="navbar navbar-inverse navbar-fixed-top">

  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Discussion<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="sujan.php">Election</a></li>
          <li><a href="#">Current Affairs</a></li>
          <li><a href="#">Society</a></li>
        </ul>
      </li>
      <li><a href="joinhandsform.php">Join Hands</a></li>
      <li><a href="#">About</a></li>
    </ul>

  <center>
  <form class="navbar-form navbar-right" role="submit">

    <div class="form-group">
      <input type="text" class="form-control" placeholder="Search">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</center>
</div>

</nav>

</body>
</html>
