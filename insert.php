<?php
$servername = "localhost";
$username = "username";
$password = "password";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
//creation of database
$sql4 = "CREATE DATABASE myDB";
if ($conn->query($sql4) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

//sql to create table
$sql1 = "CREATE TABLE Records (
skills varchar(30),
Team varchar(30)
)";
if (mysqli_query($conn, $sql1)) {
echo "Table created successfully";
}
else {
echo "Error creating table: " . mysqli_error($conn);

}
$sql = "INSERT INTO Records (skills,team) VALUES
('c++','programmer'),
('c', 'programmer'),
('python', 'programmer'),
('leadership', 'hr')";
if(mysqli_query($conn, $sql)){
 echo "Records added successfully.";
} 
else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

$query="SELECT * FROM Records";
$result=mysql_query($query) or die(mysql_error());
$num=mysql_numrows($result); 
//print $num;

if($num > 0)
{
   $sql = "SELECT skills FROM Records WHERE skills='$_POST[skills]'
       AND team='$_POST[team]'";
   $result2 = mysql_query($sql) or die("Query died: fpassword");
   $num2 = mysqli_num_rows($result2);
//print $num2;
}
if($num2 > 0) //password matches
{
        echo "$team";
}
mysqli_close($conn);
?>