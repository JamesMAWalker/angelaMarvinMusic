<?php 

global $post; 
the_post();
?>

<section class="section-about">
    <div class="about-frame">
        <div class="about">
            <div class="about__content">
                <div class="about__title">
                    <h1 class="header-3"><?php the_title(); ?></h1>
                    <span class="divider-pink"></span>
                </div>
                <p class="about__desc sub-header-2-dark"><?php echo get_the_content(); ?></p>
            </div>
            <div class="about__photo"<?php if(has_post_thumbnail(get_the_ID())) {
                echo " style='background-image: url(" . '"';
                echo get_the_post_thumbnail_url(get_the_ID()) . '")!important;' . "'";
            }?>></div>
        </div>
        </div>
</section>