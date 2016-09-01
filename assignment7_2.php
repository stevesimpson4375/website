<!DOCTYPE html>

<!--
Steve Simpson 21066092
2/14/2015
CIS337 M308
Assignment 7.2, a php page that writes to a file and then retrieves and prints it
-->


<html lang="en">
	<head>
		<title>TV Survey Entered Info</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="styles/mystyle.css">
	</head>
	<body>
	
		<div id="container">
	
			<nav class='nav'>	
				<a href='index.html'>	  
					Back to Index		
				</a>
				
				<br />
				
				<a href='assignment7_2.html'>
					Back to Survey page
				</a>
			</nav>
			
			<?php
			
				//These assign data from html page to variables
				$iTV = $_POST['iTV'];
				$age = $_POST['age'];
				$addicted = $_POST['addicted'];
				$myDevice = $_POST['myDevice'];
				$Q1 = $_POST['Q1'];
				$Q2 = $_POST['Q2'];
				$Q3 = $_POST['Q3'];
				$Q4 = $_POST['Q4'];

				//This opens a text file and writes the variables to it
				$fileName = 'c:\inetpub\wwwroot\logfiles\stevesimpsonas7.txt';
				$fileWrite = fopen($fileName, 'a') or die ("Cannot Open File");
				fwrite($fileWrite, "$iTV\n");
				fwrite($fileWrite, "$age\n");
				fwrite($fileWrite, "$addicted\n");
				fwrite($fileWrite, "$myDevice\n");
				fwrite($fileWrite, "$Q1\n");
				fwrite($fileWrite, "$Q2\n");
				fwrite($fileWrite, "$Q3\n");
				fwrite($fileWrite, "$Q4\n");

				//The file is closed after the variables are written to it
				fclose($fileWrite);

				//This code opens the file
				$fileRead = fopen($fileName, 'r') or die ("Cannot Open File");
				$output = fgets($fileRead);

				//This while loop prints all of the contents of the file
				while(!feof($fileRead)){
					print("$output <br />");
					$output = fgets($fileRead);
				}

				fclose($fileRead);
				
				
				//This code can be used to clear the file. It is block
				//commented out on purpose.
/* 				$file = fopen($fileName, "a+");
				ftruncate($file,0);
				fclose($file); */
				
			?>
		
			<nav class='nav'>	
				<a href='index.html'>	  
					Back to Index		
				</a>
				
				<br />
				
				<a href='assignment7_2.html'>
					Back to Survey page
				</a>
			</nav>
		
		</div>
	</body>
</html>