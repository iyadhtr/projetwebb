<?PHP
include "../entities/remise.php";
include "../core/remiseC.php";

if (isset($_POST['id_remise']) and isset($_POST['id_event']) and isset($_POST['pourcentage']) and isset($_POST['num_p']))
{
$remise1=new Remise($_POST['id_remise'],$_POST['id_event'],$_POST['pourcentage'],$_POST['num_p']) or die("<br />Erreur de requete: ".mysql_error()); 

$remise1C=new RemiseC();
$remise1C->ajouterRemise($remise1);
header('Location: afficherRemise.php');
	
}
else{
	echo "vérifier les champs";
}
//*/

?>