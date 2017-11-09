<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Vue générale</title>
</head>

<!--Vue générale
	C'est la page sur laquelle le client arrive lorsqu'il vient de se connecter
	Cette page comporte :
		- les 3 blocs "header", "nav", "footer" (définis dans le dossier "bloc_page")
		- le nombre de capteurs en fonctionnement
		- une section "favoris" qui contient l'état des principaux capteurs (choisis par le client)
		- une section par pièce de l'habitation qui contient l'état de tous les capteurs de la pièce en question
-->

<body>
	<div id="nb_capteurs_fonctionnement">
		Capteurs en fonctionnement : n / N
	</div>

	<section id="favoris">
		<h1>Favoris</h1>
		Etat capteur favori 1
		Etat capteur favori 2
		Etat capteur favori 3
	</section>

	<section class="piece">
		<h1>Pièce 1</h1>
		Etat capteur pièce1 1
		Etat capteur pièce1 2
		Etat capteur pièce1 3
	</section>

	<section class="piece">
		<h1>Pièce 2</h1>
		Etat capteur pièce2 1
		Etat capteur pièce2 2
		Etat capteur pièce2 3
	</section>

	<section class="piece">
		<h1>Pièce 3</h1>
		Etat capteur pièce3 1
		Etat capteur pièce3 2
		Etat capteur pièce3 3
	</section>
</body>

</html>