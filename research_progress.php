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
    ID,
    RESEARCH_NAME_EN,
    RESEARCH_NAME_RU,
    RESEARCH_WORKUNITS_TOTAL,
    WORKUNITS_COMPLETED_BASE,
    WORKUNITS_GENERATED,
    WORKUNITS_COMPLETED,
    FORMAT(WORKUNITS_COMPLETED / RESEARCH_WORKUNITS_TOTAL * 100,  2) AS COMPLETION_PCT
  FROM VW_RESEARCH_PROGRESS";

			$cursor_id = 0;
			$connect_id = mysql_pconnect($host, $user, $password);
			mysql_set_charset('utf8', $connect_id);

			if ($connect_id > 0)
			{
				$result = mysql_select_db($database, $connect_id);
				$cursor_id = mysql_query($query);
				if ($cursor_id > 0)
				{
					page_head(tra("Research progress", "All"));

					echo "<table>";
					echo "<tr><th>Research Name</th>".
						"<th>Workunits total</th>".
						"<th>Workunits generated</th>".
						"<th>Workunits completed</th>".
						"<th>% of completion</th></tr>";

					while ($row = mysql_fetch_array($cursor_id))
					{
						echo "<tr><td>".$row['RESEARCH_NAME_EN']." / ".$row['RESEARCH_NAME_RU']."</td>".
							"<td>".$row['RESEARCH_WORKUNITS_TOTAL']."</td>".
							"<td>".$row['WORKUNITS_GENERATED']."</td>".
							"<td>".$row['WORKUNITS_COMPLETED']."</td>".
							"<td>".$row['COMPLETION_PCT']."</td></tr>";
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