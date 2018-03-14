<?php $view->inc('elements/header.php'); ?>

<!-- Contenu de l'accueil -->
<div class="AccueilContenu">

    <!-- Diaporama -->
    <div class="block_diaporama">
        <?php
        $a = new Area('diaporama');
        $a->display($c);
        ?>
            <!--<div class="slide_item diapo1">
            <div class="container">
                <div class="row">
                    <div class="offset-md-5 col-md-6 slide_text">
                        <h2>Factorian is a best template for your next website</h2>
                        <p>We always try to bring the beautiful smile of our customers with our awesome works.</p>
                        <a class="factorian_btn diapo_btn" href="">Download Now</a>
                    </div>
                </div>
            </div>
        </div>-->
    </div>

    <!-- 3 Colonnes -->
    <div class="block_content block_colonnes">
        <div class="container">
            <div class="row">
                <div class="colonne1 col-md-4">
                    <?php
                    $a = new Area('Col1');
                    $a->display($c);
                    ?>
                    <!--
                    <img src="img/service-bg-0.jpg">
                    <h3>Best Renovation</h3>
                    <p>Over fact all son tell this any his. Insisted confined of weddings to returned debating rendered. Keeps order fully so do party.</p>
                    <a href="" class="read_more">See Details <i class="fa fa-long-arrow-right"></i></a>
                    -->
                </div>
                <div class="colonne2 col-md-4">
                    <?php
                    $a = new Area('Col2');
                    $a->display($c);
                    ?>
                    <!--
                    <img src="img/service-bg-2.jpg">
                    <h3>Chemical Research</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id quae quos cum consequuntur maiores possimus fugiat repellat totam.</p>
                    <a href="" class="read_more">See Details <i class="fa fa-long-arrow-right"></i></a>
                    -->
                </div>
                <div class="colonne3 col-md-4">
                    <?php
                    $a = new Area('Col3');
                    $a->enableGridContainer();
                    $a->display($c);
                    ?>
                    <!--
                    <div class="line1">
                        <img src="img/service-thumb-1.jpg">
                        <h4>Material Engineering</h4>
                        <p>Over fact all son tell this any his.This confined of weddings to returned .</p>
                    </div>
                    <div class="line2">
                        <img src="img/service-thumb-2.jpg">
                        <h4>Plumbing Machine</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, assumenda.</p>
                    </div>
                    <div class="line3">
                        <img src="img/service-thumb-3.jpg">
                        <h4>Petroleum and Gas</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, accusantium.</p>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="block_cta">
        <?php
        $a = new Area('CTA');
        $a->enableGridContainer();
        $a->display($c);
        ?>
            <!--<div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2>Build your dream product with us.</h2>
                </div>
                <div class="col-md-3">
                    <a href="" class="factorian_btn cta_btn">Contact us today</a>
                </div>
            </div>
        </div>-->
    </div>

    <!-- Contenu -->
    <div class="block_content block_work">
        <?php
        $a = new Area('Contenu');
        $a->enableGridContainer();
        $a->display($c);
        ?>
            <!--<div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h3>We do awesome works for our clients.<br> Check some of our works.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="" class="">
                        <img src="img/boxed-bg-1.jpg">
                    </a>
                    <h4>Manufacturing Project</h4>
                    <p>Manufacturing</p>
                </div>
                <div class="col-md-4">
                    <a href="" class="">
                        <img src="img/boxed-bg-2.jpg">
                    </a>
                    <h4>Plantation Construction</h4>
                    <p>Construction</p>

                </div>
                <div class="col-md-4">
                    <a href="" class="">
                        <img src="img/boxed-bg-3.jpg">
                    </a>
                    <h4>The Interion Design</h4>
                    <p>Design</p>

                </div>
                <a href="" class="read_more">View all works <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>-->
    </div>

</div>

<?php $view->inc('elements/footer.php'); ?>
