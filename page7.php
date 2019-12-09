<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Step 7</title>

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
					<h1>Step 7: Finding a host for your comic</h1>
				</div>

				<div id="comic">
					<img src="images/page 7.png" id="comicimage" alt="comic" />
				</div>

				<button id="prev" onclick="change0()"></button>
				<img src="images/pagenumber7.png" alt="page number">
				<button id="next" onclick="change()"></button>

			</div>
			
		</main>

	</body>



	<script>
		function change0() {
			location.href="page6.php" ;
		}	
		function change2() {
			document.getElementById("comicimage").src = "images/page 7.png";
			document.getElementById('next').onclick = function() {change()};
			document.getElementById('prev').onclick = function() {change0()};
		}
		function change() {
			document.getElementById("comicimage").src = "images/page 7.1.png";
			document.getElementById('next').onclick = function() { location.href="page8.php"; };
			document.getElementById('prev').onclick = function() {change2()};
		}
	</script>


		
</html>