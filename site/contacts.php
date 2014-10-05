
<?php

require_once('../inc/util.inc');

page_head(tra('Project personnel'));

echo "
	    <table class = 'my_contacts'>
			<th>
			".tra("Name")."</th> <th>".tra("Project task")."</th>
			<th>".tra("Affiliation")."</th>  <th>".tra("Contact")."</th>
                            <tr>
                            <td> <b>".tra("Oleg Zaikin")."</b>  a.k.a. <b>Nauchnick</b></td>
                            <td> <i>".tra("Project coordinator").", ".tra("server software developer").", ".tra("CPU application developer")."</i></td>
                            <td> ".tra("Ph.D. Researcher in ISDCT SB RAS")."</td>
                            <td> <b>zaikin.icc _at_ gmail.com</b> </td>
                            </tr>
                            <tr>
                            <td> <b>".tra("Alexander Semenov")."</b></td>
                            <td> <i>".tra("Mathematician")."</i></td>
                            <td> ".tra("Ph.D. Chief of the Laboratory in ISDCT SB RAS")." </td>
                            <td> </td>
                            </tr>
                            <tr>
                            <td> <b>".tra("Mikhail Posypkin")."</b></td>
                            <td> <i>".tra("Consultant for Desktop Grid technologies")."</i> </td>
                            <td> ".tra("Ph.D. Leading researcher in ISA RAS")."</td>
                            <td> <a href='http://dcs.isa.ru/posypkin/'>".tra("home page")."</a> </td>
                            </tr>
                            <tr>
                            <td> <b>".tra("Nikolay Khrapov")."</b></td>
                            <td> <i>".tra("System administrator")."</i></td> 
                            <td>".tra("Engeneer in ISA RAS")."</td>
                            <td> </td>
                            </tr>
                </table>
                            
                            <h3 class='volunteers' >".tra("Volunteers").":</h3>
                            <ul class='volunteers'>
                            <li><b><a href='http://sat.isa.ru/pdsat/show_user.php?userid=89'>hoarfrost</a></b> <i>".tra("Web developer").", ".tra("DB developer").", ".tra("free consultant")."</i></li>
                	    <li><b><a href='http://sat.isa.ru/pdsat/show_user.php?userid=334'>Alexone</a></b> <i>".tra("Free consultant").", ".tra("application tester")."</i></li>
                            <li><b>".tra("Yevgeny Elesin")."</b> <i>".tra("Free consultant")."</i></li>
                            </ul>
                            
                            ";
                            
                            
                            
                                                        
                    	    page_tail();
                            ?>
                            
                            
