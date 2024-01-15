<?php
$dbPath = 'odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=C:\xampp\htdocs\librarysystem\librarySystem.accdb';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Use $_POST to access form data
    $textBoxValue = $_POST["student_id"];

    try {
    
    $pdo = new PDO($dbPath);
    $query = "SELECT * FROM studentList WHERE studentID = '$textBoxValue' ";
    // $query = "SELECT password FROM login where ";
    $stmt = $pdo->query($query);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<label>" . $row['fullName'] . "</label>";
    }
    } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    // Do something with the data (e.g., display it)

} else {
    // Handle the case when the form is not submitted
    echo "Form not submitted";
}

?>
