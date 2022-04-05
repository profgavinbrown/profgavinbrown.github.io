---
permalink: /nojargon/
title: ""
excerpt: "An explanation without all the technical jargon."
author_profile: true
---


Feature Selection. What's that?
-----

Imagine you're trying to guess the price of a car.
You are provided with various pieces of information, like the make and model, year of manufacture, etc.
In solving any given problem like this, some pieces of information are relevant, some are irrelevant, and some are redundant in the context of others.
Figuring out which is which, <i>automatically</i> is the task of
<b>feature selection</b> algorithms, also known as "variable selection", among other names.
In the car example, the number of miles on the clock clearly matters, while the colour of the wheel trim probably does not.
The age of the car is probably redundant if you know the mileage.
You know this because you (probably) know something about cars.
What about predicting whether someone will have a relapse of a particular cancer?
What things matter?
Genetic factors? Lifestyle? Metabolic?
We deceloped statistical methods for this task, in particular we work on information theory and probabilistic methods.

What did we do?
-----

There is one type of algorithm that has been quite popular --- based on "mutual information".
By reading (a lot of) literature published in the period of the 1980s to early 2010s, we found 25-30 published methods, each of which claimed to be the "right way" to do it.
We figured out that these were all ....

From this foundation, we figured out how to build algorithms that could work with partial information....


Next, we thought about the following question --- what if you changed the data to your algorithm, just a little bit?
Would it still identify the same set of features as "important"?  The simple answer is (for most methods), no.
The harder question is how to measure this "stability" of algorithms. We....


Scientific Philosophy
-----

I like the perspective on science put forward in chapter 3 of <b>Infinite in All Directions</b>, by Freeman Dyson.  He says there are two types of scientist...

> <b>Unifiers</b> are people whose driving passion is to find general principles which will explain everything. They are happy if they can leave the universe looking a little simpler than they found it.

> <b>Diversifiers</b> are people whose passion is to explore details. They are in love with the heterogeneity of nature and they agree with the saying, <i>"Le bon Dieu aime les details."</i> They are happy if they leave the universe a little more complicated than they found it.

I've mostly been a unifier.
Though I believe unifications can only come from looking at the details.
So maybe I'm a bit of both.
