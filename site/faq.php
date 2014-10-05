
<?php

require_once('../inc/util.inc');

page_head(tra('Frequently asked questions'));

echo " 	    <table class = 'my_contacts'> 	 
<b>1. ".tra("What is SAT?")."</b> 	 
<br> 	 
".tra("SAT (abbreviated from Satisfiability) – is a <a href='http://en.wikipedia.org/wiki/Boolean_satisfiability_problem'>Boolean satisfiability problem</a>. In this problem for a given Boolean formula one should find a satisfying assignment of this formula (if it exists) or prove the fact of its absence. Satisfying assignment is a set of values of Boolean variables that satisfies given formula, i.e. under the substitution of this set the formula takes the value '1'. Usually in practice SAT problems are considered for Boolean formulae represented by Conjunctive Normal Forms. Many difficult combinatorial problems can be effectively reduced to SAT.")."   
<br> <br>	  
<b>2. ".tra("Why does one need to create a project SAT@home?")." </b> <br>  
".tra("The main reason is the lack of computing performance. Before the start of the project, we used to solve problems using computing clusters. However it is very difficult to get a lot of cluster resources for a substantial amount of time. Also clusters suit better for solving problems which require intensive data exchange. Our problems are decomposed in such a way that the amount of data exchange during solving is very low, so they can be naturally solved in distributed computing systems. Nevertheless we still use computing clusters to obtain the parameters of decomposition since these computations greatly benefit from fast interconnection. These parameters of decomposition are later used in SAT@home.")."  
<br> <br> 	  
<b>3. ".tra("What problems have already been solved in the project?")."</b> 
<br>  
".tra("Recently finished experiment was aimed at solving 10 problems of cryptanalysis of the <a href='http://en.wikipedia.org/wiki/A5/1'>generator A5/1</a>, that can not be solved using Rainbow method (see <a href='http://reflextor.com/trac/a51/wiki'>A5/1 cracking project</a>). Rainbow method makes it possible to solve problems of cryptanalysis of A5/1 very fast but can not guarantee the result with 100% probability. In SAT approach the solving of these problems requires more time, but the probability of the success is equal to 100%. The problems were generated in the following way: <ul> <li> We randomly generated 1000 samples of A5/1 cryptanalysis problem; <li> Then we tried to solve these 1000 problems using rainbow method. 125 out of 1000 problems could not be solved via aforementioned technique. <li> From these 125 problems we randomly chose 10, constructed corresponding SAT problems and solved them in the project.</ul> Also 17 new pairs of diagonal orthogonal Latin squares of order 10 were found. In the <a href='solutions.php'>Results section</a> you can find the results obtained.")."
<br> <br> 	  
<b>4. ".tra("What problems are being solved in the project right now?")."</b> 	 
<br>
".tra("At the moment we are searching for triple of mutually orthogonal <a href='http://en.wikipedia.org/wiki/Latin_square'>Latin squares</a> of order 10.")."
<br> <br>
<b>4.1. ".tra("What’s so interesting in the problem of search for three mutually orthogonal Latin squares of order 10?")."</b>        
<br>         
".tra("This problem is interesting in itself since it is a kind of a challenge to human intelligence. For the first time it was formulated by L. Euler in the XVIII century. At the moment n=10 is the minimal order for which the existence of three mutually orthogonal Latin squares is not known. Also the problem has some practical applications. Many combinatorial structures that are used in practice, for example, some classes of error-correcting codes, are closely associated with Latin squares. The latter are also used for planning experiments and for creating various puzzles such as Sudoku.")."
<br><br> 
<b>4.2. ".tra("How difficult is the problem of search for three mutually orthogonal Latin squares of order 10?")."</b>  
<br> 
".tra("This problem is very difficult. At the moment there are dozens of works on this subject and still no real progress in solving the problem. Our optimistic estimation is that we will solve the problem in SAT@home. However, it is already quite clear that this will require significant optimization of SAT-solving algorithms. Therefore right now we solve in SAT@home problems of search for pairs of mutually orthogonal Latin squares of orders 9 and 10 with an additional 'diagonal' condition. These problems are easier than the problem of search for three mutually orthogonal Latin squares and some of such pairs are already known. Nevertheless it will be interesting to find new orthogonal diagonal pairs. Additionally while solving these problems we might be able to find possible ways to improve the performance of algorithms in use.")."	  <br>
<br>         
<b>5. ".tra("Are you going to close the project after the completion of the current experiment?")."</b>         
<br>        
".tra("No, in the foreseeable future we do not plan to close the project because there are a number of tasks, which is planned to be solved within SAT@home.")."         
<br> <br> 	
<b>6. ".tra("Are there any plans to make a version of the application for the GPU?")."</b> 	
<br> 	
".tra("We are actively working on this problem. Things are complicated by the limitations of the architecture of modern GPUs, impeding the effective implementation of non-chronological version of the DPLL algorithm (the most effective algorithm for solving SAT problems nowadays). At the moment there is only a GPU version of the chronological DPLL algorithm, which is faster than its CPU analogue, but loses in performance to the CPU-version of non-chronological DPLL.")." 	
<br> 
<br> 
<b>7. ".tra("How can I help the project?")."</b> 	
<br> 
".tra("We accept any help with great pleasure. At the moment the attraction of new users and explaining them the basic principles of voluntary computing in general and SAT@home in particular is considered to be the most relevant.")."
 ";                                                    
                    	    page_tail();
                            ?>
                            
                            
