<?php
include('config.php');	
$link = mysqli_connect($server, $user, $password, $database)
	or die('Error: Unable to connect: ' . mysqli_connect_error());


$FIO = mysqli_real_escape_string($link, $_POST['FIO']);
$Pasport = mysqli_real_escape_string($link, $_POST['Pasport']);
$Stepen = mysqli_real_escape_string($link, $_POST['Stepen']);
$Diploma = mysqli_real_escape_string($link, $_POST['Diploma']);
$Spec = mysqli_real_escape_string($link, $_POST['Spec']);
$Time_of_work = mysqli_real_escape_string($link, $_POST['Time_of_work']);
$cab = mysqli_real_escape_string($link, $_POST['cab']);
// Ecape String

// PhPMyAdmin // Sakila and World
echo $FIO;
echo $Pasport;
echo $Stepen;
echo $Diploma;
echo $Spec;
echo $Time_of_work;
echo $cab;

$SQLquery = "INSERT INTO Doctors (id,FIO,Pasport,Stepen,Diploma,Spec,Time of work, cab) VALUES (NULL, '$FIO','$Pasport', '$Stepen', '$Diploma', '$Spec', '$Time_of_work', '$cab')";
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