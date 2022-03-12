<?php
# simple wow charname generator
# wow charname rules: https://eu.battle.net/support/de/article/34530
#
$file_flags = FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES;

$warrior_collection = file( './wowclass/warrior.txt', $file_flags );
$warlock_collection = file( './wowclass/warlock.txt', $file_flags );

function char_name( $syllables, &$collection ) {

  static $used_pointer;

  if( $syllables == 0 ) {
    return;
  }

  $min = 0;
  $max = sizeof( $collection ) - 1;

  # $used_pointer = $pointer = rand( $min, $max );
  # bitwise notation, which is faster
  $used_pointer = $pointer = rand( )&$max;

  /*
  if( $pointer == $used_pointer ) {
    $pointer = rand( $min, $max );
  }
  */

  $namepart = $collection[$pointer];

  echo "<br>pointer: " . $pointer;
  echo " used_pointer: " . $used_pointer;
  echo " namepart: " . $namepart;


  $result = $namepart . char_name( $syllables-1, $collection );

  return $result;
}

# todo: trim name to 2-12 chars

echo "<h2>warlock name = " . ucfirst( char_name( 10, $warlock_collection )) . "</h2>";
echo "<h2>warrior name = " . ucfirst( char_name( 3, $warrior_collection )) . "</h2>";
