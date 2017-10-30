<?php
 try {//nom du PDO
  $dbh = new PDO('mysql:host=localhost;dbname=colyseum', 'root', 'user');
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
print "Erreur !: " . $e->getMessage() . "<br/>";
die();
}?>
<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <script>




     </script>
   </head>
<body>

<div id="demo">
 <h2>Let AJAX change this text</h2>
 <button type="button" onclick="loadDoc()">Change Content</button>
</div>

</body>
</html>
