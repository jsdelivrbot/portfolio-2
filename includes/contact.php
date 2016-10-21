<article>
		<h2><span>Contact Me</span></h2>
</article>

<?php
if ($_POST) {
  if (!empty($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo 'wrong email';
  }
  else{
  $pdo = new PDO('mysql:host=localhost;dbname=bootcamp;charset=utf8', 'root', '');
  $stmt = $pdo->prepare('INSERT INTO comments (name, email, message) VALUES (?,?,?)');
  $result = $stmt->execute([$_POST['name'], $_POST['email'], $_POST['message']]);
  if ($result) {
   echo 'Thank you for contacting me';
   
  }else{
    echo ' oooops';
  }
  }
}
?>
	<div class="grid grid--gutters grid--full gridmd--1of2 gridlg--1of2 gridxl--1of2">
				<div class="cell">
					<form id="form" action="#form" method="post">
						<input type="text" name ="name" id="name" required>
						<label for="" placeholder="Full Name" alt="Full Name"></label>
						<input type="Email" name="email" id="email" required>
						<label for="" placeholder="Email Address" alt="Email"></label>
						<textarea id="message" name="message" required></textarea>
						<label for="" placeholder="Message" alt="Message"></label>
						<input type="submit" value="Contact Me" id="btn-contact" class="btn-contact"/>
					</form>
				</div>
			<div class="cell">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40959.28061795736!2d14.407594968548896!3d50.08712865780532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b939c0970798b%3A0x400af0f66164090!2sPrague%2C+Czech+Republic!5e0!3m2!1sen!2suk!4v1476892995131" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
	<!--Form end -->
</div>