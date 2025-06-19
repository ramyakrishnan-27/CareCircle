<?php
// Include the database connection
require_once 'db.php';

try {
    // Prepare and execute the query to clear the users table
    $stmt = $pdo->prepare("TRUNCATE TABLE users");
    $stmt->execute();
    echo "Users table has been cleared successfully.";
} catch (PDOException $e) {
    echo "Error clearing users table: " . $e->getMessage();
}
?>
