<!DOCTYPE html>
<html>
<head><title>Searching for a student...</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <span class="overlyButton" onclick="openNav()">&#9776;</span>
    <div class="overlay-content">
        <a href="index.html">Home</a>
        <a href="admin_login.html">Admin Login</a>
        <a href="SearchPanel.html">Search</a>
        <a href="About.html">About</a>
    </div>
</div>

<?php



// Otherwise we connect to our Database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cse_370";
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
}else{
}

if (isset($_GET['find'])) {
    $find = $con->real_escape_string($_GET['find']);
    if($find==""){
        echo "put a valid word";
        exit;
    }
    $sql = "SELECT * FROM artist ORDER BY $find";
    if($result = mysqli_query($con, $sql)){
        if(mysqli_num_rows($result) > 0){
            if($find=="Band") {
                echo "<table>";
                echo "<tr>";
                echo "<th>Band</th>";
                echo "<th>Artist Name</th>";
                echo "<th>ssn</th>";
                echo "</tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['Band'] . "</td>";
                    echo "<td>" . $row['Artist_Name'] . "</td>";
                    echo "<td>" . $row['ssn'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Close result set
                mysqli_free_result($result);
            }
            elseif ($find=="Artist_Name"){
                echo "<table>";
                echo "<tr>";
                echo "<th>Artist Name</th>";
                echo "<th>ssn</th>";
                echo "<th>Band</th>";
                echo "<th>Country</th>";
                echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>" . $row['Artist_Name'] . "</td>";
                    echo "<td>" . $row['ssn'] . "</td>";
                    echo "<td>" . $row['Band'] . "</td>";
                    echo "<td>" . $row['Country'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Close result set
                mysqli_free_result($result);
            }
            elseif ($find=="Country"){
                echo "<table>";
                echo "<tr>";
                echo "<th>Country</th>";
                echo "<th>Artist Name</th>";
                echo "<th>ssn</th>";
                echo "<th>Band</th>";
                echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>" . $row['Country'] . "</td>";
                    echo "<td>" . $row['Artist_Name'] . "</td>";
                    echo "<td>" . $row['ssn'] . "</td>";
                    echo "<td>" . $row['Band'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Close result set
                mysqli_free_result($result);
            }
            else{
                echo "<table>";
                echo "<tr>";
                echo "<th>ssn</th>";
                echo "<th>Artist Name</th>";
                echo "<th>Band</th>";
                echo "<th>Country</th>";
                echo "</tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['ssn'] . "</td>";
                    echo "<td>" . $row['Artist_Name'] . "</td>";
                    echo "<td>" . $row['Band'] . "</td>";
                    echo "<td>" . $row['Country'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Close result set
                mysqli_free_result($result);
            }


        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
    echo "<b>Sorted According To</b> " . $find = $con->real_escape_string($_GET['find']);
}

?>


<div class = "bottom-div">
    <a href="AlbumTable_Form.php"><button class="button bottom-button"><span>Album</span></button></a>
    <a href="ArtistTable_Form.php"><button class="button bottom-button"><span>Artist</span></button></a>
    <a href="TrackTable_Form.php"><button class="button bottom-button"><span>Track</span></button></a>
    <a href="PlaylistTable_Form.php"><button class="button bottom-button"><span>Playlist</span></button></a>
    <a href="SearchPanel.html"><button class="button bottom-button"><span>Search</span></button></a>
</div>
<script src="javscript.js"></script>

</body>
</html>