#!/usr/bin/perl
# James Collins
use CGI ':standard';
print header, start_html('Prog5_2');
print '<form action="http://sw.cs.wwu.edu/~collinj8/Python/prog5_2RCV.cgi" method="PUSH">';
print 'Which website would you like to parse? <br>';
print '<input type="text" NAME="url">';
print br, br, 'Enter tag';
print '<INPUT TYPE="text" NAME="tag">';
print br, '<input type=submit value="Click To Submit">';
print '<input type=reset value="Erase and Restart">';
print '</form>';
print end_html;
