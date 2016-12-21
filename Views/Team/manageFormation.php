<?php $this->classBody = "class='hold-transition skin-blue sidebar-mini'"?>
<?php $this->title = "Gestion d'équipe"?>
<?php $this->employee = $employee; ?>
<?php $this->member = $member ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Gestion des formations |<small> Gérer ma formation</small></h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6 col-md-offset-1" style="margin-top:50px">
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
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-block btn-info btn-normal">Valider</button>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <button type="button" class="btn btn-block btn-info btn-lg">S'inscrire</button> -->
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

            <div class="col-md-3" style="margin-top:50px">
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
        <!-- /.row -->

        <div class="row">
            <?php foreach($member->getFormations() as $formation): ?>
                <div class="col-md-6 col-md-offset-1" style="margin-top:50px">
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
                                        <span class="product-description"><?= $formation->getName() ;?></span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Contenu</p>
                                        <span class="product-description"><?= $formation->getDescription() ;?></span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Date</p>
                                        <span class="product-description"><?= $formation->getDate() ;?></span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Jours requis</p>
                                        <span class="product-description"><?= $formation->getDays() ;?></span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Points requis</p>
                                        <span class="product-description"><?= $formation->getCredits() ;?></span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Localisation</p>
                                        <span class="product-description"><?= $formation->getPlace() ;?></span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <p class="product-title">Prérequis</p>
                                        <span class="product-description"><?= $formation->getRequirement() ;?></span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-info">
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-block btn-info btn-normal">Valider</button>
                                        </div>
                                        <div class="col-md-6">
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
            <?php endforeach ?>
        </div>

        <!-- Your Page Content Here -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->