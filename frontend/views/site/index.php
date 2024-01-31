<?php

/**
 * Team:对影成三人队
 * By wukui,li xiang
 * frontend homepage
 */

use common\models\Faq;

/* @var $this yii\web\View */

use common\models\News;
use common\models\Gallery;
use common\models\Opinion;
use common\models\Price;
use common\models\User;
use yii\helpers\Html;

$this->title='EP App';
?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">核污染下的环保之旅</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Protect the nature,build the future</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">

                        <!-- <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"> -->
                        <a href="#news" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Get Started</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        <!-- <a href="index.php?r=site/login" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"> -->
                            <!-- <span>Login</span> -->
                            <!-- <i class="bi bi-arrow-right"></i> -->
                        <!-- </a> -->
                        <!-- <div class="form-group"> -->
                            <!-- <?= Html::a('Login', ['site/login','class'=>'btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center']) ?> -->
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <!-- <img src="../web/statics/assets/img/footer-bg.png" class="img-fluid" alt=""> -->
                <img src="../web/statics/assets/img/footer-bg.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="news" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>Latest News</p>
            </header>

            <div class="row">
                <?php $latest_news = News::find()->orderBy('news_date DESC')->limit(3)->all(); ?>
                <?php foreach($latest_news as $news):?>
                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="<?="../../common/static/images/news/" . $news->news_photo?>" class="img-fluid" alt=""></div>
                            <span class="post-date"><?=$news->news_date?></span>
                            <h3 class="post-title"><?=$news->news_title?></h3>
                            <h3><?= Html::a('<span>Read More</span><i class="bi bi-arrow-right"></i>', ['site/show-news-content','news_id' => $news->news_id]) ?></h3>
                        </div>
                    </div>
                <?php endforeach;?>

            </div>

            <br><br>

            <header class="section-header">
                <h1><?= Html::a('<span>All News</span><i class="bi bi-arrow-right"></i>', ['site/show-news-list']) ?></h1>
            </header>


        </div>

    </section><!-- End Recent Blog Posts Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="gallery" class="portfolio">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>Past Events</p>
            </header>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-1">INES 1</li>
                        <li data-filter=".filter-3">INES 3</li>
                        <li data-filter=".filter-5">INES 5</li>
                    </ul>
                </div>
            </div>

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-1">
                    <div class="portfolio-wrap">
                        <?php
                        $t_id = 1;
                        $t_picture = Gallery::findIdentity($t_id);
                        $t_path = $t_picture -> getPath();
                        $n_path = "../../common/static/images/past/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <div class="portfolio-info">
                            <h4>
                                <?php
                                $t_id = 1;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_name = $t_picture -> getName();
                                echo $t_name
                                ?>
                            </h4>
                            <p>
                                <?php
                                $t_id = 1;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_detail = $t_picture -> getDetails();
                                echo $t_detail
                                ?>
                            </p>
                            <div class="portfolio-links">
                                <li>
                                    <?php
                                    $t_id = 1;
                                    $t_picture = Gallery::findIdentity($t_id);
                                    $t_path = $t_picture -> getPath();
                                    $t_name = $t_picture -> getName();
                                    $n_path = "../../common/static/images/past/".$t_path;
                                    echo "<a href=$n_path data-gallery='portfolioGallery' class='portfokio-lightbox' title=$t_name><i class='bi bi-plus'></i></a>"
                                    ?>
                                </li>
                                <li><?= Html::a('more', ['site/show-gallery-details','gallery_id' => 1]) ?></li>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-1">
                    <div class="portfolio-wrap">
                        <?php
                        $t_id = 2;
                        $t_picture = Gallery::findIdentity($t_id);
                        $t_path = $t_picture -> getPath();
                        $n_path = "../../common/static/images/past/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <div class="portfolio-info">
                            <h4>
                                <?php
                                $t_id = 2;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_name = $t_picture -> getName();
                                echo $t_name
                                ?>
                            </h4>
                            <p>
                                <?php
                                $t_id = 2;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_detail = $t_picture -> getDetails();
                                echo $t_detail
                                ?>
                            </p>
                            <div class="portfolio-links">
                                <li>
                                    <?php
                                    $t_id = 2;
                                    $t_picture = Gallery::findIdentity($t_id);
                                    $t_path = $t_picture -> getPath();
                                    $t_name = $t_picture -> getName();
                                    $n_path = "../../common/static/images/past/".$t_path;
                                    echo "<a href=$n_path data-gallery='portfolioGallery' class='portfokio-lightbox' title=$t_name><i class='bi bi-plus'></i></a>"
                                    ?>
                                </li>
                                <li><?= Html::a('more', ['site/show-gallery-details','gallery_id' => 2]) ?></li>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-3">
                    <div class="portfolio-wrap">
                        <?php
                        $t_id = 3;
                        $t_picture = Gallery::findIdentity($t_id);
                        $t_path = $t_picture -> getPath();
                        $n_path = "../../common/static/images/past/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <div class="portfolio-info">
                            <h4>
                                <?php
                                $t_id = 3;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_name = $t_picture -> getName();
                                echo $t_name
                                ?>
                            </h4>
                            <p>
                                <?php
                                $t_id = 3;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_detail = $t_picture -> getDetails();
                                echo $t_detail
                                ?>
                            </p>
                            <div class="portfolio-links">
                                <li>
                                    <?php
                                    $t_id = 3;
                                    $t_picture = Gallery::findIdentity($t_id);
                                    $t_path = $t_picture -> getPath();
                                    $t_name = $t_picture -> getName();
                                    $n_path = "../../common/static/images/past/".$t_path;
                                    echo "<a href=$n_path data-gallery='portfolioGallery' class='portfokio-lightbox' title=$t_name><i class='bi bi-plus'></i></a>"
                                    ?>
                                </li>
                                <li><?= Html::a('more', ['site/show-gallery-details','gallery_id' => 3]) ?></li>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-3">
                    <div class="portfolio-wrap">
                        <?php
                        $t_id = 4;
                        $t_picture = Gallery::findIdentity($t_id);
                        $t_path = $t_picture -> getPath();
                        $n_path = "../../common/static/images/past/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <div class="portfolio-info">
                            <h4>
                                <?php
                                $t_id = 4;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_name = $t_picture -> getName();
                                echo $t_name
                                ?>
                            </h4>
                            <p>
                                <?php
                                $t_id = 4;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_detail = $t_picture -> getDetails();
                                echo $t_detail
                                ?>
                            </p>
                            <div class="portfolio-links">
                                <li>
                                    <?php
                                    $t_id = 4;
                                    $t_picture = Gallery::findIdentity($t_id);
                                    $t_path = $t_picture -> getPath();
                                    $t_name = $t_picture -> getName();
                                    $n_path = "../../common/static/images/past/".$t_path;
                                    echo "<a href=$n_path data-gallery='portfolioGallery' class='portfokio-lightbox' title=$t_name><i class='bi bi-plus'></i></a>"
                                    ?>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-3">
                    <div class="portfolio-wrap">
                        <?php
                        $t_id = 5;
                        $t_picture = Gallery::findIdentity($t_id);
                        $t_path = $t_picture -> getPath();
                        $n_path = "../../common/static/images/past/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <div class="portfolio-info">
                            <h4>
                                <?php
                                $t_id = 5;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_name = $t_picture -> getName();
                                echo $t_name
                                ?>
                            </h4>
                            <p>
                                <?php
                                $t_id = 5;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_detail = $t_picture -> getDetails();
                                echo $t_detail
                                ?>
                            </p>
                            <div class="portfolio-links">
                                <li>
                                    <?php
                                    $t_id = 5;
                                    $t_picture = Gallery::findIdentity($t_id);
                                    $t_path = $t_picture -> getPath();
                                    $t_name = $t_picture -> getName();
                                    $n_path = "../../common/static/images/past/".$t_path;
                                    echo "<a href=$n_path data-gallery='portfolioGallery' class='portfokio-lightbox' title=$t_name><i class='bi bi-plus'></i></a>"
                                    ?>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-5">
                    <div class="portfolio-wrap">
                        <?php
                        $t_id = 6;
                        $t_picture = Gallery::findIdentity($t_id);
                        $t_path = $t_picture -> getPath();
                        $n_path = "../../common/static/images/past/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <div class="portfolio-info">
                            <h4>
                                <?php
                                $t_id = 6;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_name = $t_picture -> getName();
                                echo $t_name
                                ?>
                            </h4>
                            <p>
                                <?php
                                $t_id = 6;
                                $t_picture = Gallery::findIdentity($t_id);
                                $t_detail = $t_picture -> getDetails();
                                echo $t_detail
                                ?>
                            </p>
                            <div class="portfolio-links">
                                <li>
                                    <?php
                                    $t_id = 6;
                                    $t_picture = Gallery::findIdentity($t_id);
                                    $t_path = $t_picture -> getPath();
                                    $t_name = $t_picture -> getName();
                                    $n_path = "../../common/static/images/past/".$t_path;
                                    echo "<a href=$n_path data-gallery='portfolioGallery' class='portfokio-lightbox' title=$t_name><i class='bi bi-plus'></i></a>"
                                    ?>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>

                

            </div>

        </div>

    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="opinions" class="testimonials">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>Global Opinions</p>
            </header>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <?php
                                $t_id = 1;
                                $t_opinion = Opinion::findIdentity($t_id);
                                $t_content = $t_opinion -> getContent();
                                echo $t_content
                                ?>
                            </p>
                            <div class="profile mt-auto">
                                <h3>
                                    <?php
                                    $t_id = 1;
                                    $t_opinion = Opinion::findIdentity($t_id);
                                    $t_country = $t_opinion -> getSourceCountry();
                                    echo $t_country
                                    ?>
                                </h3>
                                <h4>
                                    <?php
                                    $t_id = 1;
                                    $t_opinion = Opinion::findIdentity($t_id);
                                    $t_identity = $t_opinion -> getIdentity();
                                    echo $t_identity;
                                    ?>
                                </h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <?php
                                $t_id = 2;
                                $t_opinion = Opinion::findIdentity($t_id);
                                $t_content = $t_opinion -> getContent();
                                echo $t_content
                                ?>
                            </p>
                            <div class="profile mt-auto">
                                <h3>
                                    <?php
                                    $t_id = 2;
                                    $t_opinion = Opinion::findIdentity($t_id);
                                    $t_country = $t_opinion -> getSourceCountry();
                                    echo $t_country
                                    ?>
                                </h3>
                                <h4>
                                    <?php
                                    $t_id = 2;
                                    $t_opinion = Opinion::findIdentity($t_id);
                                    $t_identity = $t_opinion -> getIdentity();
                                    echo $t_identity;
                                    ?>
                                </h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <?php
                                $t_id = 3;
                                $t_opinion = Opinion::findIdentity($t_id);
                                $t_content = $t_opinion -> getContent();
                                echo $t_content
                                ?>
                            </p>
                            <div class="profile mt-auto">
                                <h3>
                                    <?php
                                    $t_id = 3;
                                    $t_opinion = Opinion::findIdentity($t_id);
                                    $t_country = $t_opinion -> getSourceCountry();
                                    echo $t_country
                                    ?>
                                </h3>
                                <h4>
                                    <?php
                                    $t_id = 3;
                                    $t_opinion = Opinion::findIdentity($t_id);
                                    $t_identity = $t_opinion -> getIdentity();
                                    echo $t_identity;
                                    ?>
                                </h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <?php
                                $t_id = 4;
                                $t_opinion = Opinion::findIdentity($t_id);
                                $t_content = $t_opinion -> getContent();
                                echo $t_content
                                ?>
                            </p>
                            <div class="profile mt-auto">
                                <h3>
                                    <?php
                                    $t_id = 4;
                                    $t_opinion = Opinion::findIdentity($t_id);
                                    $t_country = $t_opinion -> getSourceCountry();
                                    echo $t_country
                                    ?>
                                </h3>
                                <h4>
                                    <?php
                                    $t_id = 4;
                                    $t_opinion = Opinion::findIdentity($t_id);
                                    $t_identity = $t_opinion -> getIdentity();
                                    echo $t_identity;
                                    ?>
                                </h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <?php
                                $t_id = 5;
                                $t_opinion = Opinion::findIdentity($t_id);
                                $t_content = $t_opinion -> getContent();
                                echo $t_content
                                ?>
                            </p>
                            <div class="profile mt-auto">
                                <h3>
                                    <?php
                                    $t_id = 5;
                                    $t_opinion = Opinion::findIdentity($t_id);
                                    $t_country = $t_opinion -> getSourceCountry();
                                    echo $t_country
                                    ?>
                                </h3>
                                <h4>
                                    <?php
                                    $t_id = 5;
                                    $t_opinion = Opinion::findIdentity($t_id);
                                    $t_identity = $t_opinion -> getIdentity();
                                    echo $t_identity;
                                    ?>
                                </h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- End Testimonials Section -->

    
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>Affected Prices</p>
            </header>

            <div class="row gy-4" data-aos="fade-left">
                
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
              <span class="featured">
                  <?php
                  $t_id = 1;
                  $t_item = Price::findIdentity($t_id);
                  $t_class = $t_item -> getClass();
                  echo $t_class
                  ?>
              </span>
                        <h3 style="color: #07d5c0;">
                            <?php
                            $t_id = 1;
                            $t_item = Price::findIdentity($t_id);
                            $t_country = $t_item -> getItemName();
                            echo $t_country
                            ?>
                        </h3>
                        <div class="price">
                            <sup>
                                <?php
                                $t_id = 1;
                                $t_item = Price::findIdentity($t_id);
                                $t_currency = $t_item -> getCurrency();
                                echo $t_currency
                                ?>
                            </sup>
                            <?php
                            $t_id = 1;
                            $t_item = Price::findIdentity($t_id);
                            $t_price = $t_item -> getPrice();
                            echo $t_price
                            ?>
                            <span>
                                <?php
                      $t_id = 1;
                      $t_item = Price::findIdentity($t_id);
                      $t_measurement = $t_item -> getMeasurement();
                      $t_measure = "/ ".$t_measurement;
                      echo $t_measure
                      ?>
                  </span>
                </div>
                        <?php
                        $t_id = 1;
                        $t_item = Price::findIdentity($t_id);
                        $t_path = $t_item -> getImg();
                        $n_path = "../../common/static/images/price/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <h3>
                            <ul></ul>
                            <li><?= Html::a('More Details', ['site/show-price-details','price_id' => 1]) ?></li>
                        </h3>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="box">
                        <span class="featured">
                            <?php
                  $t_id = 2;
                  $t_item = Price::findIdentity($t_id);
                  $t_class = $t_item -> getClass();
                  echo $t_class
                  ?>
              </span>
              <h3 style="color: #65c600;">
                            <?php
                            $t_id = 2;
                            $t_item = Price::findIdentity($t_id);
                            $t_country = $t_item -> getItemName();
                            echo $t_country
                            ?>
                        </h3>
                        <div class="price">
                            <sup>
                                <?php
                                $t_id = 2;
                                $t_item = Price::findIdentity($t_id);
                                $t_currency = $t_item -> getCurrency();
                                echo $t_currency
                                ?>
                            </sup>
                            <?php
                            $t_id = 2;
                            $t_item = Price::findIdentity($t_id);
                            $t_price = $t_item -> getPrice();
                            echo $t_price
                            ?>
                            <span>
                                <?php
                      $t_id = 2;
                      $t_item = Price::findIdentity($t_id);
                      $t_measurement = $t_item -> getMeasurement();
                      $t_measure = "/ ".$t_measurement;
                      echo $t_measure
                      ?>
                  </span>
                        </div>
                        <?php
                        $t_id = 2;
                        $t_item = Price::findIdentity($t_id);
                        $t_path = $t_item -> getImg();
                        $n_path = "../../common/static/images/price/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <h3>
                            <ul></ul>
                            <li><?= Html::a('More Details', ['site/show-price-details','price_id' => 2]) ?></li>
                        </h3>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box">
              <span class="featured">
                  <?php
                  $t_id = 3;
                  $t_item = Price::findIdentity($t_id);
                  $t_class = $t_item -> getClass();
                  echo $t_class
                  ?>
              </span>
                        <h3 style="color: #ff901c;">
                            <?php
                            $t_id = 3;
                            $t_item = Price::findIdentity($t_id);
                            $t_country = $t_item -> getItemName();
                            echo $t_country
                            ?>
                        </h3>
                        <div class="price">
                            <sup>
                                <?php
                                $t_id = 3;
                                $t_item = Price::findIdentity($t_id);
                                $t_currency = $t_item -> getCurrency();
                                echo $t_currency
                                ?>
                            </sup>
                            <?php
                            $t_id = 3;
                            $t_item = Price::findIdentity($t_id);
                            $t_price = $t_item -> getPrice();
                            echo $t_price
                            ?>
                            <span>
                                <?php
                      $t_id = 3;
                      $t_item = Price::findIdentity($t_id);
                      $t_measurement = $t_item -> getMeasurement();
                      $t_measure = "/ ".$t_measurement;
                      echo $t_measure
                      ?>
                  </span>
                </div>
                        <?php
                        $t_id = 3;
                        $t_item = Price::findIdentity($t_id);
                        $t_path = $t_item -> getImg();
                        $n_path = "../../common/static/images/price/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <h3>
                            <ul></ul>
                        <li><?= Html::a('More Details', ['site/show-price-details','price_id' => 3]) ?></li>
                    </h3>
                </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="box">
                        <span class="featured">
                  <?php
                  $t_id = 4;
                  $t_item = Price::findIdentity($t_id);
                  $t_class = $t_item -> getClass();
                  echo $t_class
                  ?>
              </span>
              <h3 style="color: #ff0071;">
                            <?php
                            $t_id = 4;
                            $t_item = Price::findIdentity($t_id);
                            $t_country = $t_item -> getItemName();
                            echo $t_country
                            ?>
                        </h3>
                        <div class="price">
                            <sup>
                                <?php
                                $t_id = 4;
                                $t_item = Price::findIdentity($t_id);
                                $t_currency = $t_item -> getCurrency();
                                echo $t_currency
                                ?>
                            </sup>
                            <?php
                            $t_id = 4;
                            $t_item = Price::findIdentity($t_id);
                            $t_price = $t_item -> getPrice();
                            echo $t_price
                            ?>
                            <span>
                                <?php
                      $t_id = 4;
                      $t_item = Price::findIdentity($t_id);
                      $t_measurement = $t_item -> getMeasurement();
                      $t_measure = "/ ".$t_measurement;
                      echo $t_measure
                      ?>
                  </span>
                        </div>
                        <?php
                        $t_id = 4;
                        $t_item = Price::findIdentity($t_id);
                        $t_path = $t_item -> getImg();
                        $n_path = "../../common/static/images/price/".$t_path;
                        echo "<img src=$n_path class='img-fluid' alt=''>"
                        ?>
                        <h3>
                            <ul></ul>
                            <li><?= Html::a('More Details', ['site/show-price-details','price_id' => 4]) ?></li>
                        </h3>
                    </div>
                </div>
                
            </div>

        </div>
        
    </section><!-- End Pricing Section -->


    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
        
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>核污染常见问题</p>
            </header>

            <div class="row">
                <div class="col-lg-6">
                    <!-- F.A.Q List 1-->
                    <div class="accordion accordion-flush" id="faqlist1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                    <?php
                                    $faq = Faq::find()->where(['priority' => 1])->one();
                                    echo ($faq->question);
                                    ?>
                                </button>
                            </h2>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    <h4><?php
                                    $faq = Faq::find()->where(['priority' => 1])->one();
                                    echo ($faq->answer);
                                    ?></h4>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                    <?php
                                    $faq = Faq::find()->where(['priority' => 2])->one();
                                    echo ($faq->question);
                                    ?>
                                </button>
                            </h2>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                <h4><?php
                                    $faq = Faq::find()->where(['priority' => 2])->one();
                                    echo ($faq->answer);
                                    ?></h4>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                    <?php
                                    $faq = Faq::find()->where(['priority' => 3])->one();
                                    echo ($faq->question);
                                    ?>
                                </button>
                            </h2>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                <h4><?php
                                    $faq = Faq::find()->where(['priority' => 3])->one();
                                    echo ($faq->answer);
                                    ?></h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">

                    <!-- F.A.Q List 2-->
                    <div class="accordion accordion-flush" id="faqlist2">

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                                    <?php
                                    $faq = Faq::find()->where(['priority' => 4])->one();
                                    echo ($faq->question);
                                    ?>
                                </button>
                            </h2>
                            <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                <h4><?php
                                    $faq = Faq::find()->where(['priority' => 4])->one();
                                    echo ($faq->answer);
                                    ?></h4>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                                    <?php
                                    $faq = Faq::find()->where(['priority' => 5])->one();
                                    echo ($faq->question);
                                    ?>
                                </button>
                            </h2>
                            <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                <h4><?php
                                    $faq = Faq::find()->where(['priority' => 5])->one();
                                    echo ($faq->answer);
                                    ?></h4>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                                    <?php
                                    $faq = Faq::find()->where(['priority' => 6])->one();
                                    echo ($faq->question);
                                    ?>
                                </button>
                            </h2>
                            <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                <h4><?php
                                    $faq = Faq::find()->where(['priority' => 6])->one();
                                    echo ($faq->answer);
                                    ?></h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section><!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>开发团队</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="../../common/static/images/team/wk.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>吴魁</h4>
                                <span>组长 · 2113658</span>
                                <p>完成前后台模板的嵌入和微调，新闻、观点、物价、FAQ模块的实现</p>
                            </div>
                        </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="../../common/static/images/team/lx.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>李想</h4>
                                <span>组员 · 2112891</span>
                                <p>完成布局设计、过去事件模块、后台历史统计数据</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

        </div>

    </section><!-- End Team Section -->

    
</main><!-- End #main -->


