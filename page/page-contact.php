<!DOCTYPE html>
<html lang=fr dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../image/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="main.css" />
  <title>Contact </title>
</head>
<body>
  <!--Barre du titre-->
  <div class=div1>
  <h1 id=titrebar><a href="../index.html"><img id="logo" src="../image/BD_DRUIDE_LOGO_BLANC.jpg" height="150" width="150"  alt="logo Druide"></a>
  BD DRUIDE <br>Une bibliothèque imposante sur la BD.</h1>
  <div class="navbar">
  <a class="active" href="#"></> Accueil</a>
  <a href="#"></> Contact</a>
  </div>
  </div>
  <body>
    <div class="div2">
    <div
    <form method="post" action="receive.php">

     <fieldset>
         <legend>Informations sur le client</legend>
         <label for ="name">Nom : </label>
         <input type="text" id="name" name="client_name" autofocus required><br>

         <input type="radio" id="part" name="client_type" value="Particulier"
         <label for="part">Particulier</label>
         <input type="radio" id="ent" name="client_type" value="Entreprise" checked>
         <label for="ent">Entreprise</label>

         <br>

         <label for="mail">Courriel :</label>
         <input type="email" id="mail" name="client_mail" required><br>

         </form>
       </fieldset>




         <label for="pack">Forfait :</label>
         <input type="text" id="pack" value="Forfait A" disabled><br>

         <label for="duration">Durée de l'engagement :</label>
         <select>
         <option value="1y">1 an</option>
         <option value="2y" selected>2 ans</option>
         <option value="5y">5 ans</option>
         </select><br>

         <fieldset>
         <legend>Ajouter des options à votre forfait :</legend>

         <input type="checkbox" id="opt1" name="opt1" value="msginstant"
                <label for="opt1">Messagerie instantannée</label><br>

          <input type="checkbox" id="opt2" name="opt2" value="over100"
                <label for="opt1">+100 utilisateurs connectés</label><br>

        <input type="checkbox" id="opt3" name="opt3" value="stock20"
                <label for="opt1">+20Go d'espace de stockage</label>



     </fieldset>
  </form>
</div>
</div>

</body>
