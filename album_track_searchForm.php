<!DOCTYPE html>
<html>

<head>
    <title>Searching for a Album or Track...</title>
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

<div class="middle-div">
    <div class="centerPosition">
        <form class="divForm" name="search" method="get" action="album_track_searchResult.php">
            <fieldset>
                <legend><h2>Search Album and Track</h2></legend><br>
                Seach for: <label for="find"> Album and Track:</label>
                <input type="text" name="find" id="find" /><br><br>
                <label for="field"> in </label>
                <Select NAME="field" id="field">
                    // name, artist, id inside "" are the area in the database you want to search
                    <Option VALUE="TrackName">Track Name</option>
                    <Option VALUE="Playlist_No">Playlist No</option>
                    <Option VALUE="ssn">Artist SSN</option>
                    <Option VALUE="album.AlbumId">Album ID</option>
                    <Option VALUE="AlbumName">Album Name</option>
                    <Option VALUE="Album_ReleaseDate">Album Release Date</option>

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

</body>

</html>