<?php

/**
 * Class for manage visit page
 */
class VisitManager extends Manager {

	/**
	 * @method PDO getShops() {
	 *		connect to the database for get
	 *		all shops records
	 *
	 *		@param String $choice select wich type of
	 *		shops the user want see
	 *
	 *		@param String $sort if the user want sort
	 *		shops with an indicator 
	 *
	 * 		@return PDOStatementObject
	 * }
	 */
	public function getShops($choice = "", $sort = "") {
		$db = $this->dbConnect();
		$sql = 'SELECT * FROM shops ';
		if ($choice == "restaurant") {
			$sql .= 'WHERE type = "restaurant"';
		} else if ($choice == "hotel") {
			$sql .= 'WHERE type = "hotel"';
		} else if ($choice == "entertainment") {
			$sql .= 'WHERE type = "entertainment"';
		}
		if ($sort == "name") {
			$sql .= ' ORDER BY name ASC';
		} else if ($sort == "type") {
			$sql .= ' ORDER BY type ASC';
		} else if ($sort == "price") {
			$sql .= ' ORDER BY price ASC';
		}
		$req = $db->query($sql);
		return $req;
	}	
}