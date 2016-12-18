
<ul id="menu" class="card" >
<li><ul>
<?php
    global $post;
    $args = array(
                  'sort_column' => 'menu_order',
                  ); 
    $pages = get_pages($args);
    foreach ($pages as $page) {
        if ($page->post_parent == 0){
            echo "</ul></li>";
        }
        echo "<li><a ";
        if ($page->ID == $post->ID || $page->ID == $post->post_parent){
            if($page->post_parent == 0){
                echo "style=\"background: #005ca5; color: #ffb300;\"";
            }else{
                echo "style=\"background: #0073cf; color: #ffb300;\"";
            }
        }
        if ($page->post_parent > 0){
            echo "href=\"";
            echo get_page_link($page->ID);
            echo "\"";
        }
        echo ">";
        if ($page->post_parent == 0){
            echo "<table><tr><td class=\"spacer\"></td><td>";
        }
        echo $page->post_title;
        if ($page->post_parent == 0){
            echo "</td><td class=\"spacer\"></td></tr></table>";
        }
        echo "</a>";
        if ($page->post_parent == 0){
            echo "<ul>";
        }else{
            echo "</li>";
        }
    }?>
</ul></li>
</ul>
