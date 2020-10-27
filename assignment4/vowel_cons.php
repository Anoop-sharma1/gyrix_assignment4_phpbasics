<?php
   $ch = "i";
   if (($ch >= 'a' && $ch <= 'z') || ($ch >= 'A' && $ch <= 'Z')) {
    if ($ch=='a' || $ch=='A' || $ch=='e' || $ch=='E' || $ch=='i' || $ch=='I' || $ch=='o' ||
         $ch=='O' || $ch== 'u' || $ch=='U')

      echo "$ch is vowel.\n";

    else
      echo "$ch is Consonent";
  }
  else
    echo "invalid Character";
?>