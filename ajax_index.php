<?php

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ajax</title>
  </head>
  <body>

          <input type="text" id="gary" name="" >
      <button onclick="changement()" >afficher les donnees</button>
      <script type ="text/javascript" src = "">
      function changement(){    //une fonction pour faire le lien avec les donnees
        var id = document.getElementById('gary').value;
        var xhr = newXMLHttpRequest();
        xhr.onreadystatechange = function(){
          if(this.readyState == 4 && this.status == 200)
          {
            document.getElementById('change').innerhtml = this.responseText;
          }
        };
        xhr.open("GET","ajax_exe01.php?id="+ id,true);//pour ne pas recharger la page
                                                     //,besoin fichier ajax,qui affiche le resultat
        xhr.send();
      }



</script>

  </body>
</html>
