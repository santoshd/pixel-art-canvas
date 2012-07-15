<?php //header("Content-Type: image/png");
      header("Pragma: public");
      header("Expires: 0");
      header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
      header("Content-Type: application/force-download");
      header("Content-Type: application/octet-stream");
      header("Content-Type: application/download");
      header("Content-Disposition: attachment;filename=image.png");
      header("Content-Transfer-Encoding: binary ");
      
      $temp = $_POST;
      $colorcodes[0][0] = 0;
      function rgb2array($rgb) {
          return array(
              base_convert(substr($rgb, 0, 2), 16, 10),
              base_convert(substr($rgb, 2, 2), 16, 10),
              base_convert(substr($rgb, 4, 2), 16, 10),
          );
      }

      foreach ($temp as $key => $value) {
            $y = $key % 24;
            $x = floor($key / 24);
            $colorcodes[$x][$y] = $value;
      }

      //var_dump($colorcodes);

      //die();
      // Create the image resource
      $img = imagecreatetruecolor(24, 24);

      // Set each pixel to its corresponding color stored in $pixelArray
      for ($y = 0; $y < 24; ++$y) {
          for ($x = 0; $x < 24; ++$x) {
                  imagesetpixel($img, $x, $y, hexdec($colorcodes[$y][$x]));
          }
      }     

      // Dump the image to the browser
      
      imagepng($img);

      // Clean up after ourselves
     imagedestroy($img);
      //If you want to save the image to disk instead of dumping it to the browser, simply omit the call to header() and pass a path to imagepng() as the 2nd parameter:

     // imagepng($img, '/some/path/to/your/desired/image.png');
    ?>