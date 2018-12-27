<?php
include('config.php');	
$link = mysqli_connect($server, $user, $password, $database)
	or die('Error: Unable to connect: ' . mysqli_connect_error());
$patients_id = mysqli_real_escape_string($link, $_POST['patients_id']);
$jaloba = mysqli_real_escape_string($link, $_POST['jaloba']);

// ÇÀÝÑÊÅÉÏÈÒÜ
// PhPMyAdmin
// ÑÀÊÈËÀ ÂÎÐËÄ
echo $patients_id;
echo $jaloba;
$SQLquery = "INSERT INTO patseans (patients_id,jaloba) VALUES ($patients_id,$jaloba)";
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