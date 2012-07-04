<?php
/**
 * @copyright
 * @license 
 * @version 
 * @filesource
 * @package 
 */

/**
 * Desc
 *
 * @package 
 * @version 
 */

require_once './src/autoload.php';


if( $argc<2 ) {
    echo "\nUsage: {$argv[0]} folder1 folder2\n\n";
    exit(1);
}

$folder1 = $argv[1];
$folder2 = $argv[2];

if ( !is_dir($folder1) && !is_dir($folder2) ) {
    echo "\nCould not open input folders : Folder 1 = $folder1 && Folder 2 = $folfder2\n\n";
    exit(1);
}else{

    $ezcFolder1 = ezcBaseFile::findRecursive(
        $folder1,
        array( "@./*.tpl$@" ),
        array( '@/'.$folder2.'/@' ),
        $stats
    );
    /*$ezcFolder2 = ezcBaseFile::findRecursive(
        $folder2,
        array( '.tpl$' )
    );*/

    var_dump( $ezcFolder1 );

    echo ("There are ".$stats['count']." matching templates\n\n" );
}
