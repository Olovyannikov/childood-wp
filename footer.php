
        <div class="question">
            <div class="question__text">
                Есть вопросы? Напишите нам!
            </div>
            <div id="reply" class="minibutton">Написать</div>
            <div class="question__close">&times</div>
        </div>
        
        <div class="reply">
            <div class="reply__body">
                <div class="reply__title">
                    Оставьте ваш вопрос здесь
                </div>
                <?php echo do_shortcode(' [contact-form-7 id="127" title="Остались вопросы?"] '); ?>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                              <div href="#" class="footer__logo">
                              <?php the_custom_logo(  ); ?>
                              </div>
            
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="footer__social">
                            <div class="footer__social-item">
                                Мы в соцсетях:
                            </div>
                            <a href="#" class="footer__social-item">
                            <?php
                            $image = get_field('social_instagram');
                            if(!empty($image)) : ?>
                                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']; ?>">
                                <?php endif;
                            ?>
                            </a>
                            <a href="#" class="footer__social-item">
                            <?php
                            $image = get_field('social_facebook');
                            if(!empty($image)) : ?>
                                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']; ?>">
                                <?php endif;
                            ?>
                            </a>
                            <a href="#" class="footer__social-item">
                            <?php
                            $image = get_field('social_youtube');
                            if(!empty($image)) : ?>
                                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']; ?>">
                                <?php endif;
                            ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 offset-md-0 col-lg-6 col-xl-5 offset-xl-1">
                        <div class="footer__contacts">
                            <div class="footer__contacts-item">
                                <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/svg/phone.svg" alt="телефон" class="footer__contacts-logo">
                                <div class="footer__contacts-tel">
                                    <a href="tel:<?php the_field('tel_1', 2) ?>"><?php the_field('tel_1', 2) ?></a>
                                    <a href="tel:<?php the_field('tel_2', 2) ?>"><?php the_field('tel_2', 2) ?></a>
                                </div>
                            </div>
                            <div class="footer__contacts-item">
                                <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/svg/pointer.svg" alt="указатель" class="footer__contacts-logo">
                                <address>ул. Василисы Кожиной, 1<br>
                                    Москва, Россия, 121096</address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="#" class="footer__policy">Политика конфиденциальности</a>
                    </div>
                </div>
            </div>
        </footer>
        <?php
            wp_footer();
        ?> <!-- Функция, подключающая жизненно-важные вещи в футер -->
    </body>
</html>