---
permalink: /publications/
title: "Publications."
author_profile: true
---

{% include base_path %}

You can also find these on <a href="https://scholar.google.com/citations?user=IGApvF0AAAAJ&hl=en">my Google Scholar profile</a>.

<hr>

{% for whichyear in (2001..2022) reversed %}
  
   {% assign myCondition = "item.path contains '" | append: whichyear | append: "'" %}  
  
   {% assign thisYearsPapers = site.publications | where_exp: "item" , myCondition %}
  
   Yes 

   {% capture howMany %}{{ thisYearsPapers | size }}{% endcapture %}
   
   {{ myCondition }}
 
   {% if howMany contains "0" %}

   Yes 2010 yes
 
  {% endif %}

   No no no

   {% for post in thisYearsPapers reversed %}
        {% include archive-single-paper.html %}
   {% endfor %}

  
   
{% endfor %}



