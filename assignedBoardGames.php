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

    $MemberID = $_POST['member_ID'];
    $MemberFirstName = $_POST['member_first_name'];
    $AvailableGame = $_POST['available_game'];
	$EntryDate = $_POST['date'];
    
//Insert data to table

    $sql = "INSERT INTO availableBoardGames (MemberID, MemberFirstName, AvailableGame, EntryDate) Values ('$MemberID', '$MemberFirstName', '$AvailableGame', '$EntryDate')";

    if(!mysqli_query($conn, $sql))
        {
	        echo "Not Inserted";
        }
        else
        { 
    	    echo "Inserted";
        }

    header ('refresh:2; url=assignedBoardGames');


mysqli_close($conn);


?>
