<?php

class Settings{
	
	private $row;
	
	function __construct(){
		$query = "SELECT * FROM settings WHERE id=1";
		$result = mysql_query($query);
		$this->row = mysql_fetch_assoc($result);
	}
	
	public function submit($siteName, $siteTitle, $keywords, $description, $email){
		$update_query = "UPDATE `settings` SET sitename='$siteName', sitetitle='$siteTitle', keywords='$keywords', description='$description', email='$email' WHERE id=1";
		$reply = mysql_query($update_query);
		if($reply == FALSE){
			print 'Couldn\'t save site settings'; 
		}
	}
	
	public function getSiteName(){		
		return $this->row['sitename'];
	}
	
	public function getSiteTitle(){
		return $this->row['sitetitle'];
	}
	
	public function getKeyWords(){
		return $this -> row['keywords'];
	}
	
	public function getDescription(){
		return $this -> row['description'];
	}
	
	public function getEmail(){
		return $this -> row['email'];
	}
	
}
