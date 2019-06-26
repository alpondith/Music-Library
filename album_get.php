<html>
<body>
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
$date=date('y-m-d',strtotime($_GET["Album_ReleaseDate"]));

$sql = "insert into ALBUM
VALUES('".$_GET["AlbumId"]."','".$_GET["AlbumName"]."','".$date."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<form action="form_album.php">
    <input type="submit">
</form>
</body>
</html>