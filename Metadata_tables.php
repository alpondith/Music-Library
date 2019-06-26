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

// sql to create table
$sql ="CREATE TABLE ALBUM(
AlbumId VARCHAR(30) not null,
AlbumName VARCHAR(30) not null,
Album_ReleaseDate date,
PRIMARY KEY(AlbumId));";
$sql ="CREATE TABLE PLAYLIST(
Playlist_No VARCHAR(30) not NULL,
Pname VARCHAR(30),
Ptype VARCHAR(30),
PRIMARY KEY(Playlist_No)
);";
$sql .="CREATE TABLE ARTIST(
ssn VARCHAR(30) not null,
Artist_Name VARCHAR(30),
Band VARCHAR(30),
Country VARCHAR(30),
PRIMARY KEY(ssn)
);";
$sql = "CREATE TABLE TRACK(
TrackId VARCHAR(30) not null,
Genre VARCHAR(30),
TrackName VARCHAR(30),
Track_ReleaseDate date,
Playlist_No VARCHAR(30),
AlbumId VARCHAR(30),
ssn VARCHAR(30),
Track_Type VARCHAR(30),
primary key(TrackId),
foreign key(Playlist_No) REFERENCES playlist(Playlist_No),
foreign key(AlbumId) REFERENCES album(AlbumId),
foreign key(ssn) REFERENCES artist(ssn)
);";
$sql .="CREATE TABLE COMPOSER(
Studiolabel VARCHAR(30),
ComposerName VARCHAR(30),
AlbumId VARCHAR(30),
PRIMARY KEY(Studiolabel,AlbumId),
FOREIGN KEY(AlbumId) REFERENCES Album(AlbumId)
);";

if ($conn->multi_query($sql) == TRUE) {
    echo "Tables created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
