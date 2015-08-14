#!/usr/bin/perl 
use CGI ':standard';
print header;
print start_html('Perl2_3rcv');
$UserFileName = param('InputFileName');
# print $UserFileName;
# print br;

# Get Proper File Name
$subFileName = substr($UserFileName, 0, 1);
# print $subFileName;
# print br;
if ($subFileName eq "/")
{
# print 'hi';
}
else
{
	# $UserFileName = "\"$UserFileName\"";
	# print "Added quotes: $UserFileName";
}

open $fh, '<', $UserFileName or die "failed to open";

$count = 0;
$substr = "are";
$are_count = 0;
$startIendN = 0;
$containsPandD = 0;
$containsNumber = 0;
$NotcontainsPandY = 0;

while ($line = <$fh>)
{
	chomp $line;
	foreach $str (split /\s+/, $line) 
	{
		# word count		
		# $count{$str}++;
		$count++;
		
		# "are" count
		if (index($str, $substr) != -1)
		{
			$are_count ++;			
		}	
		
		# start with 'i' and end with 'n'
		if ($str =~ /^[i][A-Za-z0-9]*(?:_[n]+)*$/)
		{
			$startIendN++;
		}
		
		# contains 'p' and end with 'd'
		if ($str =~ /p[A-Za-z0-9]+d/)
		{
			$containsPandD++;
		}
		
		# contains a number in word
		if ($str =~ /[0-9]/)
		{
			$containsNumber++;
		}
		# contains 'p' and end with 'd'
		if ($str =~ /^[^p-y]+$/)
		{
			$NotcontainsPandY++;
		}
	}
	
}


print 'Word Count: ';
print $count;
print br;
# foreach $str (sort keys %count) 
# {
# printf "%-31s %s\n", $str, $count{$str};
# print br;
# }

print br, '"Are" Count: ', $are_count;

print br, br, "Count of Words that start with 'i' and end with 'n': ";
print $startIendN;

print br, br, "Count of words that contain a 'p' and are followed by a 'd': ";
print $containsPandD;

print br, br, "Count of words that contain numbers: ";
print $containsNumber;

print br, br, "Count of words that does not contains 'p' through 'y': ";
print $NotcontainsPandY;


print end_html;