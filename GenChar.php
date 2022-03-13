<?php

class GenChar {
  public $char_max_len = 12;
  public $syllables_default = 3;
  public $file_flags = FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES;

  public $wow_classes;
  public $coll_dir = 'wowclass';
  public $coll_path;
  public $coll = [];

  function __construct() {
    $this->coll_path = dirname(__FILE__) . '/' . $this->coll_dir;

    # load all files in collection_dir path
    $this->wow_classes = $this->get_coll_files();

    for( $i = 0; $i < sizeof( $this->wow_classes ); $i++ ) {

      # write wow class name in first entry
      $this->coll[$i][0] = $this->wow_classes[$i];

      # shortcut
      $p = $this->coll_path . '/' . $this->wow_classes[$i];

      # write path in second entry
      $this->coll[$i][1] = $p;

      # write array of values from file in third entry
      $this->coll[$i][2] = file( $p, $this->file_flags );
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


  function print_coll( &$collection ) {
    var_dump( $collection );
  }


  function trim_name( $the_name ) {

    if( strlen( $the_name ) > $this->char_max_len ) {
      $result = substr( $the_name, 0, $this->char_max_len );
    }

    $result = ucfirst( $result );

    return $result;
  }
}


#$a = new GenChar();
#echo $a->trim_name( 'helloponyhofponyyeah' );
#var_dump( $a );
