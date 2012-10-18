<?php
/**
 * @package WordPress
 */
 
    get_header();  //the Header           
    
    get_template_part( 'sidebar', 'index' ); //the Sidebar 
    
    get_template_part( 'loop', 'index' ); //the Loop  
                 
    get_footer(); //the Footer 
   
?>                        
           
