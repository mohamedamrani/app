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
    	
		<!-- Corps de l'échange-->
            <div id="bloc_page">

                <div id="banniere_image">
                    <div id="banniere_description">
                        Actualités du site
                        <a href="Page panier.html" class="bouton_rouge">Voir Panier <img src="images/ico_liensexterne.png" alt="" /></a>
                    </div>
                </div>

                <section>

                    <article>
                        <h1> <img src="images/user.png" alt="Image flottante2" class="imageflottante"width="100" heigh="100"> User name</h1>
                        <p>numéro de l'offre: XXX</p>
                    

                        <table>
                            <tr>
                                <td>
                                    <table border="1" >
                                        <tr>
                                            <td> <input id="taillebarre" type="image" src="images/pomme.jpg" style="margin:10px; height:80px; border-radius:10px; box-shadow:0 0 15px 2px; " /> </td>
                                            <td> <input id="taillebarre" type="number" min="0" max="10" value="" step="1" onkeypress="return false;" /> </td>

                                            <td> <input id="taillebarre" type="image" src="images/pomme.jpg" style="margin:10px; height:80px; border-radius:10px; box-shadow:0 0 15px 2px;" /></td>
                                            <td> <input id="taillebarre" type="number" min="0" max="10" value="" step="1" onkeypress="return false;" /> </td>
                                        </tr>
                                        <tr>
                                            <td> <input id="taillebarre" type="image" src="images/pomme.jpg" style="margin:10px; height:80px; border-radius:10px; box-shadow:0 0 15px 2px;" /></td>
                                            <td> <input id="taillebarre" type="number" min="0" max="10" value="" step="1" onkeypress="return false;" /> </td>

                                            <td> <input id="taillebarre" type="image" src="images/pomme.jpg" style="margin:10px; height:80px; border-radius:10px; box-shadow:0 0 15px 2px;" /></td>
                                            <td> <input id="taillebarre" type="number" min="0" max="10" value="" step="1" onkeypress="return false;" /> </td>
                                        </tr>
                                    </table>
                                </td>

                                <td><img src="images/fleche.jpg" width="50" heigh="50"/></td>

                                <td>
                                    <table border="1" >
                                        <tr>
                                            <td><input id="taillebarre" type="image" src="images/pomme.jpg" style="margin:10px; height:80px; border-radius:10px; box-shadow:0 0 15px 2px;" /></td>
                                            <td><input id="taillebarre" type="number" min="0" max="10" value="" step="1" onkeypress="return false;" /></td>

                                            <td ><input id="taillebarre" type="image" src="images/pomme.jpg" style="margin:10px; height:80px; border-radius:10px; box-shadow:0 0 15px 2px;" /></td>
                                            <td><input id="taillebarre" type="number" min="0" max="10" value="" step="1" onkeypress="return false;" /></td>
                                        </tr>
                                        <tr>
                                            <td><input id="taillebarre" type="image" src="images/pomme.jpg" style="margin:10px; height:80px; border-radius:10px; box-shadow:0 0 15px 2px;" /></td>
                                            <td><input id="taillebarre" type="number" min="0" max="10" value="" step="1" onkeypress="return false;" /></td>

                                            <td><input id="taillebarre" type="image" src="images/pomme.jpg" style="margin:10px; height:80px; border-radius:10px; box-shadow:0 0 15px 2px;" /></td>
                                            <td><input id="taillebarre" type="number" min="0" max="10" value="" step="1" onkeypress="return false;" /></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </article>
                    
                    <!-- Aside-->
                        <?php include("aside.php"); ?>
                </section>
        <!-- Footer-->
            <?php include("footer.php"); ?>

    </boy>

</html>
