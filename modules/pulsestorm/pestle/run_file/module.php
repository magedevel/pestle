<?php
namespace Pulsestorm\Pestle\Runfile\Run_File;
/**
* ALPHA: Stub for running a single PHP file in a pestle context
*
* @command pestle_run_file
* @argument file Run which file?
*/
function pestle_cli($argv)
{
    require_once($argv['file']);
}
