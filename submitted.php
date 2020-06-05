<?php session_start(); $last_id = $_SESSION['last'];?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Syllabi</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/picnic">
<link rel="stylesheet" href="style.css">

</head>
<body>
<div class="content">
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("127.0.0.1", "root", "", "syllabi");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM courses WHERE id=$last_id";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Course Number</th>";
                echo "<th>Course Title</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['rubric'] . " " . $row['number']. "</td>";
                echo "<td>" . $row['name'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>


</div>

</body>
</html>