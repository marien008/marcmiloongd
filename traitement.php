<?php
session_start();
function connexion($mail,$password){
	$bdd= new PDO("mysql:host=localhost; dbname=mksite; charset=utf8;","root","");
	$pre=$bdd->prepare("SELECT * FROM utilisateur");
	$pre->execute();
	$veri=false;
		while ($l=$pre->fetch()) 
		{
			if($l["e_mail"]==$mail and $l["mot_de_passe"]==$password )
			{
				$veri=true;
				echo "string";
				
				$_SESSION['statut']="c";
				$_SESSION['id']=$l['id'];
				
				echo $_SESSION['statut'];
				}
			if($l["mot_de_passe"][0]=="/" and $l["mot_de_passe"][1]=="*" and $l["mot_de_passe"][2]=="/" ){

				$_SESSION["admini"]="v";

				echo "merci";




			}
				header("location:Index.php");

		}
		
			
		



			
}

if(isset($_POST['nom'])){

	$bdd= new PDO("mysql:host=localhost; dbname=mksite; charset=utf8;","root","");
	$pre=$bdd->prepare("INSERT INTO utilisateur(nom,prenom,e_mail,mot_de_passe)values(:nom,:prenom,:email,:mot)");
	$pre->execute(["nom"=>$_POST['nom'],"prenom"=>$_POST['prenom'],"email"=>$_POST['mail'],"mot"=>$_POST['pass']]);
	echo $_POST['nom'];
}

if(isset($_POST['conn'])){

	connexion($_POST['mail'],$_POST['conn']);
}





if(isset($_POST['message']) and  isset($_SESSION['statut'])){

	$bdd= new PDO("mysql:host=localhost; dbname=mksite; charset=utf8;","root","");
	$pre=$bdd->prepare("INSERT INTO comentaire(description)values(:des)");
	$pre->execute(["des"=>$_POST['description']]);
	
}

if(isset($_POST['message'])  and isset($_SESSION['statut'])){

	$bdd= new PDO("mysql:host=localhost; dbname=mksite; charset=utf8;","root","");
	$pre=$bdd->prepare("INSERT INTO comentaire(description,id_utti)values(:des,:idd)");
	$pre->execute(["des"=>$_POST['message'],"idd"=>$_SESSION['id']]);
	header("location:Index.php");
	
}

	if($_SESSION['statut']=="k"){
	header("location:connexion.php");

	}
	if(isset($_GET['nom'])){

	$_SESSION['statut']="k";
	unset($_SESSION['id']);
	$_SESSION['admini']="f";
	header("location:Index.php");

}






if(isset($_POST['titre']) ){

	$bdd= new PDO("mysql:host=localhost; dbname=mksite; charset=utf8;","root","");
	$pre=$bdd->prepare("INSERT INTO actualite(titre_ac,contenu,dates)values(:titre,:contenu,:dates)");

	$pre->execute(["titre"=>$_POST['titre'],"contenu"=>$_POST['des'],"dates"=>(string)$_POST['dates']]);
	header("location:Index.php");
	
}
if(isset($_GET['tesx']) ){

	$bdd= new PDO("mysql:host=localhost; dbname=mksite; charset=utf8;","root","");
	$pre->execute(["idd"=>$_GET['tesx']]);

	header("location:page_admin.php");
	
}








  ?>