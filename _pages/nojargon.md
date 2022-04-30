---
permalink: /nojargon/
title: ""
excerpt: "An explanation without all the technical jargon."
author_profile: true
---

I have contributed to the understanding of "feature selection" algorithms, with nice results on information theoretic methods, hypothesis testing, and the stability of algorithms.
I have also contributed to "ensemble" learning, in particular the study of diversity, and cost-sensitivity.
But what does all that mean, without the technical jargon?

Feature Selection. What's that?
-----

Imagine you're trying to guess the price of a car.
You are provided with various pieces of information: the manufacturer, age, colour, mileage, etc.
In solving any given problem like this, some information is relevant, some is irrelevant, and some is redundant in the context of others.
Figuring out which is which, <i>automatically</i> is the task of <b>feature selection</b> algorithms,
also known as "variable selection", among other names.
The mileage clearly matters, while the colour probably matters less.
The age is probably redundant if you know the mileage.
You know this because you (probably) know something about cars.
But what about predicting whether someone will have a relapse of a particular cancer?
What things matter? Genetics? Lifestyle? Metabolism?
Statistical methodologies can help in this problem -- in particular we worked on <b>information theory and probabilistic methods</b>.

Ensemble Learning. What's that?
-----

How tall is the Eiffel Tower? If I had to guess, I might say 700 metres.  If you guessed, you might say 800.
It's a well known idea that <i>averaging</i> our guesses is more likely to be closer to the correct answer than either of us individually.
This is known as "Wisdom of the Crowds" in popular science, but there is a formal mathematical basis for this, studied under the name
"ensemble learning", or "multiple classifier systems".  The guesses are of course not coming from people like you and me, but from algorithms - we study how to combine the predictions of several Machine Learning algorithms, in order to get the best overall result. A major focus has been the study of "diversity" --- we don't want the individual guesses to be identical (otherwise what's the point of an ensemble), but we don't want them to be too different just for the sake of it.  The 'sweet spot' in between is the right amount of 'diversity'. The problem has been -- <i>how do you measure diversity?</i>.


What did we do?
-----
When I get a chance, I'll flesh this out with further details of what we did... or you could just ask me directly....


<!--
There is one type of algorithm that has been quite popular --- based on "mutual information".
By reading (a lot of) literature published in the period of the 1980s to early 2010s, we found 25-30 published methods, each of which claimed to be the "right way" to do it.
We figured out that these were all ....

From this foundation, we figured out how to build algorithms that could work with partial information....

Next, we thought about the following question --- what if you changed the data to your algorithm, just a little bit?
Would it still identify the same set of features as "important"?  The simple answer is (for most methods), no.
The harder question is how to measure this "stability" of algorithms. We....
-->

Scientific Philosophy
-----

I like the perspective on science put forward in chapter 3 of <b>Infinite in All Directions</b>, by Freeman Dyson.  He says there are two types of scientist...

> <b>Unifiers</b> are people whose driving passion is to find general principles which will explain everything. They are happy if they can leave the universe looking a little simpler than they found it.

> <b>Diversifiers</b> are people whose passion is to explore details. They are in love with the heterogeneity of nature and they agree with the saying, <i>"Le bon Dieu aime les details."</i> They are happy if they leave the universe a little more complicated than they found it.

I've mostly been a unifier.
Though I believe unifications can only come from looking at the details.
So maybe I'm a bit of both.
