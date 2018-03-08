<?php
/**
 * Sync the specified git directories
 * @author wp-kitten
 */

/*
 * Setup the path to the git directories to sync
 */
$gitRepoPaths = array(
//	'path/to/your/repo/dir/here',
//	'path/to/your/repo/dir/here',
);

/**
 * Sync the specified directories
 * @param array $dirs
 */
function __gitPull( $dirs = array() )
{
	if ( empty( $dirs ) ) {
		echo PHP_EOL . __FUNCTION__ . '() Error: no directories provided.' . PHP_EOL;
		return;
	}
	foreach ( $dirs as $dir ) {
		echo PHP_EOL . 'Updating: ' . $dir . PHP_EOL;
		//#! git config credential.helper store - might not be necessary though, but you never know
		//#! git pull - obvious
		//#! 2>&1 - get output
		echo shell_exec( "cd " . escapeshellarg( $dir ) . " && git config credential.helper store && git pull 2>&1" );
		echo '>> DONE <<' . PHP_EOL;
	}
}

//#! Sync
if( ! empty( $gitRepoPaths ) ) {
	__gitPull( $gitRepoPaths );
}
