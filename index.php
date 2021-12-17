<?php
    $text = "Lorem ipsum dolor";
    echo $text;

    echo '<br>' .strlen($text);

    $badword = $_GET['badword'];
    echo "BADWORD: ".$badword;
    echo '<br>'; 
    
    echo $text2 = str_replace($badword, '***', $text);
    
    echo '<br>' .strlen($text2);
?>