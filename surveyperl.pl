#!/usr/bin/perl
use CGI ':standard';
use warnings;

#Steve Simpson 21066092
#1/29/2015
#CIS337 M308
#Assignment 5.2, This Perl file writes the entered values to file and displays that files contents



#Begin HTML
print header;
print start_html ("Receive Form Post");

CGI::ReadParse(%in);

#Assign input to variables
my $iGame = param('iGame');
my $age = param('age');
my $iThinkIGame = param('iThinkIGame');
my $myDevice = param('myDevice');
my $Q1 = param('Q1');
my $Q2 = param('Q2');
my $Q3 = param('Q3');
my $Q4 = param('Q4');

#Opens file, creates new if it does not exist. 
open (my $file, '>>', 'c:\inetpub\wwwroot\logfiles\simpsonSurvey.txt') or die "Couldn't open file: $!";

#This prints the entered information to the file
print $file "$iGame\t";
print $file "$age\t";
print $file "$iThinkIGame\t";
print $file "$myDevice\t";
print $file "$Q1\t";
print $file "$Q2\t";
print $file "$Q3\t";
print $file "$Q4\t";


close ($file);

#Begin output
print "<h2 class='header' >You entered:</h2>";


#Open file for read only and notifies if the file was not able to be opened
open ($file, '<', 'c:\inetpub\wwwroot\logfiles\simpsonSurvey.txt') or die "Couldn't open file: $!";

#Print the last entered information
print "<h3>$iGame</h3>";
print "<h3>$age</h3>";
print "<h3>$iThinkIGame</h3>";
print "<h3>$myDevice</h3>";
print "<h3>$Q1</h3>";
print "<h3>$Q2</h3>";
print "<h3>$Q3</h3>";
print "<h3>$Q4</h3>";

print "<br /";


#This section prints all of the information stored in the file
print "<h2 class='header'>This file also contains:</h2><br />";

print "<table>";

#This while loop iterates through the file's contents and prints it to a table
while (my $line = <$file>)
{

	print join("<tr><td>", split("\t", $line));

	print "</td></tr>";

}
print "</table>";
close ($file);
print end_html;