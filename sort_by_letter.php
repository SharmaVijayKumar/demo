<?php

echo '<h1>Example of Sorting with Custom Letter</h1>';

$strings = array('Foo', 'Moo', 'Xuux', 'Me', 'Blah', 'Ma');

echo 'Before Sorting Array- <pre>';print_r($strings);

$letter = 'M';

usort($strings, function($a, $b) use($letter) {
    if($a[0] != $b[0]) {
        if($a[0] == $letter) return -1;
        if($b[0] == $letter) return +1;
    }
    return strcmp($a, $b);  
});

echo 'After Sorting Array- <pre>'; print_r($strings);
?>