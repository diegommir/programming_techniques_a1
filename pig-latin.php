
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
    //If there is nothing to translate, return empty
    if (empty($result)) {
        return "";
    }

    $result = preg_replace("/^[aeiouAEIOU]/", "", $result);
    $result = preg_replace("/ [aeiouAEIOU]/", " ", $result);
    $result = preg_replace("/ /", "oiy===", $result);
    $result = $result . "oiy";

    return $result;
}

//Default message
$text_to_translate = "We are using Programming Techniques";

//If there is something to translate, get it from POST
if (!empty($_POST["text"])) {
    $text_to_translate = $_POST["text"];
}

//Translated message
$translated_text = translate($text_to_translate);
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                margin: 0px;
                padding: 0px;
                background: #CCC;
            }

            h2 {
                margin-left: 10px;
            }

            label {
                display: block;
            }

            div {
                margin: 10px;
                padding: 10px;
                min-width: 200px;
                min-height: 200px;
                background: #FFF;
            }

            textarea {
                width: 100%;
                height: 100%;
            }

            #btnTranslate {
                margin: 0px 10px;
                padding: 10px 50px;
            }

            a {
                color: #333;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <h2>Pig-latin Translator</h3>
        <form method="POST">
            <div>
                <label>Text to Translate:</label>
                <textarea id="text" name="text"><?php echo $text_to_translate ?></textarea>
            </div>
            <div>
                <label>Translated Text:</label>
                <textarea id="result" name="result"><?php echo $translated_text ?></textarea>
            </div>
            <input id="btnTranslate" type="submit" value="Translate"/>
        </form>
        <br/>
        <a href="https://github.com/diegommir/programming_techniques_a1" target="github">Github Repository</a>
    </body>
</html>
