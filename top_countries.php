		<?php

			require_once('../inc/util.inc');
			require_once('../inc/boinc_db.inc');

			$config = get_config();
			$host = parse_config($config, "<db_host>");
			$database = parse_config($config, "<db_name>");;
			$user = parse_config($config, "<db_user>");
			$password = parse_config($config, "<db_passwd>");

			$query = "SELECT @RN := @RN + 1 AS RANK, COUNTRY_NAME, USERS_COUNT, FLOOR(COUNTRY_CREDIT) AS COUNTRY_CREDIT, FLOOR(COUNTRY_RAC) AS COUNTRY_RAC FROM VW_COUNTRY, (SELECT @RN := 0) RN";
			$queryOrder ="";
			$orderField = "";
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
				case "Name":
					$queryOrder = " ORDER BY COUNTRY_NAME";
				break;

				case "Users":
					$queryOrder = " ORDER BY USERS_COUNT DESC";
				break;

				case "Credit":
					$queryOrder = " ORDER BY COUNTRY_CREDIT DESC";
				break;

				case "RAC":
					$queryOrder = " ORDER BY COUNTRY_RAC DESC";
				break;

				default:
					$queryOrder = " ORDER BY COUNTRY_NAME";
			}

			$query = $query.$queryOrder;
			$connect_id = mysql_pconnect($host, $user, $password);
			mysql_set_charset('utf8', $connect_id);

			if ($connect_id > 0)
			{
				$result = mysql_select_db($database, $connect_id);
				$cursor_id = mysql_query($query);
				if ($result > 0)
				{
					page_head(tra("Top countries", "All"));

					echo "<table>";
					echo "<tr><td>Rank</td><td><a href=top_countries.php?sortby=Name>Country</a></td><td><a href=top_countries.php?sortby=Users>Participants</a></td><td><a href=top_countries.php?sortby=Credit>Total Credit</a></td><td><a href=top_countries.php?sortby=RAC>Recent Average Credit</a></td></tr>";

					while ($row = mysql_fetch_array($cursor_id))
					{
						echo "<tr><td>".$row['RANK']."</td><td>".$row['COUNTRY_NAME']."</td><td>".$row['USERS_COUNT']."</td><td>".$row['COUNTRY_CREDIT']."</td><td>".$row['COUNTRY_RAC']."</td></tr>";
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