#!/usr/bin/env
#
# v1.0 for DOT
# A very simple/basic py script to gen flag.

chunks = [100, 111, 116, 95, 97, 112, 112, 95, 98, 121, 95, 48, 120, 53, 97]

print("Here is your generated cipher\n")
for chunk in chunks:
	print(chr(chunk), end="")