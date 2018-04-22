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
	 * 		@return PDO object
	 * }
	 */
	protected function dbConnect() {
		$db = new PDO('mysql:host=localhost;dbname=idlc;charset=utf8', 'root', '');
		return $db;
	}

	/**
	 * @method String getLanguage() {
	 * 		use for get the language selected by the user
	 *
	 * 		@param String $lang expect be the param $_GET['lang']
	 *		or an empty String by default
	 *
	 * 		@return String
	 * }
	 */
	public function getLanguage($lang = "")	{
		if ($lang == "en") {
			return "en";
		} else {
			return "fr";
		}
	}
}