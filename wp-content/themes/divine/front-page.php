<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package divine
 */

get_header();
?>
    <section class="section features">
        <div class="container">
            <div class="features__list features-list">
                <div class="features-list__item feature-item">
                    <div class="feature-item__title">Разработка</div>
                    <div class="feature-item__img"><img src="<?=get_template_directory_uri()?>/img/1.png" alt=""></div>
                </div>
                <div class="features-list__item feature-item">
                    <div class="feature-item__title">ПРОДВИЖЕНИЕ</div>
                    <div class="feature-item__img"><img src="<?=get_template_directory_uri()?>/img/2.png" alt=""></div>
                </div>
                <div class="features-list__item feature-item">
                    <div class="feature-item__title">ДИЗАЙН</div>
                    <div class="feature-item__img img-after"><img src="<?=get_template_directory_uri()?>/img/3.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section whyMe">
        <div class="container">
            <div class="section__title why-title mw-300">
                <div class="title-block">ПОЧЕМУ?</div>
                <div class="main-caption">DIVINE</div>
            </div>
            <div class="section__body">
                <div class="row">
                    <div class="col-md-7 d-flex flex-wrap">
                        <div class="why-list">
                            <div class="why-list__item">
                                <div class="why-img">
                                    <img src="<?=get_template_directory_uri()?>/img/dates.png" alt="">
                                </div>
                                <div class="why-text">
                                    Мы всегда предоставляем клиенту реальную оценку сроков и строго следим за ее выполнением.
                                </div>      
                            </div>
                        </div>
                        <div class="why-list">
                            <div class="why-list__item">
                                <div class="why-img">
                                    <img src="<?=get_template_directory_uri()?>/img/phone.png" alt="">
                                </div>
                                <div class="why-text">
                                    Используем адаптивный дизайн и мобильные технологии, для того чтобы сайты отлично смотрелись на различных устройствах.
                                </div>      
                            </div>
                        </div>
                        <div class="why-list">
                            <div class="why-list__item">
                                <div class="why-img">
                                    <img src="<?=get_template_directory_uri()?>/img/four_directions_arrow_copy_2.png" alt="">
                                </div>
                                <div class="why-text">
                                    Мы изначально оптимизируем сайты, используя SEO технологии, подготавливая новый сайт к продвижению.
                                </div>      
                            </div>
                        </div>
                        <div class="why-list">
                            <div class="why-list__item">
                                <div class="why-img">
                                    <img src="<?=get_template_directory_uri()?>/img/positioning_1.png" alt="">
                                </div>
                                <div class="why-text">
                                    Используем только оригинальный платный контент - шрифты, картинки, темы и модули.
                                </div>      
                            </div>
                        </div>
                        <div class="why-list">
                            <div class="why-list__item">
                                <div class="why-img">
                                    <img src="<?=get_template_directory_uri()?>/img/flag.png" alt="">
                                </div>
                                <div class="why-text">
                                    Проводим рекламные кампании, ведем аккаунты во всех сервисах и социальных сетях, разрабатываем сайты и дизайн под ключ.
                                </div>      
                            </div>
                        </div>
                        <div class="why-list">
                            <div class="why-list__item">
                                <div class="why-img">
                                    <img src="<?=get_template_directory_uri()?>/img/paper_plane.png" alt="">
                                </div>
                                <div class="why-text">
                                    Мы оказываем гарантийное и послегарантийное обслуживание проектов наших клиентов.
                                </div>      
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="<?=get_template_directory_uri()?>/img/DIVINE1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
       
    </section>
    <section class="section whyMe">
        <div class="container">
            <div class="section__title why-title mw-300 ">
                <div class="title-block">Портфорио</div>
            </div>
            <div class="section__body">
            </div>
        </div>
       
    </section>
<?php
get_footer();
