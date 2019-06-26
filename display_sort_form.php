<html>

<head>
    <title>Printing for a track...</title>
</head>

<body bgcolor=#ffffff>

<form name="search" method="get" action="printAlbum_getmysql.php">
    Sort according to:
    <label for="find"></label>
    <Select NAME="find" id="find">

        <Option VALUE="TrackName">Track Name</option>
        <Option VALUE="Track_ReleaseDate">Track Release Date</option>
    </Select>

    <input type="hidden" name="searching" value="yes" />
    <input type="submit" name="search" value="Search" />
</form>

</body>

</html>