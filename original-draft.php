<?php
# simple wow charname generator
# wow charname rules: https://eu.battle.net/support/de/article/34530
#
function char_name( $syllables, &$collection ) {

  if( $syllables == 0 ) {
    return;
  }

  $min = 0;
  $max = sizeof( $collection ) - 1;

  # $pointer = rand( $min, $max );
  # bitwise notation, which is faster
  $pointer = rand( )&$max;

  $namepart = $collection[$pointer];

  echo "<br>pointer: " . $pointer;
  echo " namepart: " . $namepart;


  $result = $namepart . char_name( $syllables-1, $collection );

  return $result;
}

$file_flags = FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES;

$warrior_collection = file( './wowclass/warrior.txt', $file_flags );
$warlock_collection = file( './wowclass/warlock.txt', $file_flags );
$hunter_collection = file( './wowclass/hunter.txt', $file_flags );
$druid_collection = file( './wowclass/druid.txt', $file_flags );

# todo: trim name to 2-12 chars

echo "<h2>warlock name = " . ucfirst( char_name( 3, $warlock_collection )) . "</h2>";
echo "<h2>warrior name = " . ucfirst( char_name( 3, $warrior_collection )) . "</h2>";
echo "<h2>hunter name = " . ucfirst( char_name( 3, $hunter_collection )) . "</h2>";
echo "<h2>druid name = " . ucfirst( char_name( 3, $druid_collection )) . "</h2>";
