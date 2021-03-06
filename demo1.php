<?php

// Include helper_functions.php
include('includes/helper_functions.php');

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Project2 - Outline</title>

		<!-- Meta and Link Data -->
		<?php include('includes/meta.php'); ?>
	</head>



	<body>

		<div class="container">
			<header>
				<!-- Include Header Content -->
				<?php include('includes/header.php'); ?>

				<!-- Include Navigation Content -->
				<?php include('includes/navigation.php'); ?>
			</header>

			<main class="box background-white p-5 mb-5">

					<div class="row">
						<div class="col">
							<h1 class="title">Basic Outline</h1>
						</div>
					</div>

					<!-- Include Navigation Buttons -->
					<?php include('includes/navigation-buttons-demo.php'); ?>

					<div class="row" id="comic">
						<div class="col-4 text-center">
							<img src="images/comictemplate.png" alt="Example" class="img-fluid">
						</div>
						<div class="col-4 text-center">
							<img src="images/comictemplate2.png" alt="Example" class="img-fluid">
						</div>
						<div class="col-4 text-center">
							<img src="images/comictemplate3.jpg" alt="Example" class="img-fluid">
						</div>
						
						<div class="col-12">
							<p>Here are some basic outlines for a comic strip that you would normally see in a book. While they look different they all generally follow the same function as any other piece of literature. They are read from left to right, top to bottom, and generally span across two pages.</p>
						</div>
					</div>

					<!-- Include Navigation Buttons -->
					<?php include('includes/navigation-buttons-demo.php'); ?>

				</main>
			</div>

	</body>



</html>