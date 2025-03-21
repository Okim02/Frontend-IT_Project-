<?php 

require("connection_db.php");


$sql = "CREATE TABLE IF NOT EXISTS Event (
    EventID INTEGER PRIMARY KEY AUTO_INCREMENT,
    EventName VARCHAR(100) NOT NULL,
    EventDate DATE NOT NULL,
    Location VARCHAR(255) NOT NULL
)";


if ($con->query($sql) === TRUE) {
    echo "Table Event created successfully<br>";
} else {
    echo "Error creating Event table: " . $con->error . "<br>";
}


$sql = "CREATE TABLE IF NOT EXISTS Participant (
    ParticipantID INTEGER PRIMARY KEY AUTO_INCREMENT,
    ParticipantName VARCHAR(100) NOT NULL,
    Age INTEGER NOT NULL,
    ContactDetails VARCHAR(100) NOT NULL
)";


if ($con->query($sql) === TRUE) {
    echo "Table Participant created successfully<br>";
} else {
    echo "Error creating Participant table: " . $con->error . "<br>";
}


$sql = "CREATE TABLE IF NOT EXISTS Judge (
    JudgeID INTEGER PRIMARY KEY AUTO_INCREMENT,
    JudgeName VARCHAR(100) NOT NULL,
    Expertise VARCHAR(255) NOT NULL
)";


if ($con->query($sql) === TRUE) {
    echo "Table Judge created successfully<br>";
} else {
    echo "Error creating Judge table: " . $con->error . "<br>";
}


$sql = "CREATE TABLE IF NOT EXISTS Score (
    ScoreID INTEGER PRIMARY KEY AUTO_INCREMENT,
    EventID INTEGER NOT NULL,
    ParticipantID INTEGER NOT NULL,
    JudgeID INTEGER NOT NULL,
    ScoreValue DECIMAL(5,2) NOT NULL,
    FOREIGN KEY (EventID) REFERENCES Event(EventID),
    FOREIGN KEY (ParticipantID) REFERENCES Participant(ParticipantID),
    FOREIGN KEY (JudgeID) REFERENCES Judge(JudgeID)
)";


if ($con->query($sql) === TRUE) {
    echo "Table Score created successfully<br>";
} else {
    echo "Error creating Score table: " . $con->error . "<br>";
}


$sql = "CREATE TABLE IF NOT EXISTS Category (
    CategoryID INTEGER PRIMARY KEY AUTO_INCREMENT,
    CategoryName VARCHAR(100) NOT NULL,
    Description VARCHAR(255)
)";


if ($con->query($sql) === TRUE) {
    echo "Table Category created successfully<br>";
} else {
    echo "Error creating Category table: " . $con->error . "<br>";
}


$con->close();

?>
