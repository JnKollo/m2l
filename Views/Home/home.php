<?php $this->classBody = "class='hold-transition skin-blue sidebar-mini'"?>
<?php $this->title = "Accueil"?>
<?php $this->script = "Home/home.js" ?>
<?php $this->employee = $employee; ?>
<?php $this->employeeFormations = $employeeFormations; ?>
<?php $this->formations = $formations; ?>
<?php $this->team = $team ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Page d'accueil</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-maroon">
                    <div class="inner">
                        <h3><?= $employee->getCreditsLeft(); ?></h3>
                        <p>Crédits formation</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
                            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-purple">
                    <div class="inner">
                        <h3><?= $employee->getDaysLeft(); ?></h3>
                        <p>Jours restants</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?= $performedFormations; ?></h3>
                        <p>Formations effectuées</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?= $pendingFormations; ?></h3>
                        <p>Formations en cours de validation</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->

        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Les nouvelles formations</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table class="table table-striped">
                            <tr>
                                <th>Nom</th>
                                <th>Date</th>
                                <th style="width: 185px">Statut</th>
                                <th style="width: 80px"></th>
                            </tr>

                            <?php if($formations != null):?>
                                 <?php foreach($formations as $formation): ?>
                                    <tr>
                                    <td><a href=<?php ROOTDIR ?>"index.php?controller=formation&action=show&id=<?= $formation->getId() ?>"><?= $formation->getName(); ?></a></td>
                                    <td><?= $formation->getDate(); ?></td>
                                    <td><span class="badge bg-green"><?= $formation->getStatus() ?></span>
                                    </td>
                                    <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                                </tr>
                                <?php endforeach ?>
                            <?php endif ?>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href=<?php ROOTDIR ?>"index.php?controller=formation&action=index" class="uppercase">Voir plus</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
            </div>
            <!-- ./col -->
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Formations demandées</h3>
                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table class="table table-striped">
                            <table class="table table-striped">
                                <tr>
                                    <th>Nom</th>
                                    <th>Date</th>
                                    <th style="width: 185px">Statut</th>
                                    <th style="width: 80px"></th>
                                </tr>
                                <?php if($employeeFormations != null):?>
                                    <?php foreach($employeeFormations as $formation): ?>
                                        <tr>
                                            <td><a href=<?php ROOTDIR ?>"index.php?controller=formation&action=show&id=<?= $formation->getId() ?>"><?= $formation->getName(); ?></a></td>
                                            <td><?= $formation->getDate(); ?></td>
                                            <td><span class="badge bg-green"><?= $formation->getStatus()['state_of_validation'] ?></span>
                                            </td>
                                            <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </table>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href=<?php ROOTDIR ?>"index.php?controller=formation&action=index#__askFormations" class="uppercase">Voir plus</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
            </div>
            <!-- ./col -->
        </div>
        <?php if($employee->isManager()): ?>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <!-- USERS LIST -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Mon équipe</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <ul class="users-list clearfix">
                            <?php foreach($team as $member): ?>
                                <li>
                                    <img src="<?= $member->getImage()?>" alt="User Image">
                                    <a class="users-list-name" href=<?php ROOTDIR ?>"index.php?controller=team&action=manage&id=<?= $member->getId(); ?>"><?= $member->getUsername(); ?></a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                        <!-- /.users-list -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href=<?php ROOTDIR ?>"/index.php?controller=team&action=show" class="uppercase">Voir plus</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!--/.box -->
            </div>
        </div>
        <!-- /.row -->
        <?php endif ?>
        <!-- Your Page Content Here -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

