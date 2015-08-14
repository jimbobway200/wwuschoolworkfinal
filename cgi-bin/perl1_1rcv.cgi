#!/usr/bin/perl
# James Collins
# This Program will calculate your MPG of your car
use CGI ':standard';
print header;
print start_html("perl1_1rcv");
$usermiles = param('miles');
$usergas = param('gas');
print br, 'Your MPG is ';
$mpg = $usermiles/$usergas; 
printf("%.2f", $mpg);
print '</FONT>', end_html;
