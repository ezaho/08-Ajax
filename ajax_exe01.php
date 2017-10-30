<?php
$id = $_GET['id'];
  try {
  $dbh = new PDO('mysql:host=localhost;dbname=colyseum', 'root', 'user');
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
print "Erreur !: " . $e->getMessage() . "<br/>";
die();
}
$sql = "SELECT * FROM clients WHERE id=1";
$traitement = $dbh->prepare($sql);
$traitement->execute();
$results =$traitement->fetchall(PDO::FETCH_ASSOC);
?>



<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <script>




     </script>
   </head>
<body>


</body>
</html>
