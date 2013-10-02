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
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="main-content">
        <div class="container">
            <div id="content">
                <div id="primary">
                    <h1>Primary</h1>
                </div>
                <div id="sidebar">
                    <h1>Sidebar</h1>
                </div>
            </div>
        </div>
    </section>

</div>
<?php wp_footer(); ?>
</body>
</html>