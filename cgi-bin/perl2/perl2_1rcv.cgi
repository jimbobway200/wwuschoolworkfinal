#!/usr/bin/perl 
use CGI ':standard';
use LWP::Simple;
print header;
print start_html('Perl2_1rcv');
$UserWebsite = param('InputWebsite');
print 'URLS';
print br;

$sites = get $UserWebsite;

# Get Proper File Name
# $subFileName = substr($UserFileName, 0, 1);
# print $subFileName;
# print br;
# if ($subFileName eq "/")
# {
# print 'hi';
# }
# else
# {
# 	# $UserFileName = "\"$UserFileName\"";
# 	# print "Added quotes: $UserFileName";
# }




@urlMatches = $sites =~ /"(http:\/\/[^"]*)"/g;
$count = 1;
foreach $itt (@urlMatches) 
{
	print "URL $count : ", '<a href="', $itt, '">', $itt, '</a>';
	print br;
	$count ++;
	
}

print 'GIF matches';
print br;
# @urlMatches2 = $sites =~ /(http:\/\/*\.(gif))/g;
# @urlMatches2 = $sites =~ /^[http:\/\/][A-Za-z0-9]+[\.[gif]]/g;
@urlMatches2 = $sites =~ /([\w]+\.gif)/gi;


$count = 1;
foreach $itt (@urlMatches2) 
{
	print "GIF $count : ", $itt;
	print br;
	$count ++;	
}




# print 'here';
$count = 0;


print end_html;
