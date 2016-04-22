<?php                        
    if(get_field('alt_title')){
    	the_field('alt_title');       
    } 
    else {the_title();}
?>
