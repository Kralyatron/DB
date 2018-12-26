<html>
 <head>
  <title>WEB-site of the Budishchev's and Zakharova's Hospital</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>
	<?php
	printf('<P>Hello world! Searching for every doctor we have here:</P> %s',"\n");
	// Соединяемся, выбираем базу данных VER3

	include('config.php');	
	$link = mysqli_connect($server, $user, $password, $database)
	    or die('Error: Unable to connect: ' . mysqli_connect_error());
	printf('<P>Succesfully connected!</P> %s',"\n");
	
	// Выполняем SQL-запрос
	$SQLquery = 'SELECT * FROM Doctors';
	$SQLresult = mysqli_query($link,$SQLquery);

	printf('<table cellspacing=\' 0 \' border=\' 1 \'> %s',"\n");
	printf('<TR> %s',"\n");
	printf('	<TH>id</TH> %s',"\n");
	printf('	<TH>FIO</TH> %s',"\n");
	printf('	<TH>Pasport</TH> %s',"\n");
	printf('	<TH>Stepen</TH> %s',"\n");
        printf('	<TH>Diploma</TH> %s',"\n");
	printf('	<TH>Time of work</TH> %s',"\n");
	printf('	<TH>Cabinet</TH> %s',"\n");

	printf('</TR> %s',"\n");


	while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		printf('<TR>');
		printf('<TD> %s </TD> <TD>%s</TD> <TD> %s </TD> <TD>%s</TD> <TD>%s</TD> <TD>%s</TD> <TD>%s</TD>',$result[0],$result[1],$result[2],$result[3],$result[4],$result[5],$result[6]);
		printf('</TR> %s',"\n");
	}
	printf('</table> %s',"\n");
	// Освобождаем память от результата
	mysqli_free_result($SQLresult);
	mysqli_close($link);

?>
<BR>
<a href="index.html"> <P>GO BACK</P> </a>
 </body>
</html>