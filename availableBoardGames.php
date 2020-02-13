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
    $AssignedGame = $_POST['assigned_game'];
	$EntryDate = $_POST['date'];
    
//Insert data to table

    $sql = "INSERT INTO assignedBoardGames (MemberID, MemberFirstName, AssignedGame, EntryDate) Values ('$MemberID', '$MemberFirstName', '$AssignedGame', '$EntryDate')";

    if(!mysqli_query($conn, $sql))
        {
	        echo "Not Inserted";
        }
        else
        { 
    	    echo "Inserted";
        }

    header ('refresh:2; url=availableBoardGames.html');


mysqli_close($conn);


?>
