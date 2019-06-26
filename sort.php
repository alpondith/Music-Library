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
    echo 'Connection Faild: '.$con->connect_error;
}else{
}

if (isset($_GET['find'])) {
    $find = $con->real_escape_string($_GET['find']);
    if($find==""){
        echo "put a valid word";
        exit;
    }
    $sql = "SELECT * FROM gaana ORDER BY $find";
    if($result = mysqli_query($con, $sql)){
        if(mysqli_num_rows($result) > 0){
            if($find=="name") {
                echo "<table>";
                echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>Artist</th>";
                echo "<th>Length</th>";
                echo "</tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['artist'] . "</td>";
                    echo "<td>" . $row['length'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Close result set
                mysqli_free_result($result);
            }
            elseif ($find=="artist"){
                echo "<table>";
                echo "<tr>";
                echo "<th>Artist</th>";
                echo "<th>Name</th>";
                echo "<th>Length</th>";
                echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>" . $row['artist'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['length'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Close result set
                mysqli_free_result($result);
            }
            else{
                echo "<table>";
                echo "<tr>";
                echo "<th>Length</th>";
                echo "<th>Name</th>";
                echo "<th>Artist</th>";
                echo "</tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['length'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['artist'] . "</td>";
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
    echo "<b>Sorted According To</b> " . $find = $con->real_escape_string($_GET['find']);;
}

?>

</body>
</html>