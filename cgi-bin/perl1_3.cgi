#!/usr/bin/perl
# James Collins
# This program converts gas prices for US and Canada
use CGI ':standard';
print header, start_html('Perl1_3');
print '<form action="http://sw.cs.wwu.edu/~collinj8/cgi-bin/perl1_3rcv.cgi" method="get">';
print 'Which conversion would you like to do? <br>';
print '<input type="radio" NAME="country" oninput="exchangebool()" value="USAToCanada"> USA -> Canada?';
print br, '<input type="radio" NAME="country" value="CanadaToUSA"> Canada -> USA?';
print br, br, 'Enter Exchange Rate';
print br, '1 USD =  ';
print '<INPUT TEXT TYPE="number" min="0" step="any" SIZE="15" NAME="exchangerate">';
print 'CAD';
print br, br, 'How much money did you spend on gas?';
print br, 'Enter either USD or CAD';
print '<INPUT TEXT TYPE="number" min="0" step="any" SIZE="15" NAME="moneyspent">';
print br, br, 'How much gas did you buy?';
print br, 'Enter quantity in either gallons or liters of gas bought';
print '<INPUT TEXT TYPE="number" min="0" step="any" SIZE="15" NAME="gasbought">';
print br, '<input type=submit value="Click To Submit">';
print '<input type=reset value="Erase and Restart">';
print '</form>';
print end_html;
