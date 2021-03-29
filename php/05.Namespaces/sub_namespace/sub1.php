<?php
    namespace sub_namespace\sub1;

    function sub(){
        echo 'this is sub1 namesace of sub function'.PHP_EOL.'<br/>';
    }

    function find_namespace(){
        echo 'this namespace is : '.__NAMESPACE__." - ".__FILE__.PHP_EOL.'<br/>';
    }