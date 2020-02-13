<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbName = "board_game_aficionados";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbName);

// Check connection

    if(!$conn)
        {
	        echo "Not Connected to Server";
        }

// Get data entry

    $Game = $_POST['game'];
    $HighScore = $_POST['high_score'];
    $MemberFirstName = $_POST['member_first_name'];
    $EntryDate = $_POST['day'];

//Insert data to table

    $sql = "INSERT INTO scoring (Game, HighScore, MemberFirstName, EntryDate) Values ('$Game', '$HighScore', '$MemberFirstName', '$EntryDate')";

    if(!mysqli_query($conn, $sql))
        {
	        echo "Not Inserted";
        }
        else
        { 
    	    echo "Inserted";
        }

    header ('refresh:2; url=scoring.html');


mysqli_close($conn);


?>
