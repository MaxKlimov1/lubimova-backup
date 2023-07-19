<?php
get_header();
?>
<main>
    <section class="section-title">
        <div class="container">
            <div class="title-wrapper">
                <div class="title-info">
                    <h1 class="main-title">
                        <?php the_field('main-title') ?>
                    </h1>
                    <button class="btn title-btn">Получить прайс-лист
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/arrow.png" alt="arrow" class="arrow">
                    </button>
                    <div class="title-images">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title_img1.png" alt="title image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title_img2.png" class="ti-1" alt="title image">
                    </div>
                </div>
                <div class="title-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title_img3.png" alt="title image">
                </div>

                <div class="img-mobile-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title_img1.png" alt="title image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title_img2.png" alt="title image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title_img3.png" alt="title image">
                    </div>
            </div>
        </div>
    </section>

    <section class="about-us">
        <div class="container">
            <h2 class="about-us-title">
                О нас
            </h2>
            <div class="about-image-wrapp">
                <div class="about-wrap1">
                    <div class="about-description">
                        <div class="about-descr-logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/icon_time.png" alt="icon time">
                        </div>
                        <h3 class="about-descr-title"><?php the_field('about_us_time') ?></h3>
                        <p class="about-descr-description"><?php the_field('about_time_descr') ?></p>
                    </div>
                    <div class="about-img1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about_img1.png" alt="about img">
                    </div>
                </div>
                <div class="about-wrap2">
                    <div class="about-description">
                        <div class="about-descr-logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/icon_quality.png" alt="icon quality">
                        </div>
                        <h3 class="about-descr-title"><?php the_field('about_us_quality') ?></h3>
                        <p class="about-descr-description"><?php the_field('about_quality_descr') ?></p>
                    </div>
                    <div class="about-description d1">
                        <div class="about-descr-logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/icon_uniqueness.png" alt="icon uniqueness">
                        </div>
                        <h3 class="about-descr-title"><?php the_field('about_us_uniqueness') ?></h3>
                        <p class="about-descr-description"><?php the_field('about_uniq_descr') ?></p>
                    </div>
                    <div class="about-description ad1">
                        <div class="about-descr-logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/icon_box.png" alt="icon box">
                        </div>
                        <h3 class="about-descr-title"><?php the_field('about_us_delivery') ?></h3>
                        <p class="about-descr-description"><?php the_field('about_delivery_descr') ?></p>
                    </div>
                </div>
                <div class="about-wrap3">
                    <div class="about-img3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video.png" alt="video image" class="aboutImage3">
                        <div class="iframe-block"><iframe class="aboutImage3 frame" src="https://www.youtube.com/embed/9Az_2N2hdAw" title="OLEBAG – женские рюкзаки от производителя" frameborder="0" allow="accelerometer;autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                        <div class="iframe-block"><iframe class="aboutImage3 frame" src="https://www.youtube.com/embed/NQfA-P0XTVI" title="OLEBAG – сумки на каждый день" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                            <div class="iframe-block"><iframe class="aboutImage3 frame" src="https://www.youtube.com/embed/GV_5eNkRKLc" title="OLEBAG – сумки от производителя" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    </div>
                    <ul class="dots-style" id='dots-stile-title'>
                        <li class="dots1">
                            <button>
                                1
                            </button>
                        </li>
                        <li class="dots1">
                            <button>
                                2
                            </button>
                        </li>
                        <li class="dots1">
                            <button>
                                3
                            </button>
                        </li>
                        <li class="dots1">
                            <button>
                                4
                            </button>
                        </li>
                        </ul>
                    <div class="arrowsVideo square-animation-bottom" id='arrowsVideo'>
                        <div class="video-arrow-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/arrow_hover_left.png" alt="arrow left">
                        </div>
                        <div class="video-arrow-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/arrow_hover_right.png" alt="arrow right">
                        </div>
                    </div>
                </div>
                <div class="about-image-wrapp-mobile">
                    
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="how-to-place">
                <div class="place-title-block">
                    <h2 class="place-title">Как сделать заказ</h2>
                    <ul class="place-title-list">
                        <li class="place-title-item">
                            <div class="content-item1">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/number.png" alt="number">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/line.png" alt="line" class="place-line">
                            </div>
                            <div class="content-item2">
                                <p class="place1"><?php the_field('order_block1') ?></p>
                            </div>
                        </li>
                        <li class="place-title-item pti1">
                            <div class="content-item1">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/number-1.png" alt="number">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/line.png" alt="line" class="place-line">
                            </div>
                            <div class="content-item2">
                                <p class="place1"><?php the_field('order_block2') ?></p>
                            </div>
                        </li>
                        <li class="place-title-item pti1">
                            <div class="content-item1">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/number-2.png" alt="number">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/line.png" alt="line" class="place-line">
                            </div>
                            <div class="content-item2">
                                <p class="place3"><?php the_field('order_block3') ?></p>
                            </div>
                        </li>
                        <li class="place-title-item pti1">
                            <div class="content-item1">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/number-3.png" alt="number">
                            </div>
                            <div class="content-item2">
                                <p class="place1"><?php the_field('order_block4') ?></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="place-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/place_photo.png" alt="place section image">
                </div>
            </div>
        </div>
    </section>

    <section class="catalog">
        <div class="container">
            <h2 class="catalog-title"><?php the_field('catalog_title') ?></h2>
            <ul class="catalog-list">
                <li class="catalog-item">

                    <?php
                    $image = get_field('product1_img');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>

                    <h3 class="catalog-item-title">
                        <a href="#"><?php the_field('product1_title') ?></a>
                    </h3>
                </li>
                <li class="catalog-item">
                    <?php
                    $image = get_field('product2_img');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <h3 class="catalog-item-title">
                        <a href="#"><?php the_field('product2_title') ?></a>
                    </h3>
                </li>
                <li class="catalog-item">
                    <?php
                    $image = get_field('product3_img');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <h3 class="catalog-item-title">
                        <a href="#"><?php the_field('product3_title') ?></a>
                    </h3>
                </li>
                <li class="catalog-item">
                    <?php
                    $image = get_field('product4_img');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <h3 class="catalog-item-title">
                        <a href="#"><?php the_field('product4_title') ?></a>
                    </h3>
                </li>
                <li class="catalog-item">
                    <?php
                    $image = get_field('product5_img');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <h3 class="catalog-item-title">
                        <a href="#"><?php the_field('product5_title') ?></a>
                    </h3>
                </li>
                <li class="catalog-item">
                    <?php
                    $image = get_field('product6_img');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <h3 class="catalog-item-title">
                        <a href="#"><?php the_field('product6_title') ?></a>
                    </h3>
                </li>
                <li class="catalog-item">
                    <?php
                    $image = get_field('product7_img');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <h3 class="catalog-item-title">
                        <a href="#"><?php the_field('product7_title') ?></a>
                    </h3>
                </li>
                <li class="catalog-item">
                    <?php
                    $image = get_field('product8_img');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <h3 class="catalog-item-title">
                        <a href="#"><?php the_field('product8_title') ?></a>
                    </h3>
                </li>
                <li class="catalog-item">
                    <?php
                    $image = get_field('product9_img');
                    if (!empty($image)) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <h3 class="catalog-item-title">
                        <a href="#"><?php the_field('product9_title') ?></a>
                    </h3>
                </li>
            </ul>
            <div class="block-btn">
                <button class="catalog-button">
                    Заказать пробную партию
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/arrow.png" alt="arrow" class="arrow">
                </button>
            </div>
        </div>
    </section>

    <section class="contacts-section">
        <div class="container">
            <h2 class="contacts-title"><?php the_field('contacts_title') ?></h2>
            <div class="contacts-block">
                <div class="contacts-info-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/contacts-logo.png" alt="logo" class="cont-logo">
                    <div class="contact-info">
                        <div class="phone">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/cont-phone.png" alt="phone logo" class="contacts-phone-logo">
                            <p class="contacts-phone">
                                <a href="tel:<?php the_field('contacts_phone') ?>"><?php the_field('contacts_phone') ?></a>
                            </p>
                        </div>
                        <div class="email">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/logos//cont-email.png" alt="email.logo" class="contacts-email-logo">
                            <p class="contacts-email">
                                <a href="mailto:<?php the_field('contacts_email') ?>"><?php the_field('contacts_email') ?></a>
                            </p>
                        </div>
                        <div class="adress">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/cont-adress.png" alt="adress logo" class="contacts-adress-logo">
                            <p class="contacts-adress"><?php the_field('contacts_adress') ?></p>
                        </div>
                    </div>
                    <button class="contacts-button">Получить прайс-лист
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/arrow.png" alt="arrow" class="arrow">
                    </button>
                </div>
                <div class="comments-block slider">
                    <?
                    $my_posts = get_posts(array(  // получаешь посты
                        'numberposts' => 5, // количество постов которые выводишь  
                        'category'    => 2, // id рубрики 
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'include'     => array(),
                        'exclude'     => array(),
                        'meta_key'    => '',
                        'meta_value'  => '',
                        'post_type'   => 'post',
                        'suppress_filters' => true,
                    ));
                    ?>
                    <?
                    foreach ($my_posts as $post) : // перебераешь полученные посты 
                        setup_postdata($post);  // устанавливаешь постдату 

                    ?>
                        <? var_dump() ?>

                        <div class="comment-username">
                            <div class="comment-usetname-title">
                                <p class="username">
                                    <?= get_field('user_name') ?> <!-- подставляешь значение поля в нужное место  -->
                                </p>

                                <div class="next-username">
                                    <!-- <svg class="arrow-right" xmlns="http://www.w3.org/2000/svg" width="27" height="14" viewBox="0 0 27 14" fill="none">
                                        <path d="M26 7L1 7M1 7L7.17112 13M1 7L7.17112 1" stroke="#444444" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <svg class="arrow-right" xmlns="http://www.w3.org/2000/svg" width="27" height="14" viewBox="0 0 27 14" fill="none">
                                        <path d="M0.999999 7L26 7M26 7L19.8289 1M26 7L19.8289 13" stroke="#444444" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> -->
                                </div>
                            </div>
                            <div class="comment-estimation">
                                <div class="estimation-date">
                                    <p><?= get_field('comment_date') ?></p>
                                </div>
                                <div class="estimation-stars">
                                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_active.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_active.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_active.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_active.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_deactive.png" alt="star"> -->

                                    <?php 
                                    $feedbackStar = get_field('feedback_star');
                                        if($feedbackStar == 5) :?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_active.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_active.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_active.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_active.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_active.png" alt="star">
                                    <?php endif; ?>

                                    <?php 
                                    $feedbackStar = get_field('feedback_star');
                                        if($feedbackStar == 4) :?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_active.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_active.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_active.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_active.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_deactive.png" alt="star">
                                    <?php endif; ?>

                                    <?php 
                                    $feedbackStar = get_field('feedback_star');
                                        if($feedbackStar == 3) :?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_active.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_active.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_active.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_deactive.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_deactive.png" alt="star">
                                    <?php endif; ?>

                                    <?php 
                                    $feedbackStar = get_field('feedback_star');
                                        if($feedbackStar == 2) :?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_active.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_active.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_deactive.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_deactive.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_deactive.png" alt="star">
                                    <?php endif; ?>

                                    <?php 
                                    $feedbackStar = get_field('feedback_star');
                                        if($feedbackStar == 1) :?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_active.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_deactive.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_deactive.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_deactive.png" alt="star">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/star_deactive.png" alt="star">
                                    <?php endif; ?>
                                    

                                </div>
                            </div>
                            <p class="comment-description">
                                <?= get_field('feedback_descr') ?> <!-- подставляешь значение поля в нужное место  -->
                            </p>
                            <div class="comment-img-block">
                                <div>
                                    <?php
                                    $image = get_field('feetback_img1');
                                    if (!empty($image)) : ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="ci2">
                                    <?php
                                    $image = get_field('feedback_img2');
                                    if (!empty($image)) : ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <? endforeach ?>
                </div>
            </div>
            <?php wp_reset_postdata(); // сброс 
            ?>

            <div class="social-block">
                <h3 class="social-title">
                    <?php the_field('links_block_title') ?>
                </h3>
                <ul class="social-list">
                    <li class="social-item vk">
                        <p class="item-name">Vkontakte</p>
                    </li>
                    <li class="social-item wild">
                        <p class="item-name">Wildberries</p>
                    </li>
                    <li class="social-item ozon">
                        <p class="item-name">Ozon</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>

