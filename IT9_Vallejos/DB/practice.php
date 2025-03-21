<?php 

    -- Create the Event table
CREATE TABLE Event (
    EventID INTEGER PRIMARY KEY AUTOINCREMENT,
    EventName VARCHAR(100) NOT NULL,
    EventDate DATE NOT NULL,
    Location VARCHAR(255) NOT NULL
);

-- Create the Participant table
CREATE TABLE Participant (
    ParticipantID INTEGER PRIMARY KEY AUTOINCREMENT,
    ParticipantName VARCHAR(100) NOT NULL,
    Age INTEGER NOT NULL,
    ContactDetails VARCHAR(100) NOT NULL
);

-- Create the Judge table
CREATE TABLE Judge (
    JudgeID INTEGER PRIMARY KEY AUTOINCREMENT,
    JudgeName VARCHAR(100) NOT NULL,
    Expertise VARCHAR(255) NOT NULL
);

-- Create the Score table
CREATE TABLE Score (
    ScoreID INTEGER PRIMARY KEY AUTOINCREMENT,
    EventID INTEGER NOT NULL,
    ParticipantID INTEGER NOT NULL,
    JudgeID INTEGER NOT NULL,
    ScoreValue DECIMAL(5,2) NOT NULL,
    FOREIGN KEY (EventID) REFERENCES Event(EventID),
    FOREIGN KEY (ParticipantID) REFERENCES Participant(ParticipantID),
    FOREIGN KEY (JudgeID) REFERENCES Judge(JudgeID)
);

-- Create the Category table
CREATE TABLE Category (
    CategoryID INTEGER PRIMARY KEY AUTOINCREMENT,
    CategoryName VARCHAR(100) NOT NULL,
    Description VARCHAR(255)
);


 ?>