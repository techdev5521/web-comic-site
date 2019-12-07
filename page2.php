<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Step 2</title>

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
					<h1>Step 2: Develop your setting and characters</h1>
				</div>

				<div id="comic">
					<img src="images/page 2.png" id="comicimage" alt="comic" />
				</div>

				<button id="prev" onclick="change0()"></button>
				<img src="images/pagenumber2.png" alt="page number">
				<button id="next" onclick="change()"></button>

			</div>
			
		</main>

		<footer id="bottomcontainer" class="box3">
			<!-- Include Footer Information -->
			<?php include('includes/footer.php'); ?>
		</footer>
		
	</body>



	<script>
		function change0() {
			location.href="page1.php" ;
		}
		function change() {
			document.getElementById("comicimage").src = "images/page 2.1.png";
			document.getElementById('next').onclick = function() {change3()};
			document.getElementById('prev').onclick = function() {change2()};
		}
		function change2() {
			document.getElementById("comicimage").src = "images/page 2.png";
			document.getElementById('next').onclick = function() {change()};
			document.getElementById('prev').onclick = function() {change0()};
		}
		function change3() {
			document.getElementById("comicimage").src = "images/page 2.2.png";
			document.getElementById('next').onclick = function() { location.href="page3.php"; };
			document.getElementById('prev').onclick = function() {change()};
		}
	</script>


	
</html>