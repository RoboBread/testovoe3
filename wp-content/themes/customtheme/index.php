<?php get_header(); ?>
    <div class="about" id="about" style="background: url(<?= CFS()->get('background_white')?>) center 101% repeat-x, #1D1D1D;">
        <div class="container">
            <div class="about__inner">
                <?php 
                $loop = CFS()->get('card');
                foreach ($loop as $row){
                    ?>
                    <div class="about__item">
                        <div class="about__year"><?= $row['card_year'] ?></div>
                        <div class="about__text"><?= $row['card_text'] ?></div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="team" id="team">
        <div class="team__text-box">
            <h2 class="team__title"><?= CFS()->get('team_title')?></h2>
            <p class="team__text"><?= CFS()->get('team_description')?></p>
        </div>
        <div class="team__item-box">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php 
                            $loop = CFS()->get('team_card');
                            foreach ($loop as $row){
                    ?>
                            <div class="swiper-slide">
                                    <div class="team__item">
                                        <img class="team__item__member-photo" src="<?= $row['team_img']?>" alt="">
                                        <h2 class="team__member-name"><?= $row['team_name']?></h2>
                                        <p class="team__profession"><?= $row['team_post']?></p>
                                        <div class="team__social-box">
                                            <a href="https://twitter.com/?lang=ru">
                                                <img src="<?= $row['team_twitter']?>" alt="" class="team__social-box__media">
                                            </a>
                                            <a href="https://www.instagram.com/">
                                                <img class="instagramm" src="<?= $row['team_instagram']?>" alt="">
                                            </a>
                                            <a href="#">
                                                <img class="instagramm" src="<?= $row['team_vk']?>" alt="">
                                            </a>
                                            <a href="#">
                                                <img class="instagramm" src="<?= $row['team_facebook']?>" alt="">
                                            </a>
                                        </div>
                                    </div>
                            </div>
                            <?php
                        }
                    ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <div class="services" id="services">
        <div class="services__text-box">
            <h2 class="services__title"><?= CFS()->get('services_title')?></h2>
            <p class="services__text"><?= CFS()->get('services_text')?></p>
        </div>
        <div class="services__item-box">
        <?php 
                $loop = CFS()->get('services_card');
                foreach ($loop as $row){
                    ?>
                    <div class="services__item">
                        <img src="<?= $row['services_img']?>" alt="" class="services__icon">
                        <h2 class="services__item__title"><?= $row['services_card_title']?></h2>
                        <p class="services__item__text"><?= $row['services_card_text']?></p>
                    </div>
                    <?php
                }
                ?>
        </div>
    </div>
    <footer class="footer" id="contact">
        <div class="footer__text-box">
            <h2 class="footer__title"><?= CFS()->get('contact_title')?></h2>
            <p class="footer__text"><?= CFS()->get('contact_text')?></p>
        </div>
        <div class="footer__item-box">
            <div class="item">
                    <img src="http://testcrm/wp-content/uploads/2023/05/Phone.png" alt="" class="item__icon">
                    <p class="item__text"><?= CFS()->get('contact_number')?></p>
            </div>
            <div class="item">
                <a href="https://goo.gl/maps/zKyGsRaAjwhgsDny8" class="item__silka">
                    <img src="http://testcrm/wp-content/uploads/2023/05/adress.png" alt="" class="item__icon">
                    <p class="item__text"><?= CFS()->get('contact_adress')?></p>
                </a>
            </div>
            <div class="item">
                <a href="mailto:somemail@hotmail.com" class="item__silka">
                    <img src="http://testcrm/wp-content/uploads/2023/05/mail.png" alt="" class="item__icon">
                <p class="item__text"><?= CFS()->get('contact_email')?></p>
                </a>
            </div>
        </div>
        <?php the_content();?>
<?php get_footer(); ?>