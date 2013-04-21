<?php

class View{
	
	private $id;
	private $result;
	
	public function __construct($id){
		$this->id = $id;
		
		$query = "SELECT
					id,
					title,
					url,
					thumbnail,
					code,
					created_at,
					modified_at,
					description,
					views,
					cate_id
				FROM
					videos
				WHERE
					id=$id";
					
		$reply = mysql_query($query) or die(mysql_error());
		
		$this->result = $reply;
	}
	
	public function getTitle(){
		$num_of_rows =mysql_num_rows($this->result);
		
		if($num_of_rows == 1){
			$title = mysql_result($this->result, 0, "title");
			return $title;
		}else if($num_of_rows > 1){
			echo 'Something really wrong! Contact Administrator!';
		}else if($num_of_rows == 0 || $num_of_rows < 1){
			header('Location: 404.php');
			exit();
		}
	}
	
	public function geturl(){
		
	}
	
	public function getThumbnail(){
		
	}
	
	public function getCode(){
		$num_of_rows = mysql_num_rows($this->result);
		if($num_of_rows == 1){
			$code = mysql_result($this->result, 0, "code");
			return $code;
		}elseif($num_of_rows > 1){
			echo 'Something really wrong! Contact Administrator!';
		}elseif($num_of_rows == 0 || $num_of_rows < 1){
			header('Location: 404.php');
			exit();
		}
	}
	
	public function getCreatedTime(){
		$num_of_rows = mysql_num_rows($this->result);
		if($num_of_rows == 1){
			$create_at = mysql_result($this->result, 0, "created_at");
			$date = new DateTime($create_at);     
        	return $date->format('M d, Y.');
		}elseif($num_of_rows > 1){
			echo 'Something really wrong! Contact Administrator!';
		}elseif($num_of_rows == 0 || $num_of_rows < 1){
			header('Location: 404.php');
			exit();
		}
	}
	
	public function getModifiedTime(){
		
	}
	
	public function getDescription(){
		$num_of_rows = mysql_num_rows($this->result);
		if($num_of_rows == 1){
			$desc = mysql_result($this->result, 0, "description");
			return urldecode($desc);
		}elseif($num_of_rows > 1){
			echo 'Something really wrong! Contact Administrator!';
		}elseif($num_of_rows == 0 || $num_of_rows < 1){
			header('Location: 404.php');
			exit();
		}
	}
	
	public function getViews(){
		$num_of_rows = mysql_num_rows($this->result);
		if($num_of_rows == 1){
			$views = mysql_result($this->result, 0, "views");
			return $views;
		}elseif($num_of_rows > 1){
			echo 'Something really wrong! Contact Administrator!';
		}elseif($num_of_rows == 0 || $num_of_rows < 1){
			header('Location: 404.php');
			exit();
		}
	}
	
	public function incrementViews(){
        $numbers_of_rows = mysql_num_rows($this->result);
         
        if($numbers_of_rows == 1){
            $views = mysql_result($this->result, 0, "views");
            if(!is_int($views)){
                $views = intval($views);
            }
            $views++;
            $update_query = "UPDATE videos SET views=$views WHERE `id`=$this->id";
            mysql_query($update_query);
        }else if($numbers_of_rows > 1){
            echo 'Something really wrong! Contact Administrator';
        }else if($numbers_of_rows == 0){
            header( 'Location: 404.php' ) ;
			exit();
        }
    }
	
	public function getCategoryId(){
		$num_of_rows =mysql_num_rows($this->result);
		
		if($num_of_rows == 1){
			$cate_id = mysql_result($this->result, 0, "cate_id");
			return $cate_id;
		}else if($num_of_rows > 1){
			echo 'Something really wrong! Contact Administrator!';
		}else if($num_of_rows == 0 || $num_of_rows < 1){
			header('Location: 404.php');
			exit();
		}
	}
	
	public function setModifiedDate(){
		$num_of_rows = mysql_num_rows($this->result);
		
		if($num_of_rows == 1){
			$modified_at = mysql_result($this->result, 0, "modified_at");
			$update_query = "UPDATE videos SET `modified_at`=NOW() WHERE `id`=$this->id";
			mysql_query($update_query);
		}elseif($numbers_of_rows > 1){
			echo 'Something really wrong! Contact Administrator';
		}elseif($numbers_of_rows == 0){
			header( 'Location: 404.php' );
			exit();
		}
	}	
}

?>