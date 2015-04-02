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

    	<!-- Corps du panier -->
	    	<div id="bloc_page">
	          <section>
	            <article>
	                <form>
	                	<h1> Mon panier</h1>
			                <table>
			                    <tr><td><img src="images/user.png" alt="" width="100" heigh="100" /></td>
			                        <td><p>offre: xxx</p></td>
			                        <td>quantité demandée: X</td>
			                        <td><a href="#" class="ajout_panier"> <img src="images/delete.gif" alt="" id="bouton_supression" /></a></td>
			                    </tr>
			                    <tr><td><img src="images/user.png" alt="" width="100" heigh="100" /></td>
			                        <td><p>offre: xxx</p></td>
			                        <td>quantité demandée: X</td>
			                        <td><a href="#" class="ajout_panier"> <img src="images/delete.gif" alt="" id="bouton_supression" /></a></td>
			                    </tr>
			                    <tr><td><img src="images/user.png" alt="" width="100" heigh="100" /></td>
			                        <td><p>offre: xxx</p></td>
			                        <td>quantité demandée: X</td>
			                        <td><a href="#" class="ajout_panier"> <img src="images/delete.gif" alt="" id="bouton_supression" /></a></td>
			                    </tr>
			                </table>
					</form>
	            </article>

	            <!-- Aside-->
						<?php include("aside.php"); ?>
				</section>

				<!-- Footer-->
					<?php include("footer.php"); ?>
			</div>
    </body>
</html>