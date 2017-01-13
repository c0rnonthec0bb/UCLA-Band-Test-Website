<?php
    
    update_option( 'siteurl', 'http://localhost:8888' );
    update_option( 'home', 'http://localhost:8888' );
    
    function add_theme_scripts() {
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style( 'menu', get_template_directory_uri() . '/css/menu.css');
        wp_enqueue_style( 'font', get_template_directory_uri() . '/css/font.css');
        wp_enqueue_style( 'spacing', get_template_directory_uri() . '/css/spacing.css');
        wp_enqueue_style( 'dimens', get_template_directory_uri() . '/css/dimens.css');
        wp_enqueue_style( 'decor', get_template_directory_uri() . '/css/decor.css');
        wp_enqueue_style( 'color', get_template_directory_uri() . '/css/color.css');
        wp_enqueue_style( 'img', get_template_directory_uri() . '/css/img.css');
        
        if(is_home()){
            
            wp_enqueue_script( 'homefunctions', get_template_directory_uri() . '/homefunctions.js', array ( 'jquery' ));
            wp_localize_script('homefunctions', 'global_vars', homeParams());
    
        }else{
            
            wp_enqueue_script( 'menufunctions', get_template_directory_uri() . '/menufunctions.js', array ( 'jquery' ));
            wp_localize_script('menufunctions', 'global_vars', menuParams());
            
            wp_enqueue_script( 'contentfunctions', get_template_directory_uri() . '/contentfunctions.js', array ( 'jquery' ));
            wp_localize_script('contentfunctions', 'global_vars', contentParams());
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
    
    function contentParams(){
        global $post;
        
        $title;
        $content;
        $parent;
        $id;
        
        if($post->post_parent == 0){
            $title = '';
            $content = NULL;
            $id = 0;
            $parent = $post;
        }else{
            $title = get_the_title();
            $content = get_the_content();
            $content = apply_filters( 'the_content', $content );
            $content = str_replace( ']]>', ']]&gt;', $content );
            $id = get_the_ID();
            $parent = get_page($post->post_parent);
        }
        
        $subargs = array(
                         'sort_column' => 'menu_order',
                         'parent' => $parent->ID
                         );
        $subpages = get_pages($subargs);
        
        $subpageLinks = array();
        
        foreach ($subpages as $subpage){
            $subpageLinks[] = get_page_link($subpage->ID);
        }
        
        return array(
                     'parent' => $parent,
                     'subpages' => $subpages,
                     'subpageLinks' => $subpageLinks,
                     'title' => $title,
                     'content' => $content,
                     'id' => $id
                     );
    }
    
    function menuParams(){
        return array();
    }
?>
