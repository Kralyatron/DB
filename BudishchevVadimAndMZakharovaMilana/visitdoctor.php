<html>
 <head>
  <title>WEB-site of the Budishchev's and Zakharova's Hospital</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>
	<?php
	printf('<P>Hello world! Searching for visitted doctors:</P> %s',"\n");
	// ������塞��, �롨ࠥ� ���� ������ VER3

	include('config.php');	
	$link = mysqli_connect($server, $user, $password, $database)
	    or die('Error: Unable to connect: ' . mysqli_connect_error());
	printf('<P>Succesfully connected!</P> %s',"\n");
	
	// �믮��塞 SQL-�����
	$SQLquery = 'SELECT * FROM visitdoctor INNER JOIN Doctors on Doctors.id=visitdoctor.Doctors_id';
	$SQLresult = mysqli_query($link,$SQLquery);

	printf('<table cellspacing=\' 0 \' border=\' 1 \'> %s',"\n");
	printf('<TR> %s',"\n");
	printf('	<TH>Session_id</TH> %s',"\n");
	printf('	<TH>Doctors_id</TH> %s',"\n");
	printf('	<TH>date</TH> %s',"\n");
	printf('	<TH>result</TH> %s',"\n");
	printf('</TR> %s',"\n");

        while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		printf('<TR>');
		printf('<TD> %d </TD> <TD> %s </TD> <TD> %s </TD> <TD> %s </TD> ',$result[5],$result[7],$result[4],$result[3]);
		printf('</TR> %s',"\n");
	}
	printf('</table> %s',"\n");
	// �᢮������� ������ �� १����
	mysqli_free_result($SQLresult);
	mysqli_close($link);

?>
<BR>
<a href="index.html"> <P>GO BACK</P> </a>
 </body>
</html>