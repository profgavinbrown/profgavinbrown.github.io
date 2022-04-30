---
permalink: /
title: "Hello."
excerpt: "About me"
author_profile: true
redirect_from: 
  - /about/
  - /about.html
---

I am Professor of Machine Learning, in the Department of Computer Science.<br>

What do I do?
======
<div style="text-align: justify;">
I enjoy working on foundational and methodological aspects of Machine Learning.
I enjoy looking for <b>connections</b> and <b>equivalencies</b> between known methods in the jungle of ML, mainly with tools from statistics and information theory.
I find this gives me paths to create new methods, as well as deeply understanding existing ones.
I have also applied work, in e.g. bioinformatics, clinical trials, and predictive policing.
You may prefer some details <a href="{{ base_path }}/nojargon">without all the technical jargon</a>.<br><br>
</div>

<p style="padding-top: 0px; vertical-align: top; text-align: justify;">
  <a href="https://www.amazon.co.uk/dp/0198866925/">
    <img src="https://cdn.waterstones.com/bookjackets/large/9780/1988/9780198866923.jpg"
         style="width:25%; min-width:3cm; align:center; vertical-align:top; float:right; margin-left:20px;  margin-bottom:10px; margin-top:0px;" />
  </a>
  I enjoy thinking deeply about pedagogy, especially the nature of PhD training.
  <b>I wrote a book - a step-by-step guide to the intellectual and emotional rollercoaster of <u>Your</u> PhD</b>.
  Written in collaboration with twelve leading academics and industrialists, giving their unique perspectives on the PhD process,
  <a href="https://www.amazon.co.uk/dp/0198866925/"><b>How to get Your PhD</b>: A Handbook for the Journey</a> is now available, with
  <a href="https://www.google.co.uk/books/edition/How_to_Get_Your_PhD/nX4fEAAAQBAJ?hl=en&gbpv=0">a preview on Google books</a>.
</p>

<br>
Contact me : <b>firstname.secondname AT manchester.ac.uk</b>
<br>
<br>
<br>

News
===

See my <a href="{{ base_path }}/archivednews">archived news</a> for older work, but recent activities have been...

<hr>

{% for post in site.news reversed %}
  {% include archive-single-newsitem.html %}
{% endfor %}


<br><br><br>

<a href="https://clustrmaps.com/site/1bo05" title="Visit tracker">
  <img width=5px src="//www.clustrmaps.com/map_v2.png?d=3Zlt0peoQN6NYFbwQbkDh9TnsM6OXl0rAFqoYZe9c9I&cl=ffffff">
</a>


