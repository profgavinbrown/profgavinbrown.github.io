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


<style>
#entry {
	display: flex;
	width: 100%;
	padding: 0px;
	-webkit-box-shadow: 0px 1px 0px 0px rgba(0,0,0,0.75); padding:10px; margin:10px
}
#wide {
	flex: 0 0 90%;
	padding: 0px;
}
#left {
	flex: 0 0 55%;
	padding: 00px;
}
#right {
	flex: 1;
	text-align:center;
	padding: 0px;
}


#wrapright {
	float: right;
	padding-left: 1px;
	padding-bottom: 10px;
}
#padded {
	padding-left: 0px;
	padding-bottom: 20px;
}

<div id="entry">
	<div id="wide">
	<b>NEWS</b> (June 2020) 
		Very pleased to announce a new paper in ECML 2020 ... ``To Ensemble or Not Ensemble: When does End-To-End Training Fail?'' <a href='http://www.cs.man.ac.uk/~gbrown/publications/ecml2020webb.pdf'>[PDF]</a>, with <a href='http://www.cs.man.ac.uk/~gbrown/publications/ecml2020webb_supp.pdf'>the supplementary PDF</a> available.
	</div>
</div>
