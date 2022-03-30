---
permalink: /publications/
title: "Publications"
author_profile: false
---

{% if author.googlescholar %}
  You can find most if not all of these on <u><a href="{{author.googlescholar}}">my Google Scholar profile</a>.</u>
{% endif %}

{% include base_path %}

{% for post in site.publications reversed %}
  {% include archive-single-paper.html %}
{% endfor %}
