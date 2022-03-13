<?php

require_once( 'GenChar.php' );
require_once( 'WarlockClass.php' );

$warlock = new WarlockChar;
echo '<h2>' . $warlock->char_name( 3 ) . '</h2>';
