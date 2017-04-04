<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./bg.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <section>
  <img class="mySlides" src="img/b.jpg"
  style="width:1365px;height:228px;">
  <img class="mySlides" src="img/c.jpg"
  style="width:1365px;height:228px;">
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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Discussion<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="newdis.php">Submit New Discussion</a></li>
          <li><a href="#">Election</a></li>
          <li><a href="#">Current Affairs</a></li>
          <li><a href="#">Society</a></li>
        </ul>
      </li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">About</a></li>
    </ul>
    <form class="navbar-form navbar-right" role="search">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>
  </div>
  

</nav>

<div id="my-div">
<iframe src="./view.php" id="my-iframe" scrolling="no"></iframe>
</div>
<!--<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">Discussion</a></li>
  <li><a href="#contact">Join Hands</a></li>
  <li><a href="#about">About Us</a></li>
</ul>
  <div id="content">
    <div class="article">
      <h2>Government</h2>
      <p>Issues Regarding Governmental </p>
    </div>


</body>
</html>
