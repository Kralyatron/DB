<?php
include('config.php');	
$link = mysqli_connect($server, $user, $password, $database)
	or die('Error: Unable to connect: ' . mysqli_connect_error());

$patseans_seansid = mysqli_real_escape_string($link, $_POST['patseans_seansid']);
$Doctors_id = mysqli_real_escape_string($link, $_POST['Doctors_id']);
$result = mysqli_real_escape_string($link, $_POST['result']);
$date = mysqli_real_escape_string($link, $_POST['date']);
$seans_id2=mysqli_real_escape_string($link, $_POST['seans_id2']);

// �����������
// PhPMyAdmin
// ������ �����
echo $patseans_seansid;
echo $Doctors_id;
echo $result;
echo $date;
echo $seans_id2;
$SQLquery = "INSERT INTO visitdoctor (patseans_seansid,Doctors_id,result,date,seans_id2) VALUES ($patseans_seansid,$Doctors_id,'$result','$date',$seans_id2)";
$SQLquery = "INSERT INTO patseans (seansid,patients_id,result) VALUES ($seans_id2,$patseans_seansid,'$result')";
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