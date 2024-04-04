<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email and password are provided
    if (isset($_POST['email']) && isset($_POST['password'])) {
        // Retrieve form data
        $email_address = $_POST['email'];
        $password = $_POST['password'];

        // Database connection
        $con = mysqli_connect("localhost", "root", "", "testing");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        // Prepare and execute SQL query
        $sql = "SELECT * FROM register_user WHERE email_address = ?";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL error";
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email_address);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                // Verify password
                $passwordHash = $row['password'];
                if (password_verify($password, $passwordHash)) {
                    // Passwords match, redirect to index.php
                    echo "<script>window.location.href='index.html';</script>";
                    exit();
                } else {
                    // Passwords don't match, show error message
                    echo "<script>window.location.href='passnotmatch.html';</script>";
                }
            } else {
                // No user found with the provided email
                echo "No user found with this email";
            }
        }

        // Close statement and connection
        mysqli_stmt_close($stmt);
        mysqli_close($con);
    } else {
        // Email or password not provided
        echo "Email and password are required";
    }
} else {
    // Redirect to login page if form is not submitted
    header("Location: login.html");
    exit();
}
?>
