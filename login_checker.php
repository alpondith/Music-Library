<html>
<head>
    <title>login</title>
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
    $x= "hitlar";
    $y= "hitlar";
    $uname = $_GET["username"];
    $pass= $_GET["password"];

    if(($x==$uname) &&($y==$pass))
    {
        ?>


        <div class="middle-div bigFont">

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
        <?php

    }
    elseif ($x==$uname)
    {
        ?>
        <div class="middle-div">
            <div class="centerPosition">
            <div>
                <h2>Your given password is incorrect.</h2>
                <h2>Try again</h2>
            </div>
            <form class="divForm" action="login_checker.php" method="get">
                <fieldset>
                    <legend>Login panel:</legend><br>
                    Username:<br><input type="text" name="username" placeholder="username..."><br>
                    Passwod:<br><input type="password" name="password" autocomplete="off" placeholder="password..."><br><br>
                    <input type="submit">
                    <input type="reset">
                </fieldset>
            </form>
            </div>
        </div>
        <?php
    }
    elseif ($y==$pass)
    {
        ?>
        <div class="middle-div">
            <div class="centerPosition">
            <div>
                <h2>Your given Username is incorrect.</h2>
                <h2>Try again</h2>
            </div>
            <form class="divForm" action="login_checker.php" method="get">
                <fieldset>
                    <legend>Login panel:</legend><br>
                    Username:<br><input type="text" name="username" placeholder="username..."><br>
                    Passwod:<br><input type="password" name="password" autocomplete="off" placeholder="password..."><br><br>
                    <input type="submit">
                    <input type="reset">
                </fieldset>
            </form>
            </div>
        </div>
        <?php
    }
    else
    {
        ?>
        <div class="middle-div">
            <div class="centerPosition">
            <div class="box">
                <h2>Your given Username and password both are incorrect.</h2>
                <h2>Try again</h2>
            </div>
            <form class="divForm" action="login_checker.php" method="get">
                <fieldset>
                    <legend>Login panel:</legend><br>
                    Username:<br><input type="text" name="username" placeholder="username..."><br>
                    Passwod:<br><input type="password" name="password" autocomplete="off" placeholder="password..."><br><br>
                    <input type="submit">
                    <input type="reset">
                </fieldset>
            </form>
            </div>
        </div>
        <?php
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