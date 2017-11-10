<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Gestion des capteurs</title>
</head>

<!--Gestion des capteurs
	C'est la page qui permettra de gérer ses capteurs (ajout/suppression)
	Cette page comporte :
		- un formulaire permettant de choisir ou d'ajouter oud de supprimer un capteur:
			- si l'option d'ajout est choisie : un formulaire d'ajout de capteur
			- si l'option de suppression est choisie : checkbox pour choisir le capteur à supprimer (ou les capteurs)
		- un lien vers le catalogue de capteurs (catalogue Domisep)
-->

<body>
	<form id="choix_type_modif">
		<label for="type_modif">Ajouter / supprimer un capteur</label> :
		<select name="type_modif" id="type_modif">
			<option value="ajout">Ajouter un capteur</option>
			<option value="suppression">Supprimer un capteur</option>
		</select>
	</form>
	<br/>

	<form id="ajout">
		<label for="nom_capteur">Nom du capteur à ajouter</label> : <input type="text" name="nom_capteur" id="nom_capteur"><br/>

		Pièce dans laquelle se trouve le capteur : <br/>
		<input type="radio" name="piece" value="piece1" id="piece1"><label for="piece1">Pièce 1</label><br/>
		<input type="radio" name="piece" value="piece2" id="piece2"><label for="piece2">Pièce 2</label><br/>
		<input type="radio" name="piece" value="piece3" id="piece3"><label for="piece3">Pièce 3</label><br/>

		<input type="submit" name="envoyer_ajout" value="Ajouter">
	</form>
	<br/>

	<form id="suppression">
		Capteur(s) à supprimer : <br/>
		<input type="checkbox" name="capteur1" id="capteur1"><label for="capteur1">Capteur 1</label><br/>
		<input type="checkbox" name="capteur2" id="capteur2"><label for="capteur2">Capteur 2</label><br/>
		<input type="checkbox" name="capteur3" id="capteur3"><label for="capteur3">Capteur 3</label><br/>

		<input type="submit" name="envoyer_suppression" value="Supprimer">
	</form>

</body>
</html>