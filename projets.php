<?php require("header.php"); ?>

    <div class="container-fluid visuel-projets no-padding">
        <img src="img/projet_entete.JPG" alt="">
        <div class="mask"></div>
        <h1 class="text-center garamond">Projet</h1>
    </div>
    <div class="container-fluid projets-tabs">
        <nav class="nav navbar">
            <ul class="simplefilter">

                <li class="btn-lines" data-filter="all">Tout voir
                    <!-- CSS Border Effect -->
                    <span class="line-top"></span>
                    <span class="line-bottom"></span>
                    <span class="line-left"></span>
                    <span class="line-right"></span>
                </li>
                <li class="btn-lines" data-filter="1">Web
                    <!-- CSS Border Effect -->
                    <span class="line-top"></span>
                    <span class="line-bottom"></span>
                    <span class="line-left"></span>
                    <span class="line-right"></span></li>
                <li class="btn-lines" data-filter="2">Graphisme
                    <!-- CSS Border Effect -->
                    <span class="line-top"></span>
                    <span class="line-bottom"></span>
                    <span class="line-left"></span>
                    <span class="line-right"></span></li>
                <li class="btn-lines" data-filter="3">Impression
                    <!-- CSS Border Effect -->
                    <!--
                    <span class="line-top"></span>
                      <span class="line-bottom"></span>
                      <span class="line-left"></span>
                      <span class="line-right"></span></li>
                    <li class="btn-lines" data-filter=".branding">NSM
                      -->

                    <!-- CSS Border Effect -->
                    <span class="line-top"></span>
                    <span class="line-bottom"></span>
                    <span class="line-left"></span>
                    <span class="line-right"></span></li>
            </ul>
        </nav>

    </div>

    <div class="container-fluid no-padding projets-visuels filtr-container">
        <div class="row no-margin projets-visuels">
            <div class="col-md-4 no-padding projets-items filtr-item" data-category="1">
                <a href="#projetsModel" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive" src="img/formation.jpg" alt="">
                    <div class="mask">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-4 no-padding projets-items filtr-item" data-category="2">
                <a href="#projetsModel" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive" src="img/formation.jpg" alt="">
                    <div class="mask">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-4 no-padding projets-items filtr-item" data-category="3">
                <a href="#projetsModel" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive" src="img/formation.jpg" alt="">
                    <div class="mask">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-4 no-padding projets-items filtr-item" data-category="1">
                <a href="#projetsModel" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive" src="img/formation.jpg" alt="">
                    <div class="mask">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-4 no-padding projets-items filtr-item" data-category="2">
                <a href="#projetsModel" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive" src="img/formation.jpg" alt="">
                    <div class="mask">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-4 no-padding projets-items filtr-item" data-category="3">
                <a href="#projetsModel" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive" src="img/formation.jpg" alt="">
                    <div class="mask">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-4 no-padding projets-items filtr-item" data-category="1">
                <a href="#projetsModel" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive" src="img/formation.jpg" alt="">
                    <div class="mask">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->

    <div class="projets-modal modal fade" id="projetsModel" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="modal-window">
                <div class="row">
                    <div class="col-md-6 no-padding">
                        <div class="modal-body">
                            <img class="img-responsive img-centered" src="img/formation.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 text-left">
                        <h2>TITRE PROJET</h2>
                        <h3>Date : MARS 2016</h3>
                        <h3>Tag : Illustration</h3>
                        <br>
                        <p><strong>Description : </strong><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur et ipsam minus nesciunt non odit officia tenetur veniam. Adipisci cumque facere nam necessitatibus, pariatur quae rerum. Fugit, obcaecati ratione. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur culpa dolorum earum eos, esse facere fugit hic nesciunt nihil placeat quisquam vel! Adipisci debitis expedita harum iste mollitia, sit veritatis!</p>
                    </div>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center close-project">
                    <button type="button" data-dismiss="modal"><i class="fa fa-times"></i> Fermer le projet</button>
                </div>
            </div>
        </div>
    </div>


<?php require("footer.php"); ?>
<script>
    $(function() {
        //Simple filter controls
        $('.simplefilter li').click(function() {
            $('.simplefilter li').removeClass('active');
            $(this).addClass('active');
        });
        //Multifilter controls
        $('.multifilter li').click(function() {
            $(this).toggleClass('active');
        });
        //Shuffle control
        $('.shuffle-btn').click(function() {
            $('.sort-btn').removeClass('active');
        });
        //Sort controls
        $('.sort-btn').click(function() {
            $('.sort-btn').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
<script type="text/javascript" src="js/jquery.filterizr.js"></script>
<script type="text/javascript">
    $(function() {
        //Initialize filterizr with default options
        $('.filtr-container').filterizr();
    });
</script>
