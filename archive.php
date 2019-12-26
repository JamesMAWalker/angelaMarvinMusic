<?php 
wp_head();
the_post();
?>
<section class="section-single-blog">
    <div class="single-blog">
        <a href="<?php echo get_bloginfo('url')?>">
            <img style="height:8rem;position:absolute;top:0;left:15px;" src="<?php echo get_template_directory_uri()?>/assets/images/provisional-logo.svg" alt="angela marvin monogram">
        </a>
        <div class="single-blog__title header-1-small">
        <?php echo "<h1>" . mb_substr(get_the_archive_title(), 10) . "</h1><hr>"; ?>
        </div>
        <?php 
            while (have_posts()) {
                the_post(); ?>
        <div class="single-blog__details sub-header-2">

            <span class="blog__item-category"><?php foreach((get_the_category()) as $category) { ?>
                <a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->category_nicename ?> </a>
                <?php } ?> | </span>
            <span class="bold" class=""><?php echo get_the_date('m.d.y'); ?></span>
        </div>
        <div class="single-blog__content text-1">
            <?php 

                echo '<a href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
                the_excerpt();
                echo '<hr>';
            }
            ?>
            <a href="/">
                <img class="single-blog__btn btn__home" src="<?php echo get_template_directory_uri()?>/assets/images/back-home-btn.svg" alt="" class="read-more-button">
            </a>
        </div>
    </div>      
</div>
</section>

<?php

get_footer();

?>