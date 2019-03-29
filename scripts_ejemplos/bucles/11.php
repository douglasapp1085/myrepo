<html><!--mi comentario -->
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
  $i++; //$i = $i+1
}
echo "</tr>";
echo "<br>contador".$i;
echo "</table>";

echo "<table border = 1>";
$j = 10;
echo "<tr>";
while ($j >= 1) {
echo "<td bgcolor = 'yellow'>".$j."</td>";
  $j--; //$i = $i+1
}
echo "</tr>";
echo "<br>contador".$j;
echo "</table>";
?>
