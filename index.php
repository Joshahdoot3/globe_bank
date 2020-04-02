<?php
define("DB_SERVER", "localhost");
define("DB_USER", "webuser");
define("DB_PASS", "secretpassword");
define("DB_NAME", "globe_bank");

function dbconnect() {
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    return $connection;
}

function dbdisconnect($connection) {

if(isset($connection)) {
mysqli_close($connection);
}

}

$db = db_connect();

if (!isset($page_title)) {$page_title='Staff Area';}

 ?>


 <!doctype html>

 <html lang="en">
   <head>
     <title>GBI - <?php echo $page_title; ?> </title>
     <meta charset="utf-8">
     <link rel="stylesheet" media="All" href="../stylesheets/staff.css" />
   </head>

   <body>
 <header>
 GBI Staff Area
 </header>
 <navigation>
 <ul>
 <li> <a href="hello.php"> Menu </a> </li>
 </ul>
 </navigation>

 <footer>
 &copy; <?php echo date('Y'); ?> Globe Bank
 </footer>


   </body>
 </html>

 <?php
 db_disconnect($db);
 ?>
