<?php

include '../init.php';
include '../func/ProcessCategory.php';

class Edit {

	private $id;
	private $host = '';
	//private $mysqli;
	private $result;
	private $row;
	private $title;
	private $category;
	private $url;
	private $thumbnail;
	private $description;
	private $code;
	private $query = "SELECT 
                    *
                  FROM 
                    videos
                  WHERE
                    id=
                 ";

	function __construct($id) {

		$this -> id = intval($id);

		$query = "SELECT 
                    *
                  FROM 
                    videos
                  WHERE
                    `id`='$id'
                 ";
		$this -> query = $query;

		$this -> result = mysql_query($this -> query);
		$this -> row = mysql_fetch_assoc($this -> result);
	}

	public function getId() {
		return $this -> id;
	}

	public function getTitle() {

		$this -> title = $this -> row['title'];

		return $this -> title;
	}

	public function getCate() {
		//$result = mysqli_query($this->mysqli, $this->query);
		//$this->row = mysqli_fetch_assoc($this->result);
		$cat_id = $this -> row['cate_id'];
		$int_cate_id = intval($cat_id);

		$cate_query = "SELECT 
                            * 
                       FROM
                            categories
                       WHERE
                            id=$int_cate_id";
		$cate_result = mysql_query($cate_query);
		$cate_row = mysql_fetch_assoc($cate_result);
		$this -> category = $cate_row['name'];
		return $this -> category;
	}

	public function getUrl() {

		$this -> url = $this -> row['url'];

		return $this -> url;
	}

	public function getThumbnail() {

		$this -> thumbnail = $this -> row['thumbnail'];

		return $this -> thumbnail;
	}

	public function getDescription() {

		$this -> description = $this -> row['description'];

		return urldecode($this -> description);
	}

	public function getCode() {

		$this -> code = $this -> row['code'];

		return $this -> code;
	}

	public function setTitle($title, $id) {
		$this -> title = $title;

		$title = mysql_real_escape_string($title);
		$set_site_title_query = "UPDATE `videos` SET title='$title' WHERE id=$id";

		$result = mysql_query($set_site_title_query);
		if (false === $result) {
			printf("error: %s\n", mysql_error($this -> mysql));
		} else {

		}
	}

	public function setCategory($category, $id) {
		$this -> category = $category;

		$processCat = new ProcessCategory();
		$cate_id = $processCat -> cate2id($category);

		$set_category_query = "UPDATE `videos` SET cate_id='$cate_id' WHERE id=$id";

		$result = mysql_query($set_category_query);

		if (false === $result) {
			printf("error: %s\n", mysql_error($this -> mysql));
		} else {

		}
	}
	
	public function setUrl($url, $id){
		$this -> url = $url;
		$set_url = "UPDATE `videos` SET `url`='$url' WHERE id=$id";		
		
		$result = mysql_query($set_url);

		if (false === $result) {
			printf("error: %s\n", mysql_error($this -> mysql));
		} else {

		}
	}
	
	public function setThumbnail($thumbnail, $id){
		$this -> thumbnail = $thumbnail;
		
		$set_thumbnail = "UPDATE `videos` SET `thumbnail`='$thumbnail' WHERE id=$id";
		
		$result = mysql_query($set_thumbnail);
		
		if(false == $result){
			print 'Error occured at setThumbnail. Edit.php Line 146-154';
		}
	}
	
	public function setDescription($description, $id){
		$this->description = $description;
		$description = urldecode($description);
		$set_description = "UPDATE `videos` SET `description`='$description' WHERE id=$id";
		
		$result = mysql_query($set_description);
		
		if(false == $result){
			print 'Error occured at setDescription. Edit.php Line 157-165';
		}
	
	}
	
	public function setCode($code, $id){
		$this->code = $code;
		
		$set_code = "UPDATE `videos` SET `code`='$code' WHERE id=$id";
		
		$result = mysql_query($set_code);
		
		if(false == $result){
			print('Error occured at setCode. Edit.php Line 170-178');
		}
	}

}
?>
