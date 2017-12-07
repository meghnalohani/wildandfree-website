<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE wildandfree";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();

$conn = new mysqli($servername, $username, $password, wildandfree);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE user (
fname char(30),lname char(30),uname char(30),pass char(30),email varchar(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
$conn = new mysqli($servername, $username, $password, wildandfree);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE species (
id varchar(20),cname varchar(30),sname varchar(30),nathab text,descr text,usg text,location text,genus varchar(20),type varchar(6)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table species created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
$conn = new mysqli($servername, $username, $password, wildandfree);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE parks (
name varchar(30),location text,info text,attractions text
)";

if ($conn->query($sql) === TRUE) {
    echo "Table parks created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
$conn = new mysqli($servername, $username, $password, wildandfree);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO user (fname, lname,uname,pass, email)
VALUES ('Meghna', 'Lohani', 'admin','admin','meghna.lohani@gmail.com');";
$sql .= "INSERT INTO species (id,cname,sname,nathab,descr,usg,location,genus,type)
VALUES ('F11001', 'hamster','cricetine','Syria','In the wild hamsters are crepuscular and remain underground during the day to avoid being caught by predators. They feed primarily on seeds, fruits, and vegetation, and will occasionally eat burrowing insects','pets','greece,china','chordata','fauna');";
$sql .= "INSERT INTO species (id,cname,sname,nathab,descr,usg,location,genus,type)
VALUES ('F11002', 'Lion','Panthera Leo','Africa','The lion (Panthera leo) is one of the big cats in the Felidae family and a member of genus Panthera. It has been listed as Vulnerable on the IUCN Red List since 1996, as populations in African range countries declined by about 43% since the early 1990s. Lion populations are untenable outside designated protected areas. ','pets','African','Panthera','fauna');";

$sql .= "INSERT INTO parks (name,location,info,attractions)
VALUES ('Ranthambore National Park','Rajasthan','Ranthambore National Park is one of the biggest and most renowned national park in Northern India. The park is located in the Sawai Madhopur district of southeastern Rajasthan, which is about 130 km from Jaipur. Being considered as one of the famous and former hunting grounds of the Maharajas of Jaipur, today the Ranthambore National Park terrain is major wildlife tourist attraction spot that has pulled the attention of many wildlife photographers and lovers in this destination.','Flora, fauna,wildlife safari,sherbhag')";
$sql .= "INSERT INTO parks (name,location,info,attractions)
VALUES ('Periyar Wildlife Sanctuary','Kerala','Periyar National Park and Wildlife Sanctuary (PNP) is a protected area near Thekkady in the districts of Idukki, Kottayam and Pathanamthitta in Kerala, India.','There are 35 species of mammals recorded in the park, including many threatened species. It is an important tiger and elephant reserve. A total of 24 Bengal tigers were counted across 640 square kilometers of the park in 2008')";
$sql .= "INSERT INTO parks (name,location,info,attractions)
VALUES ('Dudhwa National Park','Uttar Pradesh','The park's mosaic of high forest interspersed with grasslands is characteristic of the Terai ecosystems of India the area is, probably, the last prominent remnant of this type of ecosystem. The forests especially the sal forests have always been very dense can be categorized into northern tropical semi-evergreen forest, northern Indian moist deciduous forest, tropical seasonal swamp forest northern tropical dry deciduous forest.', 'The main flora comprises sal, asna, shisham, jamun, gular, sehore and bahera')";
if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>