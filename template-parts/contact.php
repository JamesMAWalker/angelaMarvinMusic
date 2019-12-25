<section class="section-contact" id="section-contact">
    <div class="contact-frame">
        <div class="contact__cta">
            <span class="header-2">
                hire me for...
            </span>
        </div>
        <div class="contact__title">
            <span class="contact__title-text">
                contact
            </span>
        </div>
        <div class="contact">
            <input id="perf-btn" class="contact__radio contact__radio-1 hidden-radio" type="radio" name="perf-less" checked>
            <label for="perf-btn" class="contact__btn-perf">
                <span class="contact__btn-icon contact__btn-violin"></span>
                <div class="contact__btn-details">
                    <span class="contact__btn-heading sub-header-1-dark">performances</span>
                    <span class="contact__btn-desc text-1">orchestra, quartet, weddings, studio recording - I do it all!</span>
                </div>
            </label>
            <input id="less-btn" class="contact__radio contact__radio-2 hidden-radio" type="radio" name="perf-less">
            <label for="less-btn" class="contact__btn-less">
                <span class="contact__btn-icon contact__btn-apple"></span>
                <div class="contact__btn-details">
                    <span class="contact__btn-heading sub-header-1-dark">lessons</span>
                    <span class="contact__btn-desc text-1">Over 10 years of teaching experience, from students to adult learners.</span>
                </div>
            </label>
            <div class="contact__form-bg"></div>
            <div class="contact__form-container">
                <?php echo do_shortcode( '[contact-form-7 id="57" title="performances" html_class="contact__form contact__form-perf"]' ); ?>
                <?php echo do_shortcode( '[contact-form-7 id="95" title="lessons" html_class="contact__form contact__form-less"]' ); ?>  
            </div>
        </div>
    </div>
</section>