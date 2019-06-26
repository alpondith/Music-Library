<html>
<head><title>Searching for a student...</title>
</head>
<body bgcolor=#ffffff>

<?php



// Otherwise we connect to our Database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CSE_370";
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
}else{
}



if (isset($_GET['find'])) {
//echo "<h2>Search Results:</h2><p>";
    //find is the variable of html file where we store the word that someone searched
    $find = $con->real_escape_string($_GET['find']);
//If they did not enter a search term we give them an error
    //field is the variable of html file where the area of search is stored
    $field = $con->real_escape_string($_GET['field']);
    if($find==""){
        echo "put a valid word";
        exit;
    }
// We perform a bit of filtering
    $find = strtoupper($find); //make every find value upper case
    $find = strip_tags($find); //takes out any code the user may have tried to enter in the search box
    $find = trim($find); //takes out all the white space

//Now we search for our search term, in the field the user specified
    //con is the variable from line 15
    $data = mysqli_query($con, "SELECT * FROM trackname WHERE upper($field) LIKE '%$find%'");

//And we display the results
    while ($result = mysqli_fetch_assoc($data)) {
        echo "Song Name: ". $result['Song_Name'];
        echo "<br>";
        echo "Artist Name: ".$result['ArtistName'];
        echo "<br>";
        echo "Id: ".$result['Id'];
        echo "<br>";
    }

//This counts the number or results - and if there wasn't any it gives them a little message explaining that
    $anymatches = mysqli_num_rows($data);
    if ($anymatches == 0) {
        echo "Sorry, but we can not find an entry to match your query...<br><br>";
    }

//And we remind them what they searched for
    echo "<b>Searched For:</b> " . $find = $con->real_escape_string($_GET['find']);;
//}
}

?>

</body>
</html>