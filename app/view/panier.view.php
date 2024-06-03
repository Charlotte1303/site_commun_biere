<!DOCTYPE html>
<html>
<head>
	<title>Panier</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			border: 1px solid #ddd;
			padding: 10px;
			text-align: left;
		}
	</style>
</head>
<body>
	<h1>Panier</h1>
	<?php
	session_start();
	include_once("fonctions-panier.php");
	creationPanier();
	?>
    <form action="ajouter-article.php" method="post">
  <input type="hidden" name="libelleProduit" value="Produit 1">
  <input type="hidden" name="prixProduit" value="10">
  <input type="number" name="qteProduit" value="1">
  <input type="submit" value="Ajouter au panier">
</form>
<form action="supprimer-article.php" method="post">
  <input type="hidden" name="libelleProduit" value="Produit 1">
  <input type="submit" value="Enlever du panier">
</form>
	<table>
		<tr>
			<th>Produit</th>
			<th>Quantité</th>
			<th>Prix unitaire</th>
			<th>Prix total</th>
			<th>Actions</th>
		</tr>
		<?php
		for ($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++) {
			?>
			<tr>
				<td><?php echo $_SESSION['panier']['libelleProduit'][$i]; ?></td>
				<td>
					<form action="modifier-qte.php" method="post">
						<input type="hidden" name="libelleProduit" value="<?php echo $_SESSION['panier']['libelleProduit'][$i]; ?>">
						<input type="number" name="nouvelleQte" value="<?php echo $_SESSION['panier']['qteProduit'][$i]; ?>">
						<input type="submit" value="Modifier">
					</form>
				</td>
				<td><?php echo $_SESSION['panier']['prixProduit'][$i]; ?> €</td>
				<td><?php echo $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i]; ?> €</td>
				<td>
					<form action="supprimer-article.php" method="post">
						<input type="hidden" name="libelleProduit" value="<?php echo $_SESSION['panier']['libelleProduit'][$i]; ?>">
						<input type="submit" value="Supprimer">
					</form>
				</td>
			</tr>
			<?php
		}
		?>
		<tr>
			<td colspan="3">Montant total :</td>
			<td><?php echo MontantGlobal(); ?> €</td>
			<td></td>
		</tr>
	</table>
	<p><a href="vider-panier.php">Vider le panier</a></p>
	<p><a href="valider-panier.php">Valider le panier</a></p>
</body>
</html>
