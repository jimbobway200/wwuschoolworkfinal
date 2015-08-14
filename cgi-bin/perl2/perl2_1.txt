#!/usr/bin/perl
use CGI ':standard';
print header, start_html("Perl2_1");
print '<form action="perl2_1rcv.cgi" method="post">';

print '<INPUT TEXT TYPE="text" min="0" SIZE="15" NAME="InputWebsite"';

print br, '<input type=submit value="Submit">';
print '<input type=reset value="Erase Answers">';
print end_form, end_html; 