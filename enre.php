
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="sty.css">
</head>
<body style="background-color:bl">
   
<form  id="b"  action="traitement.php" method="POST" style="border: 1px solid #BFBFBF; width: 60%; margin-left: 15%; background-color: #CCCCCC; border-radius: 10px; box-shadow: 0px 10px 10px #949494; margin-top: 150px; display: inline-block; padding: 5px; position: fixed;">
        <span style="margin-left: 95%; "><a href="Index.php"style="font-size:29px; color:red;">x</a></span>

        
        <div style="height: 60px; width: 40%; padding: 3px; text-align: center; margin-left:30% ; margin-top: -75px; border-radius: 500px; background-color: white; border-color: #3D3D3D;"><svg xmlns="http://www.w3.org/2000/svg" width="60" style="color: blue;" height="60" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></div>
<h2 style="font-family: Garamond; margin-top:40px; color:blue; text-align:center;">Créattion compte</h2>
          <div class="l" style="text-align:center;">
                <input  type="text" style="width: 70%;" name="nom" placeholder="Entrer votre nom" required class="f1">
            </div><br>
              <div class="l" style="text-align:center;">
                <input type="text" style="width: 70%;" name="prenom" placeholder="Entrer votre prenom" required class="f1">
            </div>
             <div class="l" style="text-align:center;">
                <input type="text" style="width: 70%;" name="mail" placeholder="Entrez votre adresse email" required class="f1">
            </div>
             <div class="l" style="text-align:center;">
                <input type="text" style="width: 70%;" name="pass" placeholder="vodre passe mot de passe" required class="f1">
            </div>
         

             <div  style="margin: 25px;" >
                <button  type="submit" value="conn" > Création</button>
            </div>
            <a href="connexion.php">connectez-vous</a>
    </form>
</body>
</html>