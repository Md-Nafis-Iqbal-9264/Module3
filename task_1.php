<?php

$text = "The quick brown fox jumps over the lazy dog.";

function modifyText($input) {
    $lowercaseText = strtolower($input);
    
    $modifiedText = str_replace("brown", "red", $lowercaseText);
    
    echo $modifiedText;
}

modifyText($text);

?>