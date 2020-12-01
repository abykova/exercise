<?php 

function revertCharacters( $txt ){
    return $txt[ strlen( $txt ) - 1 ] . ( ( strlen( $txt ) > 1 )?revertCharacters( substr( $txt, 0, strlen($txt)-1 ) ):null) ;
}

echo revertCharacters( "Привет! Давно не виделись" );
