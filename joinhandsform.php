<?php
include 'conn.php';
?>
<html>
<head>
	<title>Join Hands Form</title>
</head>
<body>
<style>
body{
	background-image:url("joinhands.jpg");
	background-repeat: no-repeat;
	background-position: center;
	background-size: 1400px 720px;

}
input[type=text]{
	width:100%;
	padding:15;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid purple;
    border-radius: 4px;
}
input[type=number]{
	width:100%;
	padding:15;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid purple;
    border-radius: 4px;
}
input[type=email]{
	width:100%;
	padding:15;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid purple;
    border-radius: 4px;
}
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
</style>
<h1 color:red>Join Hands Form</h1>
<form action="joinhands_process.php" method="POST">
<label for="0"><b><h3>Name</h3></b></label>
<input type="text" id="0" name="name" placeholder="Your name..." >
<br>
<label for="1"><b><h3>Phone</h3></b></label>
<input type="number" id="1" name="phone" placeholder="Your contact no...">
<br>
<label for="2"><b><h3>Email</h3></b></label>
<input type="email" id="2" name="email" placeholder="Your email..">
<br>
<label for="3"><b><h3>Idea</h3></b></label>
<input type="text" id="3" name="idea" placeholder="Discussion idea..">
<br>
<input type="submit" name="btnsubmit" value="Submit">
</body>
</form>
</html>