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

<!-- jQuery: Grab Google CDN jQuery. fall back to local if necessary -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script>!window.jQuery && document.write('<script src="raptorize/jquery-1.4.1.min.js"><\/script>')</script>
	
<!-- The raptorize file  -->
<script src="raptorize/jquery.raptorize.1.0.js"></script>
		
<a href="#" class="raptorizeMe">Please don't click here.</a>	
