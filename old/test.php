<?php $name = 'Joe'; # user-supplied data
 
try {
    $conn = new PDO('mysql:host=localhost;dbname=myDatabase', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    $data = $conn->query('SELECT * FROM myTable WHERE name = ' . $conn->quote($name));
 
    foreach($data as $row) {
        print_r($row); 
    }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>