<?php
class Search{
	
	public function search_by($term = 'popular') {

        $simple_case_term = strtolower($term);

        $query = "SELECT 
                    *
                  FROM 
                    videos
                  WHERE
                    `title`
                  LIKE
                  	'%$term%'
                  ORDER BY
                    created_at 
                  DESC LIMIT 
                    0, 24";

        $result = mysql_query($query) or die(mysql_error());

        return $result;
    }
}

?>