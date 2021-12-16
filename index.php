<?php
    $text = "Lorem ipsum dolor";
    echo $text;

    echo '<br>' .strlen($text);

    $delete = 'ipsum';

    echo '<br>'; 
    
    echo $text2 = str_replace($delete, '***', $text);
    
    echo '<br>' .strlen($text2);
?>