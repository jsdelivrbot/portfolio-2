
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
    header('Location: formvalidation.php');
    exit;
  }else{
    echo ' oooops';
  }
  }
}
?>