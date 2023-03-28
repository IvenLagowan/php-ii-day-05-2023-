<?php

// Integrasi Koneksi

require_once('connection.php');


// membuat table baru di database
// sql to create table
    $sql = "CREATE TABLE team (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama_depan VARCHAR(30) NOT NULL,
    nama_belakang VARCHAR(30) NOT NULL,
    alamat_email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table team created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();

?>