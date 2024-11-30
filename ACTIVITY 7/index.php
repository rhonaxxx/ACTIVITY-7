<?php 
    $name = "BSIS";
    $campus = "2024 ";
    $collage = "COLLAGE OF INFORMATION AND COMPUTING SCIENCES";


   
    $fullname = (isset($_POST['fullname'])) ? $_POST['fullname'] : "";
    $age = (isset($_POST['age'])) ? $_POST['age'] : 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SAMPLE</title>
</head>
<body>

    <form action="" method="post">
        <label for="">Name:</label>
        <input type="text" name="fullname">
        <label for="">Age:</label>
        <input type="number" name="age">
        <button type="submit">Submit</button>
    </form>

    <?php 
    echo "Fullname:" .$fullname. "<br>";
    echo "Age:" .$age. "<br>";
    ?>
    
</body>
</html>