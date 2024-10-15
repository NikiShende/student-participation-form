<?php
// Get form data
// $email = $_POST['email'];
// $studentname = $_POST['studentname'];
// $mobileno = $_POST['mobileno'];
// $class = $_POST['class'];
// $branch = $_POST['branch'];
// $address = $_POST['address'];
// $event = $_POST['event'];

// Database connection
// $conn = new mysqli_connect('localhost:8000', 'root', '', 'college');
 $severname="localhost:8000";
 $username="root";
 $password="";
 $database="college";
 $con=mysqli_connect($severname,$username,$password,$database);

 if(!$conn)
 {
    die("error detected".mysqli_error($conn));
 }

// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } else {
//     // Prepare SQL statement
//     $stmt = $conn->prepare("INSERT INTO college_form (email, studentname, mobileno, class, branch, address, event) VALUES (?, ?, ?, ?, ?, ?, ?)");
//     $stmt->bind_param("sssssss", $email, $studentname, $mobileno, $class, $branch, $address, $event);

//     // Execute statement
//     if ($stmt->execute()) {
//         echo "College form submission successful!";
//     } else {
//         echo "Error: " . $stmt->error;
//     }

//     // Close connections
//     $stmt->close();
//     $conn->close();
// }
// ?>