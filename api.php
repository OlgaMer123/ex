<?

    $name = $_POST['name'];
    $email = $_POST['email'];

    $dbh = new PDO('mysql:host=localhost;dbname=cx72060_db', 'cx72060_db', 'qwerty');
    $stmt = $dbh->prepare("INSERT INTO `order`(`time`, name, email) VALUES(NOW(), :name, :email)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    echo '1';