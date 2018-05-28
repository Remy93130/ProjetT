<?php

/**
 * Class for manage review page
 */
class ReviewManager extends Manager {
	
	/**
	 * Get all reviews in the database
	 * @return PDOStatementObject
	 */
	public function getReviews() {
		$db = $this->dbConnect();
		$sql = 'SELECT * FROM review ORDER BY date DESC';
		$req = $db->query($sql);
		return $req;
	}

	/**
	 * Insert a review in the database
	 * @param  String $author The guy who typed the review
	 * @param  String $review The review
	 * @return int the result if we insert the view correctly
	 */
	public function insertReview($author, $review) {
		$db = $this->dbConnect();
		$sql = 'INSERT INTO review (author, review, date)
				VALUES (:author, :review, CURRENT_DATE)';
		$req = $db->prepare($sql);
		$result = $req->execute(array(
			':author' => $author,
			':review' => $review));

		return $result;
	}
}