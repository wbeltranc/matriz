<?php
class Matriz
{
	public function comparar($matriz)
	{
		$reverse = count($matriz[0]) - 1;
		for ($i=0; $i <= count($matriz[0]); $i++) { 
			$a += $matriz[$i][$i];
			$b += $matriz[$reverse-$i][$i];
		}

		return ($a > $b) ? $a : $b;
	}
}


$mat[0] = [8, 9, 4];
$mat[1] = [2, 5, 7];
$mat[2] = [6, 4, 3];

$f = new Matriz();

echo $f->comparar($mat);