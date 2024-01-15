<?php
$dbPath = 'odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=C:\xampp\htdocs\librarysystem\librarySystem.accdb';
error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Use $_POST to access form data
    $textBoxValue = $_POST["faculty_id"];

    try {
    
    $pdo = new PDO($dbPath);
    $query = "SELECT * FROM facultyList WHERE facultyID = '$textBoxValue' ";
    // $query = "SELECT password FROM login where ";
    $stmt = $pdo->query($query);
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // echo "<label>" . $row['fullName'] . "</label>";
        $fullname = $row['fullName'];
        $department = $row['department'];
        // $course = $row['course'];
    }
    } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    // unset($_POST['save']);
    // Do something with the data (e.g., display it)
} else {
    // Handle the case when the form is not submitted
    // echo "Form not submitted";
    $sample = " ";
    $department = " ";
    // $course = "N/A";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWCL Library Check-In</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    
    <script src="script.js"></script>
    <nav>
        
        <div class="navbt">
            <button onclick="">History</button>
            <button onclick="">Members</button>

        </div>
        
    </nav>

    <footer>
        <div>
            <p>Copyright 2023</p>
        </div>
    </footer>

    

</body>
</html>
