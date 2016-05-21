<?php require("header.php"); ?>

    <div class="formations garamond">
        <div class="container-fluid img-section no-padding">
            <img src="img/img_formations.jpg" alt="">
        </div>
        <div class="container-fluid no-padding">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">

                <li role="presentation" class="active col-md-2 col-md-offset-1">
                    <a href="#toutes" aria-controls="toutes" role="tab" data-toggle="tab">
                        <b class="toutes">Toutes les formations</b>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#ind_graph" aria-controls="ind_graph" role="tab" data-toggle="tab">
                       <span class="vert">
                           bac pro
                       </span>
                        <br>
                        Industries graphiques
                    </a>
                </li>
                <li role="presentation" class="col-md-2">
                    <a href="#com_grap" aria-controls="com_grap" role="tab" data-toggle="tab">
                      <span class="vert">
                           b.t.s
                      </span>
                        <br>
                        Communication et industrie graphique
                    </a>
                </li>
                <li role="presentation" class="col-md-2">
                    <a href="#artisanat" aria-controls="artisanat" role="tab" data-toggle="tab">
                    <span class="vert">
                        bac pro
                    </span>
                        <br>
                        Artisanat des métiers d'art
                    </a>
                </li>
                <li role="presentation" class="col-md-2">
                    <a href="#design" aria-controls="design" role="tab" data-toggle="tab">
                    <span class="vert">
                        bac pro
                    </span>
                        <br>
                        Design graphique
                    </a>
                </li>

            </ul>
        </div>
        <div class="container">
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="toutes">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                            <img class="losange" src="img/ind_grap.png" alt="">
                            <div class="row">
                                <div class="item item-1">
                                </div>
                                <!--<div class="triangle">
                                </div>-->
                            </div>
                            <div class="row">
                                <div class="item item-2">
                                </div>
                                <!-- <div class="triangle">
                                 </div>-->
                            </div>
                            <div class="row">
                                <div class="item item-3">
                                </div>
                                <!--<div class="triangle">
                                </div>-->
                            </div>
                        </div>
                        <div class="col-md-5">

                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane" id="ind_graph">
                    Industries graphiques
                </div>

                <div role="tabpanel" class="tab-pane" id="com_grap">
                    Communication et industrie graphique
                </div>

                <div role="tabpanel" class="tab-pane" id="artisanat">
                    Artisanat des métiers d'arts
                </div>

                <div role="tabpanel" class="tab-pane" id="design">
                    Design graphique
                </div>
            </div>
        </div>
    </div>

<?php require("footer.php"); ?>