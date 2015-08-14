#!/usr/bin/python
#James Collins
import sys
import re

print "Content-type: text/html\n";

pattern = '^[^\s]+[\s][-][\s][^\s]+[\s][^\s]+[\s][^\s]+[\s][\"][^\"]+[\"][\s][^\s]+[\s]([\d|-]+)';
pattern = re.compile(pattern)
total = 0
with open('log.txt','r') as f:
    line = f.readline()
    while(line):
        match = pattern.findall(line)
        if (match[0] != '-'):
            total = total + int(match[0])
        line = f.readline()
    print total
