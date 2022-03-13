<?php
require_once( 'GenChar.php' );

class WarlockChar extends GenChar {

  public $warlock_coll;

  function __construct() {
    parent::__construct();

    # filter collection for  entry 'warlock.txt'
    $res = 0;
    for( $i = 0; $i < sizeof( $this->coll ); $i++ ) {

      #echo "<br>i: " . $i . " -- " . $this->coll[$i];
      if( $this->coll[$i][0] == 'warlock.txt' ) {
        #echo "-- found!";
        $res = $i;
      }
    }

    #echo "<br> coll " . $res . " is warlock";

    $this->warlock_coll = $this->coll[$res][2];
    #var_dump( $this->warlock_coll );
  }

  function char_name( $syllables ) {
    if( $syllables == 0 ) {
      return;
    }

    # how much entries in collection?
    $max = sizeof( $this->warlock_coll ) - 1;

    # generate random pointer to an entry
    $pointer = rand( 0, $max );

    $namepart = $this->warlock_coll[$pointer];

    echo "<br>pointer: " . $pointer;
    echo " namepart: " . trim( $namepart );

    $result = $namepart . $this->char_name( $syllables-1 );

    return $result;
  }
}
