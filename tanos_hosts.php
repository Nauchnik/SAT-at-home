<?php
	require_once('../inc/util.inc');
	require_once('../inc/boinc_db.inc');

	$config = get_config();
	$host = parse_config($config, "<db_host>");
	$database = parse_config($config, "<db_name>");;
	$user = parse_config($config, "<db_user>");
	$password = parse_config($config, "<db_passwd>");
	$query =
"SELECT HOST.ID AS HOST_ID,
       HOST.LAST_IP_ADDR AS HOST_IP_ADDR,
       HOST.DOMAIN_NAME AS HOST_NAME,
       DATE_FORMAT(FROM_UNIXTIME(RPC_TIME), '%Y.%m.%d %H:%i:%s') AS HOST_LAST_CONTACT,
       ROUND(EXPAVG_CREDIT, 0) AS HOST_AVERAGE_CREDIT,
       ROUND(TOTAL_CREDIT, 0) AS HOST_TOTAL_CREDIT,
       IFNULL(PENDING.RESULTS_COUNT, 0) AS RESULTS_IN_PENDING,
       IFNULL(PROGRESS.RESULTS_COUNT, 0) AS RESULTS_IN_PROGRESS
  FROM HOST
  LEFT
  JOIN
      (
	SELECT HOSTID AS HOST_ID,
	       COUNT(*) AS RESULTS_COUNT
	  FROM RESULT
	 WHERE SERVER_STATE = 5
	       AND CLIENT_STATE = 5
	       AND VALIDATE_STATE = 0
	       AND USERID = 5871
	 GROUP BY HOST_ID
      ) AS PENDING ON PENDING.HOST_ID = HOST.ID
  LEFT
  JOIN
      (
	SELECT HOSTID AS HOST_ID,
	       COUNT(*) AS RESULTS_COUNT
	  FROM RESULT
	 WHERE SERVER_STATE = 4
	       AND CLIENT_STATE = 0
	       AND VALIDATE_STATE = 0
	       AND USERID = 5871
	 GROUP BY HOST_ID
      ) AS PROGRESS ON PROGRESS.HOST_ID = HOST.ID
 WHERE HOST.USERID = 5871";

	$queryOrder ="";
	$orderField = "";
	$cursor_id = 0;
			
	if (isset($_GET['sortby']))
	{
		$orderField = $_GET['sortby'];
	}
	else
	{
		$orderField = "LastContact";
	}
			
	switch ($orderField)
	{
		case "Id":
			$queryOrder = " ORDER BY HOST_ID";
		break;

		case "IP":
			$queryOrder = " ORDER BY HOST_IP_ADDR";
		break;

		case "Name":
			$queryOrder = " ORDER BY HOST_NAME";
		break;

		case "Contact":
			$queryOrder = " ORDER BY HOST_LAST_CONTACT DESC";
		break;

		case "RAC":
			$queryOrder = " ORDER BY HOST_AVERAGE_CREDIT DESC";
		break;

		case "Credit":
			$queryOrder = " ORDER BY HOST_TOTAL_CREDIT DESC";
		break;

		case "InProgress":
			$queryOrder = " ORDER BY RESULTS_IN_PROGRESS DESC";
		break;

		case "InPending":
			$queryOrder = " ORDER BY RESULTS_IN_PENDING DESC";
		break;

		default:
			$queryOrder = " ORDER BY HOST_ID";
	}

	$query = $query.$queryOrder;
	$connect_id = mysql_pconnect($host, $user, $password);
	mysql_set_charset('utf8', $connect_id);

	if ($connect_id > 0)
	{
		$result = mysql_select_db($database, $connect_id);
		$cursor_id = mysql_query($query);
		if ($cursor_id > 0)
		{
			$hosts[0] = array
			(
				"rank" => 0,
				"hostId" => 0,
				"hostIPAddr" => "",
				"hostName" => 0,
				"hostLastContact" => 0,
				"hostAverageCredit" => 0,
				"hostTotalCredit" => 0,
				"resultsInPending" => 0,
				"resultsInProgress" => 0
			);

			$sumHostAverageCredit = 0;
			$sumHostTotalCredit = 0;
			$sumResultsInPending = 0;
			$sumResultsInProgress = 0;

			$rowIndex = 0;
			$rowsCount = 0;
			while ($row = mysql_fetch_array($cursor_id))
			{
				$hosts[$rowIndex] = array
				(
					"rank" => $rowIndex,
					"hostId" => $row["HOST_ID"],
					"hostIPAddr" => $row["HOST_IP_ADDR"],
					"hostName" => $row["HOST_NAME"],
					"hostLastContact" => $row["HOST_LAST_CONTACT"],
					"hostAverageCredit" => $row["HOST_AVERAGE_CREDIT"],
					"hostTotalCredit" => $row["HOST_TOTAL_CREDIT"],
					"resultsInPending" => $row["RESULTS_IN_PENDING"],
					"resultsInProgress" => $row["RESULTS_IN_PROGRESS"]
				);

				$sumHostAverageCredit = $sumHostAverageCredit + $row["HOST_AVERAGE_CREDIT"];
				$sumHostTotalCredit = $sumHostTotalCredit + $row["HOST_TOTAL_CREDIT"];
				$sumResultsInPending = $sumResultsInPending + $row["RESULTS_IN_PENDING"];
				$sumResultsInProgress = $sumResultsInProgress + $row["RESULTS_IN_PROGRESS"];

				$rowIndex++;
			}
			mysql_free_result($cursor_id);
			$rowsCount = $rowIndex;

			page_head(tra("Tanos hosts", "All"));

			echo "<table>";
			echo "<tr><td>Rank</td>".
				"<td><a href=tanos_hosts.php?sortby=Id>ID</a></td>".
				"<td><a href=tanos_hosts.php?sortby=IP>IP address</a></td>".
				"<td><a href=tanos_hosts.php?sortby=Name>Domain name</a></td>".
				"<td><a href=tanos_hosts.php?sortby=Contact>Last contact</a></td>".
				"<td><a href=tanos_hosts.php?sortby=RAC>Recent Average Credit</a></td>".
				"<td><a href=tanos_hosts.php?sortby=Credit>Total Credit</a></td>".
				"<td><a href=tanos_hosts.php?sortby=InPending>Results in pending</a></td>".
				"<td><a href=tanos_hosts.php?sortby=InProgress>Results in progress</a></td></tr>";

			for ($rowIndex = 0; $rowIndex < $rowsCount; $rowIndex++)
			{
				echo "<tr><td>".$hosts[$rowIndex]["rank"]."</td>".
					"<td><a href=show_host_detail.php?hostid=".$hosts[$rowIndex]["hostId"].">".$hosts[$rowIndex]["hostId"]."</a></td>".
					"<td>".$hosts[$rowIndex]["hostIPAddr"]."</td>".
					"<td>".$hosts[$rowIndex]["hostName"]."</td>".
					"<td>".$hosts[$rowIndex]["hostLastContact"]."</td>".
					"<td>".$hosts[$rowIndex]["hostAverageCredit"]."</td>".
					"<td>".$hosts[$rowIndex]["hostTotalCredit"]."</td>".
					"<td><a href=results.php?hostid=".$hosts[$rowIndex]["hostId"]."&offset=0&show_names=0&state=2>".$hosts[$rowIndex]["resultsInPending"]."</a></td>".
					"<td><a href=results.php?hostid=".$hosts[$rowIndex]["hostId"]."&offset=0&show_names=0&state=1>".$hosts[$rowIndex]["resultsInProgress"]."</a></td></tr>";
			}

			echo "<tr><td>TOTAL:</td>".
				"<td>".$rowsCount."</td>".
				"<td>-</td>".
				"<td>-</td>".
				"<td>-</td>".
				"<td>".$sumHostAverageCredit."</td>".
				"<td>".$sumHostTotalCredit."</td>".
				"<td>".$sumResultsInPending."</td>".
				"<td>".$sumResultsInProgress."</td></tr>";

			echo "</table>";

			page_tail();
		}
		else
		{
			page_head(tra("Tanos hosts", "All"));
			echo "<p>Error while retrive data</p>";
			page_tail();
		}
	}
	else
	{
		page_head(tra("Tanos hosts", "All"));
		echo "<p>Error while connect</p>";
		page_tail();
	}
	$result = mysql_close($connect_id);
?>