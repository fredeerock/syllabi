<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
session_start();

$link = mysqli_connect("127.0.0.1", "root", "", "syllabi");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$rubric = mysqli_real_escape_string($link, $_REQUEST['rubric']);
$number = mysqli_real_escape_string($link, $_REQUEST['number']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
 
// Attempt insert query execution
$sql = "INSERT INTO courses (rubric, number, name) VALUES ('$rubric', '$number', '$name')";
if(mysqli_query($link, $sql)){
    
    $last_id = mysqli_insert_id($link);
    
    $_SESSION['last'] = $last_id;

    header('location: submitted.php');
    // echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>