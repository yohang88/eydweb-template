<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrap">
    <nav id="main-nav" class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="main-content">
        <div class="container">
            <div id="content">
                <div id="primary" class="column">
                    <div id="primary-content">
                        <img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-3.jpg&amp;w=540&amp;h=300" alt="EYD Magazine" class="img-responsive" />
                        <h1>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit</h1>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget purus id velit varius pellentesque in non dolor. Maecenas euismod pellentesque tellus nec ultricies. Donec mattis faucibus turpis in laoreet. Nullam nunc diam, luctus eget rhoncus vitae, accumsan et enim. Pellentesque congue iaculis ipsum, eu varius eros porttitor eu. Proin ut ipsum rutrum, varius risus vitae, tempor neque. Aliquam et dui odio. Duis id velit sit amet purus ornare rhoncus. Aenean pulvinar aliquet tincidunt. In euismod augue sed metus consequat, sed cursus tortor malesuada. Nullam luctus nec nunc egestas vestibulum. Ut quis urna sagittis, fringilla purus id, vulputate erat. Vestibulum blandit volutpat quam at pulvinar. Fusce nec nisi eget ante consectetur pulvinar. Integer lectus ipsum, faucibus eu iaculis nec, lacinia consequat felis. Donec lorem neque, molestie at nunc ac, pharetra lacinia sapien.
                        </p>
                        <p>
                        Praesent hendrerit luctus aliquam. Pellentesque eu urna sit amet magna scelerisque sodales. Proin tincidunt euismod cursus. Pellentesque ligula lorem, fringilla a lacus eleifend, mattis bibendum arcu. Aliquam et ultrices lectus. Nam porta consectetur mauris. Praesent hendrerit euismod ante quis tincidunt. Proin ac nisl mauris. Aliquam interdum massa quis neque accumsan, nec interdum metus viverra. Nunc facilisis accumsan sapien, ut eleifend urna bibendum at. Vestibulum purus arcu, elementum vitae euismod at, lobortis nec tortor. Aliquam erat volutpat. Aenean at mi ultricies, laoreet eros vel, fermentum ante.
                        </p>

                        <div class="row">
                            <div class="col-sm-6">
                                <img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-4.jpg&amp;w=540&amp;h=300" alt="EYD Magazine" class="img-responsive" />
                                <h1>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit</h1>
                            </div>
                            <div class="col-sm-6">
                                <img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-5.jpg&amp;w=540&amp;h=300" alt="EYD Magazine" class="img-responsive" />
                                <h1>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit</h1>
                            </div>
                            <div class="col-sm-6">
                                <img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-9.jpg&amp;w=540&amp;h=300" alt="EYD Magazine" class="img-responsive" />
                                <h1>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit</h1>
                            </div>
                            <div class="col-sm-6">
                                <img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-7.jpg&amp;w=540&amp;h=300" alt="EYD Magazine" class="img-responsive" />
                                <h1>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sidebar" class="column">
                    <div class="block logo">
                        <img src="<?php echo get_template_directory_uri() ?>/img/logo-eydmagazine-putih.png" alt="EYD Magazine Logo" />
                    </div>
                    <div class="block navigation">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">Catalog</a></li>
                            <li><a href="#">Comic</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Subscribe</a></li>
                            <li><a href="#">Download</a></li>
                            <li><a href="#">Scoop</a></li>
                            <li><a href="#">Book Shop &amp; Merch</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<footer id="main-footer">
    <div class="container">

    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>