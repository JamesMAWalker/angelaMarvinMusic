<?php
get_header();
?>

    <section class="section-hero">
        <div class="hero hero-bg-container">
            <div class="hero__container">
                <h1 class="hero__title header-1">Angela Marvin</h1>
                <div class="hero__subtitle sub-header-1">cellist | musician | educator</div>
            </div>
        </div>
    </section>
    <?php
        get_template_part('template-parts/music'); 
        get_template_part('template-parts/blog');

    ?>
    <section class="section-contact">
        <div class="contact">
            // Contact form goes here //
        </div>
    </section>
</body>
</html>