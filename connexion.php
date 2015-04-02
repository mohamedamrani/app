<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>vAt accueil</title>
    </head>

    <body>

		<!-- Header -->
			<?php include("header.php"); ?>
    	
		<!-- Corps de la connexion-->
            <section>
                <article>
                    <form method="GET" action="#">

                        <table>
                            <tr><td><h2>Login: </h2></td>
                                <td><input type="text" value="" id="Imput_barre" name="pseudo"/></td>
                            </tr>
                            <tr><td><h2>Password: </h2></td>
                                <td> <input type="password" value="" id="Imput_barre" name="password"/></td>
                            </tr>
                        </table><p>

                        <input type="submit" value="Valider" id="bouton_valider"/></p>

                    </form>
                </article>
            </section>

        <!-- Footer-->
            <?php include("footer.php"); ?>
        </div>
    </body>

</html>