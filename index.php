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
<form action="insert.php" method="post">
    <p>
        <label for="rubric">Rubric:</label>
        <input type="text" name="rubric" id="rubric">
    </p>
    <p>
        <label for="number">Course Number:</label>
        <input type="text" name="number" id="number">
    </p>
    <p>
        <label for="name">Course Name:</label>
        <input type="text" name="name" id="name">
    </p>
    <input type="submit" value="Submit">
</form>
</div>
</body>
</html>