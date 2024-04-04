<?php
// Check if all required fields are provided
if (
    isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['gender'], $_POST['password']) &&
    !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) &&
    !empty($_POST['address']) && !empty($_POST['gender']) && !empty($_POST['password'])
) {
    // Retrieve form data
    $full_name = $_POST['name'];
    $email_address = $_POST['email'];
    $phone_number = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    // Database connection
    $con = mysqli_connect("localhost", "root", "", "testing");
    if (mysqli_connect_errno()) {
        echo "<script>alert ('Cannot connect to the database');</script>";
        exit();
    }

    // Prepare and execute SQL query
    $sql = "INSERT INTO register_user (full_name, email_address, phone_number, address, gender, password) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "<script>alert ('SQL error');</script>";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "ssssss", $full_name, $email_address, $phone_number, $address, $gender, $password);
        mysqli_stmt_execute($stmt);
        echo "<script>alert ('Registration successful');</script>";
        echo "<script>window.location.href='login.html';</script>";
    }

    // Close statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($con);
} else {
    echo "<script>alert ('All fields are required');</script>";
}
?>
