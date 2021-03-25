<?php
$baris = 4;
$kolom = 5;
$nomor = 1;
echo "<table border='1'>";
for($i =0; $i <$baris; $i++){
 	echo "<tr>";
 	for ($j = 0; $j <$kolom; $j++){
 		if($nomor++ % 2 == 0){
 			echo "<td bgcolor='red'><font color='white'>",$j+($i*4),"</font></td>";
 		}
 		else{
 			echo "<td><font color='red'>",$j+($i*4),"</font></td>";
 		}
 	}
  	echo "</tr>";
}
echo "</table>";
?>
