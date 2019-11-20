<!DOCTYPE html>
<html lang="en-US">

	<head>
		<title>Project2 - Introduction</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/styles.css" />
		<link href="https://fonts.googleapis.com/css?family=Poppins|Staatliches&display=swap" rel="stylesheet">
	</head>

	<body>

		<header>
			<!-- Include Navigation -->
			<?php include("includes/navigation.php"); ?>
		</header>

		<main>
			<br>

			<div id="topcontainer" class="box">
				<h1><a href="chapters.html">Chapters</a> | <a href="about.html">About</a> | <a href="contact.html">Contact</a></h1>
			</div>

			<br>

			<div class="box" id="maincontainer">

				<div id="title">
					<h1>Introduction</h1>
				</div>

				<div id="comic">
					<img src="css/images/comic example.png" id="comicimage" alt="comic1" />
					<p id="comictext">Have you ever read a web comic like Penny Arcade, xkcd, or Homestuck, or even a
						regular print comic and thought “I want to do something like that and show it to the
						world”, but didn’t know how to go about that? Well this chapter is just for you! In
						this comic about making a web comic, we’ll go over all the steps to take in order to get
						you on the right track of making your gift to the online world.</p>
				</div>

				<br>

				<button id="prev"> </button>

				<img src="css/images/pagenumber0.PNG" alt="page number">

				<button id="next" onclick="change()"> </button>

				<br>

				<br>

			</div>

			<br>

			<div id="bottomcontainer" class="box">
				<h1>Website Created By:</h1>
				<br>
				<h1>Ian Coffman</h1>
				<h1>Josh Heller</h1>
				<h1>Justin Campbell</h1>
			</div>

		</main>

		<script>
		
		document.getElementById("next").onclick = function() {
		location.href = "page1pt.1.html";
		/*
		function change() {
		{
		document.getElementById("comicimage").src = "css/comic1.jpeg";
		document.getElementById('comictext').innerHTML = "This is a test";
		document.getElementById('next').onclick = function() { location.href="page1pt.1.html"; };
		document.getElementById('prev').onclick = "change2()";
		}
		}
		function change2() {
		{
		document.getElementById("comicimage").src = "css/images/comic example.png";
		document.getElementById('comictext').innerHTML = "This is also a test";
		document.getElementById('next').onclick = "change()";
		*/
		}
		</script>

		<footer>
		</footer>

	</body>
</html>