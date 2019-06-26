<!DOCTYPE html>
<html>
<head>
    <title>Searching for a student...</title>
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

        ?>

        <div class="middle-div">
            <div class="centerPosition">
                put a valid word
                <form class="divForm" name="search" method="get" action="Track_Artist_searchResult.php">
                    <fieldset>
                        <legend><h2>Search Track and Artist</h2></legend><br>
                        Seach for: <label for="find"> Track and Artist:</label>
                        <input type="text" name="find" id="find" /> <br><br>
                        <label for="field">in</label>
                        <Select NAME="field" id="field">
                            // name, artist, id inside "" are the area in the database you want to search in
                            <Option VALUE="TrackId">Track Id</option>
                            <Option VALUE="Genre">Genre</option>
                            <Option VALUE="TrackName">Track Name</option>
                            <Option VALUE="Track_ReleaseDate">Track Release Date</option>
                            <Option VALUE="Playlist_No">Playlist No</option>
                            <Option VALUE="AlbumId">Album Id</option>
                            <Option VALUE="Track_Type">Track Type</option>
                            <Option VALUE="artist.ssn">Artist ssn</option>
                            <Option VALUE="Artist_Name">Artist Name</option>
                            <Option VALUE="Band">Band</option>
                            <Option VALUE="Country">Country</option>
                        </Select>
                        <br><br>
                        <input type="hidden" name="searching" value="yes" />
                        <input type="submit" name="search" value="Search" />
                        <input type ="reset">
                    </fieldset>
                </form>
            </div>
        </div>


        <div class = "bottom-div">
            <a href="AlbumTable_Form.php"><button class="button bottom-button"><span>Album</span></button></a>
            <a href="ArtistTable_Form.php"><button class="button bottom-button"><span>Artist</span></button></a>
            <a href="TrackTable_Form.php"><button class="button bottom-button"><span>Track</span></button></a>
            <a href="PlaylistTable_Form.php"><button class="button bottom-button"><span>Playlist</span></button></a>
            <a href="SearchPanel.html"><button class="button bottom-button"><span>Search</span></button></a>
        </div>
        <script src="javscript.js"></script>



        <?php


        exit;
    }
// We perform a bit of filtering
    $find = strtoupper($find); //make every find value upper case
    $find = strip_tags($find); //takes out any code the user may have tried to enter in the search box
    $find = trim($find); //takes out all the white space

//Now we search for our search term, in the field the user specified
    //con is the variable from line 15
    $data = mysqli_query($con, "SELECT * FROM track INNER JOIN artist on track.ssn=Artist.ssn WHERE upper($field) LIKE '%$find%'");

//And we display the results

         echo "<table>";
                echo "<tr>";
                echo "<th>Track ID</th>";
                echo "<th>Genre</th>";
                echo "<th>Track Name</th>";
                echo "<th>Track Release Date</th>";
                 echo "<th>Playlist No</th>";
                echo "<th>Album ID</th>";
                echo "<th>Track Type</th>";
                echo "<th>Artist SSN</th>";
                 echo "<th>artist Name</th>";
                echo "<th>Band</th>";
                echo "<th>Country</th>";
                echo "</tr>";
    while ($result = mysqli_fetch_assoc($data)) {


         echo "<tr>";
                    echo "<td>" . $result['TrackId'] . "</td>";
                    echo "<td>" . $result['Genre'] . "</td>";
                    echo "<td>" . $result['TrackName'] . "</td>";
                    echo "<td>" . $result['Track_ReleaseDate'] . "</td>";
                    echo "<td>" . $result['Playlist_No'] . "</td>";
                    echo "<td>" . $result['AlbumId'] . "</td>";
                    echo "<td>" . $result['Track_Type'] . "</td>";
                    echo "<td>" . $result['ssn'] . "</td>";
                    echo "<td>" . $result['Artist_Name'] . "</td>";
                    echo "<td>" . $result['Band'] . "</td>";
                    echo "<td>" . $result['Country'] . "</td>";
                    echo "</tr>";

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