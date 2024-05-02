<?php
// MySQL server and database configuration
$servername = "localhost"; // Change this to your MySQL server address
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "practical"; // Change this to your MySQL database name
$port = 3306; // Port for MySQL server (default is 3306)

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $lname = $_POST["lname"];
    $fname = $_POST["fname"];
    $minitial = $_POST["minitial"];
    $dob = $_POST["dob"];
    $age = $_POST["age"];
    $sex = $_POST["sex"];
    $race = $_POST["race"];
    $ethnicity = $_POST["ethnicity"];
    $facilityname = $_POST["facilityname"];
    $fcity = $_POST["fcity"];
    $fcounty = $_POST["fcounty"];
    $fstate = $_POST["fstate"];
    $phonenumber = $_POST["phonenumber"];
    $pstreet = $_POST["pstreet"];
    $pcity = $_POST["pcity"];
    $pcounty = $_POST["pcounty"];
    $pstate = $_POST["pstate"];
    $record = $_POST["record"];

    // Insert data into Patients table
    $sql1 = "INSERT INTO Patients (lname, fname, minitial, dob, age, sex, race, ethnicity) 
    VALUES ('$lname', '$fname', '$minitial', '$dob', '$age', '$sex', '$race', '$ethnicity')";

    if ($conn->query($sql1) === TRUE) {
        echo "New record created successfully for Patients table";
    } else {
        echo "Error: " . $sql1 . "<br>" . $conn->error;
    }

    // Insert data into Facility table
    $sql2 = "INSERT INTO Facility (facilityname, fcity, fcounty, fstate, phonenumber) 
    VALUES ('$facilityname', '$fcity', '$fcounty', '$fstate', '$phonenumber')";

    if ($conn->query($sql2) === TRUE) {
        echo "New record created successfully for Facility table";
    } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
    }

    // Insert data into Address table
    $sql3 = "INSERT INTO Address (facilityname, pstreet, pcity, pcounty, pstate) 
    VALUES ('$facilityname', '$pstreet', '$pcity', '$pcounty', '$pstate')";

    if ($conn->query($sql3) === TRUE) {
        echo "New record created successfully for Address table";
    } else {
        echo "Error: " . $sql3 . "<br>" . $conn->error;
    }

    // Insert data into medical_records table
    $sql4 = "INSERT INTO medical_records (record) 
    VALUES ('$record')";

    if ($conn->query($sql4) === TRUE) {
        echo "New record created successfully for medical_records table";
    } else {
        echo "Error: " . $sql4 . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
