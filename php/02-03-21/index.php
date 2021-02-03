<?php
### TOPIC NAME: Strings ###

/*
    1. How to Combine Two Strings                   Line = 22
    2. HereDoc                                      Line = 37
    3. NowDoc                                       Line = 65
    4. strlen() - Find Length of String             Line = 102
    5. Find Something in a String                   Line = 114
        5.1 strpos()
        5.2 stripos()
    6. Number of Words                              Line = 159
    7. Replace Strings                              Line = 162
    8. Reverse Strings                              Line = 165
    9. Remove White Spaces                          Line = 168
    10. Shuffle Strings                             Line = 173
    11. Find Position case insenstive.              Line = 176
    12. Upper and Lowercase                         Line = 179
    13. Word Wrap the String and display it.        Line = 183

*/
## How to Combine Two Strings 
    //https://www.php.net/manual/en/ref.strings.php
    //'.' (dot) operator is used to combine strings together

    $firstName =  "John";
    $lastName =  ", Smith";
    $fullName = $firstName . $lastName;
    echo $fullName . PHP_EOL;

    $Marks = 10;
    $passed = true;
    //Add String, Integer, Boolean any other basic variable types with "." operator.
    $content = "Student $fullName got Total " . $Marks . " he is passed - " . $passed;
    echo $content . PHP_EOL;

## HereDoc
    /*
        multiple line or paragraph of string print in heredoc of echo
        No logical opration is perform but it can read/print variables value.
        syntax: echo <<< LABEL_NAME
                        multiplte
                        line
                        of
                        data
                LABEL_NAME;
    */
    $name ="John, Smith";
    $number = 10;

    //Write a block of strings with heredoc
    echo <<< DOC_LABEL
    You can write anything inside this
    "Double Quotes" . anything 
    'Single Quites' ... . . . . 
    $name knows how to write PHP
    ($number * 10)
    New Lines and Strings.
    (true) ? "Some Effect" : "No Effect";
    PHP_EOL
    <strong>Is this bold?</strong>
    Apart from Variable interpolation nothing will work.
DOC_LABEL;

## NowDoc
    /*
        multiple line or paragraph of string print in nowdoc of echo
        No logical opration is perform and it can not read/print variables value.
        syntax: echo <<< 'LABEL_NAME'
                        multiplte
                        line
                        of
                        data
                LABEL_NAME;
            
        Difference between heredoc vs nowdoc.
                        heredoc        |              nowdoc
            1. use for print multiple  |     1. use for print multiple
                line of paragraph      |        line of paragraph
            2. it can print value of   |     2. it can not print value of
                variables              |         variables
            3. it don't have single    |     3. it don't have single 
                qoute in label name.   |         qoute in label name.
    */
    $name ="John, Smith";
    $number = 10;
    //Write a block of strings with heredoc
    echo <<< 'DOC_LABEL'
    You can write anything inside this
    "Double Quotes" . anything 
    'Single Quites' ... . . . . 
    $name knows how to write PHP
    ($number * 10)
    New Lines and Strings.
    (true) ? "Some Effect" : "No Effect";
    PHP_EOL
    <strong>Is this bold?</strong>
    Variable interpolation also will work.    

DOC_LABEL;

## String Functions strlen() - Find Length of String
    $name = "John, Smith";
    echo strlen($name) . PHP_EOL;

    //echo strlen($name1);

    $name2 = "";
    echo strlen($name2) . PHP_EOL;

    $name2 = null;
    echo strlen($name2) . PHP_EOL;

## String Functions strpos() - Find Something in a String
    # strpos() : find a string from another string's position [it means avaliable]
    # stripos() : find a string from another string's position without case-sensitive

    // Find the String position inside the String.
    $content = "This is a very long content and it is a string.";
    $findContentWord = "content";
    $position = strpos($content, $findContentWord);
    echo $position . PHP_EOL;

    $findContentWord = "content1";
    $position = strpos($content, $findContentWord);
    echo $position . PHP_EOL;
    echo true . PHP_EOL;
    echo false . PHP_EOL;
    echo true . PHP_EOL;

    if( $position === false ) {
        echo "1) Not Found!" . PHP_EOL;
    }

    $findContentWord = "This";
    $position = strpos($content, $findContentWord);

    //Able to find but still canot check.
    //Because position is 0 and 0 in condition is treated as false.
    if( !$position ) {
        echo "$position Value" . PHP_EOL;
        echo "2) Not Found!" . PHP_EOL;
    }

    if( !0 ){
        echo "False Condition" . PHP_EOL;
    }

    if( $position === false ) {
        echo "3) Not Found!" . PHP_EOL;
    }
    
## Commonly used String Function Examples    
    $content = "You can do string operations easily with String Functions";
    $findWord = "operations";
    $position = -1;

    echo "\"$content\"" . PHP_EOL;
    //Number of Words
    echo "Number of Words in the String: " . str_word_count($content) . PHP_EOL;

    //Replace Strings
    echo "Find and Replace operations with manipulation: " . str_replace("operations", "manipulations", $content) . PHP_EOL;

    //Reverse Strings
    echo strrev($content) . PHP_EOL;

    //Remove White Spaces - ltrim and rtrim
    $content = "    " . $content . "    ";
    echo $content . PHP_EOL;
    echo trim($content) . PHP_EOL;

    //Shuffle Strings
    echo str_shuffle($content) . PHP_EOL;

    //Find Position case insenstive.
    echo stripos($content, "OPERATIONS") . PHP_EOL;

    //UPPER and lower case
    echo strtoupper($content) . PHP_EOL;
    echo strtolower($content) . PHP_EOL;

    //Word Wrap the String and display it.
    $content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
    echo wordwrap($content, 25) . PHP_EOL;
    echo $content . PHP_EOL;
    
    
    