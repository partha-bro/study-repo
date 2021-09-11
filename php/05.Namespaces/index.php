<?php
### TOPIC NAME: Namespaces ###
/*
    1. Namespaces                   Line = 9
    2. Learn sub namespaces         Line = 31
    3. Namespace Constant           Line = 40
*/

// Namespaces [Like folder stucture use for not conflict same name of classes/function/constants, etc]
    /*
     * 1) Namespaces are case-insensitive
     * 2) Namespaces are used to avoid name collision between other libraries.
     *      [same name can't be in one file and name must be only class, function, interfface, constant, etc 
     *      and Do not write variables code in namespace, because it can not be accessable.]
     * 3) namespace is the keyword used to define namespace.
     * 4) Only Classes, Interface, Functions and Constants should be defined in namepaces.
     * 5) namespace should be always in the first line.
     * 6) include/require is used to include any file into another file.
     * 7) Use the backslash(\) to refer to sub directories or file name.
     * 8) 'use' keyword 'namespace name' 'as' 'short name' for use shortcut name of namespace name
     * Youtube link: https://www.youtube.com/watch?v=YgUOSY581Wg
     */

// First include the namespace files
include 'namespaceProduct.php';
include 'namespaceTesting.php';

// Access the code
echo namespaceProduct\NAME." ".PHP_EOL;
echo namespaceTesting\NAME." ".PHP_EOL;
echo "<hr/>";

// Learn sub namespaces 
// call sub namespaces
include 'sub_namespace/sub1.php';
include 'sub_namespace/sub2.php';

// Access the code
sub_namespace\sub1\sub();
sub_namespace\sub2\sub();
echo "<hr/>";

// Namespace Constant
// namespace cconstant is __NAMESPACE__ 
// it is use for know about which namespace it belongs
sub_namespace\sub1\find_namespace();
sub_namespace\sub2\find_namespace();
echo "<hr/>";

// simple function
    function wow()
    {
        # code...
        echo "Call wow function from index file.";
    }

echo "<hr/>";
wow();
echo "<hr/>";
use namespaceProduct as np;

np\wow();