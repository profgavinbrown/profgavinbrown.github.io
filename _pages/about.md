---
permalink: /
title: "Hello."
excerpt: "About me"
author_profile: true
redirect_from: 
  - /about/
  - /about.html
---

I am Professor of Machine Learning, in the Department of Computer Science.

<b>Contact me: </b><font id="email" style="display:inline;"><noscript><i>Please enable Javascript to view.</i></noscript></font><br>
<b>Office: </b>G11, Kilburn Building.

<script>
    emailScramble = new scrambledString(document.getElementById('email'),
        'emailScramble', '.se.beanwnuna.@rvchtrkoiagcm',
        [5, 18, 17, 22, 6, 20, 1, 10, 9, 14, 26, 4, 23, 25, 11, 7, 2, 15, 16, 19, 21, 27, 8, 3, 13, 0, 24, 12]);
</script>

<style>
/* customizable snowflake styling */
.snowflake {
  color: #fff;
  font-size: 5em;
  font-family: Arial, sans-serif;
  text-shadow: 0 0 5px #000;
}

.snowflake,.snowflake .inner{animation-iteration-count:infinite;animation-play-state:running}@keyframes snowflakes-fall{0%{transform:translateY(0)}100%{transform:translateY(110vh)}}@keyframes snowflakes-shake{0%,100%{transform:translateX(0)}50%{transform:translateX(80px)}}.snowflake{position:fixed;top:-10%;z-index:9999;-webkit-user-select:none;user-select:none;cursor:default;animation-name:snowflakes-shake;animation-duration:3s;animation-timing-function:ease-in-out}.snowflake .inner{animation-duration:10s;animation-name:snowflakes-fall;animation-timing-function:linear}.snowflake:nth-of-type(0){left:1%;animation-delay:0s}.snowflake:nth-of-type(0) .inner{animation-delay:0s}.snowflake:first-of-type{left:10%;animation-delay:1s}.snowflake:first-of-type .inner,.snowflake:nth-of-type(8) .inner{animation-delay:1s}.snowflake:nth-of-type(2){left:20%;animation-delay:.5s}.snowflake:nth-of-type(2) .inner,.snowflake:nth-of-type(6) .inner{animation-delay:6s}.snowflake:nth-of-type(3){left:30%;animation-delay:2s}.snowflake:nth-of-type(11) .inner,.snowflake:nth-of-type(3) .inner{animation-delay:4s}.snowflake:nth-of-type(4){left:40%;animation-delay:2s}.snowflake:nth-of-type(10) .inner,.snowflake:nth-of-type(4) .inner{animation-delay:2s}.snowflake:nth-of-type(5){left:50%;animation-delay:3s}.snowflake:nth-of-type(5) .inner{animation-delay:8s}.snowflake:nth-of-type(6){left:60%;animation-delay:2s}.snowflake:nth-of-type(7){left:70%;animation-delay:1s}.snowflake:nth-of-type(7) .inner{animation-delay:2.5s}.snowflake:nth-of-type(8){left:80%;animation-delay:0s}.snowflake:nth-of-type(9){left:90%;animation-delay:1.5s}.snowflake:nth-of-type(9) .inner{animation-delay:3s}.snowflake:nth-of-type(10){left:25%;animation-delay:0s}.snowflake:nth-of-type(11){left:65%;animation-delay:2.5s}
</style>
<div class="snowflakes" aria-hidden="true">
  <div class="snowflake">
    <div class="inner">❅</div>
  </div>
  <div class="snowflake">
    <div class="inner">❅</div>
  </div>
  <div class="snowflake">
    <div class="inner">❅</div>
  </div>
  <div class="snowflake">
    <div class="inner">❅</div>
  </div>
  <div class="snowflake">
    <div class="inner">❅</div>
  </div>
  <div class="snowflake">
    <div class="inner">❅</div>
  </div>
  <div class="snowflake">
    <div class="inner">❅</div>
  </div>
  <div class="snowflake">
    <div class="inner">❅</div>
  </div>
  <div class="snowflake">
    <div class="inner">❅</div>
  </div>
  <div class="snowflake">
    <div class="inner">❅</div>
  </div>
  <div class="snowflake">
    <div class="inner">❅</div>
  </div>
  <div class="snowflake">
    <div class="inner">❅</div>
  </div>
</div>




What do I do?
======
<div style="text-align: justify;">
I like to work on methodological aspects of Machine Learning.
I find this leads to novel methods with strong foundations: e.g. we have contributed methods for assessing the <i>stability</i> (reproducibility) of variable selection algorithms; methods for hypothesis testing in challenging non-standard scenarios; and, a new theory of ensemble diversity.
This has led to applications in areas such as predictive policiing, clinical trials, and design of efficient ML algorithms for plastic electronics.<br><br>


I enjoy looking for <b>connections</b> and <b>equivalencies</b> between known methods in the jungle of ML, primarily with tools from statistics and information theory, and lately I've been exploring information geometry.  <i>Everything in ML is, ultimately, a special case of something else</i>.<br><br>


<p style="padding-top: 0px; vertical-align: top; text-align: justify;">
  <a href="{{ base_path }}/howtogetyourphd/">
    <img src="https://cdn.waterstones.com/bookjackets/large/9780/1988/9780198866923.jpg"
         style="width:20%; min-width:1cm; align:center; vertical-align:top; float:right; margin-left:20px;  margin-bottom:10px; margin-top:0px;" />
  </a>
  I also enjoy thinking deeply about pedagogy, especially the nature of PhD training.
  <b>I wrote a book - a step-by-step guide to the intellectual and emotional rollercoaster of <u>Your</u> PhD</b>.
  Written in collaboration with twelve leading academics and industrialists, giving their unique perspectives on the PhD process,
  <a href="{{ base_path }}/howtogetyourphd/"><b>How to get Your PhD</b>: A Handbook for the Journey</a> is now available.
</p>

<br>
<br>
<br>

<h2>News</h2>

See my <a href="{{ base_path }}/archivednews">archived news</a> for older work.

The main highlights of my recent activities are...

<hr>

{% for post in site.news reversed %}
  {% include archive-single-newsitem.html %}
{% endfor %}


<br><br><br>

<a href="https://clustrmaps.com/site/1bo05" title="Visit tracker">
  <img width=5px src="//www.clustrmaps.com/map_v2.png?d=3Zlt0peoQN6NYFbwQbkDh9TnsM6OXl0rAFqoYZe9c9I&cl=ffffff">
</a>


