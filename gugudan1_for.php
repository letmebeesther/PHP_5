<?php
	//화면과 같이 출력되는 구구단 프로그램을 완성하시오?

   for($i=2;$i<=9;$i++)
   {
		echo "<h3>{$i}dan</h3>";

		for($j=1;$j<=9;$j++)
		{
			$c = $i * $j;
			echo "$i X $j = $c <br>";
		}

		echo("<br> --------------------- <br>");
   }
?>

