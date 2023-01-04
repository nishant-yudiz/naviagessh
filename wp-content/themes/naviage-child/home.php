<?php
/**
 * Template Name: Home Page
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 
 */
get_header();
?>
<?php $uploads = wp_get_upload_dir();
$banner = get_field('bannner_section');
$about = get_field('about_section');
$objective = get_field('objective_section');
$service = get_field('service_section');
$future = get_field('future_section');
$join_naviage = get_field('join_naviage_section');

?>
<section class="banner">
    <!-- ============================== section-banner ================================ -->
    <div class="container">
        <div class="banner-tagline">
            <h3 class="wow fadeIn" data-wow-duration="2s"><?php echo $banner['banner_title'] ?></h3>
            <p class="wow fadeIn" data-wow-duration="2s"><?php echo $banner['banner_sub_title'] ?></p>
        </div>
        <div class="form-img-container">
            <div class="img-container position-left">
                <div class="small-img wow fadeIn" data-wow-duration="2s">
                    <img src=<?php echo $banner['banner_right_small_image']; ?> alt="user-img">
                </div>
                <div class="medium-img wow fadeIn" data-wow-duration="2s">
                    <img src=<?php echo $banner['banner_right_medium_image']; ?> alt="user-img">
                </div>
                <div class="large-img wow fadeIn" data-wow-duration="2s">
                    <img src=<?php echo $banner['banner_right_large_image']; ?> alt="user-img">
                </div>
            </div>
            <div class="registration-form  wow fadeIn border-gradient-white border-gradient"  data-wow-duration="2s">
                <?php the_content(); ?>
            </div>
            <div class="img-container position-right">
                <div class="small-img wow fadeIn" data-wow-duration="2s">
                    <img src=<?php echo $banner['banner_left_small_image']; ?> alt="user-img">
                </div>
                <div class="medium-img wow fadeIn" data-wow-duration="2s">
                    <img src=<?php echo $banner['banner_left_medium_image']; ?> alt="user-img">
                </div>
                <div class="large-img wow fadeIn" data-wow-duration="2s">
                    <img src=<?php echo $banner['banner_left_large_image']; ?> alt="user-img">
                </div>
            </div>
        </div>
    </div>
    <div class="stroke-text fadeIn wow"  data-wow-duration="2s">
        <span>NAVIAGE</span>
        <span>NAVIAGE</span>
        <span>NAVIAGE</span>
    </div>
</section>
<section class="about common-padding">
    <!--=========================================== Section-about ============================================-->
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="about-poster wow fadeIn"  data-wow-duration="2s">
                            <img src=<?php echo $about['about_image']; ?> alt="about-video-poster">
                            <a data-fancybox href="<?php echo $about['about_link_url']; ?>"> 
                            <img class="play-btn" src=<?php echo $uploads['baseurl']; ?>/2022/08/play-btn.svg alt="play-btn.svg"></a>
                        </div>
                </div>
            <div class="col-md-7">
                <div class="about-content  wow fadeIn" data-wow-duration="2s">
                    <h6 class="primary-txt-color"><?php echo $about['about_title']; ?></h6>
                    <h3><?php echo $about['about_subtitle']; ?></h3>
                    <div class="wow fadeIn"data-wow-duration="3s"><?php echo $about['about_description']; ?></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="objective common-padding">
    <!--=========================================== Section-objective ============================================-->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="objective-content wow fadeIn" data-wow-duration="2s">
                    <h6 class="primary-txt-color"><?php echo $objective['objective_title']; ?></h6>
                    <h3><?php echo $objective['objective_subtitle']; ?></h3>
                    <?php echo $objective['objective_description']; ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="objective-poster wow fadeIn"  data-wow-duration="2s">
                    <img src=<?php echo $objective['objective_image']; ?> alt="objective-poster">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="benefits common-padding">
    <!--=========================================== Section-benefits ============================================-->
    <div class="container">
        <h1 class=" wow fadeIn" data-wow-duration="2s"><?php echo get_field('benefits_heading_title'); ?></h1>
        <?php if (have_rows('benefits_section')) : ?>
            <?php while (have_rows('benefits_section')) : the_row(); ?>
                <div class="row wow fadeIn" data-wow-duration="1s">
                    <div class="col-md-5">
                        <div class="benefits-content">
                            <h4><?php echo get_sub_field('benefits_subtitle'); ?></h4>
                            <p><?php echo get_sub_field('benefits_description'); ?></p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="benefits-poster">
                            <img src=<?php echo get_sub_field('benefits_image'); ?> alt="benefits-poster">
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
<section class="service">
    <!--=========================================== Section-service ============================================-->
    <div class="service-content">
        <div class="offer-txt wow fadeIn" data-wow-duration="1s">
            <span><?php echo $service['service_watermark_text']; ?></span>
        </div>
        <div class="services-details wow fadeIn"  data-wow-duration="1s">
            <h2><?php echo $service['service_title']; ?></h2>
            <?php echo $service['service_description']; ?>
        </div>
        <div class="container">
            <div class="service-poster">
                <img src=<?php echo $service['service_image']; ?> alt="service-poster">
            </div>
        </div>
    </div>
</section>
<section class="future">
    <!--=========================================== Section-future ============================================-->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="future-content wow fadeIn" data-wow-duration="2s">
                    <h3><?php echo $future['future_title']; ?></h3>
                    <p><?php echo $future['future_description']; ?></p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="future-poster  wow fadeIn"  data-wow-duration="2s">
                    <img src=<?php echo $future['future_image']; ?> alt="future-poster">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="join-naviage">
    <!--=========================================== Section-join-naviage ============================================-->
    <div class="container">
        <div class="row">
            <div class="col-md-7 wow fadeIn"   data-wow-duration="2s">
                <div class="join-naviage-content  ">
                    <span><?php echo $join_naviage['join_naviage_title']; ?></span>
                </div>
            </div>
            <div class="col-md-3 wow fadeIn"  data-wow-duration="3s">
                <div class="submit-btn">
                    <a href="<?php echo $join_naviage['get_in_touch_link']; ?>"><?php echo $join_naviage['get_in_touch_button']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>