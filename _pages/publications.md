---
permalink: /publications/
title: "Publications"
author_profile: true
---

{% include base_path %}

You can also find these on <a href="https://scholar.google.com/citations?user=IGApvF0AAAAJ&hl=en">my Google Scholar profile</a>.


<small>
  
{% for post in site.publications reversed %}
  {% include archive-single-paper.html %}
{% endfor %}
