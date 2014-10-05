<?php
    session_start();
    require_once("../inc/db.inc");
    require_once("../inc/util.inc");
    require_once(html_path("project/project.inc"));

    page_head(PROJECT . " Diagrams");
?>

<table width="100%">
    <tr><td align="center">
	<div class="image">
	    <img src="performance/wu_total14day.jpg">
	    <div>Total number of workunits for the last 14 days</div>
	</div>
    </td></tr>
    <tr><td align="center">
	<div class="image">
	    <img src="performance/wu_unsent14day.jpg">
	    <div>Number of unsent workunits for the last 14 days</div>
	</div>
    </td></tr>
    <tr><td align="center">
	<div class="image">
	    <img src="performance/wu_inprogress14day.jpg">
	    <div>Number of in-progress workunits for the last 14 days</div>
	</div>
    </td></tr>
    <tr><td align="center">
	<div class="image">
	    <img src="performance/performance48.jpg">
	    <div>Last 48 hours performance</div>
	</div>
    </td></tr>
    <tr><td align="center">
	<div class="image">
	    <img src="performance/performance168.jpg">
	    <div>Last 168 hours performance</div>
	</div>
    </td></tr>
    <tr><td align="center">
	<div class="image">
	    <img src="performance/performance28day.jpg">
	    <div>Last 4 weeks performance</div>
	</div>
    </td></tr>
    <tr><td align="center">
    	<div class="image">
            <img src="performance/performance12month.jpg">
    	    <div>Last 12 months performance</div>
    	</div>
    </td></tr>
</table>

<?php
    page_tail();
?>
