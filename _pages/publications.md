---
permalink: /publications/
title: "Publications."
author_profile: true
---

{% include base_path %}

You can also find these on <a href="https://scholar.google.com/citations?user=IGApvF0AAAAJ&hl=en">my Google Scholar profile</a>.

<hr>

IS THIS OK OK OK HERE ????

{% for whichyear in (2006..2010) %}

  <h2>{{ whichyear }}</h2>
  
  {% assign myCondition = "item.path contains '" | append: "2008" | append: "'" %}

  {{ myCondition }}
  
  {% assign subfolder = site.publications | where_exp: "item" , myCondition %}
  
  {% for post in subfolder reversed %}
    {% include archive-single-paper.html %}
  {% endfor %}

{% endfor %}

  


<h1> old one </h1>

{% for post in site.publications.{{ whichyear }} reversed %}
  
     {% include archive-single-paper.html %}
  
{% endfor %}

