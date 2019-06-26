<html>

<head>
    <title>Deleting from TRACK...</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body >


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



<div class="container">

    <div class="left-div">
        <div class="centerPosition">
            <form class="divForm" name="delete" method="get" action="track_delete_getmysql.php">
                <fieldset>
                    <legend><h2>Delete Track</h2></legend><br>
                    Delete for  <label for="find"> Value:</label>
                    <input type="text" name="find" id="find" /> <br><br>
                    <label for="field">in </label>
                    <Select NAME="field" id="field">
                        // name, artist, id inside "" are the area in the database you want to search in
                        <Option VALUE="TrackId">Track ID</option>
                        <Option VALUE="TrackName">Track Name</option>
                        <Option VALUE="Track_ReleaseDate">Track Release Date</option>
                    </Select>
                    <br><br>
                    <input type="hidden" name="deleting" value="yes" />
                    <input type="submit" name="delete" value="Delete" />
                    <input type="reset">
                </fieldset>
            </form>
        </div>
    </div>

    <div class="right-div">
        <div class="centerPosition">
            Admin Panel<br>
            <button class="button"><a href ="index.html">Logout</a></button><br><br>
            Insert data<br>
            <a href="album_form.php"><button class="button">Album</button></a><br>
            <a href="artist_form.php"><button class="button">Artist</button></a><br>
            <a href="track_form.php"><button class="button">Track</button></a><br><br>
            Update data<br>
            <a href="Album_Update.php"><button class="button">Album</button></a><br>
            <a href="Artist_update.php"><button class="button">Artist</button></a><br>
            <a href="Track_update.php"><button class="button">Track</button></a><br><br>
            DELETE data<br>
            <a href="artist_deleteForm.php"><button class="button">By Artist</button></a><br>
            <a href="album_deleteForm.php"><button class="button">By Album</button></a><br>
            <a href="track_deleteForm.php"><button class="button">By Track</button></a><br>
        </div>
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