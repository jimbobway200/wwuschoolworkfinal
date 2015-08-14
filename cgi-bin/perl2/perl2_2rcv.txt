#!/usr/bin/perl 
use CGI ':standard';
print header;
print start_html('Quiz Results');
$questionResponse1 = param('question1');
$questionResponse2 = param('question2');
$questionResponse3 = param('question3');
$questionResponse4 = param('question4');
$questionResponse5 = param('question5');

# Header
print '<h1>Quiz Results</h1>';

#Print Quiz Responses and Answers
print br, "Question 1) User Answer: $questionResponse1   Correct Answer: B";
print br, "Question 2) User Answer: $questionResponse2   Correct Answer: C";
print br, "Question 3) User Answer: $questionResponse3   Correct Answer: D";
print br, "Question 4) User Answer: $questionResponse4   Correct Answer: C";
print br, "Question 5) User Answer: $questionResponse5   Correct Answer: A";
print br;

$NumberCorrect = 0;
if ($questionResponse1 eq "B")
{
	$NumberCorrect = $NumberCorrect + 1;
}
if ($questionResponse2 eq "C")
{
	$NumberCorrect = $NumberCorrect + 1;
}
if ($questionResponse3 eq "D")
{
	$NumberCorrect = $NumberCorrect + 1;
}
if ($questionResponse4 eq "C")
{
	$NumberCorrect = $NumberCorrect + 1;
}
if ($questionResponse5 eq "A")
{
	$NumberCorrect = $NumberCorrect + 1;
}
print br;

print 'Number of Questions Correct: ';
print $NumberCorrect;
print br;

print 'Grade Percentage: ';
if ($NumberCorrect eq 1)
{
	print '20%';
}
if ($NumberCorrect eq 2)
{
	print '40%';
}
if ($NumberCorrect eq 3)
{
	print '60%';
}
if ($NumberCorrect eq 4)
{
	print '80%';
}
if ($NumberCorrect eq 5)
{
	print '100%';
}


