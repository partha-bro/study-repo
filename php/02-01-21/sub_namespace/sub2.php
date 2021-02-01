<?php
    namespace sub_namespace\sub2;

    function sub(){
        echo 'this is sub2 namesace of sub function'.PHP_EOL;
    }
    
    function find_namespace(){
        echo 'this namespace is : '.__NAMESPACE__." - ".__FILE__.PHP_EOL;
    }