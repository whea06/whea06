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
            <button onclick="redirectToCheckIn()">Check-In</button>
            <button onclick="redirectToAbout()">About</button>

        </div>
        <div class="navimg">
        <a href="index.php"><img src="images/LCiS.png" width="50px"></a>
        </div>
        
    </nav>
    <br>
    <br>
    <section>
        <div class="greetings">
            <h1 class="welcome">Welcome to the Library!</h1>
            <p><i>Please identify yourself, then fill up the form below.</i></p>
        </div>

        <div class="grid-container">
    
            <div>
                <button class="studentbt" onclick="toStudent()"><b>I am a Student</b></button>
            </div>
            <div>
                <button class="facultybt" onclick="toFaculty()"><b>I am a Faculty</b></button>
            </div>
            <div>
                <button class="visitorbt" onclick="toVisitor()"><b>I am a Visitor</b></button>
            </div>
            
        </div>

        <div class="form-container" id="form-container" >
            
            <form class="facultyform" id="facultyform" action="faculty.php" method="post">
                <label for="name">Faculty ID:</label>
                <input type="text" id="studentID" name="faculty_id" required> 
                <button class="searchbt" type="submit">Search</button>
            

                <br>    
                <label>Name:</label>
                <label id="fullname"><?= $fullname ?></label>


                <label for="department">Department:</label>
                <label id="department"><?= $department ?></label>
                <!-- <select id="department" name="department">
                    <option value="SON">SON</option>
                    <option value="SBMA">SBMA</option>
                    <option value="SEAS">SEAS</option>
                    <option value="SHOM">SHOM</option>
                    <option value="SOECS">SOECS</option>
                </select><br> -->
        
                <label for="purpose">Purpose of Visit:</label>
                <select id="purpose" name="purpose">
                    <option value="BorrowReturn">Borrow / Return Books</option>
                    <option value="Research">Research</option>
                    <option value="Meeting">Attend Meeting / Discussion</option>
                    <option value="Event">Attend Event / Orientation</option>
                    <option value="Other">Other</option>
                </select><br>
        
                <label for="otherPurpose">Specify Other Purpose:</label>
                <input type="text" id="otherPurpose" name="otherPurpose"><br>
        
                <button class="submitbt" type="submit" value="Submit" onclick="submitData()">Submit</button> 
            </form>

            
        </div>
        
    
    </section>

    <footer>
        <div>
            <p>Copyright 2023</p>
        </div>
    </footer>

    

</body>
</html>
