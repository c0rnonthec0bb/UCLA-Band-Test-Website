<?php
    
    function add_theme_scripts() {
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style( 'menu', get_template_directory_uri() . '/menu.css');
        
        if(is_home()){
            
            wp_enqueue_script( 'homefunctions', get_template_directory_uri() . '/homefunctions.js', array ( 'jquery' ));
            wp_localize_script('homefunctions', 'global_vars', homeParams());
    
        }else{
            wp_enqueue_script( 'contentfunctions', get_template_directory_uri() . '/contentfunctions.js', array ( 'jquery' ));
        }
    }
    
    add_action('wp_enqueue_scripts', 'add_theme_scripts');
    
    
    
    function homeParams(){
        $args = array(
         'sort_column' => 'menu_order',
         'parent' => 0
         );
         $pages = get_pages($args);
         
         $pageSubpages = array();
         $pageSubpageLinks = array();
         
         foreach ($pages as $page) {
         
         $subargs = array(
         'sort_column' => 'menu_order',
         'parent' => $page->ID
         );
         $subpages = get_pages($subargs);
         
             $pageSubpages[] = $subpages;
         
         $subpageLinks = array();
         
         foreach ($subpages as $subpage){
         $subpageLinks[] = get_page_link($subpage->ID);
         }
         
         $pageSubpageLinks[] = $subpageLinks;
         }
         
         return array(
                      'pages' => $pages,
                      'pageSubpages' => $pageSubpages,
                      'pageSubpageLinks' => $pageSubpageLinks
         );
    }
?>
