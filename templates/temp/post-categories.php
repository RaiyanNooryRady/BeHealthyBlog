<?php

$categories=get_the_category();
if(!empty($categories)){
    foreach($categories as $category){ 
        printf('<a href="%1$s" class="link-secondary text-decoration-none me-2">%2$s</a>',
        esc_url(get_category_link($category->term_id)),
        esc_html($category->name));
    }
}

?>
<br>