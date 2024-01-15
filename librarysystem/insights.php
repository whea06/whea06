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
        // echo "<label>" . $row['fullName'] . "</label>";
        $fullname = $row['fullName'];
        $department = $row['department'];
        $course = $row['course'];
    }
    } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    // unset($_POST['save']);
    // Do something with the data (e.g., display it)
} else {
    // Handle the case when the form is not submitted
    // echo "Form not submitted";
    $sample = "N/A";
    $department = "N/A";
    $course = "N/A";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insights</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body class="insightsbd">
<script src="script.js"></script>
<br>
<br>
<br>
    <section>
        <h1 class="adlogin">Admin Log-in</h1>
        <form class="loginForm" id="loginForm" action="index.php" method="post">
        
        <label for="username" class="form-label">Username:</label>
        <input type="text" id="username" name="username" class="form-input" required>

        <label for="password" class="form-label">Password:</label>
        <input type="password" id="password" name="password" class="form-input" required>
        </br>
        <button class="submitbtt" type="button" class="form-button" onclick="authenticate()">Login</button>
        </form>
    </section>

    <footer>
        <p>Copyright 2023</p>
    </footer>

    
</body>
</html>