<?php $this->classBody = "class='hold-transition skin-blue sidebar-mini'"?>
<?php $this->title = "Mes Formations"?>
<?php $this->employee = $employee; ?>
<?php $this->employeeFormations = $employeeFormations; ?>
<?php $this->performedFormations = $performedFormations; ?>
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
                                <th>Nom</th>
                                <th>Date</th>
                                <th>Durée (en heure)</th>
                                <th>Jours / requis</th>
                                <th>Points / requis</th>
                                <th style="width: 185px">Statut</th>
                                <th style="width: 80px"></th>
                            </tr>

                            <?php if($formations != null):?>
                                <?php foreach($formations as $formation): ?>
                                    <?php $status = 'disponible' ?>
                                    <tr>
                                        <td><a href=<?php ROOTDIR ?>"index.php?controller=formation&action=show&id=<?= $formation->getId() ?>"><?= $formation->getName() ?></a></td>
                                        <td><?= date('d/m/Y', strtotime($formation->getDate())) ?></td>
                                        <td><?= $formation->getDuration() ?></td>
                                        <td><?= $formation->getDays() ?></td>
                                        <td><?= $formation->getCredits() ?></td>
                                        <?php foreach($employee->getFormations() as $myFormation): ?>
                                            <?php if($myFormation->getId() == $formation->getId()): ?>
                                                <?php $status = $myFormation->getStatus()['state_of_validation'] ?>
                                                <?php break; ?>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                        <td><span class="badge bg-green"><?= $status ?></span>
                                        </td>
                                        <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                                    </tr>
                                <?php endforeach ?>
                            <?php endif ?>
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
                        <h3 class="box-title">Mes formations en <?= date('Y') ?></h3>
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
                                    <th>Durée (en heure)</th>
                                    <th>Jours / requis</th>
                                    <th>Points / requis</th>
                                    <th style="width: 185px">Statut</th>
                                    <th style="width: 80px"></th>
                                </tr>
                                <?php if($employeeFormations != null):?>
                                    <?php foreach($employeeFormations as $formation): ?>
                                        <tr>
                                            <td><a href=<?php ROOTDIR ?>"index.php?controller=formation&action=show&id=<?= $formation->getId() ?>"><?= $formation->getName() ?></a></td>
                                            <td><?= date('d/m/Y', strtotime($formation->getDate())) ?></td>
                                            <td><?= $formation->getDuration() ?></td>
                                            <td><?= $formation->getDays() ?></td>
                                            <td><?= $formation->getCredits() ?></td>
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
                                    <th>Nom</th>
                                    <th>Date</th>
                                    <th>Durée (en heure)</th>
                                    <th>Jours / requis</th>
                                    <th>Points / requis</th>
                                    <th style="width: 185px">Statut</th>
                                    <th style="width: 80px"></th>
                                </tr>
                                <?php if($performedFormations != null):?>
                                    <?php foreach($performedFormations as $formation) :?>
                                        <tr>
                                            <td><a href=<?php ROOTDIR ?>"index.php?controller=formation&action=show&id=<?= $formation->getId() ?>"><?= $formation->getName() ?></a></td>
                                            <td><?= date('d/m/Y', strtotime($formation->getDate())) ?></td>
                                            <td><?= $formation->getDuration() ?></td>
                                            <td><?= $formation->getDays() ?></td>
                                            <td><?= $formation->getCredits() ?></td>
                                            <td><span class="badge bg-green">Effectuée</span>
                                            <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php endif ?>
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
    var body = document.querySelector("body");
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

    setTimeout(function(){
        if (window.XMLHttpRequest) { // Mozilla, Safari, ...²
            httpRequest = new XMLHttpRequest();
        }
        else if (window.ActiveXObject) { // IE
            httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
        }

        httpRequest.overrideMimeType('text/xml');


        httpRequest.open('GET', "<?php ROOTDIR ?>index.php?controller=formation&action=paginate&tableau=all&page=2", true);
        httpRequest.send();

        httpRequest.onreadystatechange = function() {
            if (httpRequest.readyState == 4) {
                var reponse = this.response;
                var p = document.createElement("p");
                p.innerHTML = reponse;
                body.appendChild(p);
            }
        };
    },1000);
</script>




<!-- <h5><a href="#">Accueil</a> <i class="fa fa-breadcrum fa-chevron-right"></i> <a href="#">Gestion d'équipe</a> <i class="fa fa-breadcrum fa-chevron-right"></i> <a href="#">Gérer ma formation</a></h5> -->