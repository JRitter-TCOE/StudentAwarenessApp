<?php 
      $file = fopen('./credentials.txt', 'r');
      $text = fread($file, filesize('./credentials.txt'));
      fclose($file);

      $lines = explode("\n", $text);
      $user = $lines[0];
      $pass = $lines[1];
?>