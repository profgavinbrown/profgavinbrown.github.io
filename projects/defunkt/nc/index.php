<h2>Project : <i>Ensemble Systems with Negative Correlation Learning</i></h2>

Ensemble Systems are groups of predictors constructed to obtain
better generalisation than any single predictor, and have emerged
as one of the most powerful pattern recognition techniques of
the last decade. <br>

In constructing
the base set of learners, it is well appreciated that the individuals
should exhibit different <i>patterns of generalisation</i>, the intuition
being that a group of identical predictors is no better than
a single one of the same form. The performance of the system is dependent
these differences,
the so called <i>error diversity</i>. 
A number of techniques in the literature have attempted to encourage diversity by randomly
perturbing the training data---Bagging and Random Subspaces are examples of this. In contrast,
our work has attempted to <b>explicitly quantify diversity</b>, and incorporate
it into a learning algorithm - this is <b>Negative Correlation Learning</b>.
<br>
<br>
NC learning works with a penalty term attached to the normal MSE error function.
A coefficient can be used to vary the emphasis on the penalty term.  With a coefficient of zero,
the NC learning algorithm is exactly equivalent to a simple ensemble of learners. With a higher
coefficient, we have observed significantly faster convergenece, and lower generalisation error
on a number of problems.<br>
<br>

<h2>Demo code:</h2>
<blockquote><a href="NCL.zip">Download some demonstration code of the algorithm here</a>.</blockquote>


<h2>Publications:</h2><blockquote>
<?php

pub("Managing Diversity in Regression Ensembles",
        "Gavin Brown, Jeremy Wyatt and Peter Tino",
        "Journal of Machine Learning Research",
        "Volume 6, pp 1621-1650 (2006)",
        "http://www.jmlr.org/papers/volume6/brown05a/brown05a.pdf",
        "brownwyatt05jmlr" );

pub("Diversity Creation Methods: A Survey and Categorisation",
        "Gavin Brown, Jeremy Wyatt, Rachel Harris, Xin Yao",
        "Journal of Information Fusion (Special issue on Diversity in Multiple Classifier Systems)",
        "Volume 6, issue 1, pp 5-20, March 2005",
        "http://www.cs.man.ac.uk/~gbrown/publications/diversitysurvey.pdf",
        "brown04survey" );

pub("Examining Decompositions of the Ensemble Objective Function",
        "Gavin Brown, Jeremy Wyatt and Ping Sun",
        "International Workshop on Multiple Classifier Systems",
        "LNCS, Volume 3541, June 2005",
        "http://www.cs.man.ac.uk/~gbrown/publications/mcs05extremes.pdf",
        "brownwyatt05extremes" );

pub("Ensemble Learning in Linearly Combined Classifiers via Negative Correlation",
        "Manuela Zanda and Gavin Brown and Giorgio Fumera and Fabio Roli",
        "International Workshop on Multiple Classifier Systems",
        "Prague, May 2007",
        "http://www.cs.man.ac.uk/~gbrown/research/zanda07mcs.pdf",
        "" );

pub("Diversity in Neural Network Ensembles",
        "Gavin Brown",
        "PhD thesis",
        "University of Birmingham 2004</b></a>",
        "http://www.cs.man.ac.uk/~gbrown/publications/gbrownThesis.pdf",
        "brown04thesis" );

pub("Negative Correlation Learning and The Ambiguity Family of Ensemble Methods",
        "Gavin Brown and Jeremy Wyatt",
        "International Workshop on Multiple Classifier Systems (MCS'03)",
        "Washington DC, USA, August 2003",
        "http://www.cs.man.ac.uk/~gbrown/publications/negcorr_mcs03.pdf",
        "brownwyatt03mcs" );

pub("On The Effectiveness of Negative Correlation Learning",
        "Gavin Brown and Xin Yao",
        "First UK Workshop on Computational Intelligence (UKCI`01)",
        "Edinburgh, Scotland, September 2001",
        "http://www.cs.man.ac.uk/~gbrown/publications/ukci01.pdf",
        "brownyao01:ukci" );


?>


<span style="visibility:hidden">

<?php

function pub( $title, $authors, $place, $details, $url, $bibtex )
{

        if ($url != "")
        {
                //echo "$title,&nbsp;[<a href='$url'>PDF</a>] ";
                echo "<a href='$url'>$title</a>";
        }
        echo "<br>$authors";

        echo "<br><i>$place</i>. $details<br>";
        echo "";
}

?>


