<!DOCTYPE html>

<html>

<?php include("custom/include/head.php"); ?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
      
    <?php include("custom/include/header.php"); ?>

    <?php include("custom/include/main-sidebar.php"); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Page d'accueil</h1>
        </section>
        <!-- Main content <--></-->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-maroon">
                        <div class="inner">
                            <h3>150</h3>
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
                            <h3>2</h3>
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
                            <h3>11</h3>
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
                            <h3>15</h3>
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
                            <h3 class="box-title">Les nouvelles formations disponibles</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Nom</th>
                                    <th>Date</th>
                                    <th style="width: 40px">Statut</th>
                                </tr>
                                <tr>
                                    <td>1.</td>
                                    <td>Initiation à Java</td>
                                    <td>25/11/2016</td>
                                    <td><span class="badge bg-light-blue">Disponible</span>
                                    </td>                                    
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Méthode de tri avancée</td>
                                    <td>22/11/2016</td>
                                    <td><span class="badge bg-light-blue">Disponible</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Cron job running</td>
                                    <td>05/1/2016</td>
                                    <td><span class="badge bg-light-blue">Disponible</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Fix and squish bugs</td>
                                    <td>15/10/2016</td>
                                    <td><span class="badge bg-light-blue">Disponible</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Méthode de tri avancée</td>
                                    <td>22/11/2016</td>
                                    <td><span class="badge bg-light-blue">Disponible</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>Cron job running</td>
                                    <td>05/1/2016</td>
                                    <td><span class="badge bg-light-blue">Disponible</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- /.box-body -->
                                                    <div class="box-footer text-center">
                            <a href="formations.php" class="uppercase">Voir plus</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- ./col -->
                <div class="col-md-6">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Mes formations</h3>
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
                                        <th style="width: 10px">#</th>
                                        <th>Nom</th>
                                        <th>Date</th>
                                        <th style="width: 40px">Statut</th>
                                    </tr>
                                    <tr>
                                        <td>1.</td>
                                        <td>Méthode de tri avancée</td>
                                        <td>22/11/2016</td>
                                        <td><span class="badge bg-yellow">En cours de validation</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Méthode de tri avancée</td>
                                        <td>22/11/2016</td>
                                        <td><span class="badge bg-yellow">En cours de validation</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Cron job running</td>
                                        <td>05/1/2016</td>
                                        <td><span class="badge bg-yellow">En cours de validation</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Initiation à Java</td>
                                        <td>25/11/2016</td>
                                        <td><span class="badge bg-green">Validée</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Initiation à Java</td>
                                        <td>25/11/2016</td>
                                        <td><span class="badge bg-green">Effectuée</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>Fix and squish bugs</td>
                                        <td>15/10/2016</td>
                                        <td><span class="badge bg-red">Refusée</span>
                                        </td>
                                    </tr>
                                </table>
                            </table>
                        </div>
                        <!-- /.box-body -->
                                                    <div class="box-footer text-center">
                            <a href="formations.php" class="uppercase">Voir plus</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- ./col -->
            </div>
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
                                <li>
                                    <img src="dist/img/user1-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Alexander Pierce</a>
                                </li>
                                <li>
                                    <img src="dist/img/user8-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Norman</a>
                                </li>
                                <li>
                                    <img src="dist/img/user7-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Jane</a>
                                </li>
                                <li>
                                    <img src="dist/img/user6-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">John</a>
                                </li>
                                <li>
                                   <img src="dist/img/user6-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Alexander</a>
                                </li>
                                <li>
                                    <img src="dist/img/user5-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Sarah</a>
                                </li>
                                <li>
                                    <img src="dist/img/user4-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Nora</a>
                                </li>
                                <li>
                                    <img src="dist/img/user3-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Nadia</a>
                                </li>
                            </ul>
                            <!-- /.users-list -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="manage.php" class="uppercase">Voir plus</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!--/.box -->
                </div>
            </div>
            <!-- /.row -->
            <!-- Your Page Content Here -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include("custom/include/footer.php"); ?>

  </div><!-- ./wrapper -->

   <?php include("custom/include/required-script.php"); ?>
</body>
</html>


