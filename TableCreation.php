<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbName = "board_game_aficionados";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbName);

// Check connection
if (!$con) {
     die("Connection failed: " . mysqli_connect_error());
}

// create available board games table
CREATE TABLE availableBoardGames (
    MemberID int NOT NULL PRIMARY KEY,
	MemberFirstName VARCHAR(30),
	AvailableGame VARCHAR(30),
	EntryDate DATE,
	FOREIGN KEY (MemberID) REFERENCES assignedBoardGames(MemberID)
);

// create assigned board games table
CREATE TABLE assignedBoardGames (
    MemberID int NOT NULL ,
	MemberFirstName VARCHAR(30),
	AssignedGame VARCHAR(30),
	EntryDate DATE,
	FOREIGN KEY (MemberID) REFERENCES availableBoardGames(MemberID)
);

// create schedule table
CREATE TABLE schedule (
    Day DATE NOT NULL PRIMARY KEY,
	Game VARCHAR(30),
	Venue VARCHAR(30),
	StartTime int(4)
);

// create scoring board games table
CREATE TABLE scoring (
	Game VARCHAR(30) NOT NULL PRIMARY KEY,
	HighScore int,
	MemberFirstName VARCHAR(30),
	EntryDate DATE
);

mysqli_close($conn);
?>
