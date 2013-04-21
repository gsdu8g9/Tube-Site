<?php

class ProcessCategory{
	
	    
    public function cate2id($category){
               
        $query = "SELECT 
                    id
                  FROM 
                    categories
                  WHERE
                    name = '$category'";
        
        $result = mysql_query($query) or die(mysql_error());
        
        $row = mysql_fetch_assoc($result);
        
        return $row['id'];
    }
    
    public function id2cate($id){
        $query = "SELECT
                    name
                  FROM
                    categories
                  WHERE
                    id = '$id'";
        
        $result = mysql_query($query) or die(mysql_error());
        
        $row = mysql_fetch_assoc($result);
        
        return $row['name'];
    }
    
}

?>
