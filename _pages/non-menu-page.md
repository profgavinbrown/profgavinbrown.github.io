---
permalink: /non-menu-page/
title: ""
excerpt: "An explanation without all the technical jargon."
author_profile: true
redirect_from: 
  - "/nmp/"
  - "/nmp.html"
---


Feature Selection. What's that?
-----

Imagine you're trying to guess the price of a car.
You are provided with various pieces of information, like the make and model, year of manufacture, etc.
In solving any given problem like this, some pieces of information are relevant, some are irrelevant, and some are redundant in the context of others.
Figuring out which is which, <i>automatically</i> is the task of
<b>feature selection<\b> algorithms, also known as "variable selection", among other names.
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
In the period of the 1980s to early 2010s, we found 25-30 published methods, each of which claimed to be the "right way" to do it.
We figured out that these were all ....

From this foundation, we figured out how to build algorithms that could work with partial information....


Next, we thought about the following question --- what if you changed the data to your algorithm, just a little bit?
Would it still identify the same set of features as "important"?  The simple answer is (for most methods), no.
The harder question is how to measure this "stability" of algorithms. We....

