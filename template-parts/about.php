<meta name="viewport" content="width=device-width, initial-scale=1.0" >

<?php 

global $post; 
the_post();
?>

<section class="section-about">
    <div class="about-frame">
        <div class="about">
            <a href="<?php echo get_bloginfo('url')?>">
                <img style="height:8rem;position:absolute;top:0;left:15px;" src="<?php echo get_template_directory_uri()?>/assets/images/provisional-logo.svg" alt="angela marvin monogram">
            </a>
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