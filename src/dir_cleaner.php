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
        $ezcFolder1 = ezcBaseFile::findRecursive($folder1);
        
        // List of files in the second folder
        $ezcFolder2 = ezcBaseFile::findRecursive($folder2);
        
        // Intersect the two tables
        $intersect = array_intersect(str_replace($folder1, "", $ezcFolder1), str_replace($folder2, "", $ezcFolder2));
        
        // Log file containing deleted path
        $myDeletedFiles = fopen(dirname(__FILE__).'/deleted_files.log', 'w+');

        // Removing files Recursively
        foreach($intersect as $value)
        {
            $fileToDelete = $folder1.$value;
            echo "\n\$fileToDelete vaut $fileToDelete\n";
            ezcBaseFile::removeRecursive($fileToDelete);
            
            // Log
            fputs($myDeletedFiles, $value."\n");
        }
        
        // Close the log file
        fclose($myDeletedFiles);
    }
}
