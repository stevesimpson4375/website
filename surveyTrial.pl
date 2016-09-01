#!/usr/bin/perl
use CGI ':standard';
use warnings;


#Begin HTML
print header;
# print start_html({-title=>'Survey Results'});
print start_html ("Receive Form Post");

CGI::ReadParse(%in);

#Assign input to variables
my $sentence = param('sentence');


#Opens file, creates new if it does not exist. This uses >>>, which should delete the contents of the file if there are any
open (my $file, '>>', 'c:\inetpub\wwwroot\logfiles\simpsonSurvey.txt') or die "Couldn't open file: $!";

#Print first the trial sentence
print $file "$sentence\t";


close ($file);

#Begin output
print "<h2>This is from the file</h2>";


#Open file for read only and notifies if the file was not able to be opened
open ($file, '<', 'c:\inetpub\wwwroot\logfiles\simpsonSurvey.txt') or die "Couldn't open file: $!";

print "<h3>$sentence</h3>";


close ($file);
print end_html;