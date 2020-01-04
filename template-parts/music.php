

<section class="section-listen" id="section-listen">
        <div class="listen-container">
            <div class="listen__title">
                <span class="header-2">
                    listen
                </span>
            </div>
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
            $count = 1; ?>
            <!-- Create variable for YT video ID for API to use -->
            <script>var vid_url_1;</script>
            <script>var vid_url_2;</script>
            <script>var vid_url_3;</script>
            <script>var vid_url_4;</script>
            <?php
            while($homepageMusic->have_posts()) {
                $homepageMusic->the_post(); ?>
                <!-- button area of listen section -->
                <input <?php if ($count === 1) {echo "checked"; } ?>  name="tracks" type="radio" id="radio<?php echo $count;?>" class="listen__button listen__button-<?php echo $count;?>">
                <label for="radio<?php echo $count;?>" class="listen__item listen__item-<?php echo $count;?>" tabindex="1">
                    <span class="play-button--active"></span>
                    <span class="play-button"></span>
                    <div class="listen__item-wrapper">
                        <h4><?php the_title();?></h4>                  
                        <p><?php the_field('artists');?></p> 
                    </div>
                </label> 
                <!-- media area of listen section -->
                <div class="listen__exp listen__exp-<?php echo $count; ?>" tabindex="1">
                    <?php
                    if (get_field('video_link')) { ?>
                        <!-- Fill variable for YT video ID for API to use -->
                        <script>vid_url_<?php echo $count; ?> = "<?php the_field('video_link');?>";</script>
                        <div class="listen__exp-video-wrap">
                            <span class="listen__exp-video-cover-button"></span>
                            <div class="listen__exp-video" id="player<?php echo $count; ?>"></div>
                        </div>
                    <?php } else { 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('medium', array('class' => 'listen__exp-photo'));
                        } else {
                            echo '<img class="listen__exp-photo" src="' . get_bloginfo( 'stylesheet_directory' ) 
                            . '/assets/images/default.jpg" />';
                        }
                        ?>
                    <div class="listen__exp-controls">
                        <audio controls controlsList="nodownload">
                            <source src="<?php the_field('audio_file'); ?>" type="audio/ogg">
                            <source src="<?php the_field('audio_file'); ?>" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <?php } ?>
                    <div class="listen__exp-details">
                        <h4 class="sub-header-2"><?php the_title();?></h4>
                        <p class="text-1"><?php the_content(); ?></p>
                    </div>
                </div> 
            <?php $count++; } wp_reset_postdata(); ?>
           </div>
        </div>
</section>