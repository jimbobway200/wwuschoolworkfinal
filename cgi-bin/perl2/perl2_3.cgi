#!/usr/bin/perl
use CGI ':standard';
print header, start_html("Perl2_3");
print '<form action="perl2_3rcv.cgi" method="post">';

print '<INPUT TEXT TYPE="text" min="0" SIZE="15" NAME="InputFileName">';




print br, '<input type=submit value="Submit">';
print '<input type=reset value="Erase Answers">';
print end_form, end_html; 