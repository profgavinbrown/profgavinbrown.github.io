
plot 'stats.csv' using '%lf ,   %lf' with boxes
set xrange[1950:2010]
set nokey
set ylabel 'Number of publications'
set xlabel 'Year'
set size 0.8,0.4
unset border

set terminal png small transparent color xffffff
set output 'stats.png'

replot
