<html>
 <head>
  <title>WEB-site of the Sletcova National Library</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>
	<P style="color:red; font-size:18">
	Welcome to the Slepcova Valentina National Library!<BR>
	<BR>
	Please feel free to browse thorugh the site.
	</P>
 	<meta charset="utf-8">
	
	<table width="100%" cellspacing="0" border="1">	
		<TR>
			<TH>Table column 1</TH>
			<TH>Table column 2</TH>
		</TR>
		<TR>
			<TD>
			  <a href="patients.php"> <P>All patients</P> </a>
			  <a href="doctors.php"> <P>All doctors</P> </a>
			  <a href="patseans.php"> <P>All sessions</P> </a> 
			  <a href="visitdoctor.php"> <P>Doctors visited</P> </a>
			  <a href="add_doctor.html"> <P>Add a new doctor</P> </a>
			  <a href="add_patient.html"> <P>Add a new patient</P> </a>
			</TD>
			<TD>
			  <P>Add New Book:</P>
			  <form action="add_seans_form_action.php" method="post">
          		  	Select Patient:
				<select name="patseans_seansid">
					<?php 
		                        include('config.php');	
					$link = mysqli_connect($server, $user, $password, $database)					
	    					or die('Error: Unable to connect: ' . mysqli_connect_error());
						
					$SQLquery = 'SELECT id,FIO FROM patients';
					$SQLresult = mysqli_query($link,$SQLquery);
					while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
					{
						printf('<option value=%d>%s</option>',$result[0],$result[1]);
					}
					mysqli_free_result($SQLresult);
					mysqli_close($link);
					?>
				</select>
         		  	<br>
          		  	Select Doctor:
				<select name="Doctors_id">
					<?php 
		                        include('config.php');	
					$link = mysqli_connect($server, $user, $password, $database)					
	    					or die('Error: Unable to connect: ' . mysqli_connect_error());
						
					$SQLquery = 'SELECT id,FIO FROM Doctors';
					$SQLresult = mysqli_query($link,$SQLquery);
					while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
					{
						printf('<option value=%d>%s</option>',$result[0],$result[1]);
					}
					mysqli_free_result($SQLresult);
					mysqli_close($link);
					?>
				<br>
				Result: <input type="text" name="result">
          		  	<br>
				Date: <input type="text" name="date">
          		  	<br> 

            		  	<input type="submit" value="Add new Session">
      			  </form>
			</TD>
		</TR>

 </body>
</html>