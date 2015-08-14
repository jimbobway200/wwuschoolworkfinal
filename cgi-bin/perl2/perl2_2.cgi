#!/usr/bin/perl
use CGI ':standard';
print header, start_html("Perl2_2");
print '<form action="perl2_2rcv.cgi" method="post">';

print 'Math Quiz!';
print br;

print br, 'Question 1: What is the Square Root of 25?';
print br, '<input type="radio" name="question1" value="A" > A) 4';
print br, '<input type="radio" name="question1" value="B" > B) 5';
print br, '<input type="radio" name="question1" value="C" > C) 5';
print br, '<input type="radio" name="question1" value="D" > D) 7';
print br, '<input type="radio" name="question1" value="E" > E) Who Cares!';
print br;

print br, 'Question 2: What is 4 times 4?';
print br, '<input type="radio" name="question2" value="A" > A) 0';
print br, '<input type="radio" name="question2" value="B" > B) 4';
print br, '<input type="radio" name="question2" value="C" > C) 16';
print br, '<input type="radio" name="question2" value="D" > D) 24';
print br, '<input type="radio" name="question2" value="E" > E) None of the Above';
print br;

print br, 'Question 3: What is 4 - 4 * 4?';
print br, '<input type="radio" name="question3" value="A" > A) 0';
print br, '<input type="radio" name="question3" value="B" > B) 12';
print br, '<input type="radio" name="question3" value="C" > C) 16';
print br, '<input type="radio" name="question3" value="D" > D) -12';
print br, '<input type="radio" name="question3" value="E" > E) -16';
print br;

print br, 'Question 4: What is 8 times 8 divided by 2?';
print br, '<input type="radio" name="question4" value="A" > A) 0';
print br, '<input type="radio" name="question4" value="B" > B) 16';
print br, '<input type="radio" name="question4" value="C" > C) 32';
print br, '<input type="radio" name="question4" value="D" > D) 64';
print br, '<input type="radio" name="question4" value="E" > E) 114';
print br;

print br, 'Question 1: What is 0 times 0?';
print br, '<input type="radio" name="question5" value="A" > A) 0';
print br, '<input type="radio" name="question5" value="B" > B) 1';
print br, '<input type="radio" name="question5" value="C" > C) 50';
print br, '<input type="radio" name="question5" value="D" > D) Infinity';
print br, '<input type="radio" name="question5" value="F" > E) None of the Above';
print br;




print br, '<input type=submit value="Submit Quiz">';
print '<input type=reset value="Erase Answers">';
print end_form, end_html; 