<!DOCTYPE html>
<html>
<head>
    <title>Searching for a student...</title>
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



if (isset($_GET['insert'])) {
//echo "<h2>Search Results:</h2><p>";
    //find is the variable of html file where we store the word that someone searched
    $insert = $con->real_escape_string($_GET['insert']);
    $oldValue = $con->real_escape_string($_GET['oldValue']);
//If they did not enter a search term we give them an error
    //field is the variable of html file where the area of search is stored
    $field = $con->real_escape_string($_GET['field']);
    if($insert==""){

        ?>


        <div class="container">

            <div class="left-div">
                <div class="centerPosition">
                    put a valid word
                    <form class="divForm" name="update" method="get" action="Artist_updateSuccess.php">
                        <fieldset>
                            <legend><h2>Update Artist</h2></legend><br>
                            <label for="insert"> Insert new value:</label>
                            <input type="text" name="insert" id="insert" /><br><br>
                            <label for="field"> in </label>
                            <Select NAME="field" id="field">
                                // name, artist, id inside "" are the area in the database you want to search in
                                <Option VALUE="ssn">Artist ssn</option>
                                <Option VALUE="Artist_Name">Artist Name</option>
                                <Option VALUE="Band">Band</option>
                                <Option VALUE="Country">Country</option>
                            </Select><br><br>
                            Where value is: <input type="text" name="oldValue"><br>

                            <input type="hidden" name="updating" value="yes" />
                            <input type="submit" name="update" value="Update" />
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




        <?php
        exit;
    }

//Now we search for our search term, in the field the user specified
    //con is the variable from line 15

          $sql = "UPDATE ARTIST SET $field='$insert' WHERE $field='$oldValue'";
       if ($con->query($sql) === TRUE) {
           echo "";

           ?>



           <div class="container">

               <div class="left-div">
                   <div class="centerPosition">
                       New record created successfully
                       <form class="divForm" name="update" method="get" action="Artist_updateSuccess.php">
                           <fieldset>
                               <legend><h2>Update Artist</h2></legend><br>
                               <label for="insert"> Insert new value:</label>
                               <input type="text" name="insert" id="insert" /><br><br>
                               <label for="field"> in </label>
                               <Select NAME="field" id="field">
                                   // name, artist, id inside "" are the area in the database you want to search in
                                   <Option VALUE="ssn">Artist ssn</option>
                                   <Option VALUE="Artist_Name">Artist Name</option>
                                   <Option VALUE="Band">Band</option>
                                   <Option VALUE="Country">Country</option>
                               </Select><br><br>
                               Where value is: <input type="text" name="oldValue"><br>

                               <input type="hidden" name="updating" value="yes" />
                               <input type="submit" name="update" value="Update" />
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






           <?php

       } else {
           echo "Error: " . $sql . "<br>" . $con->error;
       }

       $con->close();




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