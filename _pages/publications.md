---
permalink: /publications/
title: "Publications."
author_profile: true
---

{% include base_path %}

You can also find these on <a href="https://scholar.google.com/citations?user=IGApvF0AAAAJ&hl=en">my Google Scholar profile</a>.

<hr>

{% for year in site.publications reversed %}
  {% for post in site.publications.{{ year }} reversed %}
     {% include archive-single-paper.html %}
  {% endfor %}
{% endfor %}

