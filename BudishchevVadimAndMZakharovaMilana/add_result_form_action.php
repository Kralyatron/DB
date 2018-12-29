<?php
include('config.php');	
$link = mysqli_connect($server, $user, $password, $database)
	or die('Error: Unable to connect: ' . mysqli_connect_error());


$result = mysqli_real_escape_string($link, $_POST['result']);
$seans_id2=mysqli_real_escape_string($link, $_POST['seans_id2']);

// ÇÀÝÑÊÅÉÏÈÒÜ
// PhPMyAdmin
// ÑÀÊÈËÀ ÂÎÐËÄ
echo $result;
echo $seans_id2;
$SQLquery = "UPDATE visitdoctor SET result='$result' where seans_id2=$seans_id2 and result IS NULL)";
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