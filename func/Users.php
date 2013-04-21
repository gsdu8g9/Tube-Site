<?php
    include '../init.php';
    
    class Users{
    	
		private $id;
		
		public function login_check($username, $password)
		{
			$username = mysql_escape_string($username);
			$query = mysql_query("SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password' AND `status`='admin'");
			
			return (mysql_num_rows($query) == 1)? mysql_result($query, 0, 'id') : FALSE;
		}
		
    }
?>