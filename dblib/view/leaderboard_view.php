<table class="w3-table-all w3-card-4">
				<tr>
					<th>Rank</th>
					<th>Score</th>
					<th>Name</th>
				</tr>
<?php
    $score_tbl = "";
	if ($data)
	{
		foreach ($data as $score)
		{
			$score_tbl .= '<tr class="w3-hover-blue">
								<td>'.$score->uID.'</td>
								<td>'.$score->highscore.'</td>
								<td>'.$score->uname.'</td>
							</tr>';
		}
	}
	else	
	{
		$score_tbl .= '<tr class="w3-hover-blue">
								<td>no data</td>
								<td>no data</td>
								<td>no data</td>
								<td>no data</td>
							</tr>';
	}
	echo $score_tbl;
?>
</table>