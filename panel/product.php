<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('cart.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }
	$name =$_post['name'];
	$index =(int)$_post['index'];
	$price =(float)$_post['price'];
    $category =$_post['category'];
	
	$sql =<<<EOF
      INSERT INTO products
      VALUES (null,'$index', '$name', '$price');

EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
	  
   } else {
      echo "<br />";
	  echo "Product Records created successfully\n";
   }
   $db->close();

   ?>
   
   
   
   
   
   
   
   
   