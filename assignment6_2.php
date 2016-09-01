<!DOCTYPE html>

<!--
Steve Simpson 21066092
2/6/2015
CIS337 M308
Assignment 6.2, a php page that displays the information entered
-->


<html lang="en">
	<head>
		<title>Contact Info</title>
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
				
				<a href='assignment6_2.html'>
					Back to Contact Information page
				</a>
			</nav>
		<?php
			//empty string to concatenate error messages
			$error_string = "";

			//This if statement confirms that the zip code is entered correctly
			if (preg_match("/\d{5}\-\d{4}/", $_POST['zip']) == false)
				$error_string .= "<li>The zip code must be in the following format: 'ddddd-dddd'</li>";

			//This if statement confirms that the phone number is entered correctly
			if (preg_match("/\d{3}\-\d{3}\-\d{4}/", $_POST['phone']) == false)
				$error_string .= "<li>Phone number must be in the following format: 'ddd-ddd-dddd'</li>";

			//This if statement prints the error string if it contains any text, which would mean that there is an error
			if ($error_string != "")
				print "<h2>Please Correct the Following Errors</h2><p><ul>$error_string</ul></p>";
			
			//If there are no errors, the else statement uses an awesome foreach that
			//eliminates the need to assign the variables from the xhtml page to anything
			//from :http://stackoverflow.com/questions/3489387/php-post-print-variable-name-along-with-value
			else {
				print "<h2>Your Contact Info:</h2><table>";
				foreach ($_POST as $key => $value) {

					print "<tr><td><b>$key: </b></td><td>$value</td></tr>";
				}
				print "</table>";
			}
		?>
		
			<nav class='nav'>	
				<a href='index.html'>	  
					Back to Index		
				</a>
				
				<br />
				
				<a href='assignment6_2.html'>
					Back to Contact Information page
				</a>
			</nav>
		
		</div>
	</body>
</html>