<?php
include('config.php');	
$link = mysqli_connect($server, $user, $password, $database)
	or die('Error: Unable to connect: ' . mysqli_connect_error());


$Doctors_id = mysqli_real_escape_string($link, $_POST['Doctors_id']);
$date = mysqli_real_escape_string($link, $_POST['date']);
$seans_id2=mysqli_real_escape_string($link, $_POST['seans_id2']);

// �����������
// PhPMyAdmin
// ������ �����
echo $Doctors_id;
echo $date;
echo $seans_id2;
$SQLquery = "INSERT INTO visitdoctor (Doctors_id,date,seans_id2) VALUES ($Doctors_id,'$date',$seans_id2)";
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