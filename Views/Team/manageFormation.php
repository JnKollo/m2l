<?php $this->classBody = "class='hold-transition skin-blue sidebar-mini'"?>
<?php $this->title = "Gestion d'équipe"?>
<?php $this->employee = $employee; ?>
<?php $this->member = $member ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- DIV AFFIX -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1 hidden-sm hidden-xs affix" style="margin-top:30px">
                <div class="col-md-3 ">
                    <!-- PRODUCT LIST -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Fiche salarié</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <ul class="products-list product-list-in-box">
                                <li class="item">
                                    <img class="profile-user-img img-responsive img-circle" src="dist/img/user4-128x128.jpg" alt="User profile picture">
                                    <div class="product-info">
                                        <p class="product-title">Nom</p>
                                        <span class="product-description"><?= $member->getUsername() ?></span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Nombre de crédits formation</p>
                                        <span class="product-description"><?= $member->getCreditsLeft() ?></span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Nombre de jours restant</p>
                                        <span class="product-description"><?= $member->getDaysLeft() ?></span>
                                    </div>
                                </li>
                                <!-- /.item -->
                            </ul>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- ./col -->
            </div>
        </div>
        <!-- ./DIV AFFIX -->

        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 hidden-md hidden-lg" style="margin-top:30px">
                <div class="col-xs-12">
                    <!-- PRODUCT LIST -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Fiche salarié</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <ul class="products-list product-list-in-box">
                                <li class="item">
                                    <img class="profile-user-img img-responsive img-circle" src="dist/img/user4-128x128.jpg" alt="User profile picture">
                                    <div class="product-info">
                                        <p class="product-title">Nom</p>
                                        <span class="product-description"><?= $member->getUsername() ?></span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Nombre de crédits formation</p>
                                        <span class="product-description"><?= $member->getCreditsLeft() ?></span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Nombre de jours restant</p>
                                        <span class="product-description"><?= $member->getDaysLeft() ?></span>
                                    </div>
                                </li>
                                <!-- /.item -->
                            </ul>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- ./col -->
            </div>
            <!-- ./col -->
        </div>

        <div class="row">
            <div class="col-xs-10 col-md-10 col-xs-offset-1 col-md-offset-1" style="margin-top:30px">
                <div class="col-md-4 hidden-sm hidden-xs"></div>
                <div class="col-md-8 col-xs-12">
                    <!-- PRODUCT LIST -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Fiche formation</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <ul class="products-list product-list-in-box">
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Nom</p>
                                        <span class="product-description">Initiation à Java</span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Contenu</p>
                                        <span class="product-description">PlayStation 4 500GB Console (PS4)</span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Date</p>
                                        <span class="product-description">26/11/16</span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Jours requis</p>
                                        <span class="product-description">2</span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Points requis</p>
                                        <span class="product-description">120</span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Localisation</p>
                                        <span class="product-description">9 rue baron leroy 75012 Paris</span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Prérequis</p>
                                        <span class="product-description">Avoir suivi la formation de niveau 1 en Java</span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <div class="col-xs-6">
                                            <button type="button" class="btn btn-block btn-info btn-normal">Valider</button>
                                        </div>
                                        <div class="col-xs-6">
                                            <button type="button" class="btn btn-block btn-danger btn-normal">Refuser</button>
                                        </div>
                                    </div>
                                </li>
                                <!-- /.item -->
                            </ul>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- ./col -->
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->

                <div class="row">
            <div class="col-xs-10 col-md-10 col-xs-offset-1 col-md-offset-1" style="margin-top:30px">
                <div class="col-md-4 hidden-sm hidden-xs"></div>
                <div class="col-md-8 col-xs-12">
                    <!-- PRODUCT LIST -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Fiche formation</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <ul class="products-list product-list-in-box">
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Nom</p>
                                        <span class="product-description">Initiation à Java</span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Contenu</p>
                                        <span class="product-description">PlayStation 4 500GB Console (PS4)</span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Date</p>
                                        <span class="product-description">26/11/16</span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Jours requis</p>
                                        <span class="product-description">2</span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Points requis</p>
                                        <span class="product-description">120</span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Localisation</p>
                                        <span class="product-description">9 rue baron leroy 75012 Paris</span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Prérequis</p>
                                        <span class="product-description">Avoir suivi la formation de niveau 1 en Java</span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <div class="col-xs-6">
                                            <button type="button" class="btn btn-block btn-info btn-normal">Valider</button>
                                        </div>
                                        <div class="col-xs-6">
                                            <button type="button" class="btn btn-block btn-danger btn-normal">Refuser</button>
                                        </div>
                                    </div>
                                </li>
                                <!-- /.item -->
                            </ul>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- ./col -->
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->

                <div class="row">
            <div class="col-xs-10 col-md-10 col-xs-offset-1 col-md-offset-1" style="margin-top:30px">
                <div class="col-md-4 hidden-sm hidden-xs"></div>
                <div class="col-md-8 col-xs-12">
                    <!-- PRODUCT LIST -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Fiche formation</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <ul class="products-list product-list-in-box">
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Nom</p>
                                        <span class="product-description">Initiation à Java</span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Contenu</p>
                                        <span class="product-description">PlayStation 4 500GB Console (PS4)</span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Date</p>
                                        <span class="product-description">26/11/16</span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Jours requis</p>
                                        <span class="product-description">2</span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Points requis</p>
                                        <span class="product-description">120</span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Localisation</p>
                                        <span class="product-description">9 rue baron leroy 75012 Paris</span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Prérequis</p>
                                        <span class="product-description">Avoir suivi la formation de niveau 1 en Java</span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <div class="col-xs-6">
                                            <button type="button" class="btn btn-block btn-info btn-normal">Valider</button>
                                        </div>
                                        <div class="col-xs-6">
                                            <button type="button" class="btn btn-block btn-danger btn-normal">Refuser</button>
                                        </div>
                                    </div>
                                </li>
                                <!-- /.item -->
                            </ul>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- ./col -->
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->