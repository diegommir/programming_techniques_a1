<?php
/**
    Pig Latin is a language game or argot in which words in English are altered, 
    usually by adding a fabricated suffix or by moving the onset or initial consonant or 
    consonant cluster of a word to the end of the word and adding a vocalic syllable to 
    create such a suffix. For example, Wikipedia would become Ikipediaway.

    Programmer: Diego Miranda
    Date: 16 May 2023
 */
function translate($text)
{
    $result = trim($text);
    $result = preg_replace(" [aeiouAEIOU]", " ", $result);
    $result = preg_replace(" ", "oiy===", $result);
    $result .= "oiy";

    return $result;
}

echo "original is: We are using Programming Techniques";

echo "<br>";
echo "<br>";

echo "Method1 uses associated array for all alphabet";

echo "<br>";
echo "<br>";

echo "Method1 result is: <h2>".translate ("We are using Programming Techniques")."</h2>";

// Result is: Weoiy===reoiy===singoiy===Programmingoiy===Techniquesoiy

echo "<br>";
echo "<br>";

echo "The following is the code of this page";
echo "<br>";
echo "===============================================================";
echo "<br>";
echo "<br>";

// Get the filename of the current script
$filename = $_SERVER["SCRIPT_FILENAME"];

// Display the code of the file
highlight_file($filename);
?>