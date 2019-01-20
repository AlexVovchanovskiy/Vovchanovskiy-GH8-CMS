<?php $data = require('data.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php print $data['siteTitle'] ?></title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
            <?php $siteLogo = $data['siteLogo'];
            print '<h1><a class="navbar-brand" href="/"><img src=' . $data['siteLogo'] . ' alt="logo"></a></h1>'
            ?>
            <button class="navbar-toggler text-dark" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav menu">
                    <?php
                    foreach ($data['mainMenu'] as $itemMenu) {
                        print '<li class="nav-item menu-item">
                            <a class="nav-link menu-link" href=' . $itemMenu['url'] . '>' . $itemMenu['title'] . '</a>
                        </li>';
                    } ?>
                </ul>
            </div>
        </nav>

        <div class="header-title text-center">
            <h2><?php print $data['titleSections']['headerTitle'] ?></h2>
            <p><?php print $data['header']['headerText'] ?></p>
            <?php $button = $data['button'];
            print '<a class="button" href=' . $data['button']['ask']['url'] . '>' . $data['button']['ask']['title'] . '</a>'
            ?>
        </div>
    </div>
</header>

<main>
    <section class="code-design">
        <div class="container">
            <div class="row">
                <div class="design col-sm-12 col-md-6">
                    <h2><?php print $data['sectionCodedesign']['best'] ?>
                        <span class="accent-text"><?php print $data['sectionCodedesign']['design'] ?></span>
                    </h2>
                    <p><?php print $data['sectionCodedesign']['text'] ?></p>
                    <?php $button = $data['button'];
                    print '<a class="button" href=' . $data['button']['ask']['url'] . '>' . $data['button']['ask']['title'] . '</a>'
                    ?>
                </div>
                <div class="code col-sm-12 col-md-6">
                    <h2><?php print $data['sectionCodedesign']['best'] ?>
                        <span class="accent-text"><?php print $data['sectionCodedesign']['code'] ?></span>
                    </h2>
                    <p><?php print $data['sectionCodedesign']['text'] ?></p>
                    <?php $button = $data['button'];
                    print '<a class="button" href=' . $data['button']['ask']['url'] . '>' . $data['button']['ask']['title'] . '</a>'
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container text-center">
            <h2><?php print $data['titleSections']['servicesTitle'] ?></h2>
            <div class="first-row row">
                <div class="services-item col-12 col-lg-6">
                    <div class="feature text-left">
                        <h3><?php print $data['sectionServices']['servicesItem1']['title'] ?></h3>
                        <p><?php print $data['sectionServices']['servicesItem1']['text'] ?></p>
                    </div>
                </div>
                <div class="services-item col-12 col-lg-6">
                    <div class="feature text-left">
                        <h3><?php print $data['sectionServices']['servicesItem2']['title'] ?></h3>
                        <p><?php print $data['sectionServices']['servicesItem2']['text'] ?></p>
                    </div>
                </div>
            </div>
            <div class="second-row row">
                <div class="services-item col-12 col-lg-6">
                    <div class="feature text-left">
                        <h3><?php print $data['sectionServices']['servicesItem3']['title'] ?></h3>
                        <p><?php print $data['sectionServices']['servicesItem3']['text'] ?></p>
                    </div>
                </div>
                <div class="services-item col-12 col-lg-6">
                    <div class="feature text-left">
                        <h3><?php print $data['sectionServices']['servicesItem4']['title'] ?></h3>
                        <p><?php print $data['sectionServices']['servicesItem4']['text'] ?></p>
                    </div>
                </div>
            </div>
            <?php $button = $data['button'];
            print '<a class="button" href=' . $data['button']['ask']['url'] . '>' . $data['button']['ask']['title'] . '</a>'
            ?>
        </div>
    </section>

    <section class="slider">
        <div class="slider-content row">
            <?php $button = $data['button'];
            print '<a class="btn-prior" href=' . $data['button']['prior']['url'] . '></a>'
            ?>
            <div class="slider-content-info col-12 col-md-8 col-lg-4 m-auto">
                <?php $sectionSlider = $data['sectionSlider'];
                print '<img src=' . $data['sectionSlider']['slide1']['slideImg'] . ' alt="Slide1">' ?>
            </div>
            <div class="slider-content-info col-12 col-md-8 col-lg-4 m-auto">
                <div class="active-slider-bg">
                    <div class="active-slider-header">
                        <h3><?php print $data['sectionSlider']['slide2']['slideTitle'] ?></h3>
                        <p class="col-8 m-auto"><?php print $data['sectionSlider']['slide2']['slideText'] ?></p>
                        <?php $button = $data['button'];
                        print '<a class="button" href=' . $data['button']['watch']['url'] . '>' . $data['button']['watch']['title'] . '</a>'
                        ?>
                    </div>
                </div>
                <?php $sectionSlider = $data['sectionSlider'];
                print '<img src=' . $data['sectionSlider']['slide2']['slideImg'] . ' alt="Slide2">' ?>
            </div>
            <div class="slider-content-info col-12 col-md-8 col-lg-4 m-auto">
                <?php $sectionSlider = $data['sectionSlider'];
                print '<img src=' . $data['sectionSlider']['slide3']['slideImg'] . ' alt="Slide3">' ?>
            </div>
            <?php $button = $data['button'];
            print '<a class="btn-next" href=' . $data['button']['next']['url'] . '></a>'
            ?>
        </div>
    </section>

    <section class="about">
        <div class="container text-center">
            <div class="row">
                <div class="col-12 col-lg-8 m-auto">
                    <h2><?php print $data['titleSections']['aboutusTitle'] ?></h2>
                    <p><?php print $data['sectionAboutus']['aboutusText'] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="about-member col-10 col-md-6 col-lg-3">
                    <?php $sectionAboutus = $data['sectionAboutus'];
                    print '<img src=' . $data['sectionAboutus'][1]['aboutusImg'] . ' alt="John-Doe1">' ?>
                    <h3><?php print $data['sectionAboutus'][1]['aboutusName'] ?></h3>
                    <p><?php print $data['sectionAboutus'][1]['aboutusNameInfo'] ?></p>
                </div>
                <div class="about-member col-10 col-md-6 col-lg-3">
                    <?php $sectionAboutus = $data['sectionAboutus'];
                    print '<img src=' . $data['sectionAboutus'][2]['aboutusImg'] . ' alt="John-Doe2">' ?>
                    <h3><?php print $data['sectionAboutus'][2]['aboutusName'] ?></h3>
                    <p><?php print $data['sectionAboutus'][2]['aboutusNameInfo'] ?></p>
                </div>
                <div class="about-member col-10 col-md-6 col-lg-3">
                    <?php $sectionAboutus = $data['sectionAboutus'];
                    print '<img src=' . $data['sectionAboutus'][3]['aboutusImg'] . ' alt="John-Doe3">' ?>
                    <h3><?php print $data['sectionAboutus'][3]['aboutusName'] ?></h3>
                    <p><?php print $data['sectionAboutus'][3]['aboutusNameInfo'] ?></p>
                </div>
                <div class="about-member col-10 col-md-6 col-lg-3">
                    <?php $sectionAboutus = $data['sectionAboutus'];
                    print '<img src=' . $data['sectionAboutus'][4]['aboutusImg'] . ' alt="John-Doe4">' ?>
                    <h3><?php print $data['sectionAboutus'][4]['aboutusName'] ?></h3>
                    <p><?php print $data['sectionAboutus'][4]['aboutusNameInfo'] ?></p>
                </div>
            </div>
            <?php $button = $data['button'];
            print '<a class="button" href=' . $data['button']['watch']['url'] . '>' . $data['button']['watch']['title'] . '</a>'
            ?>
        </div>
    </section>

    <section class="map">
        <?php $sectionMap = $data['sectionMap'];
        print '<iframe class="map-frame" src=' . $data['sectionMap']['src'] . '></iframe>'
        ?>
    </section>
</main>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9 text-center m-auto footerText">
                <p><?php print $data['footer']['footerText']; ?>
                    <strong><?php print $data['footer']['footerTextImp']; ?></strong></p>
            </div>
        </div>
    </div>
</footer>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
