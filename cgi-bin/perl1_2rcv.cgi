#!/usr/bin/perl
# James Collins
# This Program grabs input form user and outputs 
# a result of their grade to the screen
use CGI ':standard';
print header;
print start_html("perl1_2rcv");
$program1 = param('prog1');
$program2 = param('prog2');
$program3 = param('prog3');
$program4 = param('prog4');
$program5 = param('prog5');
$project = param('project');
$midterm = param('midterm');
$final = param('final');

print br, 'Your Grade is ';
$programgrade = ($program1+$program2+$program3+$program4+$program5) / 5 * 0.4;
$project = $project * 0.2;
$midterm = $midterm * 0.2;
$final = $final * 0.2;
$grade = $final + $midterm + $programgrade + $project;
if ($grade >= 90)
{
	print 'A';
}
elsif (($grade <= 90) && ($grade >= 80))
{
 	print 'B';
}
elsif (($grade <= 80) && ($grade >= 70))
{
 	print 'C';
}
elsif (($grade <= 70) && ($grade >= 60))
{
	print 'D';
}
else
{
	print 'F';
}
# print br, "$grade";
print '</FONT>', end_html;