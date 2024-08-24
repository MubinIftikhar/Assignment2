<?php
$strings = ["Hello", "World", "PHP", "Programming"];
$vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

foreach ($strings as $string) {
    $vowelCount = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $vowelCount++;
        }
    }
    $rev = strrev($string);


    echo "Orginal String: " . $string . ", Vowel Count: " . $vowelCount . ", Reverse String: " . $rev . "\n";
}
