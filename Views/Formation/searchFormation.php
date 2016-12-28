<?php $this->classBody = "class='hold-transition skin-blue sidebar-mini'" ?>
<?php $this->title = "Mes Formations" ?>
<?php $this->employee = $employee; ?>
<?php $this->formations = $formations; ?>
<?php $breadCrumbArray = [
    0 => ['controller' => 'home', 'action' => 'home', 'name' => 'Accueil'],
    1 => ['controller' => 'formation', 'action' => 'index', 'name' => 'Gestion des formations']
] ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Bootstrap Slider</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row margin">
                            <div class="col-sm-6">

                                <input type="text" value="" class="slider form-control" data-slider-min="-200"
                                       data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]"
                                       data-slider-orientation="horizontal" data-slider-selection="before"
                                       data-slider-tooltip="show" data-slider-id="purple">
                                <input type="text" value="" class="slider form-control" data-slider-min="-200"
                                       data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]"
                                       data-slider-orientation="horizontal" data-slider-selection="before"
                                       data-slider-tooltip="show" data-slider-id="maroon">
                                <script>
                                    setInterval(function(){
                                        var dataMaroonMax = document.querySelector("#maroon > div.slider-track > div.max-slider-handle");
                                        var dataMaroonMin = document.querySelector("#maroon > div.slider-track > div.min-slider-handle");

                                        console.log(dataMaroonMin.getAttribute("aria-valuenow"));
                                        console.log(dataMaroonMax.getAttribute("aria-valuenow"));
                                    },2000);
                                </script>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Résultat(s) de la recherche</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
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
                                    <?php $status = 'disponible'; ?>
                                    <tr>
                                        <td><a href=<?php ROOTDIR ?>"index.php?controller=formation&action=show&id=<?= $formation->getId() ?>"><?= $formation->getName() ?></a></td>
                                        <td><?= date('d/m/Y', strtotime($formation->getDate())) ?></td>
                                        <td><?= $formation->getDuration() ?></td>
                                        <td><?= $formation->getDays() ?></td>
                                        <td><?= $formation->getCredits() ?></td>
                                        <?php if(strtotime($formation->getDate()) > time()): ?>
                                            <?php if($employee->getFormations()): ?>
                                                <?php foreach($employee->getFormations() as $myFormation): ?>
                                                    <?php if($myFormation->getId() == $formation->getId()): ?>
                                                        <?php $status = $myFormation->getStatus()['state_of_validation'] ?>
                                                        <?php break; ?>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            <?php endif?>
                                        <?php else: ?>
                                            <?php $status = 'indisponible' ?>
                                        <?php endif?>
                                        <td><span class="badge bg-green"><?= $status ?></span>
                                        </td>
                                        <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                                    </tr>
                                <?php endforeach ?>
                            <?php endif ?>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
    function displayBreadCrum() {
        <?php
        $breadCrumbArrayJs = json_encode($breadCrumbArray);
        echo "var breadCrumbArray = " . $breadCrumbArrayJs . ";";
        ?>
        var contentHeader = document.querySelector("section.content-header");
        var breadCrumbHtml = "<h5>";
        var i = "";

        breadCrumbArray.forEach(
            function (element) {
                breadCrumbHtml += i + "<a href=<?php ROOTDIR ?>'index.php?controller=" + element.controller + "&action=" + element.action + "'>" + element.name + "</a>";
                i = " <i class='fa fa-breadcrum fa-chevron-right'></i> ";
            })

        breadCrumbHtml += "</h5>";
        contentHeader.innerHTML = breadCrumbHtml;
    }
    displayBreadCrum();
</script>

