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

News
======
See my <a href="{{ base_path }}/newsarchive">archived news page</a> for older work, but my recent activities have been...

{% for post in site.news reversed %}
  {% include archive-single-newsitem.html %}
{% endfor %}






