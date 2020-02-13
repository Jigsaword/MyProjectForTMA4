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

    $Day = $_POST['day'];
    $Game = $_POST['game'];
    $Venue = $_POST['venue'];
	$StartTime = $_POST['time'];
    
//Insert data to table

    $sql = "INSERT INTO schedule (Day, Game, Venue, StartTime) Values ('$Day', '$Game', '$Venue', '$StartTime')";

    if(!mysqli_query($conn, $sql))
        {
	        echo "Not Inserted";
        }
        else
        { 
    	    echo "Inserted";
        }

    header ('refresh:2; url=schedule.html');


mysqli_close($conn);


?>
