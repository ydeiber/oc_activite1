
<?php 
if($_POST['submit']== "Afficher") 
{
	$date = $_POST['date'];
	$heure = $_POST['heure'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$ddn = $_POST['ddn'];
	$adresse = $_POST['adresse'];
	$circ = $_POST['circ'];
	$conscience = $_POST['conscience'];
	$pci = $_POST['pci'];
	$dts = $_POST['dts'];
	$pupilles = $_POST['pupilles'];
	$fc = $_POST['fc'];
	$ta = $_POST['ta'];
	$temp = $_POST['temp'];
	$dc = $_POST['dc'];
	$fr = $_POST['fr'];
	$sat = $_POST['sat'];
	$dr = $_POST['dr'];
	$lesio = $_POST['lesio'];
	$m = $_POST['m'];
	$h = $_POST['h'];
	$t = $_POST['t'];
	$a = $_POST['a'];
	$gestes = $_POST['gestes'];
	$med = $_POST['med'];
	$fdo = $_POST['fdo'];
	$devenir = $_POST['devenir'];
	$dest = $_POST['dest'];	
	
	$rendu = 'Voici le bilan à copier/coller dans une notecard : <br>';
	$rendu .= '<pre>SDIS-SL - Centre de Secours de Berjolac<br>------------------------------------------------------------------------------------------------------<br>';
		$rendu .='                                 Fiche d\'intervention - Sapeurs-Pompiers<br>------------------------------------------------------------------------------------------------------<br><br>';
		$rendu .='Date : ' . $date .'             Heure : ' . $heure . '<br><br><br>';
		$rendu.='Informations :<br>';
		$rendu.='Nom : ' . $nom . '         Prénom : ' . $prenom . '          Date de naissance : ' . $ddn . '<br>';
		$rendu.='Adresse d\'intervention : ' . $adresse . '<br><br><br>';
		$rendu.='Bilan circonstanciel : ' . $circ . '<br><br><br>';
		$rendu.='Bilan vital<br>';
		$rendu.='Neurologique <br>Conscience : ' . $conscience . '<br>Perte de connaissance initiale : ' . $pci . '<br>Orienté dans le temps et l\'espace : ' . $dts . '<br>Pupilles réactives et symétriques : ' . $pupilles . '<br><br>';
		$rendu.='Circulation <br>Tension artérielle : ' . $ta . '<br>Fréquence cardiaque : ' . $fc . '<br>Température : ' . $temp .'<br>Signe de détresse circulatoire : ' . $dc . '<br><br>  ';
		$rendu.='Respiration <br>Fréquence respiratoire : ' . $fr . '<br>Saturation en oxygène : ' . $sat . '<br>Signe de détresse respiratoire : ' . $dr . '<br><br>';
		$rendu.='Bilan lésionnel : ' . $lesio . '<br>';
		$rendu.='Bilan complémentaire : <br>    M : ' . $m . '<br>    H : ' . $h . '<br>    T : ' .$t . '<br>    A : ' . $a . '<br><br><br>';
		$rendu.='Gestes effectués : ' . $gestes . '<br><br><br>';
		$rendu.='Autres :<br>Médecin sur place : ' . $med . '<br>Forces de l\'ordre sur place : ' . $fdo . '<br>Devenir : ' . $devenir . '<br>Si transport, destination : ' . $dest. '.</pre>';			

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="fr" />
<link href="style.css"	title="Défaut" rel="stylesheet" type="text/css" media="screen" />
</head>

<? echo $rendu;?>

<FORM method="post" action=""> 
<h3>Information</h3>
Date : <INPUT TYPE="date" NAME="date" id="date" VALUE="">  <BR> 
Heure : <INPUT TYPE="time" NAME="heure" id="heure" VALUE="">  <BR><BR>
Nom de la victime : <INPUT TYPE="text" NAME="nom" id="nom" VALUE="">  <BR> 
Prénom de la victime : <INPUT TYPE="text" NAME="prenom" id="prenom" VALUE="">  <BR> 
Date de naissance de la victime: <INPUT TYPE="date" NAME="ddn" id="ddn" VALUE="">  <BR> 
Adresse d'intervention : <INPUT TYPE="text" NAME="adresse" id="adresse" VALUE="">  <BR><br><br>

<h3>Bilan circonstanciel</h3>
<INPUT TYPE="text" NAME="circ" id="circ" VALUE="Que s'est-il passé ?">  <BR> <br><br>

<h3>Bilan vital</h3>
<h5>Neurologique</h5>
Consciente : <select name="conscience" id="conscience"><option value="Oui">Oui</option><option value="Non">Non</option></select><br>
Perte de connaissance : <select name="pci" id="pci"><option value="Oui">Oui</option><option value="Non">Non</option></select><br><br>
Orientée dans le temps et l'espace : <select name="dts" id="dts"><option value="Oui">Oui</option><option value="Non">Non</option></select><br>
Pupilles réactives et symétrique : <select name="pupilles" id="pupilles"><option value="Oui">Oui</option><option value="Non">Non</option></select><br><br>

<h5>Circulation</h5>
Tension artérielle : <INPUT TYPE="text" NAME="ta" id="ta" VALUE="">  <BR> 
Fréquence cardiaque : <INPUT TYPE="text" NAME="fc" id="fc" VALUE="">  <BR> 
Température : <INPUT TYPE="text" NAME="temp" id="temp" VALUE="">  <BR> 
Signes de détresse circulatoire : <INPUT TYPE="text" NAME="dc" id="dc" VALUE="">  <BR> <br>

<h5>Respiration</h5>
Fréquence respiratoire : <INPUT TYPE="text" NAME="fr" id="fr" VALUE="">  <BR> 
SpO2 : <INPUT TYPE="text" NAME="sat" id="sat" VALUE="">  <BR> 
Signes de détresse respiratoire : <INPUT TYPE="text" NAME="dr" id="dr" VALUE="">  <BR> <br><br>

<h3>Bilan lésionnel</h3>
<INPUT TYPE="text" NAME="lesio" id="lesio" VALUE="">  <BR> <br><br>

<h3>Bilan complémentaire</h3>
Maladie : <INPUT TYPE="text" NAME="m" id="m" VALUE="">  <BR> 
Hospitalisation : <INPUT TYPE="text" NAME="h" id="h" VALUE="">  <BR> 
Traiements : <INPUT TYPE="text" NAME="t" id="t" VALUE="">  <BR> 
Allergies : <INPUT TYPE="text" NAME="a" id="a" VALUE="">  <BR> <br>

<h3>Gestes effectués</h3>
<INPUT TYPE="text" NAME="gestes" id="gestes" VALUE="">  <BR> <br><br>


<h3>Divers</h3>
Médecin sur place ? <select name="med" id="med"><option value="Oui">Oui</option><option value="Non">Non</option></select><br>
Forces de l'ordre sur place ? <select name="fdo" id="fdo"><option value="Oui">Oui</option><option value="Non">Non</option></select><br>
Devenir : <select name="devenir" id="devenir"><option value="LSP">LSP</option><option value="Transport non-médicalisé">Transport non-médicalisé</option><option value="Transport médicalisé">Transport médicalisé</option><option value="DCD">DCD</option></select><br>
Si transport, destination : <INPUT TYPE="text" NAME="dest" id="dest" VALUE="">  <BR> <br>
<INPUT TYPE="submit" NAME="submit" id="submit" VALUE="Afficher"></FORM> 
<BR><BR><BR>




</BODY> 
</HTML>