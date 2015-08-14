#!/usr/local/bin/python
# James Collins
import urllib
import cgi
from xml.dom import minidom

print "Content-type: text/html\n"
print

form = cgi.FieldStorage()
url = form.getvalue("url","(bummer)")
print url
tag = form.getvalue("tag","(bummer)")
print tag
usock = urllib.urlopen(url)
string = usock.read()
xmldoc = minidom.parseString(string) #at this point you have an xml document
itemlist = xmldoc.getElementsByTagName(tag)
for s in itemlist:
    for child in s.childNodes:
        if (child.nodeType == child.TEXT_NODE):
            print(child.nodeValue + " ").encode('ascii','ignore')
            print '<br><br>'
