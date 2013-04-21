<?php
class Category{
	
    public function getCatItems($cat) {
        $query = "SELECT 
                    id
                  FROM 
                    categories
                  WHERE
                    name = '$cat'";
                  

        $result = mysql_query($query) or die(mysql_error());
              
        $id = mysql_result($result, 0, "id");
        
        $output_videos_query = "SELECT 
                   *
                  FROM 
                    videos
                  WHERE
                    cate_id=$id
                  ORDER BY
                    created_at
                  DESC LIMIT 
                    0, 52";
        
        $output_videos_result = mysql_query($output_videos_query) or die(mysql_error());
        
        return $output_videos_result;
        
    }
	
	public function getCatItemsByPage($cat, $page) {
        $query = "SELECT 
                    id
                  FROM 
                    categories
                  WHERE
                    name = '$cat'";
                  

        $result = mysql_query($query) or die(mysql_error());
              
        $id = mysql_result($result, 0, "id");
        
        $limit_start = $page * 52;
		$limit_stop = $limit_start - 52  ;
        
        $output_videos_query = "SELECT 
                   *
                  FROM 
                    videos
                  WHERE
                    cate_id=$id
                  ORDER BY
                    created_at
                  DESC LIMIT 
                    $limit_start, $limit_stop";
        
        $output_videos_result = mysql_query($output_videos_query) or die(mysql_error());
        
        return $output_videos_result;
        
    }
}

?>