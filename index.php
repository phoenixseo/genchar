<?php
require_once( 'GenChar.php' );

$a = new GenChar;
echo '<h2>Warlock: ' . $a->char_name( 'warlock', 5 ) . '</h2>';
echo '<h2>Warrior: ' . $a->char_name( 'warrior', 5 ) . '</h2>';
echo '<h2>Druid: ' . $a->char_name( 'druid', 5 ) . '</h2>';
echo '<h2>Hunter: ' . $a->char_name( 'hunter', 5 ) . '</h2>';
