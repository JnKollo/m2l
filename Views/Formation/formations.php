<?php $this->classBody = "class='hold-transition skin-blue sidebar-mini'"?>
<?php $this->title = "Mes Formations"?>
<?php $this->employee = $employee; ?>
<?php $this->formations = $formations; ?>
<?php $breadCrumbArray = [
0 => ['controller' => 'home','action' => 'home','name' => 'Accueil'],
1 => ['controller' => 'formation','action' => 'index','name' => 'Gestion des formations']
] ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div id="__allFormations"></div>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Toutes les formations</h3>
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
                                <th>Durée (en heure)</th>
                                <th>Jours / requis</th>
                                <th>Points / requis</th>
                                <th style="width: 185px">Statut</th>
                                <th style="width: 80px"></th>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td><a href=<?php ROOTDIR ?>"index.php?controller=formation&action=show&id=1">Initiation à Java</a></td>
                                <td>25/11/2016</td>
                                <td>5</td>
                                <td>2</td>
                                <td>120</td>
                                <td><span class="badge bg-light-blue">Disponible</span>

                                </td>
                                <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Méthode de tri avancée</td>
                                <td>22/11/2016</td>
                                <td>5</td>
                                <td>2</td>
                                <td>120</td>
                                <td><span class="badge bg-light-blue">Disponible</span>

                                </td>
                                <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Cron job running</td>
                                <td>05/1/2016</td>
                                <td>5</td>
                                <td>2</td>
                                <td>120</td>
                                <td><span class="badge bg-light-blue">Disponible</span>

                                </td>
                                <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Fix and squish bugs</td>
                                <td>15/10/2016</td>
                                <td>5</td>
                                <td>2</td>
                                <td>120</td>
                                <td><span class="badge bg-yellow">En cours de validaton</span>

                                </td>
                                <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>Initiation à Java</td>
                                <td>25/11/2016</td>
                                <td>5</td>
                                <td>2</td>
                                <td>120</td>
                                <td><span class="badge bg-light-blue">Disponible</span>

                                </td>
                                <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td>Méthode de tri avancée</td>
                                <td>22/11/2016</td>
                                <td>5</td>
                                <td>2</td>
                                <td>120</td>
                                <td><span class="badge bg-light-blue">Disponible</span>

                                </td>
                                <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>7.</td>
                                <td>Cron job running</td>
                                <td>05/1/2016</td>
                                <td>5</td>
                                <td>2</td>
                                <td>120</td>
                                <td><span class="badge bg-light-blue">Disponible</span>

                                </td>
                                <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>8.</td>
                                <td>Fix and squish bugs</td>
                                <td>15/10/2016</td>
                                <td>5</td>
                                <td>2</td>
                                <td>120</td>
                                <td><span class="badge bg-yellow">En cours de validaton</span>

                                </td>
                                <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>9.</td>
                                <td>Méthode de tri avancée</td>

                                <td>22/11/2016</td>
                                <td>5</td>
                                <td>2</td>
                                <td>120</td>
                                <td><span class="badge bg-light-blue">Disponible</span>

                                </td>
                                <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>10.</td>
                                <td>Cron job running</td>
                                <td>05/1/2016</td>
                                <td>5</td>
                                <td>2</td>
                                <td>120</td>
                                <td><span class="badge bg-light-blue">Disponible</span>

                                </td>
                                <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>

                    <!-- /.box -->
                </div>
                <!-- /.box -->

            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-12">
                <div id="__askFormations"></div>
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
                                    <th style="width: 10px">#</th>
                                    <th>Nom</th>
                                    <th>Date</th>
                                    <th>Durée (en heure)</th>
                                    <th>Jours / requis</th>
                                    <th>Points / requis</th>
                                    <th style="width: 185px">Statut</th>
                                    <th style="width: 80px"></th>
                                </tr>
                                <tr>
                                    <td>1.</td>
                                    <td>Méthode de tri avancée</td>
                                    <td>22/11/2016</td>
                                    <td>5</td>
                                    <td>2</td>
                                    <td>120</td>
                                    <td><span class="badge bg-green">Validée</span>
                                    </td>
                                    <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Méthode de tri avancée</td>
                                    <td>22/11/2016</td>
                                    <td>5</td>
                                    <td>2</td>
                                    <td>120</td>
                                    <td><span class="badge bg-green">Validée</span>
                                    </td>
                                    <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Méthode de tri avancée</td>
                                    <td>22/11/2016</td>
                                    <td>5</td>
                                    <td>2</td>
                                    <td>120</td>
                                    <td><span class="badge bg-yellow">En cours de validaton</span>
                                    </td>
                                    <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Méthode de tri avancée</td>
                                    <td>22/11/2016</td>
                                    <td>5</td>
                                    <td>2</td>
                                    <td>120</td>
                                    <td><span class="badge bg-yellow">En cours de validaton</span>
                                    </td>
                                    <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Méthode de tri avancée</td>
                                    <td>22/11/2016</td>
                                    <td>5</td>
                                    <td>2</td>
                                    <td>120</td>
                                    <td><span class="badge bg-yellow">En cours de validaton</span>
                                    </td>
                                    <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>Méthode de tri avancée</td>
                                    <td>22/11/2016</td>
                                    <td>5</td>
                                    <td>2</td>
                                    <td>120</td>
                                    <td><span class="badge bg-red">Refusée</span>
                                    </td>
                                    <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                                </tr>
                            </table>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- ./col -->
            <div class="col-md-12">
                <div class="box box-green">
                    <div class="box-header">
                        <h3 class="box-title">Formations effectuées</h3>
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
                                    <th>Durée (en heure)</th>
                                    <th>Jours / requis</th>
                                    <th>Points / requis</th>
                                    <th style="width: 185px">Statut</th>
                                    <th style="width: 80px"></th>
                                </tr>
                                <tr>
                                    <td>1.</td>
                                    <td><a>Méthode de tri avancée</a></td>
                                    <td>22/11/2016</td>
                                    <td>5</td>
                                    <td>2</td>
                                    <td>120</td>
                                    <td><span class="badge bg-green">Effectuée</span>
                                    <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Méthode de tri avancée</td>
                                    <td>22/11/2016</td>
                                    <td>5</td>
                                    <td>2</td>
                                    <td>120</td>
                                    <td><span class="badge bg-green">Effectuée</span>
                                    <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Méthode de tri avancée</td>
                                    <td>22/11/2016</td>
                                    <td>5</td>
                                    <td>2</td>
                                    <td>120</td>
                                    <td><span class="badge bg-green">Effectuée</span>
                                    <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Méthode de tri avancée</td>
                                    <td>22/11/2016</td>
                                    <td>5</td>
                                    <td>2</td>
                                    <td>120</td>
                                    <td><span class="badge bg-green">Effectuée</span>
                                    <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Méthode de tri avancée</td>
                                    <td>22/11/2016</td>
                                    <td>5</td>
                                    <td>2</td>
                                    <td>120</td>
                                    <td><span class="badge bg-green">Effectuée</span>
                                    <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>+.</td>
                                    <td>Méthode de tri avancée</td>
                                    <td>22/11/2016</td>
                                    <td>5</td>
                                    <td>2</td>
                                    <td>120</td>
                                    <td><span class="badge bg-green">Effectuée</span>
                                    <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                                </tr>
                            </table>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->

        <!-- Your Page Content Here -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
    function displayBreadCrum(){
        <?php
            $breadCrumbArrayJs = json_encode($breadCrumbArray);
            echo "var breadCrumbArray = ". $breadCrumbArrayJs . ";";
        ?>
        var contentHeader = document.querySelector("section.content-header");
        var breadCrumbHtml = "<h5>";
        var i = "";

        breadCrumbArray.forEach(
            function(element){
                breadCrumbHtml += i+"<a href=<?php ROOTDIR ?>'index.php?controller="+element.controller+"&action="+element.action+"'>" + element.name + "</a>";
                i = " <i class='fa fa-breadcrum fa-chevron-right'></i> ";
        })

        breadCrumbHtml += "</h5>";
        contentHeader.innerHTML = breadCrumbHtml;
    }
    displayBreadCrum();
</script>




<!-- <h5><a href="#">Accueil</a> <i class="fa fa-breadcrum fa-chevron-right"></i> <a href="#">Gestion d'équipe</a> <i class="fa fa-breadcrum fa-chevron-right"></i> <a href="#">Gérer ma formation</a></h5> -->