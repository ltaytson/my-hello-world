<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
 include 'config.php';
 echo "<p>Hello World {$_SERVER['SERVER_ADDR']} - {$env}</p>";
 ?> 
 </body>
</html>