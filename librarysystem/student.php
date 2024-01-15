<?php
$dbPath = 'odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=C:\xampp\htdocs\librarysystem\librarySystem.accdb';
error_reporting(0);
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
    $sample = " ";
    $department = " ";
    $course = " ";
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
            <form class="studentform" id="studentform" action="student.php" method="post">
                <label for="name">Student ID:</label>
                <input type="text" id="studentID" name="student_id" required> 
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
                </select> -->

                <label>Course:</label>
                <label id="course"><?= $course ?></label>
                <!-- <select id="course" name="course">
                    <option value="BSN">BSN</option>
                    <option value="BSA">BSA</option>
                    <option value="BSMAC">BSMAC</option>
                    <option value="BSIAI">BSIAI</option>
                    <option value="BSBA">BSBA</option>
                    <option value="BSBA-MM">BSBA - MM</option>
                    <option value="BSBA-OM">BSBA - OM</option>
                    <option value="BSBA-FM">BSBA - FM</option>
                    <option value="BSBA-HRM">BSBA - HRM</option>
                    <option value="BS-PSYCH">BS PSYCH</option>
                    <option value="BHS">BHS</option>
                    <option value="BPED">BPED</option>
                    <option value="BSNED">BSNED</option>
                    <option value="BEED">BEED</option>
                    <option value="BSED">BSED</option>
                    <option value="BSHM">BSHM</option>
                    <option value="BSEE">BSEE</option>
                    <option value="BSCE">BSCE</option>
                    <option value="BSCS">BSCS</option>
                    <option value="BSIT">BSIT</option>
                    <option value="BLIS">BLIS</option>   
                </select> -->


                
                <!-- <select id="last_name" name="last_name">
                    <option value="1st">1st Year</option>
                    <option value="2nd">2nd Year</option>
                    <option value="3rd">3rd Year</option>
                    <option value="4th">4th Year</option>
                </select> -->
        
                <label for="purpose">Purpose of Visit:</label>
                <select id="purpose" name="purpose">
                    <option value="Review">Research/Study</option>
                    <option value="BorrowReturn">Borrow/Return Books</option>
                    <option value="Other">Others</option>
                </select><br>
        
                <label for="otherPurpose">Notes:</label>
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
