#!/usr/bin/python
# James Collins
print "Content-type: text/html\n"

print """
<html>

<head>
  <title>form1</title>
  <meta name='python' content='python examples' />
</head>

<body>


"""
for i in range(1,10):

	print '<img src="http://sw.cs.wwu.edu/~s_granier/data/cs342/prog5/images/img0' + str(i) + '.jpg"'
	print '<br>'
	input_file = 'img0' + str(i) + '.txt'
	# print input_file
	f = open(input_file, 'r')
	string = f.read()
	print string
	print '<br><br>'

for i in range(1,10):

	print '<img src="http://sw.cs.wwu.edu/~s_granier/data/cs342/prog5/images/img1' + str(i) + '.jpg"'
	print '<br>'
	input_file = 'img1' + str(i) + '.txt'
	# print input_file
	f = open(input_file, 'r')
	string = f.read()
	print string
	print '<br><br>'

print '<img src="http://sw.cs.wwu.edu/~s_granier/data/cs342/prog5/images/img20.jpg"'
print '<br>'
input_file = 'img20.txt'
# print input_file
f = open(input_file, 'r')
string = f.read()
print string
print '<br><br>'

print """
</table>


</body>
</html>
"""
