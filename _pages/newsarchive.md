---
permalink: /newsarchive/
title: "News (archived)"
excerpt: "My old news."
author_profile: true
---

{% include base_path %}


{% for post in site.newsarchive reversed %}
  {% include archive-single-newsitem.html %}
{% endfor %}

<div id="entry">
	<div id="wide">
	<b>NEWS</b> (June 2020) 
		Very pleased to announce a new paper in ECML 2020 ... ``To Ensemble or Not Ensemble: When does End-To-End Training Fail?'' <a href='http://www.cs.man.ac.uk/~gbrown/publications/ecml2020webb.pdf'>[PDF]</a>, with <a href='http://www.cs.man.ac.uk/~gbrown/publications/ecml2020webb_supp.pdf'>the supplementary PDF</a> available.
	</div>
</div>
