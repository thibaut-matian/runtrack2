<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Formulaire avec styles</title>
	<?php
	if (isset($_GET['style'])) {
		$style = $_GET['style'];
		if ($style == "style1" || $style == "style2" || $style == "style3") {
			echo '<link rel="stylesheet" href="' . $style . '.css">';
		}
	}
	?>
</head>
<body>
	<form method="get">
		<label for="style">Choisissez un style :</label>
		<select name="style" id="style">
			<option value="style1">Style 1</option>
			<option value="style2">Style 2</option>
			<option value="style3">Style 3</option>
		</select>
		<input type="submit" value="Valider">
	</form>
</body>
</html>
