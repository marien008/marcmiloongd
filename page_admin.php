<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
	textarea{
	 margin-left: 25%;
	 width: 50%;
	 height: 70px;
	 border-radius: 5px;

	}
	form{
		padding-top: 80px;
		
	}
	p{
		 margin-left: 25%;
	}
	.v{
		padding: 8px;
		border: 1px solid red;
		border-radius: 5px;
		width: 13%;
		height: 13px;
		margin-left: 85%;
		text-align: center;

	}
	input{
		padding: 8px;
		border: 1px solid blue;
		border-radius: 5px;

	}
	*{
		font-size: 13px;
		font-family: verdana;
	}
	button{

		padding: 8px;
   
    border-radius: 6px;
    display: inline-block;
     background-color: #3288BD;
     color: white;
     margin-left: 25%;
	}

.a{

	width: 90%;
	height: 110px;
	background-color: #DDEBF7;
	border-radius: 10px;
	
	
	display: flex;
	flex-direction: column;
	justify-content: space-around;
	padding-left: 20px;


}
.c{
	width:  90%;
	height: 50px;
	background-color: white;
	border-radius: 10px;


}
.b{
	
	display: inline-block;
	border-radius: 10px;
	padding: 4px;
	width: 50%;
	background-color: white;
}
.g{
	width: 80%;
	display: flex;
	flex-direction: column;
	align-items: flex-start;
	margin-left: 10%;
	
	padding: 3px;

}
.comm{
	overflow-y: scroll;
	height: 320px;
	
	width: 50%;
	margin-left: 25%;
}

	
</style>
<?php 

	$bdd= new PDO("mysql:host=localhost; dbname=mksite; charset=utf8;","root","");
	$pre=$bdd->prepare("SELECT * FROM comentaire inner join utilisateur on  comentaire.id_utti =utilisateur.id");
	$pre->execute();
?>

<body style="">
	<div class="v"><?php echo "le  ".date("y/m/")."20".date("d");                ?></div>

	<section style="margin-top:-110px;">
		<form action="traitement.php" method="POST">
			<p><input type="text" name="titre" placeholder=" le titre de l'evenement "></p>
			<p><input type="date" class="d" name="dates" placeholder="entrer la date"></p>
			<textarea name="des">
			</textarea><br>
			
			<button type="submit"> publier</button>
		
		</form>
		

	</section>
	<h3 style="text-align:center; color: red;">les comentaires</h3>
	<section class="comm">
		<?php 
			while ($l=$pre->fetch()) 
		{
			?>
				<div class="g">
		<div class="a" style="">
			<div class="b">
				<?php echo $l['e_mail'] ?>
				
			</div>
			<div class="c" style="padding:3px;">
				<?php echo $l['description'] ?>
				
			</div>
			
		
		</div>
		<div style="">
			<a href="traitement.php?tesx=<?php echo $l['id_c']  ?>">supprimer</a>
		</div>
		
	</div>

			<?php



		}


		?>
	
	
		

	</section>


<script type="text/javascript">

	

	
	

</script>


</body>
</html>