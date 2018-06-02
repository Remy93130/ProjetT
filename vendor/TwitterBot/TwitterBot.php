<?php 

class TwitterBot {
	protected $url_update = 'https://api.twitter.com/1.1/statuses/update.json';
	private $oauth;

	public function __construct($key, $secret) {
		$this->oauth = new OAuth(
			$key,
			$secret,
			OAUTH_SIG_METHOD_HMACSHA1,
			OAUTH_AUTH_TYPE_URI
		);
		$this->oauth->disableSSLChecks();
	}

	public function setToken($token, $secret) {
		$this->oauth->setToken($token, $secret);
	}

	public function tweet($tweet) {
		$array = array( 'status' => $tweet );
		$this->oauth->fetch(
			$this->url_update,
			$array,
			OAUTH_HTTP_METHOD_POST
		);
	}
}