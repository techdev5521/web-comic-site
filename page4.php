<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Step 4</title>

		<!-- Meta and Link Data -->
		<?php include('includes/meta.php'); ?>
	</head>



	<body>

		<header>
			<!-- Include Header Content -->
			<?php include('includes/header.php'); ?>

			<!-- Include Navigation Content -->
			<?php include('includes/navigation.php'); ?>
		</header>

		<main>
			<div class="box" id="maincontainer">

				<div id="title">
					<h1>Step 4: Do a test run</h1>
				</div>

				<div id="comic">
					<img src="images/page4.png" id="comicimage" alt="comic" />
				</div>

				<button id="prev" onclick="change0()"></button>
				<img src="images/pagenumber4.png" alt="page number">
				<button id="next" onclick="change()"></button>

			</div>
			
		</main>

	</body>



	<script>
		function change0() {
			location.href="page3.php" ;
		}
		
		function change2() {
			document.getElementById("comicimage").src = "images/page4.png";
			document.getElementById('next').onclick = function() {change()};
			document.getElementById('prev').onclick = function() {change0()};
		}
		function change() {
			document.getElementById("comicimage").src = "images/page4.1.png";
			document.getElementById('next').onclick = function() { location.href="page5.php"; };
			document.getElementById('prev').onclick = function() {change2()};
		}
	</script>



</html>