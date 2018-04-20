<?php

/**
 * Main Manager with basic function
 */
class Manager
{
	/**
	 * @method PDO dbConnect() {
	 *		connect to the database
	 *
	 * 		@return PDO
	 * }
	 */
	protected function dbConnect() {
		$db = new PDO('mysql:host=localhost;dbname=IDLC;charset=utf8', 'root', '');
		return $db;
	}

	/**
	 * @method String getLanguage() {
	 * 		use for get the language selected by the user
	 *
	 * 		@param String $choice expect be the param $_GET['lang']
	 *		or an empty String by default
	 *
	 * 		@return String
	 * }
	 */
	public function getLanguage($choice = "")	{
		if ($choice == "en") {
			return "en";
		} else if ($choice == "cn") {
			return "cn";
		} else {
			return "fr";
		}
	}
}