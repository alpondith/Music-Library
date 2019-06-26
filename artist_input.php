<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CSE_370";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$date=date('y-m-d');

$sql = "insert into ARTIST
VALUES('".$_GET["ssn"]."','".$_GET["Artist_Name"]."','".$_GET["Band"]."','".$_GET["Country"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

    <form action="artist_form.php">
        <input type="submit">
    </form>
    </body>
    </html>