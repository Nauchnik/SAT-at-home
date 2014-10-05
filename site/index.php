<?php
// This file is part of BOINC.
// http://boinc.berkeley.edu
// Copyright (C) 2008 University of California
//
// BOINC is free software; you can redistribute it and/or modify it
// under the terms of the GNU Lesser General Public License
// as published by the Free Software Foundation,
// either version 3 of the License, or (at your option) any later version.
//
// BOINC is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// See the GNU Lesser General Public License for more details.
//
// You should have received a copy of the GNU Lesser General Public License
// along with BOINC.  If not, see <http://www.gnu.org/licenses/>.

require_once("../inc/db.inc");
require_once("../inc/util.inc");
require_once("../inc/news.inc");
require_once("../inc/cache.inc");
require_once("../inc/uotd.inc");
require_once("../inc/sanitize_html.inc");
require_once("../inc/translation.inc");
require_once("../inc/text_transform.inc");
require_once(html_path("project/project.inc"));
require_once(html_path("project/project_news.inc"));


function show_nav() {
    $config = get_config();
    $master_url = parse_config($config, "<master_url>");
    echo "<div id=\"mainnav\">
        ".tra("<b>SAT@home</b> is a research project that uses Internet-connected computers to solve hard and practically important problems (discrete functions inversion problems, discrete optimization, bioinformatics, etc) that can be effectively reduced to %1Boolean satisfiability problem%2. At the moment we analyze Bivium cipher (weakened version of %3Trivium cipher%4).",
                "<a href=http://en.wikipedia.org/wiki/Boolean_satisfiability_problem>",
                "</a>",        
                "<a href=http://en.wikipedia.org/wiki/Trivium_(cipher)>",
                "</a>"
             )."
        <p>
        ".tra("<b>SAT@home</b> founded by")."
        <ul>
        <li> ".tra("%1Institue for System Dynamics and Control Theory of Siberian Branch of Russian Academy of Science%2, laboratory of Discrete Analysis and Applied Logic - a founding member of the %3International Desktop Grid Federation%4",
        	"<a href=http://www.idstu.irk.ru>",
        	"</a>",
        	"<a href=http://desktopgridfederation.org/>",
                "</a>"
             )."
        <li> ".tra("%1Institute for Information Transmission Problems of Russian Academy of Sciences%2, %3department of Distributed Computing%4 - a founding member of the %5International Desktop Grid Federation%6",
        	"<a href=http://www.iitp.ru/ru/about>",
                "</a>",
                "<a href=http://dcs.isa.ru/drupal/>",
                "</a>",
                "<a href=http://desktopgridfederation.org/>",
                "</a>"
             )."
        </ul>
        <h3>".tra("About")."</h3> 
        ".tra("Status").": <b>Beta</b><br>
        <ul>
        <li><a href=\"contacts.php\">".tra("Project personnel")."</a>
        <li><a href=\"science.php\">".tra("Science")."</a>
        <li><a href=\"faq.php\">".tra("FAQ")."</a>
        <li><a href=\"publications.php\">".tra("Publications and materials")."</a>
        <li><a href=\"grants.php\">".tra("Our grants")."</a>
        <li><a href=\"solutions.php\">".tra("Found solutions")."</a>
        <li><a href=https://github.com/Nauchnik>".tra("Source code")."</a>
        </ul>
        <h2>".tra("Join SAT@home")."</h2>
        <ul>
        <li> <a href=\"info.php\">".tra("Read our rules and policies")."</a>
        <li> ".tra("%1Download%2, install and launch BOINC client software",
        	"<a href=http://boinc.berkeley.edu/download.php>",
                "</a>"
             )."
        <li> ".tra("When prompted, enter URL:")." <br><b>$master_url</b>
        <li> ".tra("If you have any problems, %1get help here%2",
    		"<a target=\"_new\" href=\"http://boinc.berkeley.edu/help.php\">",
    		"</a>"
    	     )."	
        </ul>
        <h2>".tra("Information for participants")."</h2>
        <ul>
        <li> ".tra("%1Your account%2 - view stats, modify preferences",
    		"<a href=\"home.php\">",
    		"</a>"
    	     )."
    	<li> ".tra("%1Teams%2 - create or join a team",
    		"<a href=\"team.php\">",
    		"</a>"
    	     )."     
        <li><a href=\"cert1.php\">".tra("Certificate")."</a>
        <li> <a href=\"apps.php\">".tra("Applications")."</a>
	<li> <a href=\"server_status.php\">".tra("Server status")."</a>
	<li> <a href=\"performance.php\">" .tra("Project performance")."</a>
        <li> <a href=\"research_progress.php\">" .tra("Research progress")."</a>
        </ul>
        <h2>".tra("Community")."</h2>
        <ul>
        <li><a href=\"profile_menu.php\">".tra("Profiles")."</a>
        <li><a href=\"user_search.php\">".tra("User search")."</a>
        <li><a href=\"forum_index.php\">".tra("Message boards")."</a>
        <li><a href=\"stats.php\">".tra("Statistics")."</a>
        <li><a href=language_select.php>".tra("Languages")."</a>
        </ul>
        
    ";
}

$caching = false;

if ($caching) {
    start_cache(INDEX_PAGE_TTL);
}

$stopped = web_stopped();
$rssname = PROJECT . " RSS 2.0" ;
$rsslink = URL_BASE . "rss_main.php";

$charset = tra("CHARSET");

if ($charset != "CHARSET") {
    header("Content-type: text/html; charset=$charset");
}

echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">";

echo "<html>
    <head>
    <title>".PROJECT."</title>
	<link rel=\"stylesheet\" type=\"text/css\" href=\"main.css\" media=\"all\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"".STYLESHEET."\">
    <link rel=\"alternate\" type=\"application/rss+xml\" title=\"".$rssname."\" href=\"".$rsslink."\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <link rel=\"shortcut icon\" href=\"img/favicon.ico\" type=\"image/x-icon\" />
    <link rel=\"icon\" href=\"img/favicon.ico\" type=\"image/x-icon\" /> 
";
include html_path('project/schedulers.txt');
echo "
    </head><body>
    <table style='min-width:710px;' cellpadding=\'8\' cellspacing=\'4\'>
    <tr style='height: 110px'>
	<th colspan='2' style='background:none; text-align:left'><a href='http://desktopgridfederation.org/'>
	<img style='padding:0; margin:0; margin-top:15px; margin-left:-4px; float:left; ' src='img/logo.png'>  </a>
	<p  style='background:none; text-align:right; color: whiteSmoke; float:right; font-weight: bold; 
	font-size: 20px; margin-ridht:10px;'> ".tra("We unite you to solve<br>large scale SAT problems")."</p>
	</th>
     </tr>
    <tr><td rowspan='2' valign='top' width='60%'>
";

if ($stopped) {
    echo "
        <b>".PROJECT." is temporarily shut down for maintenance.
        Please try again later</b>.
    ";
} else {
    db_init();
    show_nav();
}

echo "
    <p>
    <a style='width:100%'  href=\"http://desktopgridfederation.org/\"><img align=\"middle\" style='padding-bottom:10px; margin:0 auto;' border=\"0\" src=\"img/BANNER_2.png\" alt=\"Powered by BOINC\"></a>
    <br>
    <a href=\"http://boinc.berkeley.edu/\"><img align=\"middle\" border=\"0\" src=\"img/pb_boinc.gif\" alt=\"Powered by BOINC\"></a>
    </p>
    </div>
    </td>
    
";

if (!$stopped) {
    $profile = get_current_uotd();
    if ($profile) {
        echo "
            <td id=\"uotd\">
            <h2>".tra("User of the day")."</h2>
        ";
        show_uotd($profile);
        echo "</td></tr>\n";
    }
}

echo "
    <tr><td id=\"news\">
    <h2>".tra("News")."</h2>
    <p>
";
show_news($project_news, 5);
if (count($project_news) > 5) {
    echo "<a href=\"old_news.php\">".tra("...more")."</a>";
}
echo "
    <p class=\"smalltext\">
    News is available as an
    <a href=\"rss_main.php\">RSS feed</a> <img src=\"img/rss_icon.gif\" alt=\"RSS\">.</p>
    </td>
    </tr></table>
    
    
";


if ($caching) {
    page_tail_main(true);
    end_cache(INDEX_PAGE_TTL);
} else {
    page_tail_main();
}
echo "
<br> <br> <br>
"
?>
