<?php

require_once('../inc/util.inc');

page_head(tra('Scientific goal of the project'));

echo "
<p>
".tra("There are many practically important problems for which the existence of effective (polynomial) algorithms of their solving has not been proven. Most of these problems are %1NP-hard%2.",
    "<a href='http://en.wikipedia.org/wiki/NP-hard'>",
    "</a>"
    )."
".tra("It means that under some reasonable (albeit unproven) assumptions, these problems can not be solved in polynomial time. However, many of their special cases arise in practical applications: various discrete optimization problems (for example, planning of production) and problems of verification of discrete devices (arising, for example, in designing of circuits and proving of program correctness). Therefore it is very important to have methods for their solving that don't have polynomial complexity, but are effective in practice. Such methods can cope with the numerous special cases of NP-hard problems of huge dimensions. One of the most simple in its basis, and therefore the most efficient in terms of software implementations is SAT approach.")."
".tra("This approach is based on reducibility of the considered original problem to a %1Boolean satisfiability problem (SAT)%2. SAT problems admit a very natural form of parallelism, allowing use of distributed computing (including volunteer computing) to solve them. Actually reducibility to SAT can be carried out effectively (in fact, it follows from the famous %3theorem of Cook-Levin%4).",
    "<a href='http://en.wikipedia.org/wiki/Boolean_satisfiability_problem'>",
    "</a>",
    "<a href='http://en.wikipedia.org/wiki/Cook-Levin_theorem'>",
    "</a>"
    )."
<br>
<br>
".tra("So, the project is aimed to solve various hard combinatorial problems (from areas of cryptography, discrete optimization, bioinformatics) which can be effectively reduced to SAT.")."

</p>";

page_tail();

?>
 
