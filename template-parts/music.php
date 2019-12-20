<section class="section-listen">
        <div class="listen" style="display:block;">
           <?php 
            $homepageMusic = new WP_Query(array(
                'posts_per_page' => '5',
                'post_type' => 'music',
                'orderby' => 'rand',
                'meta_query' => array(
                    array(
                        'key' => "display_on_homepage",
                        'compare' => '=',
                        'value' => true
                    )
                )
            ));
            $count = 1;
            while($homepageMusic->have_posts()) {
                $homepageMusic->the_post(); ?>
                <div style="border: 1px red solid;" class="item<?php echo $count; $count++?>">
                    <li><?php the_title();?></li>
                    <?php
                    if (get_field('video_link')) { ?>
                        <p><?php the_field('video_link'); ?></p>
                    <?php } else { 
                        
                        if (has_post_thumbnail) {
                            the_post_thumbnail();
                        } else {
                            
                        }
                        ?>
                    
                        <p>sound file goes here</p>

                    <?php }
                    the_content(); ?>
                </div> 
                <?php } ?>
        </div>
</section>