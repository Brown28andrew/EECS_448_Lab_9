<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  echo "Multiplication Table: <br>";
  echo "<table border= 'black 2px'>";
    for($i = 0; $i <= 100; $i++){
      echo "<tr>";
      if($i == 0){
        echo "<td> </td>";
        for($j = 1; $j <= 100; $j++){
          echo "<td>";
          echo $j;
          echo "</td>";
        }
      }else{
        echo "<td>";
        echo $i;
        echo "</td>";
        for($j = 1; $j <= 100; $j++){
          echo "<td>";
          echo $i * $j;
          echo "</td>";
        }
      }
        echo "</tr>";
    }
  echo "</table>";
?>
