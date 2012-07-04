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

if( $argc<3 ) {
    echo "\nUsage: {$argv[0]} folder1 folder2\n\n";
    exit(1);
}
else{

    $folder1 = $argv[1];
    $folder2 = $argv[2];

    // Check input directories
    if ( !is_dir($folder1) && !is_dir($folder2) ) {
        echo "Error : Could not open at least one of input folders :\n - Folder 1 = $folder1\n - Folder 2 = $folder2\n\n";
        exit(1);
    }else{

        // List of files in the first folder
        $ezcFolder1 = ezcBaseFile::findRecursive(
            $folder1
        );
        print_r($ezcFolder1);
        
        // List of files in the second folder
        $ezcFolder2 = ezcBaseFile::findRecursive(
            $folder2
        );
        print_r($ezcFolder2);

        // Treat tables to remove path above
        // ToDo
        
        // Intersect the two tables
        $result = array_intersect($ezcFolder1, $ezcFolder2);
        print_r($result);
    }

}
