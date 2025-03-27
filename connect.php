<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sms_db"; 
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection Failed:" .$conn->connect_error);
}

// Initialize variable to hold the confirmation message
$confirmationMessage = "";

// Handle form submission
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $full_name = $_POST["full-name"];
    $email = $_POST["email"]; 
    $phone = $_POST["phone"];
    $course = $_POST["course"]; 
    $message = $_POST["message"];

    // Prepare and execute the database insertion
    $sql = "INSERT INTO admission (full_name, email, phone, course, message)
            VALUES ('$full_name','$email','$phone','$course','$message')";

    if($conn->query($sql) === TRUE){
        // Set confirmation message
        $confirmationMessage = "Congratulations! Your application to JKUAT has been accepted.";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error; 
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JKUAT Admission</title>
    <!-- Add your CSS stylesheet link here -->
    <style>
        .confirmation-message {
            color: green;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="confirmation-message"><?php echo $confirmationMessage; ?></div>

    <a href="index.html"><img src="img/logo.png"></a>

    <header>
        <h1>JKUAT Admission</h1>
    </header>

    <!-- Your form code goes here -->
    <section class="admission-form">
        <h2>Admission Application Form</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <button type="submit">Submit Application</button>
        <a href="admissionletter.pdf" download>
        <button type="button">Download admission letter</button>

    </section>

    <!-- Add JavaScript code to clear the form after submission -->
    <script>
        // Wait for the DOM to be fully loaded
        document.addEventListener("DOMContentLoaded", function() {
            // Get the form element
            var form = document.querySelector('.admission-form form');

            // Add event listener for form submission
            form.addEventListener('submit', function(event) {
                // Clear the form after submission
                form.reset();
            });
        });
    </script>
</body>
</html>
