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
            <button onclick="redirectToInsights()">About</button>

        </div>
        <div class="navimg">
            <a href="index.php"><img src="images/LCiS.png" width="50px"></a>
        </div>
        
    </nav>
    <br>
    <br>
    <div class="greetings">
            <h1 class="welcome">Welcome to the Library!</h1>
            <p><i>Here's an overview of the system.</i></p>
        </div>

        <center><p>
        Welcome to our Library Check-in System, an innovative solution designed to streamline the user check-in process and enhance the overall library experience. Here's a glimpse into what makes our system unique:
<br><br>
Mission Statement: <br><br>
At the core of our mission is a commitment to improving library services by leveraging technology. We aim to provide a seamless and efficient check-in process for library users, empowering administrators with valuable insights to enhance user experience continually.
<br>
<br>
Key Features:<br><br>
<br>★ User-Friendly Check-In: Our intuitive check-in process ensures a hassle-free entry for students, faculty, and visitors, contributing to a smooth library experience.
<br>★ Admin Account Management: Administrators have the tools to create and manage user accounts, facilitating a personalized and secure environment within the system.
<br>★ Insights and Analytics: Gain valuable insights into user behavior and library utilization through detailed analytics, aiding in informed decision-making and service improvements.

<br><br>Benefits:<br><br>
<br>★ Efficiency:bSave time and resources with our automated check-in system, reducing manual efforts and enhancing the overall efficiency of library operations.
<br>★ Data-Driven Decision Making: Administrators can make informed decisions based on the rich data provided by our system, leading to improvements in service quality and resource allocation.
<br>★ Enhanced User Experience: A user-friendly interface ensures a positive experience for library visitors, encouraging regular use and engagement.

<br><br>How It Works:<br><br>
<br>★ For Users: Simply visit the check-in website, select your user type, fill in the required details, and you're ready to enter the library.
<br><br><br>
Contact Us:
Have questions or suggestions? We value your feedback. Reach out to our support team at [06902725@dwc-legazpi.edu].
<br><br>
Thank you for choosing our Library Check-in System. Together, we are shaping a more efficient and user-centric library experience.<br><br><br><br><br>
        </p></center>
    <footer>
        <div>
            <p>Copyright 2023</p>
        </div>
    </footer>

    

</body>
</html>
