<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>Kaizoku</title>
<style>
body {
    font-family: Verdana,sans-serif;
    font-size: 0.9em;
}

div#header, div#footer {
    padding: 10px;
    color: white;
    background-color: black;
}


div#content {
   margin: 5px;
   padding: 10px;
   background-color: lightgrey;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body>

    <section>
      <img class="mySlides" src="img/a.jpg"
      style="width:1400px;height:228px;">
      <img class="mySlides" src="img/b.jpg"
      style="width:1400px;height:228px;">
      <img class="mySlides" src="img/c.jpg"
      style="width:1400px;height:228px;">
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

    <ul>
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
