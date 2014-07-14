<?php
	function menu() {
	//Aggiungendo voci all' array qui sotto è possibile aggiungere nuove voci al menu del sito

	$links[0][name] = "Home"; //La voce name rappresenta ciò che apparirà a schermo
	$links[0][link] = "index.php"; //La voce link è il collegamento ipertestuale della voce di menu

	$links[1][name] = "Chi Siamo";
	$links[1][link] = "weare.php";

	$links[2][name] = "Progetti";
	$links[2][link] = "lavori.html";

	$links[3][name] = "Proprietà Pirata";
	$links[3][link] = "propirata.php";

	$links[4][name] = "Media";
	$links[4][link] = "media.php";

	$links[5][name] = "Lucernario";
	$links[5][link] = "lavori.html";
	

	for($i=0;$i<count($links);$i++){
		
			if($links[$i][name] || $links[$i][link] != 0) {
			echo '<li><a href="'.$links[$i][link].'" title="'.$links[$i][name].'">'.$links[$i][name].'</a></li>';
			}
			else {

				echo "La voce ".$i." non esiste! Inseriscila";

			}
	}
}
?>
