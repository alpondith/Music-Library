<!DOCTYPE html>
<html>

<head>
    <title>Searching for a Track or Artist...</title>
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
</body>

</html>