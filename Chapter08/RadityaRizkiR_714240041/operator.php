<?php
    $bil1 = 100;
    $bil2 = 20;
    $text1 = "PHP";
    $text2 = "php";
    $hasil = ($bil1 <> $bil2) or ($text == $text2);
    printf("(%d <> %d) or (%s == %s) adalah %d<br> \n", $bil1, $bil2, $text1, $text2, $hasil);
    $hasil = ! ($text1 == $text2);
    printf("! (%s == %s) adalah %d<br> \n",$text1, $text2, $hasil);
?>