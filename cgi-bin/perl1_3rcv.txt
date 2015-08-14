#!/usr/bin/perl
use CGI ':standard';
print header;
print start_html("Perl1_3rcv");
$country = param('country');
$exchangerate = param('exchangerate');
$moneyspent = param('moneyspent');
$gasbought = param('gasbought');
$newmoneyspent = $moneyspent * $exchangerate;
#print "Country=@country";

if ($country eq 'USAToCanada')
{
   # print "$gasbought";
   $newspent = $moneyspent * $exchangerate;
   $liters = $gasbought * 3.785411784;
   print "$moneyspent US = "; printf("%.2f", $newspent); print " Canadian";
   print br, "$gasbought Gallons = "; printf("%.2f", $liters); print " liters";   	
}
else # (@country eq 'CanadaToUSA')
{
  $newspent = $moneyspent * 1 / $exchangerate;
  $gallons = $gasbought * 1 / 3.785411784;	
  print "$moneyspent CAD = "; printf("%.2f", $newspent); print " USD";
  print br, "$gasbought Liters = "; printf("%.2f", $gallons); print " gallons";   	
}

# print "Got Eat=@eat", br, "Comments=$comments </font>", end_html;
