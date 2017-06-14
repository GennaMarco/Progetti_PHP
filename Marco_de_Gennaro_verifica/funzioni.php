<?php 

	function CalcolaValutazione($valutazione)
	{
		switch ($valutazione) 
		{
			case 'uno':
				return 1;
				break;

			case 'due':
				return 2;
				break;

			case 'tre':
				return 3;
				break;

			case 'quattro':
				return 4;
				break;

			case 'cinque':
				return 5;
				break;
		}
	}

	function CalcolaMedia($array)
	{
		$somma = 0;
		$i = 0;
		foreach ($array as $value) 
		{
			$somma += $value;
			$i++;
		}

		return $somma / $i;
	}

	function StampaArrayFilmSerietv($array)
	{
		foreach($array as $f) 
		{
			echo "Titolo: ".$f[0]."<br>";
			echo "Genere: ".$f[1]."<br>";
			echo "Tipologia: ".$f[2]."<br>";
			echo "Media valutazioni: ".$f[3]."<br>";
			echo "Numero votazioni: ".$f[4]."<br><br>";
		}
	}

 ?>