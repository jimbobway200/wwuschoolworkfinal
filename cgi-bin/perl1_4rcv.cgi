#!/usr/local/bin/perl 
use CGI ":standard";
# use Text::TabularDisplay;
# print header;
# print start_html('Check Password');
$password=param('passwd');
if ( $password eq 'bozo' ) { 
print header;
print start_html('Check Password');
print '
<style>
table, th, td {
    border: 1px solid black;
}
</style>';

 print '<table style="width:25%">
  <tr>
    <td>Integer</td>
    <td>Integer Squared</td>
  </tr>
  <tr>
    <td>1</td>
    <td>1</td>
  </tr>
    <tr>
    <td>2</td>
    <td>4</td>
  </tr>
  <tr>
    <td>3</td>
    <td>9</td>
  </tr>
  <tr>
    <td>4</td>
    <td>16</td>
  </tr>
  <tr>
    <td>5</td>
    <td>25</td>
  </tr>
  <tr>
    <td>6</td>
    <td>36</td>
  </tr>
  <tr>
    <td>7</td>
    <td>49</td>
  </tr>
  <tr>
    <td>8</td>
    <td>64</td>
  </tr>
  <tr>
    <td>9</td>
    <td>81</td>
  </tr>
  <tr>
    <td>10</td>
    <td>100</td>
  </tr>
</table> ';
	
} else {
	do 'perl1_4.cgi';
 	print 'Sorry you do not know the password';
}
print end_html;
