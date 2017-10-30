<?php
$identifiant=array(
   "gilles" => "user",
   "loulou" => "riri",
   "fifi" => "fafa",
);
function validatelogin($loginarray,$votrelogin,$motdepasse)
{
  $connectionstatus = false;
    if($loginarray[$votrelogin]==$motdepasse)
    {
      $connectionstatus = true;
      return $connectionstatus;
    }
}
?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>simple exercice ajax</title>
   </head>
   <body>
          <div>
             <form action="" method="post">
                 <div id=formulaire>
                       <label for="identifiant">Identifiant : </label>
                       <input type="text" name="identifiant" id="identifiant"/>
                       <label for="password">Password :  </label>
                       <input type="text" name="password" id="password"/>
                       <label for="remember_box">
                         <input checked="checked" value="1" id="remember_box" type="checkbox"> Rester connecté</label>
                       <a class="pwd" href="">Si vous avez oublié votre mot de passe</a>
                       <button type="button" class="btn btn-default">Créer un compte</button>
                     </div>
            </form>
           <?php
            if (validatelogin($identifiant, $_POST["identifiant"],$_POST["password"]))
            {
             echo "vous etes connecté";
           }
           else{
             echo "Vous n'êtes pas connecté";
           }
            ?>
           </div>
           <div >
										<button onclick="ok" name="valider" id="valider">envoyer</button>
										<button onclick="annuler" name="annuler" id="annuler">annuler</button>
										<a href=" " data-dismiss="modal">Cancel</a>
					</div>
   </body>
 </html>
