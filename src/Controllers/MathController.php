<?php
	class MathController
	{
		public function math_calcPow($x, $y)
		{
			if (!is_null($x) && !is_null($y))
				return pow($x, $y);
			else
				return 0;
		}

		public function math_calcXY($x, $y)
		{
			if (!is_null($x) && !is_null($y))
				return ($x + $y);
			else
				return $x;
		}

		public function math_calcExp(int $level = 1)
		{
			return exp($level);
		}
	}