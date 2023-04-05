<?php 

abstract class SocialNetworkPoster{
	abstract public function getSocialNetwork(): SocialNetworkConnector;
	
	public function post($connect):void{
		$network = $this->getSocialNetwork();
		$network->login();
		$network->createPost($connect);
		$network->logout();
	}
}

class FacebookPoster extends SocialNetworkPoster{
	private $login, $password;

	public function __construct(string $login, string $password){
		$this->login = $login;
		$this->password = $password;
	}

	public function getSocialNetwork():SocialNetworkConnector{
		return new FacebookConnector($this->login, $this->password);
	}
}

class LinkedInPoster extends SocialNetworkPoster{
	private $email, $password;

	public function __construct(string $email, string $password){
		$this->email = $email;
		$this->password = $password;
	}

	public function getSocialNetwork():SocialNetworkConnector{
		return new LinkedInConnector($this->email, $this->password);
	}	
}

interface SocialNetworkConnector{
	public function login():void;
	public function createPost($content):void;
	public function logout():void;
}

class FacebookConnector implements SocialNetworkConnector{
	public $login, $password;

	public function __construct($login, $password){
		$this->login = $login;
		$this->password = $password;
	}

	public function login():void{
		echo "Send HTTP API request to log in user $this->login with " .
            "password $this->password". EOL;
	}

	public function createPost($content):void{
        echo "Send HTTP API request to log out user $this->login". EOL;
	}

	public function logout():void{
        echo "Send HTTP API requests to create a post in Facebook timeline.". EOL;
	}
}

class LinkedInConnector implements SocialNetworkConnector{
	public $email, $password;

	public function __construct($email, $password){
		$this->email = $email;
		$this->password = $password;
	}

	public function login():void{
		echo "Send HTTP API request to log in user $this->email with " .
            "password $this->password" . EOL;
	}

	public function createPost($content):void{
		echo "Send HTTP API requests to create a post in LinkedIn timeline" . EOL;
	}

	public function logout():void{
		echo "Send HTTP API request to log out user $this->email" . EOL;
	}
}

function clientCode(SocialNetworkPoster $creator){
	echo $creator->post('Hello cookie');
}

clientCode(new FacebookPoster('cookie', '*****'));
clientCode(new LinkedInPoster('cookie', '*****'));

?>