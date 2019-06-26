<html>
<head><title>Searching for a student...</title>
</head>
<body bgcolor=#ffffff>

<?php



// Otherwise we connect to our Database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cse_370";
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
    echo 'Connection Failed: '.$con->connect_error;
}else{
}

if (isset($_GET['find'])) {
    $find = $con->real_escape_string($_GET['find']);
    if($find==""){
        echo "put a valid word";
        exit;
    }

    $data = mysqli_query($con, "SELECT * FROM album ORDER BY $find");
    while ($result = mysqli_fetch_assoc($data)) {
        echo "TrackId: ". $result['TrackId'];
        echo "<br>";
        echo "Genre: ".$result['Genre'];
        echo "<br>";
        echo "Track Name: ".$result['TrackName'];
        echo "<br>";
        echo "Track Release Date: ".$result['Track_ReleaseDate'];
        echo "<br>";
        echo "Playlist No: ".$result['Playlist_No'];
        echo "<br>";
        echo "Album Id: ".$result['AlbumId'];
        echo "<br>";
        echo "SSN: ".$result['ssn'];
        echo "<br>";
        echo "Track Type: ".$result['Track_Type'];
        echo "<br>";
        echo "---------------------------------";
        echo "<br>";
    }
    echo "<tr>";


    echo "<b>Sorted According To</b> " . $find = $con->real_escape_string($_GET['find']);;
}

?>

