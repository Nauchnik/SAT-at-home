<?php
	function DisplayedValue($value, $precision)
	{
		$valueToDisplay = "";

		if ($value >= 0)
		{
			$valueToDisplay = number_format($value, $precision, ".", "");
		}
		else
		{
			$valueToDisplay = 'N/A';
		}

		return $valueToDisplay;
	}

	require_once('../inc/util.inc');
	require_once('../inc/boinc_db.inc');

	$config = get_config();
	$host = parse_config($config, "<db_host>");
	$database = parse_config($config, "<db_name>");;
	$user = parse_config($config, "<db_user>");
	$password = parse_config($config, "<db_passwd>");

	$subprojectsListQuery =
"SELECT
	ID,
	NAME,
	WORKUNITS_TOTAL,
	WORKUNITS_DELETED,
	WORKUNITS_MASK
  FROM RESEARCH_PROGRESS
 ORDER BY ID";

	$subprojectsQueryTemplate = 
"SELECT
	COUNT(*) AS WORKUNITS_GENERATED,
	COUNT(IF(CANONICAL_RESULTID > 0, 1, NULL)) AS WORKUNITS_COMPLETED
  FROM WORKUNIT
 WHERE NAME LIKE ':Mask'";

	$subprojectsQuery = "";

	$subprojects = array(0);
	$subprojectsCount = 0;
	$cursor_id = 0;
	$connect_id = mysql_pconnect($host, $user, $password);
	mysql_set_charset('utf8', $connect_id);

	if ($connect_id > 0)
	{
		$result = mysql_select_db($database, $connect_id);
		$cursor_id = mysql_query($subprojectsListQuery);
		if ($cursor_id > 0)
		{
			// Retrive data into array 
			while ($row = mysql_fetch_array($cursor_id))
			{
				$subprojects[$subprojectsCount] = array(0);
				$subprojects[$subprojectsCount]["Id"] = $row["ID"];
				$subprojects[$subprojectsCount]["Name"] = $row["NAME"];
				$subprojects[$subprojectsCount]["TotalWorkunits"] = $row["WORKUNITS_TOTAL"];
				$subprojects[$subprojectsCount]["DeletedWorkunits"] = $row["WORKUNITS_DELETED"];
				$subprojects[$subprojectsCount]["Mask"] = $row["WORKUNITS_MASK"];

				$subprojectsCount++;
			}

			mysql_free_result($cursor_id);

			// Extract information about subprojects currently running 
			for ($i = 0; $i < $subprojectsCount; $i++)
			{
				// Extract information about subproject
				if ($subprojects[$i]["TotalWorkunits"] == $subprojects[$i]["DeletedWorkunits"])
				{
					// Set information about completed projects
					$subprojects[$i]["GeneratedWorkunits"] = $subprojects[$i]["TotalWorkunits"];
					$subprojects[$i]["CompletedWorkunits"] = $subprojects[$i]["TotalWorkunits"];
				}
				else
				{
					// Extract information about subproject
					$subprojectsQuery = str_replace(":Mask", $subprojects[$i]["Mask"], $subprojectsQueryTemplate);

					$subprojectsCursorId = mysql_query($subprojectsQuery);
					if ($subprojectsCursorId  > 0 && $row = mysql_fetch_array($subprojectsCursorId))
					{
						$subprojects[$i]["GeneratedWorkunits"] = $subprojects[$i]["DeletedWorkunits"] + $row["WORKUNITS_GENERATED"];
						$subprojects[$i]["CompletedWorkunits"] = $subprojects[$i]["DeletedWorkunits"] + $row["WORKUNITS_COMPLETED"];
						mysql_free_result($subprojectsCursorId);
					}
				}

				$subprojects[$i]["CompletionPCT"] = 100*$subprojects[$i]["CompletedWorkunits"] / $subprojects[$i]["TotalWorkunits"];

				$subprojects[$i]["DisplayedResearchName"] = $subprojects[$i]["Name"];
				$subprojects[$i]["DisplayedTotalWorkunits"] = DisplayedValue($subprojects[$i]["TotalWorkunits"], 0);
				$subprojects[$i]["DisplayedGeneratedWorkunits"] = DisplayedValue($subprojects[$i]["GeneratedWorkunits"], 0);
				$subprojects[$i]["DisplayedCompletedWorkunits"] = DisplayedValue($subprojects[$i]["CompletedWorkunits"], 0);
				$subprojects[$i]["DisplayedCompletionPCT"] = DisplayedValue($subprojects[$i]["CompletionPCT"], 2);
			}

			page_head(tra("Research progress", "All"));

			echo "<table>";
			echo "<tr><th>Research Name</th>".
				"<th>Workunits total</th>".
				"<th>Workunits generated</th>".
				"<th>Workunits completed</th>".
				"<th>% of completion</th></tr>";

			// Display information about subprojects
			for ($i = 0; $i < $subprojectsCount; $i++)
			{
				echo "<tr><td>".$subprojects[$i]["Name"]."</td>".
					"<td>".$subprojects[$i]["DisplayedTotalWorkunits"]."</td>".
					"<td>".$subprojects[$i]["DisplayedGeneratedWorkunits"]."</td>".
					"<td>".$subprojects[$i]["DisplayedCompletedWorkunits"]."</td>".
					"<td>".$subprojects[$i]["DisplayedCompletionPCT"]."</td></tr>";
			}

			echo "</table>";

			page_tail();
		}
		else
		{
			page_head(tra("Research progress", "All"));
			echo "<p>Error while retrive data</p>";
			page_tail();
		}
	}
	else
	{
		page_head(tra("Research progress", "All"));
		echo "<p>Error while connect</p>";
		page_tail();
	}
	$result = mysql_close($connect_id);
?>