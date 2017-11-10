<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Gestion des pièces</title>
</head>

<!--Gestion des pièces
	C'est la page qui permettra de gérer les pièces de l'habitation (ajout/suppression)
	Cette page comporte :
		- un formulaire permettant de choisir ou d'ajouter ou de supprimer une pièce:
			- si l'option d'ajout est choisie : formulaire d'ajout de pièce
			- si l'option de suppression est choisie : checkbox pour choisir la pièce à supprimer (ou les pièces)
-->

<body>
	<form id="choix_type_modif">
		<label for="type_modif">Ajouter / supprimer une pièce</label> :
		<select name="type_modif" id="type_modif">
			<option value="ajout">Ajouter une pièce</option>
			<option value="suppression">Supprimer une pièce</option>
		</select>
	</form>
	<br/>

	<form id="ajout">
		<label for="nom_piece">Nom de la pièce à ajouter</label> : <input type="text" name="nom_piece" id="nom_piece"><br/>

		<input type="submit" name="envoyer_ajout" value="Ajouter">
	</form>
	<br/>

	<form id="suppression">
		Pièce(s) à supprimer : <br/>
		<input type="checkbox" name="piece1" id="piece1"><label for="piece1">Pièce 1</label><br/>
		<input type="checkbox" name="piece2" id="piece2"><label for="piece2">Pièce 2</label><br/>
		<input type="checkbox" name="piece3" id="piece3"><label for="piece3">Pièce 3</label><br/>

		<input type="submit" name="envoyer_suppression" value="Supprimer">
	</form>
	<br/>

</body>
</html>