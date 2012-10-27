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
	HOSTS_TOTAL,
	HOSTS_BASED_ON_AMD,
	HOSTS_BASED_ON_CENTAUR,
	HOSTS_BASED_ON_INTEL,
	HOSTS_BASED_ON_TRANSMETA,
	HOSTS_OTHER,
	HOSTS_WITH_CREDIT_TOTAL,
	HOSTS_WITH_CREDIT_AMD,
	HOSTS_WITH_CREDIT_CENTAUR,
	HOSTS_WITH_CREDIT_INTEL,
	HOSTS_WITH_CREDIT_TRANSMETA,
	HOSTS_WITH_CREDIT_OTHER,
	HOSTS_ACTIVE_LAST_WEEK_TOTAL,
	HOSTS_ACTIVE_LAST_WEEK_AMD,
	HOSTS_ACTIVE_LAST_WEEK_CENTAUR,
	HOSTS_ACTIVE_LAST_WEEK_INTEL,
	HOSTS_ACTIVE_LAST_WEEK_TRANSMETA,
	HOSTS_ACTIVE_LAST_WEEK_OTHER,
	HOSTS_ACTIVE_LAST_DAY_TOTAL,
	HOSTS_ACTIVE_LAST_DAY_AMD,
	HOSTS_ACTIVE_LAST_DAY_CENTAUR,
	HOSTS_ACTIVE_LAST_DAY_INTEL,
	HOSTS_ACTIVE_LAST_DAY_TRANSMETA,
	HOSTS_ACTIVE_LAST_DAY_OTHER,
	CPU_TOTAL,
	CPU_AMD,
	CPU_CENTAUR,
	CPU_INTEL,
	CPU_TRANSMETA,
	CPU_OTHER,
	FLOOR(RAC_TOTAL) AS RAC_TOTAL,
	FLOOR(RAC_AMD) AS RAC_AMD,
	FLOOR(RAC_CENTAUR) AS RAC_CENTAUR,
	FLOOR(RAC_INTEL) AS RAC_INTEL,
	FLOOR(RAC_TRANSMETA) AS RAC_TRANSMETA,
	FLOOR(RAC_OTHER) AS RAC_OTHER
  FROM VW_HOST_TOTAL_STAT";

			$cursor_id = 0;
			$connect_id = mysql_pconnect($host, $user, $password);
			mysql_set_charset('utf8', $connect_id);

			if ($connect_id > 0)
			{
				$result = mysql_select_db($database, $connect_id);
				$cursor_id = mysql_query($query);
				if ($result > 0)
				{
					page_head(tra("Host statistics", "All"));

					echo "<table>";
					echo "<tr><td>Statistic</td><td>Total</td><td>AMD</td><td>Intel</td><td>Centaur</td><td>Transmeta</td><td>Other / Unidentified</td></tr>";

					while ($row = mysql_fetch_array($cursor_id))
					{
						echo "<tr><td>Hosts</td><td>".$row['HOSTS_TOTAL'].
							"</td><td>".$row['HOSTS_BASED_ON_AMD'].
							"</td><td>".$row['HOSTS_BASED_ON_INTEL'].
							"</td><td>".$row['HOSTS_BASED_ON_CENTAUR'].
							"</td><td>".$row['HOSTS_BASED_ON_TRANSMETA'].
							"</td><td>".$row['HOSTS_OTHER']."</td></tr>";

						echo "<tr><td>Hosts with credit</td><td>".$row['HOSTS_WITH_CREDIT_TOTAL'].
							"</td><td>".$row['HOSTS_WITH_CREDIT_AMD'].
							"</td><td>".$row['HOSTS_WITH_CREDIT_INTEL'].
							"</td><td>".$row['HOSTS_WITH_CREDIT_CENTAUR'].
							"</td><td>".$row['HOSTS_WITH_CREDIT_TRANSMETA'].
							"</td><td>".$row['HOSTS_WITH_CREDIT_OTHER']."</td></tr>";

						echo "<tr><td>Active last week</td><td>".$row['HOSTS_ACTIVE_LAST_WEEK_TOTAL'].
							"</td><td>".$row['HOSTS_ACTIVE_LAST_WEEK_AMD'].
							"</td><td>".$row['HOSTS_ACTIVE_LAST_WEEK_INTEL'].
							"</td><td>".$row['HOSTS_ACTIVE_LAST_WEEK_CENTAUR'].
							"</td><td>".$row['HOSTS_ACTIVE_LAST_WEEK_TRANSMETA'].
							"</td><td>".$row['HOSTS_ACTIVE_LAST_WEEK_OTHER']."</td></tr>";

						echo "<tr><td>Active last day</td><td>".$row['HOSTS_ACTIVE_LAST_DAY_TOTAL'].
							"</td><td>".$row['HOSTS_ACTIVE_LAST_DAY_AMD'].
							"</td><td>".$row['HOSTS_ACTIVE_LAST_DAY_INTEL'].
							"</td><td>".$row['HOSTS_ACTIVE_LAST_DAY_CENTAUR'].
							"</td><td>".$row['HOSTS_ACTIVE_LAST_DAY_TRANSMETA'].
							"</td><td>".$row['HOSTS_ACTIVE_LAST_DAY_OTHER']."</td></tr>";

						echo "<tr><td>Cores / Threads</td><td>".$row['CPU_TOTAL'].
							"</td><td>".$row['CPU_AMD'].
							"</td><td>".$row['CPU_INTEL'].
							"</td><td>".$row['CPU_CENTAUR'].
							"</td><td>".$row['CPU_TRANSMETA'].
							"</td><td>".$row['CPU_OTHER']."</td></tr>";

						echo "<tr><td>Recent average credit</td><td>".$row['RAC_TOTAL'].
							"</td><td>".$row['RAC_AMD'].
							"</td><td>".$row['RAC_INTEL'].
							"</td><td>".$row['RAC_CENTAUR'].
							"</td><td>".$row['RAC_TRANSMETA'].
							"</td><td>".$row['RAC_OTHER']."</td></tr>";
					}

					echo "</table>";

					page_tail();
				}
			}
			else
			{
				echo "		<p>Error while connect</p>";
			}
			$result = mysql_close($connect_id);
		?>