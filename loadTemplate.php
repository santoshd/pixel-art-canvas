<?php
  $im = imagecreatefrompng("./templates/".$_GET['img']);
  for ($y = 0; $y < 24; ++$y) {
    for ($x = 0; $x < 24; ++$x) {
      $rgb = imagecolorat($im, $y, $x);
      $c = imagecolorsforindex($im, $rgb);
      $colorarr[$y][$x] = $c['red'].",".$c['green'].",".$c['blue'];

      //to include alpha uncomment the immediate below line
      //$colorarr[$y][$x] = $c['red'].",".$c['green'].",".$c['blue'].",".($c['alpha']/255);
    }
  } 
  echo json_encode($colorarr);
?>