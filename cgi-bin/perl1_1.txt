#!/usr/bin/perl
# James Collins
# This Program will calculate your MPG of your car
use CGI ':standard';
print header, start_html;
print '<FORM ACTION="http://sw.cs.wwu.edu/~collinj8/cgi-bin/perl1_1rcv.cgi" METHOD=POST >';
print 'How many miles did you travel ';
print '<INPUT TEXT TYPE="number" min="0" SIZE="15" NAME="miles">';
print br, 'How many gallons of gas did you put in? ';
print '<INPUT TEXT TYPE="number" min="0" max="100" SIZE="15" NAME="gas">';
print br, '<INPUT TYPE=SUBMIT VALUE="Click To Submit">';
print '<INPUT TYPE=RESET VALUE="Erase and Restart">';
print '</FORM>', end_html;