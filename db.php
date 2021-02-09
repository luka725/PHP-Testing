<?php
/**
 * Creating database connection class
 */
include 'constants.php';
include 'submit.php';


class DB {
    public $aMemberVar = 'aMemberVar Member Variable';
    public $aFuncName = 'aMemberFunc';
   
   
    function read() {
        print 'Inside `aMemberFunc()`';
    }

    function write() {
        print 'Inside `aMemberFunc()`';
    }
}


?>