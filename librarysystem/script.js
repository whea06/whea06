//nav bar
        function redirectToCheckIn() {
            // Replace 'checkin.html' with the actual path to your Check-In page
            window.location.href = 'index.php';
        }

        function redirectToInsights() {
            // Replace 'insights.html' with the actual path to your Insights page
            window.location.href = 'insights.php';
        }

        function redirectToSettings() {
            // Replace 'settings.html' with the actual path to your Settings page
            window.location.href = 'settings.php';
        }
        function redirectToAbout() {
            // Replace 'settings.html' with the actual path to your Settings page
            window.location.href = 'about.php';
        }

        function toStudent() {
            // Replace 'checkin.html' with the actual path to your Check-In page
            window.location.href = 'student.php';
        }
        function toFaculty() {
            // Replace 'checkin.html' with the actual path to your Check-In page
            window.location.href = 'faculty.php';
        }
        function toVisitor() {
            // Replace 'checkin.html' with the actual path to your Check-In page
            window.location.href = 'visitor.php';
        }
//
function submitData(){
    alert('We have recorded your response. You may now enter the library.');
    window.location.href = 'index.php';
}

//check-in form 

function toggleForm(formType) {
    // Hide all forms and images initially
    document.querySelectorAll('.form-container form, .grid-container img').forEach(function(element) {
      element.style.display = 'none';
    });

    // Show the selected form
    document.getElementById(formType + 'form').style.display = 'block';

    // Hide the normal image
    document.getElementById(formType + 'img').style.display = 'none';
  }

  function submitForm(formType) {
    // Check if all required fields are filled when submitting
    var form = document.getElementById(formType + 'form');
    var requiredFields = form.querySelectorAll('[required]');
    var allFieldsFilled = true;

    requiredFields.forEach(function (field) {
        if (!field.value.trim()) {
            allFieldsFilled = false;
            return;
        }
    });

    // Display appropriate message based on form submission
    if (allFieldsFilled) {
        // All fields are filled
        alert('We have recorded your response. You may now enter the library.');
    } else {
        // Not all fields are filled
        alert('Please complete the form before submitting.');
    }
}
//



// summary

        // Assume you have data for these statistics
        var totalUsers = 1000;
        var topDepartment = "Engineering";
        var topPurpose = "Research";
        var peakHours = "2:00 PM - 4:00 PM";
        var totalStudents = 500;
        var totalFaculty = 300;
        var totalVisitors = 200;

        // Function to update the content of the HTML elements
        function updateStatistics() {
            document.getElementById("totalusers").innerText = totalUsers;
            document.getElementById("department").innerText = topDepartment;
            document.getElementById("purpose").innerText = topPurpose;
            document.getElementById("hours").innerText = peakHours;
            document.getElementById("totalstu").innerText = totalStudents;
            document.getElementById("totalfac").innerText = totalFaculty;
            document.getElementById("totalvis").innerText = totalVisitors;
        }

        // Function to print the statistics
        function printStatistics() {
            window.print();
        }

        // Function to delete the statistics (clear content)
        function deleteStatistics() {
            var elements = document.querySelectorAll('.sumcont p');
            elements.forEach(function (element) {
                element.innerText = '';
            });
        }

        // Function to sort the statistics by date (assuming there's a date property)
        function sortByDate() {
            // Add your sorting logic here based on the date property
            // For example, if you have an array of objects, you can use array.sort()
            // with a custom comparison function.
            // Note: This is a placeholder, and you need to adapt it to your data structure.
            var sortedData = [
                { date: '2023-01-01', value: 10 },
                { date: '2023-01-02', value: 15 },
                // ... rest of your data
            ];

            // Update the data and re-render the statistics
            // Here you might want to update the totalUsers, topDepartment, etc., variables
            // based on the sortedData array.
            updateStatistics();
        }

        // Call the function to update the content when the page loads
        updateStatistics();


















// admin log-in form

function authenticate() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Check if the provided username and password match your admin credentials
    if (username === 'admin' && password === 'admin123') {
        // Redirect to the Insights page or perform any other actions
        alert('Login successful! Redirecting to Insights page...');
        window.location.href = 'summary.php';
    } else {
        alert('Invalid username or password. Please try again.');
    }
}
//---------------------------------------------------------------------------------------



// summary //
