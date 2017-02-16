<?php $this->classBody = "class='hold-transition skin-blue sidebar-mini'" ?>
<?php $this->title = "Mes Formations" ?>
<?php $this->script = "Formation/searchFormation.js" ?>
<?php $this->employee = $employee; ?>
<?php $this->formations = $formations; ?>
<?php $this->breadcrumb = $breadcrumb; ?>
<script>


</script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header"  id="testtest">fezfze
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-6">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title" >Bootstrap Slider</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row margin">
                            <div class="col-sm-10 col-sm-offset-1">
                                <input id="creditsFormation" type="text" value="" class="slider form-control" data-slider-min="0"
                                       data-slider-max="<?= $this->employee->getCreditsLeft(); ?>" data-slider-step="10" data-slider-value="[0,<?= $this->employee->getCreditsLeft(); ?>]"
                                       data-slider-orientation="horizontal" data-slider-selection="before"
                                       data-slider-tooltip="show" data-slider-id="maroon" name="credits">
                                <input id="daysFormation" type="text" value="" class="slider form-control" data-slider-min="0"
                                       data-slider-max="<?= $this->employee->getDaysLeft(); ?>" data-slider-step="1" data-slider-value="[0,<?= $this->employee->getDaysLeft(); ?>]"
                                       data-slider-orientation="horizontal" data-slider-selection="before"
                                       data-slider-tooltip="show" data-slider-id="purple" name="days">

                                <input type="text" class="form-control" placeholder="libellé de la formation" name="nameFormation" id="nameFormation">
                                <input type="date" class="form-control" name="dateFormation" id="dateDebutFormation">
                                <input type="date" class="form-control" name="dateFormation" id="dateFinFormation">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <div class="col-xs-6">
                <div class="box box-primary">
                    <div class="box-body">
                           <div class="product-info">
                                <p class="product-title">Nom</p>
                                <span class="product-description">Posuere Cubilia Curae; Foundation</span>
                            </div>
                    </div>
                </div>
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
                        <table id="searchFormation" class="table table-striped">
                            <tr>
                                <th>Nom</th>
                                <th>Date</th>
                                <th>Durée (en heure)</th>
                                <th>Jours / requis</th>
                                <th>Points / requis</th>
                                <th style="width: 185px">Statut</th>
                                <th style="width: 80px"></th>
                            </tr>
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

