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
    @RN := @RN + 1 AS RANK,
    COUNTRY_NAME,
    USERS_COUNT,
    FLOOR(COUNTRY_CREDIT) AS COUNTRY_CREDIT,
    FLOOR(COUNTRY_RAC) AS COUNTRY_RAC,
    USERS_COUNT / WORLD_USERS AS USERS_PIECE,
    COUNTRY_CREDIT / WORLD_CREDIT AS CREDIT_PIECE,
    COUNTRY_RAC / WORLD_RAC AS RAC_PIECE,
    FORMAT(USERS_COUNT / WORLD_USERS * 100, 2) AS USERS_PCT,
    FORMAT(COUNTRY_CREDIT / WORLD_CREDIT * 100, 2) AS CREDIT_PCT,
    FORMAT(COUNTRY_RAC / WORLD_RAC * 100, 2) AS RAC_PCT
  FROM
    VW_COUNTRY,
    (SELECT
        COUNT(*) AS WORLD_COUNTRIES,
        SUM(USERS_COUNT) AS WORLD_USERS,
        SUM(COUNTRY_CREDIT) AS WORLD_CREDIT,
        SUM(COUNTRY_RAC) AS WORLD_RAC
       FROM VW_COUNTRY) WORLD,
    (SELECT @RN := 0) RN";

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

				case "ParticipantsPCT":
					$queryOrder = " ORDER BY USERS_PIECE DESC";
				break;

				case "CreditPCT":
					$queryOrder = " ORDER BY CREDIT_PIECE DESC";
				break;

				case "RACPCT":
					$queryOrder = " ORDER BY RAC_PIECE DESC";
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
					echo "<tr><td>Rank</td><td><a href=top_countries.php?sortby=Name>Country</a></td>".
						"<td><a href=top_countries.php?sortby=Users>Participants</a></td>".
						"<td><a href=top_countries.php?sortby=Credit>Total Credit</a></td>".
						"<td><a href=top_countries.php?sortby=RAC>Recent Average Credit</a></td>".
						"<td><a href=top_countries.php?sortby=ParticipantsPCT>% of participants</a></td>".
						"<td><a href=top_countries.php?sortby=CreditPCT>% of credit</a></td>".
						"<td><a href=top_countries.php?sortby=RACPCT>% of Recent Average Credit</a></td></tr>";

					while ($row = mysql_fetch_array($cursor_id))
					{
						echo "<tr><td>".$row['RANK']."</td>".
							"<td>".$row['COUNTRY_NAME']."</td>".
							"<td>".$row['USERS_COUNT']."</td>".
							"<td>".$row['COUNTRY_CREDIT']."</td>".
							"<td>".$row['COUNTRY_RAC']."</td>".
							"<td>".$row['USERS_PCT']."</td>".
							"<td>".$row['CREDIT_PCT']."</td>".
							"<td>".$row['RAC_PCT']."</td></tr>";
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