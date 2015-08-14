#!/usr/bin/perl
# James Collins
# This Program grabs input form user and outputs 
# a result of their grade to the screen
use CGI ':standard';
print header, start_html;
print '<FORM ACTION="http://sw.cs.wwu.edu/~collinj8/cgi-bin/perl1_2rcv.cgi" METHOD=POST >';
print 'Program 1: ';
print '<INPUT TEXT TYPE="number" min="0" max="100" SIZE="15" NAME="prog1">';
print br, 'Program 2: ';
print '<INPUT TEXT TYPE="number" min="0" max="100" SIZE="15" NAME="prog2">';
print br, 'Program 3: ';
print '<INPUT TEXT TYPE="number" min="0" max="100" SIZE="15" NAME="prog3">';
print br, 'Program 4: ';
print '<INPUT TEXT TYPE="number" min="0" max="100" SIZE="15" NAME="prog4">';
print br, 'Program 5: ';
print '<INPUT TEXT TYPE="number" min="0" max="100" SIZE="15" NAME="prog5">';
print br, 'Midterm: ';
print '<INPUT TEXT TYPE="number" min="0" max="100" SIZE="15" NAME="midterm">';
print br, 'Project: ';
print '<INPUT TEXT TYPE="number" min="0" max="100" SIZE="15" NAME="project">';
print br, 'Final: ';
print '<INPUT TEXT TYPE="number" min="0" max="100" SIZE="15" NAME="final">';
print br, '<INPUT TYPE=SUBMIT VALUE="Submit">';
print '<INPUT TYPE=RESET VALUE="Reset">';
print '</FORM>', end_html;
