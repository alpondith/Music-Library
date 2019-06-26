<!doctype html>
<html>

<head>
    <title>Sorting by Track...</title>
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
        <form class="divForm" name="search" method="get" action="TrackTable_getmysql.php">
            <fieldset>
                <legend>Sorting Track Table</legend><br>
                Sort according to:<br>
                <label for="find"></label>
                <Select NAME="find" id="find">
                    <Option VALUE="TrackName">Track Name</option>
                    <Option VALUE="Track_ReleaseDate">Track Release Date</option>
                </Select><br><br>

                <input type="hidden" name="searching" value="yes" />
                <input type="submit" name="search" value="Sort" />
                <input type="reset">
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