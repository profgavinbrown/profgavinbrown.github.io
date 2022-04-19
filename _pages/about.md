---
permalink: /
title: "Hello."
excerpt: "About me"
author_profile: true
redirect_from: 
  - /about/
  - /about.html
---

I am Professor of Machine Learning, in the Department of Computer Science.
Contact: <b>firstname.secondname AT manchester.ac.uk</b>

What do I do?
======
<div style="text-align: justify;">
I enjoy working on foundational and methodological aspects of Machine Learning.
I have contributed to the understanding of "feature selection" algorithms, with particularly nice results on information theoretic methods, and on the stability of algorithms.
I have also contributed to the area of "ensemble" learning methods, in particular the study of diversity, and cost-sensitivity.
I have applied these ideas in, e.g. bioinformatics, clinical trial data, and data from predictive policing.
Or, you may prefer <a href="{{ base_path }}/nojargon">an explanation without all the technical jargon</a>.
</div><br>

<div style="width:70%;display:inline-block;vertical-align: top;text-align: justify;">I also enjoy thinking about pedagogy, especially in regard of research practices.  I wrote a book - a step-by-step guide to the intellectual and emotional rollercoaster of Your PhD. Written in collaboration with twelve leading academics and industrialists, giving their unique perspectives on the PhD process, <a href="https://www.amazon.co.uk/dp/0198866925/"><b>How to get Your PhD</b>: A Handbook for the Journey</a> is now available, with <a href="http://bit.ly/2ZXNc2y">a 30 page preview on Google books</a>. <a href="https://profgavinbrown.github.io/news/March2021-book/" rel="permalink"></a></div>
<div style="padding-left:20px;width:30%;display:inline-block; min-width:2.2cm; align: center;vertical-align: middle;"> <img src="https://cdn.waterstones.com/bookjackets/large/9780/1988/9780198866923.jpg" style="" /></div><hr />


News
======
See my <a href="{{ base_path }}/newsarchive">archived news page</a> for older work, but some recent activities have been...

<hr>

{% for post in site.news reversed %}
  {% include archive-single-newsitem.html %}
{% endfor %}






