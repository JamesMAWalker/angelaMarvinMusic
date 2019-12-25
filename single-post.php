<?php
wp_head();
the_post();
the_title();
the_content();
?>
'<hr>
<div class="contact__form-bg"></div>
<div class="contact__form-container">
    <?php
echo do_shortcode( '[contact-form-7 id="95" title="lessons" html_class="contact__form contact__form-less"]' ); ?>
</div>