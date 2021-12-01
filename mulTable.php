<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  function makeRow($x){
    for($i = 1; $i <= 100; $i++){
      $x[$i] = $i;
    }
  }

  function tableRow($x, $y){
    for($i = 0; $i < 100; $i++){
      $z[$i] = $x * $y[$i+1];
    }
    return $z;
  }
  echo "Multiplication Table: <br>";
  echo "<table border= 'black 2px'>";
    $row = [ ];
    makeRow($row);
    for($i = 0; $i <= 100; $i++){
      if($i == 0){
        echo "<tr>";
          echo "<td> </td>";
          for($j = 1; $j <= 100; $j++){
                echo "<td>";
                echo row[$j];
                echo "</td>";
          }
        echo "</tr>";
      }else{
        $newRow = tableRow($i, $row);
        echo "<tr>";
          echo "<td>"
          echo $i;
          echo "</td>";
          for($z = 0; $z < 99; $z++){
            echo "<td>";
            echo newRow[$z];
           echo "</td>";
         }
       echo "</tr>";
     }
   }
  echo "</table>";

?>
