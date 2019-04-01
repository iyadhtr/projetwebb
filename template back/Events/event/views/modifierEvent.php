<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/event.php";
include "../core/eventC.php";
if (isset($_GET['id'])){
	$eventC=new EventC();
    $result=$eventC->recupererEvent($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nom=$row['nom'];
		$dateE=$row['dateE'];
		$duree=$row['duree'];
		
?>


<html>
<head>
	
	<title>formulaire de modification</title>
	<meta charset="utf-8">

	 <script type="text/javascript" src="modifierEvent.js"></script>

	 <style type="text/css">
	 	
	 	.error { color: #FFFFFF; border: 1px dotted #000000; padding: 10px; background-color: #FF0000; }
	 </style>
</head>


<body>

<form method="post" onsubmit="return verif()">
	<h1 style="color: blue;">modifier un evenement</h1>

	<fieldset>
		<legend style="color: red"> <strong>nouveaux coordonnées</strong></legend>
	<p>
		<label for="id" > <strong>id de l'event :</strong> </label> 
		<input type="number" name="id" id="idE" placeholder="exp:1234" value="<?PHP echo $id ?>">
	</p>

	<p>
		<label for="nomE"> <strong>nom de l'event:</strong></label> 
		
		<input type="text" name="nom" id="nomE" placeholder="saint valentin" size="20" value="<?PHP echo $nom ?>">
	</p>

	<p>
		<label for="dateE"> <strong>date de l'event:</strong> </label> 
		
		<input type="date" name="dateE" id="dateE" value="<?PHP echo $dateE ?>">
	</p>

	

	<p>
		<label for="duree"><strong>duree de l'event</strong></label> 
		
		<input type="text" name="duree" id="duree" size="10" placeholder="exp:1jour/2jours..." value="<?PHP echo $duree ?>">
	</p>
	<input type="submit" name="modifier" value="modifier">
	<input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>">
<!--********************************************************************************************************-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<a href="modifierEvent.php"><input type="reset" value="reset"></a>

</form>
<br />
<br />

<div id="alerte">
	

</div>






<?PHP
	}
}
if (isset($_POST['modifier'])){
	$event=new Event($_POST['id'],$_POST['nom'],$_POST['dateE'],$_POST['duree']);
	$eventC->modifierEvent($event,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: afficherEvent.php');
}

?>
</body>
</HTMl>