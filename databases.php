<?php

//connecting to mysql
$servename = "localhost";
$username = "root";
$password = "Vishal@123";
$database = "temp";

$conn = mysqli_connect($servename,$username,$password,$database);
if(!$conn)
{
    die("connection is not created");
}
else
{
    echo "connection is created";
}



//creating a database

/*$sql = "CREATE DATABASE temp";
$result = mysqli_query($conn,$sql);

if($result)
{
    echo "<br> database is created sucessfully";
}
else
{
    echo "<br> we failed to create database";
}
*/



//creating a table
/*$sql = "CREATE TABLE `class9` ( `Student_id` INT NOT NULL AUTO_INCREMENT ,  `Name` TEXT NOT NULL ,  `Mobile_number` INT NOT NULL ,  `Fees` INT NOT NULL DEFAULT '1300' ,    PRIMARY KEY  (`Student_id`))";
$result = mysqli_query($conn,$sql);
if($result)
{
    echo "<br>table is created sucessfully";
}
else
{
    echo "<br>falied to create table in temp database";
}*/



//inserting the records

/*$sql = "INSERT INTO `class9` ( `Name`, `Mobile_number`, `Fees`) VALUES ('keshav', '9876', '1300')";
$result = mysqli_query($conn, $sql);
if($result)
{
    echo "<br>Record is inserted sucessfully";
}
else
{
    echo "<br>falied to insert record in class9";
}*/

/*$sql = "DROP TABLE class9";
$result = mysqli_query($conn,$sql);
if($result)
{
    echo "table drop";
}*/

?>