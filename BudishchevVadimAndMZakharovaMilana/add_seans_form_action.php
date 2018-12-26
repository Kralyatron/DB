<?php
include('config.php');	
$link = mysqli_connect($server, $user, $password, $database)
	or die('Error: Unable to connect: ' . mysqli_connect_error());

$book_authorid = mysqli_real_escape_string($link, $_POST['id']);
$book_title = mysqli_real_escape_string($link, $_POST['patseans_seansid']);
$book_year = mysqli_real_escape_string($link, $_POST['Doctors_id']);
$book_year = mysqli_real_escape_string($link, $_POST['result']);
$book_year = mysqli_real_escape_string($link, $_POST['date']);

// ÇÀÝÑÊÅÉÏÈÒÜ
// PhPMyAdmin
// ÑÀÊÈËÀ ÂÎÐËÄ
echo $book_authorid;
echo $book_title;
echo $book_year;
$SQLquery = "INSERT INTO visitdoctor (patseans_seansid,Doctors_id,result,date) VALUES ($patseans_seansid,$Doctors_id,'$result','$date')";
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