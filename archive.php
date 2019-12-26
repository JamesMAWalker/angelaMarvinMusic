<?php 
wp_head();
echo "<h1>" . mb_substr(get_the_archive_title(), 10) . "</h1><hr>";
while (have_posts()) {
    the_post();
    echo '<a href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
    the_excerpt();
    echo '<hr>';
}