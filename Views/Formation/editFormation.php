<?php $this->classBody = "class='hold-transition skin-blue sidebar-mini'"?>
<?php $this->title = "Ma formation"?>
<?php $this->employee = $employee; ?>
<?php $this->formation = $formation; ?>
<?php $this->hasFormation = $hasFormation ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Gestion des formations |<small> Gérer ma formation</small></h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin-top:50px">
                <!-- PRODUCT LIST -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Formation : <?= $this->formation->getName() ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <ul class="products-list product-list-in-box">
                            <li class="item">
                                <div class="product-info">
                                    <p class="product-title">Nom</p>
                                    <span class="product-description"><?= $this->formation->getName() ?></span>
                                </div>
                            </li>
                            <li class="item">
                                <div class="product-info">
                                    <p class="product-title">Contenu</p>
                                    <span class="product-description"><?= $this->formation->getDescription() ?></span>
                                </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                                <div class="product-info">
                                    <p class="product-title">Date</p>
                                    <span class="product-description"><?= $this->formation->getDate() ?></span>
                                </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                                <div class="product-info">
                                    <p class="product-title">Jours requis</p>
                                    <span class="product-description"><?= $this->formation->getDuration() ?></span>
                                </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                                <div class="product-info">
                                    <p class="product-title">Points requis</p>
                                    <span class="product-description"><?= $this->formation->getCredits() ?></span>
                                </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                                <div class="product-info">
                                    <p class="product-title">Localisation</p>
                                    <span class="product-description"><?= $this->formation->getPlace() ?></span>
                                </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                                <div class="product-info">
                                    <p class="product-title">Prérequis</p>
                                    <span class="product-description"><?= $this->formation->getRequirement() ?></span>
                                </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                                <div class="product-info">
                                    <p class="product-title">Statut</p>
                                    <span class="badge bg-green"><?= $this->formation->getRequirement() ?></span>
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
        <div class="col-md-6 col-md-offset-3">
            <div class="col-md-6">
                <a href=<?php ROOTDIR ?>"index.php?controller=formation&action=index">
                    <button type="button" class="btn btn-block btn-default btn-lg">Retour</button>
                </a>
            </div>
            <div class="col-md-6">
                    <?php if($this->hasFormation == 0) : ?>
                    <a href=<?php ROOTDIR ?>"index.php?controller=employee&action=addFormation&id=<?= $this->formation->getId() ?>">
                        <button type="button" class="btn btn-block btn-info btn-lg">S'inscrire</button>
                    </a>
                    <?php elseif($this->hasFormation == 1) : ?>
                    <a href=<?php ROOTDIR ?>"index.php?controller=employee&action=removeFormation&id=<?= $this->formation->getId() ?>">
                        <button type="button" class="btn btn-block btn-danger btn-lg">Se désinscrire</button>
                    </a>
                    <?php endif ?>
                    <!-- 

                    !TODO! Si statut = effectuée alors on met le bouton suivant 
                    Ajouter la class disable quand la formation a le statut 4 (effectuée)

                    -->
            </div>
            <!-- ./col -->
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Your Page Content Here -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->