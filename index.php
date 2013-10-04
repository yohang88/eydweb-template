<?php get_header() ?>

                <div id="primary" class="column">
                    <div id="primary-content" class="article">
                        <div class="section">
                            <h1 class="cat">Kategori Satu</h1>
                            <a href="index.php?p=1"><img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,14) ?>.jpg&amp;w=540&amp;h=300" alt="EYD Magazine" class="img-responsive" /></a>
                            <h1><a href="index.php?p=1">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Eli</a></h1>
                            <p class="post-author">Oleh: <a href="#">Yoga Hanggara</a></p>
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget purus id velit varius pellentesque in non dolor. Maecenas euismod pellentesque tellus nec ultricies. Donec mattis faucibus turpis in laoreet. Nullam nunc diam, luctus eget rhoncus vitae, accumsan et enim. Pellentesque congue iaculis ipsum, eu varius eros porttitor eu.
                            </p>
                            <div class="row related">
                                <div class="col-sm-6">
                                    <a href="index.php?p=1"><img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,14) ?>.jpg&amp;w=540&amp;h=300" alt="EYD Magazine" class="img-responsive" /></a>
                                    <h1><a href="index.php?p=1">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit</a></h1>
                                </div>
                                <div class="col-sm-6">
                                    <a href="index.php?p=1"><img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,14) ?>.jpg&amp;w=540&amp;h=300" alt="EYD Magazine" class="img-responsive" /></a>
                                    <h1><a href="index.php?p=1">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit</a></h1>
                                </div>
                                <div class="col-sm-6">
                                    <a href="index.php?p=1"><img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,14) ?>.jpg&amp;w=540&amp;h=300" alt="EYD Magazine" class="img-responsive" /></a>
                                    <h1><a href="index.php?p=1">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit</a></h1>
                                </div>
                                <div class="col-sm-6">
                                    <a href="index.php?p=1"><img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,14) ?>.jpg&amp;w=540&amp;h=300" alt="EYD Magazine" class="img-responsive" /></a>
                                    <h1><a href="index.php?p=1">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit</a></h1>
                                </div>
                            </div>
                        </div>

                        <div class="section">
                            <h1 class="cat">Kategori Dua</h1>
                            <a href="index.php?p=1"><img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,14) ?>.jpg&amp;w=540&amp;h=300" alt="EYD Magazine" class="img-responsive" /></a>
                            <h1><a href="index.php?p=1">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Eli</a></h1>
                            <p class="post-author">Oleh: <a href="#">Yoga Hanggara</a></p>
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget purus id velit varius pellentesque in non dolor. Maecenas euismod pellentesque tellus nec ultricies. Donec mattis faucibus turpis in laoreet. Nullam nunc diam, luctus eget rhoncus vitae, accumsan et enim. Pellentesque congue iaculis ipsum, eu varius eros porttitor eu.
                            </p>
                            <div class="row related">
                                <div class="col-sm-6">
                                    <a href="index.php?p=1"><img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,14) ?>.jpg&amp;w=540&amp;h=300" alt="EYD Magazine" class="img-responsive" /></a>
                                    <h1><a href="index.php?p=1">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit</a></h1>
                                </div>
                                <div class="col-sm-6">
                                    <a href="index.php?p=1"><img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,14) ?>.jpg&amp;w=540&amp;h=300" alt="EYD Magazine" class="img-responsive" /></a>
                                    <h1><a href="index.php?p=1">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit</a></h1>
                                </div>
                                <div class="col-sm-6">
                                    <a href="index.php?p=1"><img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,14) ?>.jpg&amp;w=540&amp;h=300" alt="EYD Magazine" class="img-responsive" /></a>
                                    <h1><a href="index.php?p=1">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit</a></h1>
                                </div>
                                <div class="col-sm-6">
                                    <a href="index.php?p=1"><img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,14) ?>.jpg&amp;w=540&amp;h=300" alt="EYD Magazine" class="img-responsive" /></a>
                                    <h1><a href="index.php?p=1">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit</a></h1>
                                </div>
                            </div>
                        </div>

                        <div class="section">
                            <h1 class="cat">Galeri Foto</h1>
                            <div class="tiles">
                                <?php for($n=0;$n<12;$n++): ?>
                                    <a href="index.php?p=1"><img src="<?php echo get_template_directory_uri() ?>/timthumb.php?src=img/dummy/photo-<?php echo rand(1,14) ?>.jpg&amp;h=100" alt="EYD Magazine" /></a>
                                <?php endfor; ?>
                            </div>
                        </div>

                    </div>
                </div> <!-- // primary -->

                <?php get_sidebar() ?>

<?php get_footer() ?>                