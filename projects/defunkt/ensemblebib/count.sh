#!/bin/sh
# Illustrates implementing a counter with a while loop
# Notice how we increment the counter with expr in backquotes
i="1600"
while [ $i -le 2010 ]
do
	echo -n "$i , "
	#cat lcs.bib | grep year | grep $i | wc -l
	cat ensemblelearning.bib | grep year | grep $i | wc -l

	i=`expr $i + 1`
done

