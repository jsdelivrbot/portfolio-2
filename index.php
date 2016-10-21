<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
	<?php require 'includes/head.php'; ?>
	</head>
<body>
<div class="main">
<?php require 'includes/nav.php' ?>
<?php require 'includes/hero.php' ?>
<!-- About me container -->		
<div class="fullcontainer">
	<div class="container">
		<?php require 'includes/aboutme.php' ?>
	</div>
</div>
<!-- About me container -->	
<!-- Hero Container -->
<div class="fullcontainer" id="sec01">
	<div class="container">
		<?php require 'includes/build.php' ?>
	</div>
</div>
<!-- Tools -->
<div class="fullcontainer id="sec02"">
	<div class="container">
		<?php require 'includes/tools.php' ?>
	</div>
</div>
<!-- Gallery container -->
<div class="fullcontainer" id="sec02">
	<div class="container">
		<?php require 'includes/projects.php' ?>
	</div>
</div>
<!-- Gallery container -->
<!-- Contact container -->
<div class="fullcontainer" id="sec03">
	<div class="container">
		<?php require 'includes/contact.php'; ?>
	</div>
</div>
<!-- Contact container end -->
</div><!-- main -->

<footer class="footer">
  	<div class="grid grid--gutters grid--full gridmd--full gridlg--full gridxl--full">
	 	<div class="cell align--center">All rights reserved Tom Harrison
	 	</div>
	</div>
</footer>
<!-- Footer ends here -->
  <?php require 'includes/scripts.php'; ?>
	</body>
</html>

