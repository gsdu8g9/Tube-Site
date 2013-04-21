<?php
class Videos {

	public function __construct() {

	}

	public function add_video($title, $url, $desc, $cate_id) {

		$youtubegrab = new YouTubeGrabber($url);
		$youtubegrab -> constructOembed();
		$youtubegrab -> getXML();

		$thumbnail = $youtubegrab -> getThumbnail();
		$code = $youtubegrab -> getEmbedCode();

		$query = "INSERT INTO `videos`(
        `title`,
        `url`, 
        `thumbnail`,
        `code`, 
        `created_at`, 
        `modified_at`, 
        `description`, 
        `views`,
        `cate_id`
     ) VALUE(
        '$title',
        '$url',
        '$thumbnail',
        '$code',
        NOW(),
        NOW(),
        '$desc',
        0,
        '$cate_id'
     )";

		mysql_query($query) or die(mysql_error());

	}

	public function add_playlist($title, $cate_id, $url, $thumbnail, $desc, $code) {
		$query = "INSERT INTO `videos`(
        `title`,
        `url`, 
        `thumbnail`,
        `code`, 
        `created_at`, 
        `modified_at`, 
        `description`, 
        `views`,
        `cate_id`
     ) VALUE(
        '$title',
        '$url',
        '$thumbnail',
        '$code',
        NOW(),
        NOW(),
        '$desc',
        0,
        '$cate_id'
     )";

		mysql_query($query) or die(mysql_error());
	}

	public function get_recent_videos($start = 0, $limit = 24) {

		$query = "SELECT 
                    id,
                    title,
                    thumbnail,
                    code,
                    description,
                    views,
                    created_at
                  FROM 
                    videos
                  ORDER BY
                    created_at 
                  DESC LIMIT 
                    $start, $limit";

		$result = mysql_query($query) or die(mysql_error());

		//$rows = mysql_fetch_assoc($result);

		return $result;

	}
	
	public function get_popular_videos($start = 0, $limit = 24) {

		$query = "SELECT 
                    id,
                    title,
                    thumbnail,
                    code,
                    description,
                    views
                  FROM 
                    videos
                  ORDER BY
                    views
                  DESC LIMIT 
                    $start, $limit";

		$result = mysql_query($query) or die(mysql_error());

		//$rows = mysql_fetch_assoc($result);

		return $result;

	}

}
?>