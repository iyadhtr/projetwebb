<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/remise.php";
include "../core/remiseC.php";
if (isset($_GET['id_remise'])){
	$remiseC=new RemiseC();
    $result=$remiseC->recupererRemise($_GET['id_remise']);
	foreach($result as $row){
		$id_remise=$row['id_remise'];
		$id_event=$row['id_event'];
		$pourcentage=$row['pourcentage'];
		$num_p=$row['num_p'];
		
?>
<form method="POST">
<table>
<caption>Modifier Remise</caption>
<tr>
<td>ID_remise</td>
<td><input type="text" name="id_remise" value="<?PHP echo $id_remise ?>"></td>
</tr>
<tr>
<td>ID_event</td>
<td><input type="text" name="id_event" value="<?PHP echo $id_event ?>"></td>
</tr>
<tr>
<td>Pourcentage</td>
<td><input type="text" name="pourcentage" value="<?PHP echo $pourcentage ?>"></td>
</tr>
<tr>
<td>Numero_produit</td>
<td><input type="text" name="num_p" value="<?PHP echo $num_p ?>"></td>
</tr>

<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idremise_ini" value="<?PHP echo $_GET['id_remise'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$remise=new Remise($_POST['id_remise'],$_POST['id_event'],$_POST['pourcentage'],$_POST['num_p']);
	$remiseC->modifierRemise($remise,$_POST['idremise_ini']);
	echo $_POST['idremise_ini'];
	header('Location: afficherRemise.php');
}

?>
</body>
</HTMl>