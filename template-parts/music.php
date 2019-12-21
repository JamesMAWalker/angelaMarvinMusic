<section class="section-listen">
        <div class="listen-container">
           <div class="listen">
            <?php 
            $homepageMusic = new WP_Query(array(
                'posts_per_page' => '4',
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
                <input <?php if ($count === 1) {echo "checked"; } ?>  name="tracks" type="radio" id="radio<?php echo $count;?>" class="listen__button listen__button-<?php echo $count;?>">
                
                <label for="radio<?php echo $count;?>" class="listen__item listen__item-<?php echo $count;?>" tabindex="1">
                    <span class="play-button--active"></span>
                    <span class="play-button"></span>
                    <div class="listen__item-wrapper">
                        <h4><?php the_title();?></h4>
                        <?php
                        if (get_field('video_link')) { ?>
                            <p>
                                <?php 
                                // the_field('video_link'); 
                                ?>
                            </p>
                        <?php } else { 
                            
                            // if (has_post_thumbnail) {
                            //     the_post_thumbnail();
                            // } else {
                                
                            // }
                            ?>
                        
                            <!-- <p>sound file goes here</p> -->

                        <?php } ?>
                        
                        <p><?php the_field('artists');?></p> 
                        
                        
                    </div>
                </label> 

                <div style="border: 1px blue solid;" class="listen__exp listen__exp-<?php echo $count; $count++?>" tabindex="1">
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
        </div>
</section>