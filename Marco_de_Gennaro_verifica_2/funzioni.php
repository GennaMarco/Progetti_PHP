<?php 
	
	function ProcessRankPointsAtRanking($array, $punteggioSquadra1, $punteggioSquadra2, $squadra1, $squadra2)
	{
		if(!isset($array[$squadra1]))
			$array[$squadra1] = 0;

		if(!isset($array[$squadra2]))
			$array[$squadra2] = 0;

		if($punteggioSquadra1>$punteggioSquadra2)
			$array[$squadra1] += 3;
		else if ($punteggioSquadra1 == $punteggioSquadra2)
		{
			$array[$squadra1] += 1;
			$array[$squadra2] += 1;
		}
		else
			$array[$squadra2] += 3;
		return $array;
	}

	function ShowMessageBoxCustom()
	{
		if(isset($_SESSION['message'])) 
			{
				$message = $_SESSION['message'];
				unset($_SESSION['message']);
				if($message[0] == "E")
			 	echo "<div class=\"alert\">
							<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span>". 
							$message.
					  "</div>";
				else
					echo "<div class=\"success\">
							<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span>". 
							$message.
					  "</div>";
			}
	}

	function ResetArrayRanking($array)
	{
		foreach ($array as $team => $points) 
			$array[$team] = 0;
		return $array;
	}


 ?>