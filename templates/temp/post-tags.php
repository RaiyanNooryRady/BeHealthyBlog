<?php
    $posttags = get_the_tags();
    if(!empty($posttags)){
        foreach($posttags as $posttag){ 
            printf('<a href="%1$s" class="link-light btn-sm btn-danger rounded text-decoration-none me-2">%2$s</a>',
            esc_url(get_tag_link($posttag->term_id)),
            esc_html($posttag->name));
                }
        }
                 
?>