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

<hr>
<form action="" class="contact__form contact__form-less">
                    <div class="contact__form-less-top">
                        <select name="hrs" id="" class="form__input form__input-dropdown">
                            <option class="form__input-dropdown-option">1hr/wk</option>
                            <option class="form__input-dropdown-option">2hr/wk</option>
                            <option class="form__input-dropdown-option">3hr/wk</option>
                            <option class="form__input-dropdown-option">4hr/wk</option>
                            <option class="form__input-dropdown-option">5hr/wk</option>
                        </select>
                        <select name="" id="" class="form__input form__input-dropdown">
                            <option class="form__input-dropdown-option">grd. 1</option>
                            <option class="form__input-dropdown-option">grd. 2</option>
                            <option class="form__input-dropdown-option">grd. 3</option>
                            <option class="form__input-dropdown-option">grd. 4</option>
                            <option class="form__input-dropdown-option">grd. 5</option>
                            <option class="form__input-dropdown-option">grd. 6</option>
                            <option class="form__input-dropdown-option">grd. 7</option>
                            <option class="form__input-dropdown-option">grd. 8</option>
                        </select>
                        <input class="form__input contact__form-loc" type="text" placeholder="zip code">
                    </div>
                    <input class="form__input contact__form-subject" type="text" placeholder="student's name">
                    <input type="email" placeholder="email@domain.com" class="contact__form-email form__input form__input-email" required>
                    <textarea rows="4" cols="50" type="text" placeholder="tell me about yourself!" class="contact__form-body form__input form__input-body" required></textarea>
                    <button type="submit" class="btn__submit text-2">submit</button>
                </form>