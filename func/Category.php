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
        
       $limit_start = ($page - 1) * 52; // 0 when 1, 52 when 2, 104 when 3 etc.
	$limit_stop = 52;
        
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