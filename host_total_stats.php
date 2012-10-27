		<?php

			require_once('../inc/util.inc');
			require_once('../inc/boinc_db.inc');

			$config = get_config();
			$host = parse_config($config, "<db_host>");
			$database = parse_config($config, "<db_name>");;
			$user = parse_config($config, "<db_user>");
			$password = parse_config($config, "<db_passwd>");

			$query =
"SELECT
    VENDOR,
    COUNT(*) HOSTS_TOTAL,
    SUM(P_NCPUS) AS CORES_TOTAL,
    COUNT(CASE WHEN TOTAL_CREDIT > 0 THEN 1 ELSE NULL END) AS HOSTS_WITH_CREDIT,
    COUNT(CASE WHEN RPC_TIME + 3600*24*7 > UNIX_TIMESTAMP(NOW()) THEN 1 ELSE NULL END) AS HOSTS_ACTIVE_LAST_WEEK,
    COUNT(CASE WHEN RPC_TIME + 3600*24 > UNIX_TIMESTAMP(NOW()) THEN 1 ELSE NULL END) AS HOSTS_ACTIVE_LAST_DAY,
    FLOOR(SUM(TOTAL_CREDIT)) AS TOTAL_CREDIT,
    FLOOR(SUM(EXPAVG_CREDIT)) AS EXPAVG_CREDIT
  FROM VW_HOST
 GROUP BY VENDOR";
			$queryOrder = "";
			$queryField = "";			
			$cursor_id = 0;

			if (isset($_GET['sortby']))
			{
				$orderField = $_GET['sortby'];
			}
			else
			{
				$orderField = "Credit";
			}

			switch ($orderField)
			{
				case "Vendor":
					$queryOrder = " ORDER BY VENDOR";
				break;

				case "HostsTotal":
					$queryOrder = " ORDER BY HOSTS_TOTAL DESC";
				break;

				case "CoresTotal":
					$queryOrder = " ORDER BY CORES_TOTAL DESC";
				break;

				case "HostsWithCredit":
					$queryOrder = " ORDER BY HOSTS_WITH_CREDIT DESC";
				break;

				case "ActiveLastWeek":
					$queryOrder = " ORDER BY HOSTS_ACTIVE_LAST_WEEK DESC";
				break;

				case "ActiveLastDay":
					$queryOrder = " ORDER BY HOSTS_ACTIVE_LAST_DAY DESC";
				break;

				case "Credit":
					$queryOrder = " ORDER BY TOTAL_CREDIT DESC";
				break;

				case "RAC":
					$queryOrder = " ORDER BY EXPAVG_CREDIT DESC";
				break;

				default:
					$queryOrder = " ORDER BY TOTAL_CREDIT";
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
					$total_hosts = 0;
					$total_hosts_with_credit = 0;
					$total_hosts_active_last_week = 0;
					$total_hosts_active_last_day = 0;
					$total_hosts_credit = 0;
					$total_hosts_rac = 0;
					$total_hosts_cores = 0;

					page_head(tra("Host statistics", "All"));

					echo "<table>";
					echo "<tr><td><a href=host_total_stats.php?sortby=Vendor>Vendor</a></td>".
						"<td><a href=host_total_stats.php?sortby=HostsTotal>Hosts</a></td>".
						"<td><a href=host_total_stats.php?sortby=CoresTotal>Cores / Threads</a></td>".
						"<td><a href=host_total_stats.php?sortby=HostsWithCredit>Hosts with credit</a></td>".
						"<td><a href=host_total_stats.php?sortby=ActiveLastWeek>Active last week</a></td>".
						"<td><a href=host_total_stats.php?sortby=ActiveLastDay>Active last day</a></td>".
						"<td><a href=host_total_stats.php?sortby=Credit>Total Credit</a></td>".
						"<td><a href=host_total_stats.php?sortby=RAC>Recent Average Credit</a></td></tr>";

					while ($row = mysql_fetch_array($cursor_id))
					{
						$total_hosts = $total_hosts + $row['HOSTS_TOTAL'];
						$total_hosts_cores = $total_hosts_cores + $row['CORES_TOTAL'];
						$total_hosts_with_credit = $total_hosts_with_credit + $row['HOSTS_WITH_CREDIT'];
						$total_hosts_active_last_week = $total_hosts_active_last_week + $row['HOSTS_ACTIVE_LAST_WEEK'];
						$total_hosts_active_last_day = $total_hosts_active_last_day + $row['HOSTS_ACTIVE_LAST_DAY'];
						$total_hosts_credit = $total_hosts_credit + $row['TOTAL_CREDIT'];
						$total_hosts_rac = $total_hosts_rac + $row['EXPAVG_CREDIT'];

						echo "<tr><td>".$row['VENDOR'].
							"</td><td>".$row['HOSTS_TOTAL'].
							"</td><td>".$row['CORES_TOTAL'].
							"</td><td>".$row['HOSTS_WITH_CREDIT'].
							"</td><td>".$row['HOSTS_ACTIVE_LAST_WEEK'].
							"</td><td>".$row['HOSTS_ACTIVE_LAST_DAY'].
							"</td><td>".$row['TOTAL_CREDIT'].
							"</td><td>".$row['EXPAVG_CREDIT']."</td></tr>";
					}
					mysql_free_result($cursor_id);

					echo "<tr><td>TOTAL:".
						"</td><td>".$total_hosts.
						"</td><td>".$total_hosts_cores.
						"</td><td>".$total_hosts_with_credit.
						"</td><td>".$total_hosts_active_last_week.
						"</td><td>".$total_hosts_active_last_day.
						"</td><td>".$total_hosts_credit.
						"</td><td>".$total_hosts_rac."</td></tr>";

					echo "</table>";

					page_tail();
				}
				else
				{
					page_head(tra("Host statistics", "All"));
					echo "<p>Error while retrive data</p>";
					page_tail();
				}
			}
			else
			{
				page_head(tra("Host statistics", "All"));
				echo "<p>Error while connect</p>";
				page_tail();
			}
			$result = mysql_close($connect_id);
		?>