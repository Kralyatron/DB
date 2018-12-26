<?php
include('config.php');	
$link = mysqli_connect($server, $user, $password, $database)
	or die('Error: Unable to connect: ' . mysqli_connect_error());


$first_name = mysqli_real_escape_string($link, $_POST['first_name']);
$family_name = mysqli_real_escape_string($link, $_POST['family_name']);
// Ecape String

// PhPMyAdmin // Sakila and World
echo $FIO;
echo $Pasport;
echo $Stepen;
echo $Diploma;
echo $Spec;
echo $Time_of_work;
echo $cab;

$SQLquery = "INSERT INTO Doctors (id,FIO,Pasport,Stepen,Diploma,Spec,Time of work, cab) VALUES ((SELECT IFNULL(max(id)+1,1) from (Select id from Doctors) as ID), '$FIO','$Pasport', '$Stepen', '$Diploma', '$Spec', '$Time_of_work', '$cab')";
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