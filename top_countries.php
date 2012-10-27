<?php
	require_once('../inc/util.inc');
	require_once('../inc/boinc_db.inc');

	/*
	Drawing a diagramm. Parameters:
		$keys - array of categories,
		$values - array of values of categories,
		$topValues - number of of showed categories (any other put into Other category),
		$fileName - name of PNG-file to store diagramm,
		$caption - caption of diagramm,
		$width - diagramm width,
		$height - diagramm height
	*/
	function CreateDiagramm($keys, $values, $topValues, $fileName, $caption, $width, $height)
	{
		/* Create the image and set colors palette */
		$image = ImageCreateTrueColor($width, $height);

		$bgcolor = ImageColorAllocate($image, 26, 26, 26);
		$black = ImageColorAllocate($image, 0, 0, 0);
		$white = ImageColorAllocate($image, 255, 255, 255);
		$fontColor = $white;

		/* Define the base color palette */
		$colors[0] = ImageColorAllocate($image, 0, 0, 255);
		$colors[1] = ImageColorAllocate($image, 255, 180, 0);
		$colors[2] = ImageColorAllocate($image, 0, 230, 0);
		$colors[3] = ImageColorAllocate($image, 255, 0, 255);
		$colors[4] = ImageColorAllocate($image, 255, 255, 0);
		$colors[5] = ImageColorAllocate($image, 255, 0, 0);
		$colors[6] = ImageColorAllocate($image, 0, 255, 255);

		/* Define other colors */
		$baseColors = count($colors);
		$i = $baseColors;
		$minLevel = 80;

		while ($i < $topValues + 1)
		{
			$red = ($colors[$i%$baseColors] & 0xFF0000) >> 16;
			$green = ($colors[$i%$baseColors] & 0x00FF00) >> 8;
			$blue = $colors[$i%$baseColors] & 0x0000FF;

			$newRed = max(floor($red - ($red / ($topValues + 1 - $i))), $minLevel);
			$newGreen = max(floor($green - ($green / ($topValues + 1 - $i))), $minLevel);
			$newBlue = max(floor($blue - ($blue / ($topValues + 1 - $i))), $minLevel);

			$colors[$i] = ImageColorAllocate($image, $newRed, $newGreen, $newBlue);
			$i++;
		}

		/* Font settings */
		$font = 2;
		$fontWidth = ImageFontWidth($font);
		$fontHeight = ImageFontHeight($font);
		$margin = 10;

		/* Creation of list of showed values + line "Other" as sum of other positions */
		$showedKeys = array(0);
		$showedValues = array(0);

		for ($i = 0; $i < $topValues; $i++)
		{
			$showedKeys[$i] = $keys[$i];
			$showedValues[$i] = $values[$i];
		}

		$showedKeys[$topValues] = "Other";
		$showedValues[$topValues] = array_sum($values) - array_sum($showedValues);

		/* Calculate the max length of key */
		$maxKeyLength = 0;
		foreach ($showedKeys as $key)
		{
			if ($maxKeyLength < strlen($key))
			{
				$maxKeyLength = strlen($key);
			}
		}

		/* Fill empty image to make a background */
		ImageFill($image, 0, 0, $bgcolor);

		/* Draw the diagramm caption */
		$captionWidth = strlen($caption)*$fontWidth;
		$captionX = ($width - $captionWidth)/2;
		$captionY = $fontHeight;
		ImageString($image, $font, $captionX, $captionY, $caption, $fontColor);

		/* Draw the diagramm legend */
		$legend_width = ($fontWidth*$maxKeyLength) + $fontHeight + $margin*2.5;
		$legend_height = $fontHeight*($topValues + 1) + $margin*2;
		$legend_x = $width - $legend_width - $margin;
		$legend_y = ($height - $legend_height)/2;

		ImageRectangle($image, $legend_x, $legend_y, $legend_x + $legend_width, $legend_y + $legend_height, $fontColor);

		$text_x = $legend_x + $margin*2.5;
		$square_x = $legend_x + $margin;
		$text_base_y = $legend_y + $margin;
		$i = 0;

		foreach ($showedKeys as $key)
		{
			$text_y = $text_base_y + $i*$fontHeight;
			ImageString($image, $font, $text_x, $text_y, $key, $fontColor);
			ImageFilledRectangle($image, $square_x + 1, $text_y + 1, $square_x + $fontHeight - 1, $text_y + $fontHeight - 1, $colors[$i]);
			ImageRectangle($image, $square_x + 1, $text_y + 1, $square_x + $fontHeight - 1, $text_y + $fontHeight - 1, $black);
			$i++;
		}

		/* Calculate the angles of showed positions */
		$total = array_sum($showedValues);
		$current_total = 0;
		$angle = Array(0);

		$angle[0] = 0;
		for ($i = 0; $i < $topValues + 1; $i++)
		{
			$current_total += $showedValues[$i];
			$angle[$i + 1] = floor($current_total/$total*360);			
		}

		$diameter = min($legend_x - $margin*2, $height - $margin*2 - $captionY - $fontHeight);
		$center_x = $diameter/2 + $margin;
		$center_y = $height/2 - $margin;
		
		for ($i = 0; $i < $topValues + 1; $i++)
		{
			ImageFilledArc($image, $center_x, $center_y, $diameter, $diameter, $angle[$i] - 90, $angle[$i+1] - 90, $colors[$i], IMG_ARC_PIE);
		}

		ImagePNG($image, $fileName);
		ImageDestroy($image);
	}

	/* Drawing a diagramm to show a participants distribution between countries */
	function CreateCountryDiagramm($connect_id, $keyFieldName, $valueFieldName, $topValues, $caption, $width, $height)
	{
		$query = "SELECT ".$keyFieldName.", ".$valueFieldName." FROM VW_COUNTRY ORDER BY ".$valueFieldName." DESC";
		$contries[0] = array($keyFieldName => "", $valueFieldName => 0);
		$fileName = "img/diagramm_".strtolower($valueFieldName).".png";
		$cursor_id = mysql_query($query);

		if ($cursor_id > 0)
		{
			$i = 0;
			$diagrammKeys = array(0);
			$diagrammValues = array(0);

			while ($row = mysql_fetch_array($cursor_id))
			{
				$diagrammKeys[$i] = $row[$keyFieldName];
				$diagrammValues[$i] = $row[$valueFieldName];
				$i++;
			}
		}
		mysql_free_result($cursor_id);

		CreateDiagramm($diagrammKeys, $diagrammValues, $topValues, $fileName, $caption, $width, $height);
		echo "<img src=".$fileName.">";
	}

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
		if ($cursor_id > 0)
		{
			$contries[0] = array
			(
				"Rank" => 0,
				"Name" => "",
				"Participants" => 0,
				"TotalCredit" => 0,
				"RAC" => 0,
				"ParticipantsPCT" => 0,
				"CreditPCT" => 0,
				"RACPCT" => 0
			);

			$rowIndex = 0;
			$rowsCount = 0;
			while ($row = mysql_fetch_array($cursor_id))
			{
				$countries[$rowIndex] = array
				(
					"Rank" => $row["RANK"],
					"Name" => $row["COUNTRY_NAME"],
					"Participants" => $row["USERS_COUNT"],
					"TotalCredit" => $row["COUNTRY_CREDIT"],
					"RAC" => $row["COUNTRY_RAC"],
					"ParticipantsPCT" => $row["USERS_PCT"],
					"CreditPCT" => $row["CREDIT_PCT"],
					"RACPCT" => $row["RAC_PCT"]
				);

				$rowIndex++;
			}
			mysql_free_result($cursor_id);
			$rowsCount = $rowIndex;

			page_head(tra("Top countries", "All"));

			CreateCountryDiagramm($connect_id, "COUNTRY_NAME", "COUNTRY_CREDIT", 12, "Credit division between countries", 300, 300);
			CreateCountryDiagramm($connect_id, "COUNTRY_NAME", "COUNTRY_RAC", 12, "Recent credit division between countries", 300, 300);
			CreateCountryDiagramm($connect_id, "COUNTRY_NAME", "USERS_COUNT", 12, "Participants division between countries", 300, 300);

			echo "<table>";
			echo "<tr><td>Rank</td><td><a href=top_countries.php?sortby=Name>Country</a></td>".
				"<td><a href=top_countries.php?sortby=Users>Participants</a></td>".
				"<td><a href=top_countries.php?sortby=Credit>Total Credit</a></td>".
				"<td><a href=top_countries.php?sortby=RAC>Recent Average Credit</a></td>".
				"<td><a href=top_countries.php?sortby=ParticipantsPCT>% of participants</a></td>".
				"<td><a href=top_countries.php?sortby=CreditPCT>% of credit</a></td>".
				"<td><a href=top_countries.php?sortby=RACPCT>% of Recent Average Credit</a></td></tr>";

			for ($rowIndex = 0; $rowIndex < $rowsCount; $rowIndex++)
			{
				echo "<tr><td>".$countries[$rowIndex]["Rank"]."</td>".
					"<td>".$countries[$rowIndex]["Name"]."</td>".
					"<td>".$countries[$rowIndex]["Participants"]."</td>".
					"<td>".$countries[$rowIndex]["TotalCredit"]."</td>".
					"<td>".$countries[$rowIndex]["RAC"]."</td>".
					"<td>".$countries[$rowIndex]["ParticipantsPCT"]."</td>".
					"<td>".$countries[$rowIndex]["CreditPCT"]."</td>".
					"<td>".$countries[$rowIndex]["RACPCT"]."</td></tr>";
			}

			echo "</table>";

			page_tail();
		}
		else
		{
			page_head(tra("Top countries", "All"));
			echo "<p>Error while retrive data</p>";
			page_tail();
		}
	}
	else
	{
		page_head(tra("Top countries", "All"));
		echo "<p>Error while connect</p>";
		page_tail();
	}
	$result = mysql_close($connect_id);
?>