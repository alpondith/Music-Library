<html>

<head>
    <title>Searching for a student...</title>
</head>

<body bgcolor=#ffffff>

<form name="search" method="get" action="sort.php">
    Sort according to:
    <label for="find"></label>
    <Select NAME="find" id="find">
        <Option VALUE="name">Name</option>
        <Option VALUE="artist">Artist</option>
        <Option VALUE="Length">length</option>
    </Select>

    <input type="hidden" name="searching" value="yes" />
    <input type="submit" name="search" value="Search" />
</form>

</body>

</html>