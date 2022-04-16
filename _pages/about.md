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


What do I do?
======
<div style="text-align: justify;">
I enjoy working on foundational and methodological aspects of Machine Learning.
I have contributed to the understanding of "feature selection" algorithms, with particularly nice results on information theoretic methods, and on the stability of algorithms.
I have also contributed to the area of "ensemble" learning methods, in particular the study of diversity, and cost-sensitivity.
I have applied these ideas in, e.g. bioinformatics, clinical trial data, and data from predictive policing.
Or, you may prefer <a href="{{ base_path }}/nojargon">an explanation without all the technical jargon</a>.
</div><br>

I'm also keen on teaching - I wrote a book....

<blockquote class="twitter-tweet" data-dnt="true" data-theme="light"><p lang="en" dir="ltr">Announcing &quot;How to get Your PhD&quot; <a href="https://t.co/Q9dTmWQ9iF">https://t.co/Q9dTmWQ9iF</a> my new book with <a href="https://twitter.com/OUPAcademic?ref_src=twsrc%5Etfw">@OUPAcademic</a>, a step-by-step guide to the intellectual &amp; emotional rollercoaster of Your PhD. Part 1 is by me. Part 2 features unique contributions from 12 diverse &amp; distinguished minds... (thread: 1/14)</p>&mdash; Gavin (@profgavinbrown) <a href="https://twitter.com/profgavinbrown/status/1366390596756250628?ref_src=twsrc%5Etfw">March 1, 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>


News
======
See my <a href="{{ base_path }}/newsarchive">archived news page</a> for older work, but some recent activities have been...

<hr>

{% for post in site.news reversed %}
  {% include archive-single-newsitem.html %}
{% endfor %}






