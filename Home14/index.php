<?php $data = require('data.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $data['siteTitle']; ?></title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
            <h1><a class="navbar-brand" href="/"><img src="<?php echo $data['siteLogo']; ?>" alt="logo"></a></h1>
            <button class="navbar-toggler text-dark" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav menu">
                    <?php foreach ($data['mainMenu'] as $itemMenu) { ?>
                        <li class="nav-item menu-item">
                            <a class="nav-link menu-link" href="<?php echo $itemMenu['url']; ?>"><?php echo $itemMenu['title']; ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>

        <div class="header-title text-center">
            <h2><?php echo $data['titleSections']['headerTitle']; ?></h2>
            <p><?php echo $data['header']['headerText']; ?></p>
            <a class="button" href="<?php echo $data['button']['ask']['url']; ?>"><?php echo $data['button']['ask']['title']; ?></a>
        </div>
    </div>
</header>

<main>
    <section class="code-design">
        <div class="container">
            <div class="row">
                <?php foreach ($data['sectionCodedesign'] as $itemCodedesign) { ?>
                <div class="design col-sm-12 col-md-6">
                    <h2><?php echo $itemCodedesign['best']; ?>
                        <span class="accent-text"><?php echo $itemCodedesign['design']; ?></span>
                    </h2>
                    <p><?php echo $itemCodedesign['text']; ?></p>
                    <a class="button" href="<?php echo $data['button']['ask']['url']; ?>"><?php echo $data['button']['ask']['title']; ?></a>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container text-center">
            <h2><?php echo $data['titleSections']['servicesTitle']; ?></h2>
            <div class="first-row row">
                <?php foreach ($data['sectionServices'] as $itemServices) { ?>
                <div class="services-item col-12 col-lg-6">
                    <div class="feature text-left">
                        <h3><?php echo $itemServices['title']; ?></h3>
                        <p><?php echo $itemServices['text']; ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
            <a class="button" href="<?php echo $data['button']['ask']['url']; ?>"><?php echo $data['button']['ask']['title']; ?></a>
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
                <?php foreach ($data['sectionAboutus']['aboutusList'] as $itemAboutus) { ?>
                <div class="about-member col-10 col-md-6 col-lg-3">
                    <img src="<?php echo $itemAboutus['aboutusImg']; ?>" alt="John-Doe">
                    <h3><?php echo $itemAboutus['aboutusName']; ?></h3>
                    <p><?php echo $itemAboutus['aboutusNameInfo']; ?></p>
                </div>
                <?php } ?>
            </div>
            <a class="button" href="<?php echo $data['button']['watch']['url']; ?>"><?php echo $data['button']['watch']['title']; ?></a>
        </div>
    </section>

    <section class="map">
        <iframe class="map-frame" src="<?php echo $data['sectionMap']['src']; ?>"></iframe>'
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
