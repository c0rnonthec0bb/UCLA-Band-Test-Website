
<div style="width:80vw">
<ul id="menu" class="card" >
<?php
    global $post;
    $args = array(
                  'sort_column' => 'menu_order',
                  'parent' => 0
                  ); 
    $pages = get_pages($args);
    foreach ($pages as $page) {
        echo '<li><a ';
        if ($page->ID == $post->ID || $page->ID == $post->post_parent){
            echo 'style="background: var(--truebluedark);"';
        }
        echo '><table><tr><td class="spacer"></td><td onclick="void(0)" class="menuItem title" ';
        if ($page->ID == $post->ID || $page->ID == $post->post_parent){
            echo 'style="color: var(--gold);"';
        }
        echo '>' . $page->post_title . '</td><td class="spacer"></td></tr></table></a><ul>';
        
        $subargs = array(
                      'sort_column' => 'menu_order',
                         'parent' => $page->ID
                      );
        $subpages = get_pages($subargs);
        foreach ($subpages as $subpage) {
            echo '<li><a class="title" ';
            if ($subpage->ID == $post->ID){
                echo 'style="background: var(--trueblue); color: var(--gold);"';
            }
            echo 'href="' . get_page_link($subpage->ID) . '">' . $subpage->post_title . '</a></li>';
        }
        echo '</ul></li>';
    }?>
</ul>
</div>
