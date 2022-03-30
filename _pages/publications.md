---
permalink: /publications/
title: "Publications"
author_profile: true
---

{% include base_path %}

{{ author.name }} is the author here.
You can also find these on <u><a href="{{ author.googlescholar }}">my Google Scholar profile</a>.</u>

{% for post in site.publications reversed %}
  {% include archive-single-paper.html %}
{% endfor %}
