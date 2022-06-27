<?php
	require_once __DIR__."/../vendor/autoload.php";
	require_once __DIR__."/../src/Controllers/MathController.php";

	use PHPUnit\Framework\TestCase;

	class MathControllerTest extends TestCase
	{
		public function testCanCalcPowParamsBeNull(): void
		{
			$this->assertIsInt((new MathController)->math_calcPow(null, null));
		}

		public function testCanCalcPowBeARandowValue(): void
		{
			$this->assertInfinite((new MathController)->math_calcPow(rand(), rand()));
		}

		public function testCanCalcXYBeInt(): void
		{
			$this->assertIsInt((new MathController)->math_calcXY(5, 5));
		}

		public function testCanCalcExpBeFloat(): void
		{
			$this->assertIsFloat((new MathController)->math_calcExp(5.5));
		}
	}