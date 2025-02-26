<?php
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
    echo "<br><br>";

    $fname = $_POST['fname'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
?>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "i201";

    $conn = new mysqli($servername, $username, $password, $database);


    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>

<?php
    $sql = "INSERT INTO student_record (id, fname, gender, country)
    VALUES (NULL, '$fname', '$gender', '$country')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>