<?php
register_sidebar(array(
    'id' => "sidebar-1",
    'before_widget' => '<div class="box1"><div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div></div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
));
?>