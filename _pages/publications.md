---
permalink: /publications/
title: "Publications."
author_profile: true
---

{% include base_path %}

You can also find these on <a href="https://scholar.google.com/citations?user=IGApvF0AAAAJ&hl=en">my Google Scholar profile</a>.

<hr>
THIS IS HERE.

{% for whichyear in site.publications reversed %}

  <h2>{{ whichyear }}</h2>
  
  {% for post in site.publications.{{ whichyear }} reversed %}
  
     {% include archive-single-paper.html %}
  
  {% endfor %}
  
{% endfor %}

