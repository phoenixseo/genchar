<?php
# simple wow charname generator
# wow charname rules: https://eu.battle.net/support/de/article/34530
#
$file_flags = FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES;

$warrior_collection = file( './wowclass/warrior.txt', $file_flags );
$warlock_collection = file( './wowclass/warlock.txt', $file_flags );

function char_name( $syllables, &$collection ) {

  if( $syllables == 0 ) {
    return;
  }

  $pointer = rand( 0, sizeof( $collection )-1 );
  $namepart = $collection[$pointer];

  echo "<br>pointer: " . $pointer;
  echo " namepart: " . $namepart;

  $result = $namepart . char_name( $syllables-1, $collection );

  return $result;
}

# todo: trim name to 2-12 chars
# todo: first letter uppercase

echo "<br><br>warlock name = " . char_name( 3, $warlock_collection );
echo "<br><br>warrior name = " . char_name( 5, $warrior_collection );
