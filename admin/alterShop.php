<?php

require 'connexionDb.php';

if (isset($_POST['usage']) && $_POST['usage'] == 'update') {
	$sql = 'UPDATE shops
			SET name 	= :name,
				type 	= :type,
				price 	= :price,
				website = :website,
				address = :address
			WHERE id = :id';
	$req = $db->prepare($sql);
	$req->execute(array(
		':name' 	=> $_POST['name'],
		':type'		=> $_POST['type'],
		':price' 	=> $_POST['price'],
		':website' 	=> $_POST['website'],
		':address' 	=> $_POST['address'],
		':id' 		=> $_POST['id']));

	header('Location: admin.php');
	exit;

}  else if (isset($_POST['usage']) && $_POST['usage'] == 'insert') {
	$sql = 'INSERT INTO shops (name, type, price, website, address)
			VALUES (:name, :type, :price, :website, :address)';
	$req = $db->prepare($sql);
	$req->execute(array(
		':name' 	=> $_POST['name'],
		':type'		=> $_POST['type'],
		':price' 	=> $_POST['price'],
		':website' 	=> $_POST['website'],
		':address' 	=> $_POST['address']));

	header('Location: admin.php');
	exit;
} else if (isset($_GET['action']) && isset($_GET['target']) && $_GET['target'] > 0) {
	if ($_GET['action'] == 'update') { 
		$sql = 'SELECT * FROM shops WHERE id ='.$_GET['target'];
		$req = $db->query($sql);
		$data = $req->fetch();
		?>
		<form action="alterShop.php" method="post">
			<input type="text" name="id" value="<?= $data['0'] ?>" hidden> <br>
			<input type="text" name="usage" value="update" hidden>
			<table>
				<tr>
					<td>Nom :</td>
					<td><input type="text" name="name" value="<?= $data['1'] ?>"></td>
				</tr>
				<tr>
					<td>Type :</td>
					<td><input type="text" name="type" value="<?= $data['2'] ?>"></td>
				</tr>
				<tr>
					<td>Prix :</td>
					<td><input type="text" name="price" value="<?= $data['3'] ?>"></td>
				</tr>
				<tr>
					<td>Site :</td>
					<td><input type="text" name="website" value="<?= $data['4'] ?>"></td>
				</tr>
				<tr>
					<td>Itinéraire :</td>
					<td><input type="text" name="address" value="<?= $data['5'] ?>"></td>
				</tr>
				<tr>
					<td><input type="submit" value="Valider"></td>
					<td><a href="admin.php">Annuler</a>	</td>
				</tr>
			</table>
		</form>
	<?php } else if ($_GET['action'] == 'delete') {
		$sql = 'DELETE FROM shops WHERE id = '.$_GET['target'];
		$req = $db->query($sql);
		header('Location: admin.php');
		exit;
	}
} else if (isset($_GET['action']) && $_GET['action'] == 'add') { ?>
	<form action="alterShop.php" method="post">
		<input type="text" name="usage" value="insert" hidden>
		<table>
			<tr>
				<td>Nom :</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Type :</td>
				<td><input type="text" name="type"></td>
			</tr>
			<tr>
				<td>Prix :</td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr>
				<td>Site :</td>
				<td><input type="text" name="website"></td>
			</tr>
			<tr>
				<td>Itinéraire :</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Valider"></td>
				<td><a href="admin.php">Annuler</a>	</td>
			</tr>
		</table>
<?php } ?>