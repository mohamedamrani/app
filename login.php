<!DOCTYPE html>
<html>     

<!-- Connexion SQL -->
	<?php
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
		}
		catch(Exception $e)
		{
		        die('Erreur : '.$e->getMessage());
		}     
	?>

<!-- Emplacement de connexion -->
	<table>
		<tr>
			<td><h2>Pseudo: </h2></td>
			<input type="text" name="login" id="login" value="<?php if(!empty($_POST['login'])) { echo htmlspecialchars($_POST['login'], ENT_QUOTES); } ?>" /> <!-- value pour texte: valeur par défaut -->
		</tr>

		<tr>
			<td><h2>Password: </h2></td>
			<td> <input type="password" value="" id="Imput_barre" name="password"/></td>
		</tr>

		<input type="submit" value="Valider" id="bouton_valider"/></p>
	</table><p>

<!-- PHP de connexion -->
<?php
		if ( !empty($_POST['pseudo']) && !empty($_POST['password']) ) { // Vérifie si les champs ne sont pas vides

			$login=$_POST['login'];


			$pseudo = $bdd->query('SELECT Pseudo FROM utilisateur WHERE Pseudo=$login'); // Cherche le pseudo tapé
			$password = $bdd->query('SELECT Password FROM utilisateur WHERE Pseudo=$login'); // Cherche le mdp du pseudo

			if(isset($pseudo) && $password == $_POST['password']){ // si le pseudo existe, et si le mdp correspond
				echo "Ca marche";
			}else{
				echo "ERROR";
			}

		}else{
			echo "Tapez votre Pseudo et votre Password SVP :D";
		}
?>
