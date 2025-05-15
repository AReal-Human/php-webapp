<?php
include 'get-parameters.php';

$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, $sslcert, NULL, NULL);
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, NULL, MYSQLI_CLIENT_SSL);

if (mysqli_connect_errno()) {
    echo "❌ Connection failed: " . mysqli_connect_error();
} else {
    echo "✅ Database connection successful!";
}

$conn->close();
?>
