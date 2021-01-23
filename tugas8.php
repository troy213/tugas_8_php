<?php
  function diamond(){
    for ($i = 0; $i < 10; $i++) {
      for ($x=0; $x < 9; $x++) {
        for ($j = $i; $j < 10; $j++)
          echo "_";
        for ($j = $i; $j > 0; $j--)
          echo ("xx");
        for ($j = $i; $j < 10; $j++)
          echo "&nbsp&nbsp";
      }
      echo "<br>";
    }
    $n = 10;
    for ($i = 10; $i >= 0; $i--) {
      for ($y=0; $y < 9; $y++) {
        for ($j = $n - $i; $j > 0; $j--)
          echo "_";
        for ($j = $i; $j > 0; $j--)
          echo ("xx");
        for ($j = $n - $i; $j > 0; $j--)
          echo "&nbsp&nbsp";
      }
      echo "<br>";
    }
  }

  echo diamond().diamond();
?>
