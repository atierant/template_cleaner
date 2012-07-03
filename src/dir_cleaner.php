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

$data = ezcBaseFile::findRecursive(
"./src/examples"
);
var_dump( $data ); 
