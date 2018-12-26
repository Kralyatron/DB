<?php
include('config.php');	
$link = mysqli_connect($server, $user, $password, $database)
	or die('Error: Unable to connect: ' . mysqli_connect_error());


$FIO = mysqli_real_escape_string($link, $_POST['FIO']);
$Pasport = mysqli_real_escape_string($link, $_POST['Pasport']);
// Ecape String

// PhPMyAdmin // Sakila and World
echo $FIO;
echo $Pasport;

$SQLquery = "INSERT INTO patients (FIO,Pasport) VALUES ('$FIO','$Pasport')";
echo '<BR> SQL query: ';
echo $SQLquery;

if (mysqli_query($link, $SQLquery)) {
    echo "<BR>New record created successfully";
} else {
    echo "<BR>Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);

printf('<a href="index.html"> <P>GO BACK</P> </a>');
?>