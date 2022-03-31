---
layout: default
permalink: /publications/
title: "Publications"
author_profile: true
---

{% include base_path %}

You can also find {{ author.googlescholar }} these on <u><a href="https://scholar.google.com/citations?user=IGApvF0AAAAJ&hl=en">my Google Scholar profile</a>.</u>


{% for post in site.publications reversed %}
  {% include archive-single-paper.html %}
{% endfor %}
