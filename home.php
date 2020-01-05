<?php

get_header();
?>
<!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
    <div id="player"></div>

    <script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    </script>
<?php
    get_template_part('template-parts/hero'); 
    get_template_part('template-parts/music'); 
    get_template_part('template-parts/blog');
    get_template_part('template-parts/contact');

get_footer();

?>

