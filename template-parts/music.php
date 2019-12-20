<section class="section-listen">
    <div class="listen">
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
                    <iframe src="<?php the_field('video_link'); ?>" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                <?php } else { 
                    if (has_post_thumbnail()) {
                        the_post_thumbnail( 'medium' );
                    } else {
                        echo '<img style="max-height:50vh;max-width:50vw;" src="' . get_bloginfo( 'stylesheet_directory' ) 
                        . '/assets/images/default.jpg" />';
                    }
                    ?>
                <audio controls controlsList="nodownload">
                    <source src="<?php the_field('audio_file'); ?>" type="audio/ogg">
                    <source src="<?php the_field('audio_file'); ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
                <?php }
                the_content(); ?>
            </div> 
            <?php } ?>
    </div>
</section>