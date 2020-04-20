<?php
  
   /**
   * config.php
   * 
   * @author Lee Howarth
   */
   
   $config = ( object ) Array 
   (
      /* Db Settings */
      'dbDsn'  => 'mysql:host=localhost;dbname=admin_;charset=utf8',
       
      'dbUser' => 'dbsql',
       
      'dbPass' => 'Jb4&0ti8',
      
      /* Tracker Settings */
      'minInterval' => 300,
      
      'maxInterval' => 900
   );