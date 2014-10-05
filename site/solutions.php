
<?php

require_once('../inc/util.inc');

page_head(tra('Found solutions'));

echo "
	    <table class = 'my_contacts'>
		<FONT SIZE=+1>".tra("Cryptanalysis problem for the A5/1 cipher (method # 2)")."</FONT> 
		<br>
		<br>
		".tra("Start of the experiment").": 2014-06-05
		<th> № </th>
		<th> ".tra("Date")."</th> 
		<th>".tra("Users")."</th> 
		<th>".tra("Problem")."</th> 
		<th>".tra("Value")."</th>
    		<tr>
    		<td> 1 </td>
    		<td> <b>2014-06-06 22:31:13 UTC </b> </td>
    		<td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2162'>[AF>Libristes] Pascal</a> from <a href='http://sat.isa.ru/pdsat/team_display.php?teamid=4'>L'Alliance Francophone</a> /
    		<a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=110'>Ralfy</a> from <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=28'>BOINC Synergy</a> </td>
    		<td> a5_1_114_1 </td>
    		<td> 943A8DC7AD804764 </td>
    		</tr>
    		<tr>
    		<td> 2 </td>
    		<td> <b>2014-06-12 12:49:30 UTC </b> </td>
    		<td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=3480'>Crystal Spirit</a> from <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=22'>Crystal Dream</a> /
    		<a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=6627'>Stanley A Bourdon</a> from <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=28'>BOINC Synergy</a> </td>
    		<td> a5_1_114_2 </td>
    		<td> A9792C4F5FC8842A </td>
    		</tr>
    		<tr>
    		<td> 3 </td>
    		<td> <b>2014-06-28 14:59:16 UTC </b> </td>
    		<td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=5019'>Phil Klassen</a> from <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=38'>Canada</a> /
    		<a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=93'>evatutin</a> from <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=23'>kvt.kurskstu</a> </td>
    		<td> a5_1_114_3 </td>
    		<td> 6AD4D3D11F6094E2 </td>
    		</tr>
    		<tr>
    		<td> 4 </td>
    		<td> <b>2014-07-10 13:00:16 UTC </b> </td>
    		<td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=14843'>NotANumber</a> /
    		<a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=1'>Oleg Zaikin [SAT@home]</a> from <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=22'>Crystal Dream</a> </td>
    		<td> a5_1_114_4 </td>
    		<td> 8E0465CB1571DC2B </td>
    		</tr>
    		<tr>
    		<td> 5 </td>
    		<td> <b>2014-07-21 23:20:18 UTC </b> </td>
    		<td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=9525'>toest</a> from <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=1440'>TSC! Russia</a> /
    		<a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=11502'>Winer</a> from <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=1742'>BOINC RUSSIA</a> </td>
    		<td> a5_1_114_5 </td>
    		<td> E9328617B6D23FA6 </td>
    		</tr>
    		<tr>
    		<td> 6 </td>
    		<td> <b>2014-08-12 16:55:28 UTC </b></td>
    		<td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2082'>Lavoler</a> from <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=19'>Russia Team</a> /
    		<a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=44'>ChertseyAl</a>
    		</td>
    		<td> a5_1_114_6 </td>
    		<td> F43FF04CD4F45660 <br> 
    		7A1FF04CD4F45660 </td>
    		</tr>
    		<tr>
    		<td> 7 </td>
    		<td> <b>2014-08-18 18:12:52 UTC </b> </td>
    		<td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=3480'>Crystal Spirit</a> from <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=22'>Crystal Dream</a> /
    		<a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2063'>mi5rys</a> from <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=22'>Crystal Dream</a> </td>
    		<td> a5_1_114_7 </td>
    		<td> B95654F2242C6DF1 <br>
    		5CAB34F2242C6DF1</td>
    		</tr>
    		<tr>
    		<td> 8 </td>
    		<td> <b>2014-08-30 02:46:13 UTC </b> </td>
    		<td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2363'>morgan</a> from <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=76'>Team Norway</a> /
    		<a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=9811'>Igo Centrical</a> from <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=19'>Russia Team</a> </td>
    		<td> a5_1_114_8 </td>
    		<td> EE5143D7F15E673D </td>
    		</tr>
    		<tr>
    		<td> 9 </td>
    		<td> <b>2014-09-09 15:45:11 UTC </b> </td>
    		<td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=10765'>Shurale</a> from <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=1752'>Astronomy.Ru Forum</a> /
    		<a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=5457'>Shaman</a> from <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=5457'>Czech National Team</a> </td>
    		<td> a5_1_114_9 </td>
    		<td> 67685940B034EF78 </td>
    		</tr>
    		<tr>
    		<td> 10 </td>
    		<td> <b>2014-09-26 04:38:41 UTC </b> </td>
    		<td> 
    		<a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=3603'>Grey</a> from <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=29'>Russia</a> /
    		<a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2616'>Mixa</a> from <a href='http://sat.isa.ru/pdsat/team_display.php?teamid=19'>Russia Team</a> 
    		<br>
    		<a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=6656'>Владимир</a> from <a href='http://sat.isa.ru/pdsat/team_display.php?teamid=1440'>TSC! Russia</a> /
    		<a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2249'>plumbum</a> from <a href='http://sat.isa.ru/pdsat/team_display.php?teamid=19'>Russia Team</a> 
    		<td> a5_1_114_10 </td>
    		<td> 
    		41038717BBA05E57 
    		<br> 
    		FB164EC44124398E 
    		</td>
    		</td>  		
    		<tr>
    		
    		<table class = 'my_contacts'>
		<FONT SIZE=+1>".tra("Cryptanalysis problem for the Bivium cipher")."</FONT> 
		<br>
		<br>
		".tra("Start of the experiment").": 2014-02-07
		<th> № </th>
		    <th> ".tra("Date")."</th> 
		<th>".tra("Users")."</th> 
		<th>".tra("Problem")."</th> 
		<th>".tra("Value")."</th>
    		<tr> 
        	    <td> 1 </td> 
        	    <td> <b> 2014-02-13 20:49:40 UTC </b> </td>
        	    <td> 
        	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=6176'>Retupmoc</a> from <a href ='http://sat.isa.ru/pdsat/team_display.php?teamid=1845'>Retupmoc</a>
        	    /
        	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=3856'>dimawalker</a> 
        	    </td>
        	    <td>Bivium16_2</td>
        	    <td> 8CECD32330575840 </td>
        	</tr>
        	<tr>
        	    <td> 2 </td>
        	    <td> <b>2014-03-16 17:14:30 UTC </b> </td>
        	    <td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=3480'>Crystal Spirit</a> from <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=22'>Crystal Dream</a> /
        	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=5457'>Shaman</a> from <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=15'>Czech National Team</a> </td>
        	    <td>Bivium14_1</td> 
        	    <td>81BB1DBCA1C33564</td>
        	</tr>
        	<tr>
    		<td> 3 </td>
    		<td> <b>2014-03-20 19:06:14 UTC </b> </td>
    		<td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=8805'>madx</a> from <a href='http://sat.isa.ru/pdsat/show_user.php?userid=8805'>BOINC RUSSIA</a> /
    		<a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=7909'>kunzea</a> </td>
    		<td>Bivium14_0</td>
    		<td> C78CD4937363FF09 </td>
    		</tr>
    		<tr>
    		<td> 4 </td>
    		<td> <b>2014-04-10 07:43:21 UTC </b> </td>
    		<td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2063'>mi5rys</a> from <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=22'>Crystal Dream</a> /
    		<a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=9568'>Alexandr Burnashev</a> from <a href='http://sat.isa.ru/pdsat/team_display.php?teamid=19'>Russia Team</a> </td>
    		<td>Bivium10_0</td>
    		<td> C78CD4937363FF09 </td>
    		</tr>
    		<tr>
    		<td> 5 </td>
    		<td> <b>2014-05-07 11:10:08 UTC </b> </td>
    		<td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=5379'>Pavel_Kirpichenko</a> from <a href='http://sat.isa.ru/pdsat/team_display.php?teamid=1752'>Astronomy.Ru Forum</a> /
    		<a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=3480'>Crystal Spirit</a> from <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=22'>Crystal Dream</a> </td>
    		<td>Bivium10_1</td>
    		<td>81BB1DBCA1C33564</td>
    		</tr>
    		<tr>
    		<td> 6 </td>
    		<td> <b>2014-05-26 12:02:09 UTC </b> </td>
    		<td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2003'>http://vk.com/boinc</a> from <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=1502'>Colombia</a> /
    		<a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2183'>alnb</a> from <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=19'>Russia Team</a> </td>
    		<td>Bivium10_2</td>
    		<td> 8CECD32330575840 </td>
    		</tr>
	    <table class = 'my_contacts'>
		<FONT SIZE=+1>".tra("Searching for psudotriples of mutually orthogonal Latin squares of order 10")."</FONT> 
		<br>
		<br>
		".tra("Start of the experiment").": 2013-06-24
		    <th> № </th>
			<th> ".tra("Date")."</th> 
			<th>".tra("Users")."</th> 
			<th>".tra("Problem")."</th> 
			<th>".tra("Value")."</th>
			<tr>
			    <td> 1 </td>
			    <td> <b>2013-06-25 13:39:12 UTC</b> </td>
                            <td> 
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2249'>plumbum</a> from
                            <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=19'>Russia Team</a>
                            <br>
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=8827'>Sprecher Brewery</a> from 
                            <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=44'>Ars Technica</a>
                            </td>
                            <td>inc54</td>
                            <td>
                            <FONT SIZE=-2>
                            0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
                            1 5 4 7 8 6 9 3 2 0 &nbsp;&nbsp 7 4 6 0 3 2 5 1 9 8 &nbsp;&nbsp 5 3 6 9 7 0 1 2 4 8 <br>
                            7 4 8 6 9 3 5 0 1 2 &nbsp;&nbsp 8 3 7 9 6 4 1 5 2 0 &nbsp;&nbsp 3 8 5 7 6 1 9 4 2 0 <br>
                            5 9 6 0 1 2 7 8 4 3 &nbsp;&nbsp 9 8 3 7 0 1 4 2 5 6 &nbsp;&nbsp 8 2 1 5 3 7 4 9 0 6 <br>
                            8 0 9 2 6 7 3 1 5 4 &nbsp;&nbsp 4 9 1 5 7 3 8 6 0 2 &nbsp;&nbsp 4 7 0 8 9 2 5 6 1 3 <br>
                            2 3 7 8 5 1 4 9 0 6 &nbsp;&nbsp 6 5 9 1 2 8 7 0 3 4 &nbsp;&nbsp 6 0 8 1 2 4 7 3 9 5 <br>
                            4 2 3 5 7 8 0 6 9 1 &nbsp;&nbsp 1 7 0 6 5 9 2 8 4 3 &nbsp;&nbsp 1 9 4 6 0 3 2 8 5 7 <br>
                            3 6 5 1 0 9 2 4 7 8 &nbsp;&nbsp 2 0 8 4 1 7 3 9 6 5 &nbsp;&nbsp 9 4 7 0 1 8 3 5 6 2 <br>
                            9 7 1 4 3 0 8 2 6 5 &nbsp;&nbsp 3 2 5 8 9 6 0 4 1 7 &nbsp;&nbsp 7 5 9 2 8 6 0 1 3 4 <br>
                            6 8 0 9 2 4 1 5 3 7 &nbsp;&nbsp 5 6 4 2 8 0 9 3 7 1 &nbsp;&nbsp 2 6 3 4 5 9 8 0 7 1 <br>
                            </FONT>
                            </td>
                        </tr>
                	<tr>
			    <td> 2 </td>
			    <td> <b>2013-06-25 17:07:08 UTC</b> </td>
                            <td> 
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=117'>vk_DiMoH</a> from
                            <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=19'>Russia Team</a>
                            <br>
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=885'>tng*</a> from 
                            <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=61'>Sicituradastra.</a>
                            </td>
                            <td>inc64</td>
                            <td>
                            <FONT SIZE=-2>
                            0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
                            1 3 7 5 0 8 2 9 6 4 &nbsp;&nbsp 9 8 4 2 6 7 3 0 5 1 &nbsp;&nbsp 4 9 0 2 7 6 8 1 5 3 <br>
                            8 4 1 9 2 0 7 6 3 5 &nbsp;&nbsp 6 7 5 4 9 3 0 1 2 8 &nbsp;&nbsp 3 6 8 0 9 1 5 2 7 4 <br>
                            3 5 6 1 9 7 8 2 4 0 &nbsp;&nbsp 4 6 9 0 1 2 5 8 3 7 &nbsp;&nbsp 5 0 9 7 8 2 4 3 1 6 <br>
                            2 0 4 7 8 9 3 1 5 6 &nbsp;&nbsp 7 2 6 5 0 8 1 4 9 3 &nbsp;&nbsp 1 8 7 4 5 3 2 6 9 0 <br>
                            9 8 5 6 3 2 1 4 0 7 &nbsp;&nbsp 2 3 0 7 5 1 8 9 4 6 &nbsp;&nbsp 6 7 3 1 0 4 9 5 2 8 <br>
                            5 6 9 2 7 3 4 0 1 8 &nbsp;&nbsp 1 0 3 6 8 9 2 5 7 4 &nbsp;&nbsp 7 4 5 6 1 8 0 9 3 2 <br>
                            4 2 0 8 6 1 9 5 7 3 &nbsp;&nbsp 5 4 8 9 2 6 7 3 1 0 &nbsp;&nbsp 2 5 4 9 3 0 7 8 6 1 <br>
                            6 7 3 0 1 4 5 8 9 2 &nbsp;&nbsp 8 9 7 1 3 0 4 2 6 5 &nbsp;&nbsp 8 3 6 5 2 9 1 0 4 7 <br>
                            7 9 8 4 5 6 0 3 2 1 &nbsp;&nbsp 3 5 1 8 7 4 9 6 0 2 &nbsp;&nbsp 9 2 1 8 6 7 3 4 0 5 <br>
                            </FONT>
                            </td>
                        </tr>
                        <tr>
			    <td> 3 </td>
			    <td> <b>2013-06-26 20:26:04 UTC</b> </td>
                            <td> 
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=8061'>UR</a> from
                            <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=22'>Crystal Dream</a>
                            <br>
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=7148'>RoSMag</a> from
                	    <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=1440'>TSC! Russia</a>
                            </td>
                            <td>inc66</td>
                            <td>
                            <FONT SIZE=-2>
			    0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
			    2 3 9 1 7 8 5 4 0 6 &nbsp;&nbsp 3 6 8 2 5 4 9 0 1 7 &nbsp;&nbsp 1 0 5 2 9 6 4 8 7 3 <br>
			    3 6 4 8 5 2 0 1 9 7 &nbsp;&nbsp 9 0 7 5 3 6 2 8 4 1 &nbsp;&nbsp 2 4 6 9 0 7 8 5 3 1 <br>
			    9 4 1 7 3 6 8 5 2 0 &nbsp;&nbsp 6 9 0 4 1 8 3 2 7 5 &nbsp;&nbsp 4 9 3 5 7 8 0 1 6 2 <br>
			    8 5 3 2 9 0 7 6 4 1 &nbsp;&nbsp 1 8 4 9 2 7 0 3 5 6 &nbsp;&nbsp 5 3 8 4 6 9 2 0 1 7 <br>
			    1 0 5 9 6 3 4 8 7 2 &nbsp;&nbsp 5 4 1 7 9 2 8 6 3 0 &nbsp;&nbsp 6 5 9 8 2 1 7 3 4 0 <br>
			    6 7 8 0 1 9 2 3 5 4 &nbsp;&nbsp 4 2 9 8 7 0 1 5 6 3 &nbsp;&nbsp 9 6 7 1 8 0 3 4 2 5 <br>
			    4 8 7 6 2 1 9 0 3 5 &nbsp;&nbsp 2 7 6 1 8 3 5 9 0 4 &nbsp;&nbsp 3 2 0 7 5 4 1 6 9 8 <br>
			    7 9 6 5 0 4 3 2 1 8 &nbsp;&nbsp 8 3 5 0 6 1 7 4 9 2 &nbsp;&nbsp 8 7 1 6 3 2 5 9 0 4 <br>
			    5 2 0 4 8 7 1 9 6 3 &nbsp;&nbsp 7 5 3 6 0 9 4 1 2 8 &nbsp;&nbsp 7 8 4 0 1 3 9 2 5 6 <br>
                            </FONT>
                            </td>
                        </tr>
                        <tr>
			    <td> 4 </td>
			    <td> <b>2013-06-26 20:26:04 UTC</b> </td>
                            <td> 
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=5429'>Commander</a>
                            <br>
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=7148'>RoSMag</a> from
                	    <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=1440'>TSC! Russia</a>
                            </td>
                            <td>inc67</td>
                            <td>
                            <FONT SIZE=-2>
                            0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
                            3 7 5 2 9 0 8 1 4 6 &nbsp;&nbsp 9 4 1 8 7 3 5 6 2 0 &nbsp;&nbsp 7 3 8 9 6 1 4 2 5 0 <br>
                            1 8 9 6 2 4 3 0 7 5 &nbsp;&nbsp 8 7 6 5 3 1 2 9 0 4 &nbsp;&nbsp 3 2 0 1 5 9 8 6 4 7 <br>
                            4 0 8 1 5 3 7 6 9 2 &nbsp;&nbsp 5 6 3 9 8 0 1 2 4 7 &nbsp;&nbsp 1 8 6 4 0 2 5 9 7 3 <br>
                            2 5 1 8 7 6 0 9 3 4 &nbsp;&nbsp 1 2 0 4 9 7 8 3 5 6 &nbsp;&nbsp 4 9 5 0 2 3 7 1 6 8 <br>
                            5 9 0 4 3 1 2 8 6 7 &nbsp;&nbsp 7 5 4 0 6 2 9 1 3 8 &nbsp;&nbsp 6 5 4 7 9 8 0 3 2 1 <br>
                            9 4 6 0 8 7 1 2 5 3 &nbsp;&nbsp 2 3 8 7 0 6 4 5 9 1 &nbsp;&nbsp 2 6 7 5 1 0 9 8 3 4 <br>
                            7 6 3 5 1 2 9 4 0 8 &nbsp;&nbsp 3 9 7 6 5 4 0 8 1 2 &nbsp;&nbsp 8 4 1 2 7 6 3 0 9 5 <br>
                            8 2 4 7 6 9 5 3 1 0 &nbsp;&nbsp 6 0 9 2 1 8 3 4 7 5 &nbsp;&nbsp 9 7 3 6 8 4 1 5 0 2 <br>
                            6 3 7 9 0 8 4 5 2 1 &nbsp;&nbsp 4 8 5 1 2 9 7 0 6 3 &nbsp;&nbsp 5 0 9 8 3 7 2 4 1 6 <br>
                            </FONT>
                            </td>
                        </tr>
                        <tr>
			    <td> 5 </td>
			    <td> <b>2013-07-01 11:50:09 UTC</b> </td>
                            <td> 
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=7148'>RoSMag</a> from
                	    <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=1440'>TSC! Russia</a>
                	    <br>
                	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=5871'>tanos</a> from 
                            <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=1752'>Astronomy.Ru Forum</a>
                            </td>
                            <td>inc70</td>
                            <td>
                            <FONT SIZE=-2>
                            0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
                            7 9 1 6 8 0 5 2 3 4 &nbsp;&nbsp 1 0 5 8 9 2 4 3 7 6 &nbsp;&nbsp 6 8 0 7 5 9 1 4 2 3 <br>
                            3 8 4 5 9 1 0 6 7 2 &nbsp;&nbsp 8 6 1 0 5 3 9 4 2 7 &nbsp;&nbsp 4 2 5 9 7 6 8 3 0 1 <br>
                            9 2 0 1 5 7 3 4 6 8 &nbsp;&nbsp 2 8 7 4 1 6 0 9 5 3 &nbsp;&nbsp 3 5 6 4 2 8 7 9 1 0 <br>
                            8 6 5 4 2 3 9 1 0 7 &nbsp;&nbsp 5 9 6 7 0 4 3 2 1 8 &nbsp;&nbsp 9 4 3 8 6 1 0 5 7 2 <br>
                            5 3 6 9 1 4 7 8 2 0 &nbsp;&nbsp 9 2 3 1 7 8 5 0 6 4 &nbsp;&nbsp 7 6 9 2 8 0 5 1 3 4 <br>
                            6 7 3 2 0 8 4 9 5 1 &nbsp;&nbsp 7 4 9 5 8 1 2 6 3 0 &nbsp;&nbsp 5 9 8 0 1 3 2 6 4 7 <br>
                            1 0 8 7 6 9 2 5 4 3 &nbsp;&nbsp 6 3 4 9 2 7 1 8 0 5 &nbsp;&nbsp 2 3 7 1 0 4 9 8 6 5 <br>
                            4 5 7 8 3 2 1 0 9 6 &nbsp;&nbsp 3 7 0 2 6 9 8 5 4 1 &nbsp;&nbsp 1 0 4 6 9 7 3 2 5 8 <br>
                            2 4 9 0 7 6 8 3 1 5 &nbsp;&nbsp 4 5 8 6 3 0 7 1 9 2 &nbsp;&nbsp 8 7 1 5 3 2 4 0 9 6 <br>
                            </FONT>
                            </td>
                        </tr>
                        <tr>
			    <td> 6 </td>
			    <td> <b>2013-09-08 15:43:51 UTC</b> </td>
                            <td> 
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=3929'>Dromage</a> from
                            <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=9'>Ukraine</a>
                            <br>
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=10203'>1</a>
                            </td>
                            <td>inc71</td>
                            <td>
                            <FONT SIZE=-2>
                            0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
                            1 2 7 9 8 0 4 6 5 3 &nbsp;&nbsp 3 9 5 6 2 7 8 0 4 1 &nbsp;&nbsp 6 7 1 8 0 3 2 4 9 5 <br>
                            8 3 9 2 6 7 0 4 1 5 &nbsp;&nbsp 9 5 4 7 8 2 3 1 0 6 &nbsp;&nbsp 1 6 0 4 3 8 5 9 7 2 <br>
                            5 7 4 6 9 1 3 0 2 8 &nbsp;&nbsp 1 8 0 9 7 6 2 5 3 4 &nbsp;&nbsp 3 9 5 1 2 4 7 8 0 6 <br>
                            4 8 5 0 3 6 2 1 9 7 &nbsp;&nbsp 7 6 8 4 0 1 5 9 2 3 &nbsp;&nbsp 8 5 7 9 1 0 3 2 6 4 <br>
                            2 6 8 1 0 9 7 5 3 4 &nbsp;&nbsp 6 4 1 8 9 3 0 2 7 5 &nbsp;&nbsp 9 8 4 5 7 1 0 6 2 3 <br>
                            7 0 3 5 1 2 9 8 4 6 &nbsp;&nbsp 4 2 9 0 5 8 1 3 6 7 &nbsp;&nbsp 5 2 8 0 9 6 4 3 1 7 <br>
                            3 9 0 7 5 4 8 2 6 1 &nbsp;&nbsp 8 0 6 1 3 9 7 4 5 2 &nbsp;&nbsp 4 3 6 2 8 7 9 1 5 0 <br>
                            6 4 1 8 7 3 5 9 0 2 &nbsp;&nbsp 2 3 7 5 6 4 9 8 1 0 &nbsp;&nbsp 2 0 3 7 6 9 1 5 4 8 <br>
                            9 5 6 4 2 8 1 3 7 0 &nbsp;&nbsp 5 7 3 2 1 0 4 6 9 8 &nbsp;&nbsp 7 4 9 6 5 2 8 0 3 1 <br>
                            </FONT>
                            </td>
                        </tr>
                </table>
                
                <table class = 'my_contacts'>
		<FONT SIZE=+1>".tra("Searching for pairs of diagonal orthogonal Latin squares of order 10").".</FONT> 
		<br>
		<br>
		".tra("Start of the experiment").": 2012-09-03
			<th> № </th>
			<th> ".tra("Date")."</th> 
			<th>".tra("Users")."</th> 
			<th>".tra("Problem")."</th> 
			<th>".tra("Value")."</th>
			<tr>
			    <td> 1 </td>
			    <td> <b>2012-10-18 16:37:54 UTC</b> </td>
                            <td> 
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=5871'>tanos</a> from 
                            <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=1752'>Astronomy.Ru Forum</a>
                            <br>
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=3963'>notnA</a> from 
                            <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=22'>Crystal Dream</a>
                            </td>
                            <td>diag10_2</td>
                            <td>
                            <FONT SIZE=-2>
                            0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
                            1 2 0 4 3 7 9 8 5 6 &nbsp;&nbsp 7 5 1 9 2 8 0 4 6 3 <br>
                            7 3 5 9 0 4 8 6 2 1 &nbsp;&nbsp 1 0 3 4 6 7 5 2 9 8 <br>
                            3 5 6 8 9 0 4 1 7 2 &nbsp;&nbsp 9 8 4 7 5 2 1 0 3 6 <br>
                            4 9 7 2 6 8 1 5 0 3 &nbsp;&nbsp 6 7 9 0 8 3 2 1 5 4 <br>
                            5 8 4 6 7 1 3 2 9 0 &nbsp;&nbsp 4 6 5 1 0 9 8 3 2 7 <br>
                            8 4 9 1 2 3 7 0 6 5 &nbsp;&nbsp 2 3 8 5 1 6 4 9 7 0 <br>
                            6 7 3 0 1 2 5 9 4 8 &nbsp;&nbsp 5 2 7 8 3 4 9 6 0 1 <br>
                            9 0 1 5 8 6 2 4 3 7 &nbsp;&nbsp 3 4 6 2 9 0 7 8 1 5 <br>
                            2 6 8 7 5 9 0 3 1 4 &nbsp;&nbsp 8 9 0 6 7 1 3 5 4 2 <br>
                            </FONT>
                            </td>
                        </tr>
                        <tr>
                    	    <td> 2 </td> 
                    	    <td> <b>2012-11-02 01:51:43 UTC </b> </td>
                    	    <td> 
                    	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2024'>quel</a> from
                    	    <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=61'>Sicituradastra.</a>
                    	    <br>
                    	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=5871'>tanos</a> from 
                            <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=1752'>Astronomy.Ru Forum</a>
                    	    <td>diag10_2</td>
                    	    <td>
                    	    <FONT SIZE=-2> 
                    	    0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
                    	    1 2 0 4 3 8 7 9 5 6 &nbsp;&nbsp 7 4 8 0 5 9 2 3 6 1 <br>
                    	    5 6 9 0 7 3 4 8 1 2 &nbsp;&nbsp 4 2 5 9 3 7 8 1 0 6 <br>
                    	    9 8 7 5 6 4 0 1 2 3 &nbsp;&nbsp 6 0 4 7 9 1 3 8 5 2 <br>
                    	    3 7 5 9 8 1 2 6 4 0 &nbsp;&nbsp 9 6 1 8 2 4 0 5 3 7 <br>
                    	    7 5 1 8 2 6 9 3 0 4 &nbsp;&nbsp 1 3 9 6 7 8 4 0 2 5 <br>
                    	    2 4 8 7 1 9 3 0 6 5 &nbsp;&nbsp 8 9 3 5 6 2 1 4 7 0 <br>
                    	    8 9 6 1 0 2 5 4 3 7 &nbsp;&nbsp 5 7 0 2 1 3 9 6 4 8 <br>
                    	    6 3 4 2 9 0 1 5 7 8 &nbsp;&nbsp 3 8 7 1 0 6 5 2 9 4 <br>
                    	    4 0 3 6 5 7 8 2 9 1 &nbsp;&nbsp 2 5 6 4 8 0 7 9 1 3 <br>
                	    </FONT>
                	    </td>
                        </tr>
                        <tr> 
                    	    <td> 3 </td>
                    	    <td> <b>2012-12-14 07:23:39 UTC </b> </td>
                            <td>
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=5871'>tanos</a> from 
                            <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=1752'>Astronomy.Ru Forum</a>
                            <br>
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=6922'>Tommy</a> from 
                            <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=92'>US NAVY</a>
                            </td>
                            <td>diag10_2</td>
                            <td> 
                            <FONT SIZE=-2>
                            0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
                            1 2 0 4 5 7 9 8 3 6 &nbsp;&nbsp 6 8 3 1 7 9 5 4 0 2 <br>
                            4 8 1 5 9 6 2 0 7 3 &nbsp;&nbsp 2 3 9 0 8 7 4 1 6 5 <br>
                            2 0 6 9 8 4 7 3 5 1 &nbsp;&nbsp 5 7 0 6 1 3 8 2 9 4 <br>
                            8 3 4 6 7 1 5 9 2 0 &nbsp;&nbsp 7 9 8 4 5 2 1 0 3 6 <br>
                            7 5 9 1 6 3 0 2 4 8 &nbsp;&nbsp 1 2 7 8 3 4 9 6 5 0 <br>
                            3 6 5 2 1 9 8 4 0 7 &nbsp;&nbsp 8 5 6 7 0 1 2 9 4 3 <br>
                            6 9 8 7 3 0 4 5 1 2 &nbsp;&nbsp 9 4 5 2 6 8 0 3 7 1 <br>
                            9 4 7 8 0 2 3 1 6 5 &nbsp;&nbsp 3 6 4 9 2 0 7 5 1 8 <br>
                            5 7 3 0 2 8 1 6 9 4 &nbsp;&nbsp 4 0 1 5 9 6 3 8 2 7 <br>
                            </FONT>
                            </td>
                        </tr>
                        <tr> 
                    	    <td> 4 </td>
                    	    <td> <b>2012-12-16 14:23:33 UTC </b> </td>
                	    <td> 
                	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=1957'>288larsson</a> from
                    	    <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=61'>Sicituradastra.</a>
                    	    <br>
                    	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=6033'>[ESL Brigade] kill_u4_free</a> from
                    	    <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=70'>Electronic Sports League (ESL)</a> 
                    	    </td>
                    	    <td>diag10_2</td>
                    	    <td>
                    	    <FONT SIZE=-2>
                    	    0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
                    	    1 2 0 4 5 8 9 3 7 6 &nbsp;&nbsp 3 8 5 0 9 7 1 6 2 4 <br>
                    	    7 6 5 9 2 4 8 1 3 0 &nbsp;&nbsp 9 3 7 6 1 2 0 4 5 8 <br>
                    	    6 5 1 8 9 7 3 4 0 2 &nbsp;&nbsp 2 4 6 9 5 3 8 1 7 0 <br>
                    	    4 9 8 6 7 0 2 5 1 3 &nbsp;&nbsp 8 7 4 5 6 1 3 0 9 2 <br>
                    	    2 0 4 7 8 3 5 6 9 1 &nbsp;&nbsp 5 6 9 1 3 4 2 8 0 7 <br>
                    	    9 8 7 2 3 6 1 0 4 5 &nbsp;&nbsp 4 2 8 7 0 9 5 3 6 1 <br>
                    	    8 3 6 0 1 2 4 9 5 7 &nbsp;&nbsp 1 9 0 4 8 6 7 2 3 5 <br>
                    	    3 4 9 5 0 1 7 2 6 8 &nbsp;&nbsp 7 5 3 8 2 0 4 9 1 6 <br>
                    	    5 7 3 1 6 9 0 8 2 4 &nbsp;&nbsp 6 0 1 2 7 8 9 5 4 3 <br>
                    	    </FONT>
                    	    </td>
                        </tr>
                        <tr> 
                    	    <td> 5 </td>
                    	    <td> <b>2012-12-26 20:19:19 UTC </b> </td>
                    	    <td> 
                    	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=3122'>Ilex</a> from 
                            <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=22'>Crystal Dream</a>
                            <br>
                    	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2249'>plumbum</a> from
                    	    <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=19'>Russia Team</a>
                    	    </td>
                    	    <td>diag10_2</td>
                    	    <td>
                    	    <FONT SIZE=-2>
                    	    0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
                    	    1 2 0 4 5 7 9 3 6 8 &nbsp;&nbsp 3 5 7 6 1 9 4 8 0 2 <br>
                    	    6 3 7 0 9 8 1 4 5 2 &nbsp;&nbsp 5 6 4 9 0 7 8 3 2 1 <br>
                    	    3 7 5 9 1 0 8 2 4 6 &nbsp;&nbsp 9 3 6 8 2 1 5 0 7 4 <br>
                    	    5 8 6 2 3 1 0 9 7 4 &nbsp;&nbsp 8 0 9 4 7 6 3 2 1 5 <br>
                    	    7 4 9 8 0 6 5 1 2 3 &nbsp;&nbsp 6 9 5 1 8 2 7 4 3 0 <br>
                    	    8 9 1 7 6 2 4 5 3 0 &nbsp;&nbsp 4 7 0 2 3 8 1 9 5 6 <br>
                    	    4 6 3 5 7 9 2 8 0 1 &nbsp;&nbsp 2 8 1 0 5 3 9 6 4 7 <br>
                    	    9 5 8 6 2 4 3 0 1 7 &nbsp;&nbsp 1 4 3 7 6 0 2 5 9 8 <br>
                    	    2 0 4 1 8 3 7 6 9 5 &nbsp;&nbsp 7 2 8 5 9 4 0 1 6 3 <br>
                    	    </FONT>
                    	    </td>
                        </tr>
                        <tr> 
                    	    <td> 6 </td>
                    	    <td> <b>2013-01-05 06:23:13 UTC </b> </td>
                    	    <td>
                    	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=5871'>tanos</a> from 
                            <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=1752'>Astronomy.Ru Forum</a>
                            <br>
                    	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=4071'>_2e_</a> from 
                    	    <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=29'>Russia</a>
                    	    </td>
                    	    <td>diag10_2</td>
                    	    <td>
                    	    <FONT SIZE=-2>
                    	    0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
                    	    1 2 0 4 5 9 7 3 6 8 &nbsp;&nbsp 3 6 7 8 9 0 5 1 4 2 <br>
                    	    2 9 6 5 0 1 8 4 3 7 &nbsp;&nbsp 9 4 8 2 5 6 1 3 7 0 <br>
                    	    8 3 5 9 7 6 0 1 4 2 &nbsp;&nbsp 6 9 3 5 1 2 8 4 0 7 <br>
                    	    3 7 9 0 1 8 4 2 5 6 &nbsp;&nbsp 5 8 1 4 2 7 9 0 6 3 <br>
                    	    5 6 7 8 3 4 9 0 2 1 &nbsp;&nbsp 4 7 9 0 6 1 3 2 5 8 <br>
                    	    9 4 3 2 8 7 5 6 1 0 &nbsp;&nbsp 8 2 0 1 3 4 7 5 9 6 <br>
                    	    4 0 1 7 6 3 2 8 9 5 &nbsp;&nbsp 7 3 5 6 0 8 4 9 2 1 <br>
                    	    6 5 8 1 2 0 3 9 7 4 &nbsp;&nbsp 1 0 4 7 8 9 2 6 3 5 <br>
                    	    7 8 4 6 9 2 1 5 0 3 &nbsp;&nbsp 2 5 6 9 7 3 0 8 1 4 <br>
                    	    </FONT>
                    	    </td>
                        <tr> 
                    	    <td> 7 </td>
                    	    <td> <b>2013-01-11 18:33:50 UTC </b> </td>
                    	    <td> 
                    	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=7243'>Bunky</a>
                    	    <br>
                    	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=6482'>electrician</a> from 
                    	    <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=1440'>TSC! Russia</a>
                    	    </td>
                    	    <td>diag10_2</td>
                    	    <td>
                    	    <FONT SIZE=-2>
                    	    0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
                    	    1 2 0 4 5 9 8 3 6 7 &nbsp;&nbsp 5 7 9 1 6 2 0 4 3 8 <br>
                    	    6 0 5 9 2 3 1 4 7 8 &nbsp;&nbsp 8 6 3 7 9 0 4 2 1 5 <br>
                    	    9 4 3 7 6 8 2 0 5 1 &nbsp;&nbsp 1 9 5 6 7 4 8 3 2 0 <br>
                    	    7 3 6 8 9 1 5 2 0 4 &nbsp;&nbsp 2 8 1 9 5 6 7 0 4 3 <br>
                    	    5 8 1 6 3 4 7 9 2 0 &nbsp;&nbsp 4 3 7 0 1 8 9 6 5 2 <br>
                    	    2 9 8 0 7 6 3 1 4 5 &nbsp;&nbsp 3 4 6 5 0 9 2 8 7 1 <br>
                    	    3 6 7 5 1 0 4 8 9 2 &nbsp;&nbsp 9 2 4 8 3 7 5 1 0 6 <br>
                    	    4 5 9 2 8 7 0 6 1 3 &nbsp;&nbsp 6 0 8 4 2 3 1 5 9 7 <br>
                    	    8 7 4 1 0 2 9 5 3 6 &nbsp;&nbsp 7 5 0 2 8 1 3 9 6 4 <br>
                    	    </FONT>
                    	    </td>
                        </tr>
                        <tr>
                    	    <td> 8 </td> 
                    	    <td> <b>2013-01-17 12:15:28 UTC </b> </td>
                    	    <td>
                    	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=5871'>tanos</a> from 
                            <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=1752'>Astronomy.Ru Forum</a>
                            <br>
                    	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=4505'>EDGeSUser</a> 
                    	    </td>
                    	    <td>diag10_2</td>
                    	    <td> 
                    	    <FONT SIZE=-2>
                    	    0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
                    	    1 2 0 4 6 3 5 9 7 8 &nbsp;&nbsp 3 9 5 6 8 7 1 0 2 4 <br>
                    	    2 3 8 9 1 6 7 4 0 5 &nbsp;&nbsp 6 8 7 5 9 4 0 1 3 2 <br>
                    	    3 8 1 6 0 9 2 5 4 7 &nbsp;&nbsp 1 0 6 2 7 8 4 9 5 3 <br>
                    	    7 9 3 8 5 0 4 6 1 2 &nbsp;&nbsp 8 2 4 1 3 6 9 5 0 7 <br>
                    	    6 4 9 2 3 7 0 8 5 1 &nbsp;&nbsp 9 7 3 8 0 1 2 6 4 5 <br>
                    	    9 5 7 1 8 4 3 0 2 6 &nbsp;&nbsp 4 6 9 7 2 3 5 8 1 0 <br>
                    	    4 7 5 0 9 2 8 1 6 3 &nbsp;&nbsp 2 5 8 9 1 0 3 4 7 6 <br>
                    	    5 6 4 7 2 8 1 3 9 0 &nbsp;&nbsp 7 3 0 4 5 9 8 2 6 1 <br>
                    	    8 0 6 5 7 1 9 2 3 4 &nbsp;&nbsp 5 4 1 0 6 2 7 3 9 8 <br>
                    	    </FONT>
                    	    </td>
                        </tr>
                        <tr>
                    	    <td> 9 </td>
                    	    <td> <b>2013-01-28 12:33:35 UTC </b> </td>
                    	    <td> 
                    	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2003'>http://vkontakte.ru/boinc</a> from
                    	    <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=1502'>Colombia</a>
                    	    <br>
                	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=6799'>Voyager</a> from 
                            <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=1752'>Astronomy.Ru Forum</a>
                    	    </td>
                    	    <td>diag10_2</td>
                    	    <td> 
                    	    <FONT SIZE=-2>
                    	    0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
                    	    1 2 0 4 6 3 9 5 7 8 &nbsp;&nbsp 4 9 1 2 3 7 5 8 0 6 <br>
                    	    5 9 3 6 2 4 7 8 0 1 &nbsp;&nbsp 2 4 8 0 7 1 9 3 6 5 <br>
                    	    4 5 7 8 3 0 2 1 9 6 &nbsp;&nbsp 7 6 3 5 0 4 1 9 2 8 <br>
                    	    2 3 5 0 9 6 8 4 1 7 &nbsp;&nbsp 8 5 0 9 1 2 7 6 3 4 <br>
                    	    8 6 4 1 0 7 5 9 2 3 &nbsp;&nbsp 1 7 9 8 5 6 3 0 4 2 <br>
                    	    6 8 9 5 7 2 1 3 4 0 &nbsp;&nbsp 9 0 6 4 8 3 2 1 5 7 <br>
                    	    7 0 1 2 8 9 4 6 3 5 &nbsp;&nbsp 5 3 7 6 2 8 0 4 9 1 <br>
                    	    9 4 6 7 1 8 3 0 5 2 &nbsp;&nbsp 3 8 5 1 6 9 4 2 7 0 <br>
                    	    3 7 8 9 5 1 0 2 6 4 &nbsp;&nbsp 6 2 4 7 9 0 8 5 1 3 <br>
                    	    </FONT>
                    	    </td>
                        </tr>
                        <tr> 
                    	    <td> 10 </td>
                    	    <td> <b>2013-02-14 20:37:06 UTC </b> </td>
                    	    <td> 
                    	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=7442'>Ivan</a>
                    	    <br>
                    	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=307'>Joe</a> from
                    	    <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=228'>TeAm AnandTech</a> 
                    	    </td>
                    	    <td>diag10_2</td>
                    	    <td> 
                    	    <FONT SIZE=-2>
                    	    0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
                    	    1 2 0 4 6 7 9 5 3 8 &nbsp;&nbsp 6 7 4 5 9 3 0 8 1 2 <br>
                    	    6 9 8 5 1 3 2 0 4 7 &nbsp;&nbsp 7 6 1 0 3 4 8 2 9 5 <br>
                    	    9 0 3 1 2 6 5 8 7 4 &nbsp;&nbsp 8 5 7 9 1 2 3 6 4 0 <br>
                    	    3 4 5 0 7 1 8 9 6 2 &nbsp;&nbsp 9 2 6 1 8 7 5 4 0 3 <br>
                    	    7 3 9 2 8 4 0 1 5 6 &nbsp;&nbsp 2 8 3 4 0 6 9 5 7 1 <br>
                    	    8 5 6 7 9 2 3 4 0 1 &nbsp;&nbsp 4 9 5 6 7 0 2 1 3 8 <br>
                    	    5 7 4 9 3 8 1 6 2 0 &nbsp;&nbsp 1 0 8 2 5 9 4 3 6 7 <br>
                    	    4 6 1 8 5 0 7 2 9 3 &nbsp;&nbsp 3 4 0 7 2 8 1 9 5 6 <br>
                    	    2 8 7 6 0 9 4 3 1 5 &nbsp;&nbsp 5 3 9 8 6 1 7 0 2 4 <br>
                    	    </FONT>
                    	    </td>
                        </tr>
                        <tr> 
                    	    <td> 11 </td>
                    	    <td> <b>2013-02-22 07:26:52 UTC</b> </td>
                    	    <td> 
                    	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=7442''>Ivan</a>
                    	    <br>
                    	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=7148'>RoSMag</a> from
                	    <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=1440'>TSC! Russia</a>
                    	    </td>
                    	    <td>diag10_2</td>
                    	    <td> 
                    	    <FONT SIZE=-2>
                    	    0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
                    	    1 2 0 4 6 8 9 5 7 3 &nbsp;&nbsp 4 7 6 8 9 2 1 3 5 0 <br>
                    	    5 9 4 0 3 7 2 1 6 8 &nbsp;&nbsp 7 6 9 5 8 1 3 2 0 4 <br>
                    	    9 7 8 6 2 1 3 0 5 4 &nbsp;&nbsp 3 0 1 2 5 9 4 8 6 7 <br>
                    	    6 3 1 7 5 4 0 8 9 2 &nbsp;&nbsp 5 2 8 4 1 3 9 0 7 6 <br>
                    	    4 8 7 9 0 3 5 6 2 1 &nbsp;&nbsp 2 9 3 0 7 6 8 1 4 5 <br>
                    	    7 5 3 2 1 9 8 4 0 6 &nbsp;&nbsp 9 4 7 1 0 8 5 6 2 3 <br>
                    	    2 4 5 1 8 6 7 9 3 0 &nbsp;&nbsp 8 5 0 6 3 7 2 4 9 1 <br>
                    	    3 6 9 8 7 0 4 2 1 5 &nbsp;&nbsp 1 8 5 7 6 4 0 9 3 2 <br>
                    	    8 0 6 5 9 2 1 3 4 7 &nbsp;&nbsp 6 3 4 9 2 0 7 5 1 8 <br>
                    	    </FONT>
                    	    </td>
                        </tr>
                        <tr> 
			    <td> 12 </td>
			    <td> <b>2013-03-04 17:17:02 UTC</b> </td>
			    <td><a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=7148'>RoSMag</a> from
                	    <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=1440'>TSC! Russia</a>
                	    <br>
			    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=3856'>dimawalker</a> </td>
			    <td>diag10_2</td>
			    <td> 
			    <FONT SIZE=-2>
			    0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
			    1 2 0 4 6 9 5 3 7 8 &nbsp;&nbsp 9 8 4 7 0 3 2 5 1 6 <br>
			    8 5 3 1 9 7 4 0 2 6 &nbsp;&nbsp 7 0 6 5 8 9 1 3 4 2 <br>
			    7 4 1 5 8 0 2 9 6 3 &nbsp;&nbsp 8 3 7 9 2 6 0 4 5 1 <br>
			    6 3 9 2 7 1 0 8 5 4 &nbsp;&nbsp 3 4 0 1 5 2 7 9 6 8 <br>
			    5 9 7 8 3 6 1 2 4 0 &nbsp;&nbsp 4 2 3 0 7 1 8 6 9 5 <br>
			    9 7 4 6 2 3 8 1 0 5 &nbsp;&nbsp 1 6 5 4 9 8 3 0 2 7 <br>
			    2 6 5 9 0 8 3 4 1 7 &nbsp;&nbsp 5 7 8 6 1 4 9 2 3 0 <br>
			    3 8 6 0 1 4 7 5 9 2 &nbsp;&nbsp 2 5 9 8 6 0 4 1 7 3 <br>
			    4 0 8 7 5 2 9 6 3 1 &nbsp;&nbsp 6 9 1 2 3 7 5 8 0 4 <br>
			    </FONT>
			    </td>
			</tr>
                        <tr> 
                    	    <td> 13 </td>
                    	    <td> <b>2013-03-06 03:57:13 UTC </b> </td>
                    	    <td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2335'>[SG]KidDoesCrunch</a> from 
                    	    <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=10'>SETI.Germany</a>
                    	    <br>
                    	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=1951'>phelix</a>  from
                    	    <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=191'>Swiss Team</a>
                    	    </td>
                    	    <td>diag10_2</td>
                    	    <td> 
                    	    <FONT SIZE=-2>
                    	    0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
                    	    1 2 0 4 6 8 9 5 7 3 &nbsp;&nbsp 7 6 9 0 5 4 1 3 2 8 <br>
                    	    9 5 8 6 7 4 1 3 2 0 &nbsp;&nbsp 6 0 7 9 8 2 3 1 4 5 <br>
                    	    2 3 1 7 0 9 5 8 4 6 &nbsp;&nbsp 8 5 6 1 2 7 4 0 9 3 <br>
                    	    6 0 5 8 9 1 7 2 3 4 &nbsp;&nbsp 2 4 1 5 3 8 0 9 6 7 <br>
                    	    7 4 9 5 2 3 0 1 6 8 &nbsp;&nbsp 5 3 4 8 0 9 7 2 1 6 <br>
                    	    3 8 7 0 1 6 4 9 5 2 &nbsp;&nbsp 4 2 3 6 9 0 8 5 7 1 <br>
                    	    5 9 4 2 8 7 3 6 0 1 &nbsp;&nbsp 9 8 5 7 1 6 2 4 3 0 <br>
                    	    4 6 3 9 5 2 8 0 1 7 &nbsp;&nbsp 1 7 0 2 6 3 9 8 5 4 <br>
                    	    8 7 6 1 3 0 2 4 9 5 &nbsp;&nbsp 3 9 8 4 7 1 5 6 0 2 <br>
                    	    </FONT>
                    	    </td>
                        </tr>
                        <tr> 
                    	    <td> 14 </td>
                    	    <td> <b>2013-04-16 15:50:44 UTC</b> </td>
                    	    <td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=3856'>dimawalker</a>
                    		 <br>
                    		 <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=5871'>tanos</a> from 
                        	 <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=1752'>Astronomy.Ru Forum</a>
                    	    </td>
                    	    <td>diag10_2</td>
                    	    <td> 
                    	    <FONT SIZE=-2>
                    	    0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
                    	    1 2 0 4 7 6 8 9 3 5 &nbsp;&nbsp 9 3 5 8 2 7 0 6 4 1 <br> 
                    	    4 6 3 2 0 8 9 5 7 1 &nbsp;&nbsp 6 8 9 4 1 2 7 0 5 3 <br>
                    	    6 8 9 5 3 2 1 4 0 7 &nbsp;&nbsp 4 6 1 7 5 0 2 3 9 8 <br> 
                    	    7 5 8 9 1 4 2 3 6 0 &nbsp;&nbsp 3 9 7 2 6 1 5 8 0 4 <br> 
                    	    3 7 5 0 8 9 4 1 2 6 &nbsp;&nbsp 7 0 4 6 3 8 9 5 1 2 <br>
                    	    8 3 1 6 9 0 7 2 5 4 &nbsp;&nbsp 1 2 8 5 0 3 4 9 6 7 <br> 
                    	    5 4 7 8 2 1 0 6 9 3 &nbsp;&nbsp 2 5 6 9 7 4 8 1 3 0 <br> 
                    	    9 0 6 1 5 7 3 8 4 2 &nbsp;&nbsp 5 7 3 0 8 9 1 4 2 6 <br> 
                    	    2 9 4 7 6 3 5 0 1 8 &nbsp;&nbsp 8 4 0 1 9 6 3 2 7 5 <br> 
                    	    </FONT>
                    	    </td>
                        </tr>
                        <tr> 
                    	    <td> 15 </td>
                    	    <td> <b>2013-04-18 16:22:20 UTC</b> </td>
                    	    <td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2443'>Alex</a> from  
                    		 <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=59'>St.Petersburg</a>
                    		 <br>
                    		 <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=8673'>DrPop [BlackOps]</a> from
                    		 <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=16'>SETI.USA</a>
                    	    </td>
                    	    <td>diag10_2</td>
                    	    <td>
                    	    <FONT SIZE=-2> 
                    	    0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
                    	    1 2 0 4 7 3 9 5 6 8 &nbsp;&nbsp 8 7 9 6 2 4 0 3 1 5 <br>
                    	    6 3 5 0 2 9 1 8 4 7 &nbsp;&nbsp 3 0 4 8 9 1 5 2 7 6 <br>
                    	    8 0 7 9 5 6 2 4 1 3 &nbsp;&nbsp 4 2 0 5 6 7 3 8 9 1 <br>
                    	    3 4 6 1 8 0 7 9 5 2 &nbsp;&nbsp 2 3 5 7 1 6 9 4 0 8 <br>
                    	    7 6 9 5 1 4 8 2 3 0 &nbsp;&nbsp 1 4 8 2 0 9 7 5 6 3 <br>
                    	    2 8 4 7 9 1 3 6 0 5 &nbsp;&nbsp 6 9 1 4 3 2 8 0 5 7 <br>
                    	    5 7 3 2 6 8 0 1 9 4 &nbsp;&nbsp 9 5 7 1 8 3 4 6 2 0 <br>
                    	    9 5 8 6 3 2 4 0 7 1 &nbsp;&nbsp 7 8 6 9 5 0 2 1 3 4 <br>
                    	    4 9 1 8 0 7 5 3 2 6 &nbsp;&nbsp 5 6 3 0 7 8 1 9 4 2 <br>
                    	    </FONT>
                    	    </td>
                        </tr>
                        <tr> 
                    	    <td> 16 </td>
                    	    <td> <b>2013-05-13 03:48:19 UTC</b> </td>
                    	    <td> 
                    	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=6040'>Koof</a> from 
                    	    <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=19'>Russia Team</a>
                    	    <br>
                    	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=5029'>steve</a>
                    	    </td>
                    	    <td>diag10_2</td>
                    	    <td> 
                    	    <FONT SIZE=-2>
                    	    0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
                    	    1 2 0 4 7 9 3 6 5 8 &nbsp;&nbsp 9 5 6 1 3 7 2 8 0 4 <br>
                    	    2 5 8 9 1 6 4 0 3 7 &nbsp;&nbsp 4 2 3 6 0 9 8 1 7 5 <br>
                    	    8 6 5 1 0 7 2 3 9 4 &nbsp;&nbsp 7 0 1 8 9 4 3 5 2 6 <br>
                    	    3 4 9 8 6 1 7 5 0 2 &nbsp;&nbsp 8 7 5 9 2 6 0 3 4 1 <br>
                    	    5 9 4 7 8 3 0 1 2 6 &nbsp;&nbsp 6 8 0 2 5 1 7 4 9 3 <br>
                    	    7 0 3 6 5 8 9 2 4 1 &nbsp;&nbsp 1 3 9 7 8 0 4 6 5 2 <br>
                    	    9 8 7 5 2 0 1 4 6 3 &nbsp;&nbsp 3 6 8 4 7 2 5 9 1 0 <br>
                    	    6 3 1 2 9 4 5 8 7 0 &nbsp;&nbsp 5 4 7 0 1 3 9 2 6 8 <br>
                    	    4 7 6 0 3 2 8 9 1 5 &nbsp;&nbsp 2 9 4 5 6 8 1 0 3 7 <br>
                    	    </FONT>
                    	    </td>
                        </tr>
                        <tr> 
                    	    <td> 17 </td>
                    	    <td> <b>2013-05-20 21:08:52 UTC</b> </td>
                    	    <td> 
                    	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=3865'>keta</a>
                    	    <br>
                    	    <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=7148'>RoSMag</a> from
                	    <a href = 'http://sat.isa.ru/pdsat/team_display.php?teamid=1440'>TSC! Russia</a>  
                    	    </td>
                    	    <td>diag10_2</td>
                    	    <td> 
                    	    <FONT SIZE=-2>
                    	    0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp 0 1 2 3 4 5 6 7 8 9 <br>
                    	    1 2 0 4 7 9 5 3 6 8 &nbsp;&nbsp 6 9 8 7 3 0 2 5 4 1 <br>
                    	    5 6 3 7 9 8 0 4 1 2 &nbsp;&nbsp 8 2 4 0 1 9 7 6 5 3 <br>
                    	    4 7 5 8 1 6 2 0 9 3 &nbsp;&nbsp 5 4 0 6 9 7 8 1 3 2 <br>
                    	    3 8 4 9 6 0 1 2 7 5 &nbsp;&nbsp 9 7 1 8 5 3 0 4 2 6 <br>
                    	    8 9 1 2 5 7 3 6 4 0 &nbsp;&nbsp 2 6 3 5 7 8 1 0 9 4 <br>
                    	    9 0 7 1 8 2 4 5 3 6 &nbsp;&nbsp 4 5 6 2 0 1 3 9 7 8 <br>
                    	    2 5 8 6 3 1 7 9 0 4 &nbsp;&nbsp 7 3 5 1 8 4 9 2 6 0 <br>
                    	    6 3 9 0 2 4 8 1 5 7 &nbsp;&nbsp 3 0 7 9 6 2 4 8 1 5 <br>
                    	    7 4 6 5 0 3 9 8 2 1 &nbsp;&nbsp 1 8 9 4 2 6 5 3 0 7 <br>
                    	    </FONT>
                    	    </td>
                        </tr>
	    </table>
	    
	    <table class = 'my_contacts'>
		<FONT SIZE=+1>".tra("Cryptanalysis of the keystream generator A5/1").".</FONT> 
		<br>
		<br>
		".tra("Start of the experiment").": 2011-12-21
			<th> № </th>
			<th> ".tra("Date")."</th> 
			<th>".tra("Users")."</th>
			<th>".tra("Problem")."</th> 
			<th>".tra("Value (in hex format)")."</th>
                            <tr>
                            <td>1</td>
                            <td> <b>2011-12-24 00:05:47 UTC</b></td>
                            <td> ".tra("<a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=19'>zombie67 [MM]</a>")."</a> </td>
                            <td>a5-1_test1</td>
                            <td>A9792C4F5FC8842A</td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td> <b>2012-01-04 11:31:43 UTC</b></td>
                            <td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=889'>T.H.@jisaku</a> / 
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=1857'>joeyraj</a> </td>
                            <td>a5-1_test2</td>
                            <td>6AD4D3D11F6094E2</td>
                            </tr>
                            <tr>
                            <td>3</td>
                            <td> <b>2012-02-02 15:27:36 UTC</b></td>
                            <td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2445'>Traviss</a> / 
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2511'>[SG-SPEG]Jeeper74</a> </td>
                            <td>a5-1_test3</td>
                            <td>8E0465CB1571DC2B</td>
                            </tr>
                            <tr>
                            <td>4</td>
                            <td> <b>2012-02-16 10:28:08 UTC</b></td>
                            <td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2025'>verstapp</a> / 
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2515'>[SG-SPEG] Nullinger</a> </td>
                            <td>a5-1_test4</td>
                            <td>E9328617B6D23FA6</td>
                            </tr>
                            <tr>
                            <td>5</td>
                            <td> <b><b>2012-03-03 07:27:18 UTC</b>
                            <br>
                            2012-03-05 20:55:10 UTC
                            </td>
                            <td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=243'>Rabinovitch</a> / 
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2335'>[SG]KidDoesCrunch</a> 
                            <br>
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=189'>Evgeny Cherkashin</a> /
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2536'>FlyWin</a></td>
                            <td>a5-1_test5 </td>
                            <td>7A1FF04CD4F45660 <br> F43FF04CD4F45660</td>
                            </tr>
                            <tr>
                            <td>6</td>
                            <td> <b>2012-03-15 11:50:27 UTC</b>
                            <br>
                            <b>2012-03-17 06:49:10 UTC</b>
                            </td>
                            <td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=223'>Domochevskiy</a> / 
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2201'>1090T</a> 
                            <br> <a href='http://sat.isa.ru/pdsat/show_user.php?userid=1984'>Lisovin</a> / 
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=2657'>korvin</a></td>
                            <td>a5-1_test6</td>
                            <td>5CAB34F2242C6DF1 <br> B95654F2242C6DF1</td>
                            </tr>
                            <tr>
                            <td>7</td>
                            <td><b>2012-03-28 13:29:09 UTC</b></td>
                            <td> <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=64'>Jeff17</a> /
                            <a href = 'http://sat.isa.ru/pdsat/show_user.php?userid=1902'>Bigred</a></td>
                            <td>a5-1_test7</td>
                            <td>EE5143D7F15E673D</td>
                            </tr>
                            <tr>
                            <td>8</td>
                            <td><b>2012-04-10 12:46:04 UTC
                            <br>
                            <b>2012-04-12 04:23:14 UTC</b>
                            </td>
                            <td> <a href='http://sat.isa.ru/pdsat/show_user.php?userid=3210'>eLPeCKo</a> / <a href='http://sat.isa.ru/pdsat/show_user.php?userid=154'>koll</a> 
                            <br>
                            <a href='http://sat.isa.ru/pdsat/show_user.php?userid=3366'>Gary Pilarski</a> / <a href='http://sat.isa.ru/pdsat/show_user.php?userid=2061'>citerra[boinc.ru]</a>
                            </td>
                            <td>a5-1_test8</td>
                            <td>67685940B034EF78
                            <br>
                            B3B43940B034EF78</td>
                            </tr> 
                            <tr>
                            <td>9</td>
                            <td> <b>2012-04-25 07:08:05 UTC</b> </td>
                            <td> <a href='http://sat.isa.ru/pdsat/show_user.php?userid=88'>bronevik</a> / <a href='http://sat.isa.ru/pdsat/show_user.php?userid=2026'>KWH*</a></td>
                            <td>a5-1_test9</td>
                            <td>
                            41038717BBA05E57</td>
                            </tr>
                            <tr>
                            <td>10</td>
                            <td> <b>2012-05-07 12:28:55 UTC</b> </td>
                            <td> <a href='http://sat.isa.ru/pdsat/show_user.php?userid=166'>CTPAHHNK</a> / <a href='http://sat.isa.ru/pdsat/show_user.php?userid=334'>Alexone</a>  </td>
                            <td>a5-1_test10</td>
                            <td>BF3D2297D5D11D66</td>
                            
                </table>
                            ";
                                                        
                    	    page_tail();
                            ?>
                            
                            
