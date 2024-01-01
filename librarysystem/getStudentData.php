<?php
// Assuming you have a connection to your MS Access database
// Include your database connection code here

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputValue = $_POST['inputValue'];

    // Perform server-side validation if needed

    // Query to check if the value exists in the database
    $query = "SELECT * FROM studentList WHERE studentID = :inputValue";

    // Example connection assuming you're using PDO
    try {
        $pdo = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb)};Dbq=path/to/your/database.mdb");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the statement
        $stmt = $pdo->prepare($query);
        
        // Bind the parameter
        $stmt->bindParam(':inputValue', $inputValue, PDO::PARAM_STR);

        // Execute the query
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo 'Value exists in the database.';
        } else {
            echo 'Value does not exist in the database.';
        }
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    } finally {
        // Close the database connection if needed
        $pdo = null;
    }
}
?>