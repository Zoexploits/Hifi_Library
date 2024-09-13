<?php



$host = 'localhost';
$username = 'root';
$password = '';
$database = 'hifiDB';
$sqlFilePath = 'database.sql';

try {
    // Create a new PDO instance without specifying a database
    $pdo = new PDO("mysql:host=$host", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the database exists
    $stmt = $pdo->query("SHOW DATABASES LIKE '$database'");
    $dbExists = $stmt->fetch();

echo json_encode($dbExists);

    if (!$dbExists) {
        // Database does not exist, create it
        $pdo->exec("CREATE DATABASE `$database`");
        echo "Database created successfully.<br>";

        // Select the database
        $pdo->exec("USE `$database`");

        // Read and execute the SQL file
        $sql = file_get_contents($sqlFilePath);
        $pdo->exec($sql);
        echo "Tables created successfully from the SQL file.";
    } else {
        echo "Database already exists. No action taken.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
