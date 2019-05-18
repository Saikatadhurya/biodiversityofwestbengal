<?php

/**
 * @link: http://www.Awcore.com/dev
 */
 
   function pagination($query, $per_page,$page){    
		global $db;
		global $page_sname;
		$url="?sname=$page_sname&";
    	$query = "SELECT COUNT(*) as `num` FROM {$query}";
    	$row = mysqli_fetch_assoc(mysqli_query($db,$query));
    	$total = $row['num'];
        $adjacents = "2"; 

    	$page = ($page == 0 ? 1 : $page);  
    	$start = ($page - 1) * $per_page;								
		
    	$prev = $page - 1;							
    	$next = $page + 1;
        $lastpage = ceil($total/$per_page);
    	$lpm1 = $lastpage - 1;
    	
    	$pagination = "";
    	if($lastpage > 1)
    	{	
    		$pagination .= "<ul class='pagination'>";
                   
    		if ($lastpage < 7 + ($adjacents * 2))
    		{	
    			for ($counter = 1; $counter <= $lastpage; $counter++)
    			{
    				if ($counter == $page)
    					$pagination.= " <li class='page-item active'><a class='page-link' href='#'>$counter</a></li>";
    				else
    					$pagination.= "<li class='page-item'><a class='page-link' href='{$url}page=$counter'>$counter</a></li>";					
    			}
    		}
    		elseif($lastpage > 5 + ($adjacents * 2))
    		{
    			if($page < 1 + ($adjacents * 2))		
    			{
    				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li class='page-item active'><a class='page-link' href='#'>$counter</a></li>";
    					else
    						$pagination.= "<li class='page-item'><a class='page-link' href='{$url}page=$counter'>$counter</a></li>";					
    				}
    				$pagination.= "<li>...</li>";
    				$pagination.= "<li class='page-item'><a class='page-link' href='{$url}page=$lpm1'>$lpm1</a></li>";
    				$pagination.= "<li class='page-item'><a class='page-link' href='{$url}page=$lastpage'>$lastpage</a></li>";		
    			}
    			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
    			{
    				$pagination.= "<li class='page-item active'><a class='page-link' href='{$url}page=1'>1</a></li>";
    				$pagination.= "<li class='page-item'><a class='page-link' href='{$url}page=2'>2</a></li>";
    				$pagination.= "<li>...</li>";
    				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li class='page-item active'><a class='page-link'>$counter</a></li>";
    					else
    						$pagination.= "<li class='page-item'><a class='page-link' href='{$url}page=$counter'>$counter</a></li>";					
    				}
    				$pagination.= "<li>..</li>";
    				$pagination.= "<li class='page-item'><a class='page-link' href='{$url}page=$lpm1'>$lpm1</a></li>";
    				$pagination.= "<li class='page-item'><a class='page-link' href='{$url}page=$lastpage'>$lastpage</a></li>";		
    			}
    			else
    			{
    				$pagination.= "<li class='page-item'><a class='page-link' href='{$url}page=1'>1</a></li>";
    				$pagination.= "<li class='page-item'><a class='page-link' href='{$url}page=2'>2</a></li>";
    				$pagination.= "<li>..</li>";
    				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li class='page-item active'><a class='page-link'>$counter</a></li>";
    					else
    						$pagination.= "<li class='page-item'><a class='page-link' href='{$url}page=$counter'>$counter</a></li>";					
    				}
    			}
    		}
    		if($page == 1)
			{
				$pagination.= "<li class='page-item disabled'><a class='page-link' href='#'>Prev</a></li>";
				$pagination.= "<li class='page-item'><a class='page-link' href='{$url}page=$next'>Next</a></li>";
                $pagination.= "<li class='page-item'><a class='page-link' href='{$url}page=$lastpage'>Last</a></li>";
			}
    		else if ($page < $counter - 1){ 
				$pagination.= "<li class='page-item'><a class='page-link' href='{$url}page=$prev'>Prev</a></li>";
    			$pagination.= "<li class='page-item'><a class='page-link' href='{$url}page=$next'>Next</a></li>";
                $pagination.= "<li class='page-item'><a class='page-link' href='{$url}page=$lastpage'>Last</a></li>";
    		}else{
				$pagination.= "<li class='page-item'><a class='page-link' href='{$url}page=$prev'>Prev</a></li>";
    			$pagination.= "<li class='page-item disabled'><a class='page-link' class='current'>Next</a></li>";
                $pagination.= "<li class='page-item disabled'><a class='page-link' class='current'>Last</a></li>";
            }
    		$pagination.= "</ul>\n";		
    	}
    
    
        return $pagination;
    } 
?>