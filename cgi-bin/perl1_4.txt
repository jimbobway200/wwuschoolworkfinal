#!/usr/bin/perl
# James Collins
# This program will generate a table of integers with
# their matching squares if the correct password is entered
use CGI ':standard';
print header, start_html('Perl1_4');
print '<form action="http://sw.cs.wwu.edu/~collinj8/cgi-bin/perl1_4rcv.cgi" method="get">';
print 'Enter the correct password to continue';
print br, '<input type="password" size="15" name="passwd">';
print br, '<input type=SUBMIT VALUE="Click To Submit">';
print '<input type=RESET VALUE="Erase and Restart">';
print '</form>';
print end_html;
