<?php
$dbPath = 'odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=C:\xampp\htdocs\librarysystem\librarySystem.accdb';

try {
    
    $pdo = new PDO($dbPath);
    $query = "SELECT * FROM studentList WHERE studentID = '06902725' ";
    // $query = "SELECT password FROM login where ";
    $stmt = $pdo->query($query);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<label>" . $row['fullName'] . "</label>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>