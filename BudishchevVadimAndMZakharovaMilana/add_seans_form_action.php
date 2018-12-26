<?php
include('config.php');	
$link = mysqli_connect($server, $user, $password, $database)
	or die('Error: Unable to connect: ' . mysqli_connect_error());

$patseans_seansid = mysqli_real_escape_string($link, $_POST['seansid']);
$Doctors_id = mysqli_real_escape_string($link, $_POST['patients_id']);
$result = mysqli_real_escape_string($link, $_POST['jaloba']);

// ÇÀÝÑÊÅÉÏÈÒÜ
// PhPMyAdmin
// ÑÀÊÈËÀ ÂÎÐËÄ
echo $seansid
echo $Doctors_id;
echo $jaloba;
$SQLquery = "INSERT INTO patseans (seansid,patients_id,jaloba) VALUES ($seansid,$patients_id,'$jaloba')";
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