<center>Taller</center>


<?php
//punto1
		echo "<br>Números: "."1 2 3 4 5 6 7 8 9 10";

//punto2
		$i = 1;
		echo "<br>Números: ";
		while ($i<=10){
			echo "$i ";
			$i++;
		}
//punto3
		$j=1;
		do{
			echo "$j ";
			$j++;
		}while($j<=100);

//punto4
		echo "<br>Números: ";
		for ($k=1; $k<=100; $k++){
			$k++;
			echo "$k ";
		}

//punto5
		$r= 1;
		echo "<br>Números: ";
		while($r<=10){
			$r++;
			$rr=rand(1,100);
			echo "$rr  " ;
		}
//punto6
		echo "<br>Números: ";
		$suma=0;
		for ($i=1; $i<=100;$i++) {
		$suma=$i+$suma;
		}
		echo "$suma";

//punto7
		echo "<br>Números: ";
		$l=1;
		do{
			echo "$l ";
			$l= $l+2;
		}while($l<=100);

//punto8
		$t= 1;
		$acumulador1=0;
		$acumulador2=0;

		echo "<br>Números: ";
		echo "<table border = '1' cellpadding='4'><br>";
		while($t<=10){
			$tt=rand(1,100);
			echo $tt."&nbsp;&nbsp;";
			if($tt%2==0){
				$acumulador1++;

			}else {
				$acumulador2++;

			}
			$t++;
		}
		echo "</table>";
		echo "<br><b>REPORTE FINAL</b>";
		echo "<table border=1>";
		echo "<tr><td>Total de pares:</td><td>". $acumulador1 ."</td></tr>";
		echo "<tr><td>Total de impares:</td><td>". $acumulador2 ."</td></tr>";
		echo "</table>";

//punto9
		$n= 1;
		$acumulador3=0;
		$acumulador4=0;
		$acumulador5=0;
		$acumulador6=0;

		echo "<br>Números: ";
		echo "<table border = '1' cellpadding='4'><br>";
		while($n<=10){
			$nn=rand(-100,100);
			echo $nn."&nbsp;&nbsp;";
			if($nn%2==0){
				if($nn>=0){
				$acumulador3++;
				}else{
					$acumulador5++;
					}
			}else {
				if($nn>=0){
				$acumulador4++;
				}else{
					$acumulador6++;
					}
			}
			$n++;
		}
		echo "</table>";
		echo "<br><b>REPORTE FINAL2</b>";
		echo "<table border=1>";
		echo "<tr><td>Total de pares positivos:</td><td>". $acumulador3 ."</td></tr>";
		echo "<tr><td>Total de impares positivos:</td><td>". $acumulador4 ."</td></tr>";
		echo "<tr><td>Total de pares negativos:</td><td>". $acumulador5 ."</td></tr>";
		echo "<tr><td>Total de impares negativos:</td><td>". $acumulador6 ."</td></tr>";
		echo "</table>";

		//punto11
?>

<html>

    <head>
          <title>FORMULARIO</title>
          <table border =1>
            <tr><td><input type="number" name="inicio" border="1" placeholder="" required></td></tr>
              <tr><td><input type="number" name="fin"  placeholder="" required></td></tr>
               <td colspan="2" align ="center"><br> <center><input type ="submit" value="EVALUAR"></center> </td>
            </table>
    </head>
</html>

<?php

$num1 = $_POST['inicio'];
$num2 = $_POST['fin'];
$i = 1;
echo "<table border = 1>";
echo "<tr>";
while ($i <= $num1) {
echo "<td bgcolor = 'yellow'>".$i."</td>";
  $i++;
}
echo "</tr>";
echo "<br>contador".$i;
echo "</table>";

echo "<table border = 1>";
$j = 10;
echo "<tr>";
while ($j >= 1) {
echo "<td bgcolor = 'yellow'>".$j."</td>";
  $j--;
}
echo "</tr>";
echo "<br>contador".$j;
echo "</table>";
?>
