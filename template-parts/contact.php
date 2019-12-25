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
            </div>
        </div>
    </div>
</section>