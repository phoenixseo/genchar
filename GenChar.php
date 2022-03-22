<?php

class GenChar {
  public $char_max_len = 12;
  public $syllables_default = 3;
  public $file_flags = FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES;

  public $wow_classfiles;
  public $wow_class;
  public $coll_dir = 'web/wowclass';
  public $coll_path;
  public $coll;

  function __construct() {

    $this->coll_path = dirname(__FILE__) . '/' . $this->coll_dir;

    # load all files in collection_dir path
    $this->wow_classfiles = $this->get_coll_files();

    # get the existing wow class names.
    for( $i = 0; $i < sizeof( $this->wow_classfiles ); $i++ ) {
      $tmp[$i] = explode( '.', $this->wow_classfiles[$i] );
      $this->wow_class[$i] = $tmp[$i][0];
    }
    #var_dump( $this->wow_class );

    for( $i = 0; $i < sizeof( $this->wow_classfiles ); $i++ ) {

      $this->coll[$this->wow_class[$i]] = array();

      # write wow class name in first entry
      $this->coll[$this->wow_class[$i]]['file'] = $this->wow_classfiles[$i];

      # shortcut
      $p = $this->coll_path . '/' . $this->wow_classfiles[$i];

      # write path in second entry
      $this->coll[$this->wow_class[$i]]['path'] = $p;

      # write array of values from file in third entry
      $this->coll[$this->wow_class[$i]]['values'] = file( $p, $htis->file_flags );
    }

  }

  function get_coll_files() {
    # fuer glob ein * anhaengen
    $p = $this->coll_path . '/*';

    $res = array();
    foreach( glob( $p ) as $file ) {
      # diese ueberspringen
      if( $file == $this->coll_path . '/index.php' ) { continue; }
      if( $file == $this->coll_path . '/@eaDir' ) { continue; }

      $res[] = sprintf('%1s', basename( $file ));
    }

    return $res;
  }


  # utility function that does the heavy work.
  function gen_charname( $wowclass, $syllables  ) {
    # generate charname for a given wow class.

    # recursion cancel condition
    if( $syllables == 0 ) {
      return;
    }

    # how much entries in collection for this wow class?
    $max = sizeof( $this->coll[$wowclass]['values']) - 1;

    # generate random pointer to an entry
    $pointer = random_int( 0, $max );

    # get this syllable
    $namepart = $this->coll[$wowclass]['values'][$pointer];

    # clean from whitespaces
    $namepart = trim( $namepart );

    #echo "<br>pointer: " . $pointer;
    #echo " namepart: " . $namepart;

    # enter recursion
    $result = $namepart . $this->gen_charname( $wowclass, $syllables-1 );

    return $result;

  }

  # pretty print char name.
  function char_name( $wowclass, $syllables ) {
    # get char name from utility function.
    $result = $this->gen_charname( $wowclass, $syllables );

    # check max length of char name.
    if( strlen( $result ) > $this->char_max_len ) {
      $result = substr( $result, 0, $this->char_max_len );
    }

    # first letter uppercase
    $result = ucfirst( $result );

    return $result;
  }


  /* utility functions ----------------------------------------- */

  function print_coll( $wowclass ) {
    for( $i = 0; $i < sizeof( $this->coll[$wowclass]['values'] ); $i++ ) {
      echo $this->coll[$wowclass]['values'][$i] . "<br>";
    }
  }

  function get_coll_size( $wowclass ) {
    return sizeof( $this->coll[$wowclass]['values'] );
  }

  function print_classes( ) {
    $size = sizeof( $this->wow_class );

    for( $i = 0; $i < $size; $i++ ) {
      echo ucfirst( $this->wow_class[$i] );
      if( $i < ( $size-1 )) {
        echo ", ";
      }
    }
  }

  function get_class_icon( $wowclass ) {
    # get wow class icon from wowhead.
    # sample:
    # https://wow.zamimg.com/images/wow/icons/large/classicon_hunter.jpg
    $wowhead_url = 'https://wow.zamimg.com/images/wow/icons/large/';
    $class_icon = $wowhead_url . 'classicon_' . $wowclass . '.jpg';
    $img = '<img src="' . $class_icon . '" alt="' . $wowclass . '">';
    return $img;
  }

  function print_stats( ) {
    echo "<h3>GenChar Stats:</h3>";

    echo "<ul>";
    for( $i = 0; $i < sizeof( $this->wow_class ); $i++ ) {
      echo "<li>";
      echo ucfirst( $this->wow_class[$i] );
      echo ": ";
      echo $this->get_coll_size( $this->wow_class[$i] );
      echo " Syllables";
      echo "</li>";
    }
    echo "</ul>";
  }

}


#$a = new GenChar();
#echo $a->trim_name( 'helloponyhofponyyeah' );
#var_dump( $a );
