<section class="section-blog" id="section-blog">
        <div class="blog-frame">
            <div class="blog-wrapper">
                <div class="blog">
                <?php
                $homepageBlog = new WP_Query(array(
                'posts_per_page' => '-1',
                'post_type' => 'post',
                'orderby' => 'post_date',
                'order' => 'DESC',
                )); 
                $counter = 1;
                $firstloop = true;
                while ($homepageBlog->have_posts()) { 
                    $homepageBlog->the_post(); ?>
                    <div class="blog__item blog__item-<?php echo $counter ?>" tabindex="2" <?php if($firstloop===false) { ?>
                    style="display:none;" <?php } ?>>
                        <div class="blog__item-details sub-header-2 sub-header-2">
                            <span class="blog__item-category"><?php foreach((get_the_category()) as $category) { ?>
                                <a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->category_nicename ?> </a>
                                <?php } ?> | </span>
                            <span class="blog__item-date"><?php echo get_the_date('m.d.y'); ?></span>
                        </div>
                        <div class="blog__item-title sub-header-1-dark">
                            <?php the_title(); ?>
                        </div>
                        <div class="blog__item-content">
                            <?php 
                            if (strlen(get_the_excerpt()) > 300 ) {
                                echo mb_strimwidth(get_the_content(), 0, 300, '...');
                            } else {
                                echo get_the_excerpt();
                            }
                            ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="blog__item-link">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/Read More - Button.svg" alt="" class="read-more-button">
                        </a>
                    </div>
                    <?php 
                        $counter++;
                        if($counter === 7) { 
                        $counter = 1; 
                        if($firstloop === true) {
                            $firstloop = false;
                        } else { ?>
                            <div style="display:none;" class="blog__item blog__item-8 text-button">&larr View newer;
                            </div>
                        <?php }
                        ?>
                        <div class="blog__item blog__item-7 text-button">View older &rarr;
                        </div>
                        <?php }} ?>
            </div>
            <div class="blog__title">
                <span class="header-2">
                    read
                </span>
            </div>
        </div>
    </section>    
    <?php wp_reset_postdata(); ?>
    <script>
    jQuery('.blog__item-7').add
  </script>