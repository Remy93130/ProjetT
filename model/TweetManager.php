<?php
date_default_timezone_set('GMT');

require_once 'Manager.php';

/**
 * Class for manage tweet posting
 * nevermind dont work cant run OAuth
 * on the serveur :(
 */
class TweetManager extends Manager {

	/**
	 * Get all tweet from the database
	 * @return Array
	 */
	public function getTweet()	{
		$db = $this->dbConnect();
		$sql = 'SELECT * FROM tweet ORDER BY lastTweet ASC LIMIT 1';
		$req = $db->query($sql);
		return $req->fetch();
	}

	public function setTweet($message) {
		$date = new DateTime();
		$db = $this->dbConnect();
		$sql = 'INSERT INTO tweet (message, lastTweet, date)
				VALUES (:message, :dateTweet, :date)';
		$req = $db->prepare($sql);
		$req->execute(array(
			':message'   => $message,
			':dateTweet' => $date->format('Y-m-d H:i:s'),
			':date'      => $date->format('Y-m-d H:i:s')
		));
	}

	/**
	 * Check if its time to tweet
	 * @param  DATETIME $date the date of the last tweet
	 * @return boolean
	 */
	public function timeToTweet($date) {
		$dateTweet = new DateTime($date);
		$date = new DateTime();
		$interval = new DateInterval('PT1H');
		if ($date->sub($interval) > $dateTweet) {
			return true;
		} else {
			return false;
		}
	}
}