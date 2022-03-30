---
permalink: /publications/
title: "Publications"
author_profile: false
---


You can also find these on <u><a href="{{ author.googlescholar }}">my Google Scholar profile</a>.</u>


{% include base_path %}

{% for post in site.publications reversed %}
  {% include archive-single-paper.html %}
{% endfor %}
