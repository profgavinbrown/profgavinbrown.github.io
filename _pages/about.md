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

<b>Contact me: </b><font id="email" style="display:inline;"><noscript><i>Please enable Javascript to view.</i></noscript></font>
<b>Office: </b>G11, Kilburn Building.

<script>
    emailScramble = new scrambledString(document.getElementById('email'),
        'emailScramble', '.se.beanwnuna.@rvchtrkoiagcm',
        [5, 18, 17, 22, 6, 20, 1, 10, 9, 14, 26, 4, 23, 25, 11, 7, 2, 15, 16, 19, 21, 27, 8, 3, 13, 0, 24, 12]);
</script>

What do I do?
======
<div style="text-align: justify;">
I like to work on methodological aspects of Machine Learning.
I find this leads to novel methods with strong foundations: e.g. we have contributed methods for assessing the <i>stability</i> (reproducibility) of variable selection algorithms; methods for hypothesis testing in challenging non-standard scenarios; and, a new theory of ensemble diversity. This has led to applications in areas such as predictive policiing, clinical trials, and design of efficient ML algorithms for plastic electronics.<br><br>

I enjoy looking for <b>connections</b> and <b>equivalencies</b> between known methods in the jungle of ML, primarily with tools from statistics and information theory, and lately I've been exploring information geometry.  <i>Everything in ML is, ultimately, a special case of something else</i>.<br><br>


<p style="padding-top: 0px; vertical-align: top; text-align: justify;">
  <a href="{{ base_path }}/howtogetyourphd/">
    <img src="https://cdn.waterstones.com/bookjackets/large/9780/1988/9780198866923.jpg"
         style="width:20%; min-width:1cm; align:center; vertical-align:top; float:right; margin-left:20px;  margin-bottom:10px; margin-top:0px;" />
  </a>
  I also enjoy thinking deeply about pedagogy, especially the nature of PhD training.
  <b>I wrote a book - a step-by-step guide to the intellectual and emotional rollercoaster of <u>Your</u> PhD</b>.
  Written in collaboration with twelve leading academics and industrialists, giving their unique perspectives on the PhD process,
  <a href="{{ base_path }}/howtogetyourphd/"><b>How to get Your PhD</b>: A Handbook for the Journey</a> is now available.
</p>

<br>
<br>
<br>

<h2>News</h2>

See my <a href="{{ base_path }}/archivednews">archived news</a> for older work, but recent activities have been...

<hr>

{% for post in site.news reversed %}
  {% include archive-single-newsitem.html %}
{% endfor %}


<br><br><br>

<a href="https://clustrmaps.com/site/1bo05" title="Visit tracker">
  <img width=5px src="//www.clustrmaps.com/map_v2.png?d=3Zlt0peoQN6NYFbwQbkDh9TnsM6OXl0rAFqoYZe9c9I&cl=ffffff">
</a>


