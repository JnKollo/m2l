<?php $this->classBody = "class='hold-transition skin-blue sidebar-mini'"?>
<?php $this->title = "Mes Formations"?>
<?php $this->script = "Formation/formations.js" ?>
<?php $this->employee = $employee; ?>
<?php $this->employeeFormations = $employeeFormations; ?>
<?php $this->performedFormations = $performedFormations; ?>
<?php $this->formations = $formations; ?>
<?php $this->breadcrumb = $breadcrumb; ?>

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
                        <table id="table-all" class="table table-striped">
                            <tr>
                                <th>Nom</th>
                                <th>Date</th>
                                <th>Durée (en heure)</th>
                                <th>Jours / requis</th>
                                <th>Points / requis</th>
                                <th style=" width: 185px">Statut</th>
                                <th style="width: 80px"></th>
                            </tr>

                            <?php if($formations != null):?>
                                <?php foreach($formations as $formation): ?>
                                    <tr>
                                        <td><a href=<?php ROOTDIR ?>"index.php?controller=formation&action=show&id=<?= $formation->getId() ?>"><?= $formation->getName() ?></a></td>
                                        <td><?= $formation->getDate() ?></td>
                                        <td><?= $formation->getDuration() ?></td>
                                        <td><?= $formation->getDays() ?></td>
                                        <td><?= $formation->getCredits() ?></td>
                                        <td><span class="badge bg-green"><?= $formation->getStatus() ?></span>
                                        </td>
                                        <td><a><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                                    </tr>
                                <?php endforeach ?>
                            <?php endif ?>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div id="all" class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li data-page="left"><a href="#">&laquo;</a></li>
                            <li data-page="right"><a href="#">&raquo;</a></li>
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
                                    <th style=" width: 185px">Statut</th>
                                    <th style="width: 80px"></th>
                                </tr>
                                <?php if($employeeFormations != null):?>
                                    <?php foreach($employeeFormations as $formation): ?>
                                        <tr>
                                            <td><a href=<?php ROOTDIR ?>"index.php?controller=formation&action=show&id=<?= $formation->getId() ?>"><?= $formation->getName() ?></a></td>
                                            <td><?= $formation->getDate() ?></td>
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
                                            <td><?= $formation->getDate() ?></td>
                                            <td><?= $formation->getDuration() ?></td>
                                            <td><?= $formation->getDays() ?></td>
                                            <td><?= $formation->getCredits() ?></td>
                                            <td><span class="badge bg-green"><?= $formation->getStatus()['state_of_validation'] ?></span>
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
    var numberPage = 3;
    //VAR
    setTimeout(function () {
        var liPagination = document.querySelectorAll(".pagination > li");
        addEventListenerList(liPagination,"click",clickPagination);
    },500);

    function addEventListenerList(list, event, fn) {
        for (var i = 0, len = list.length; i < len; i++) {
            list[i].addEventListener(event, fn, false);
        }
    }

    //FUNCTIONS
    function displayBreadCrumb(){
        <?php
            $breadCrumbArrayJs = json_encode($breadcrumb);
            echo "var breadCrumbArray = ". $breadCrumbArrayJs . ";";
        ?>
        var contentHeader = document.querySelector("section.content-header");
        var breadCrumbHtml = "<h5>";
        var i = "";

        breadCrumbArray.forEach(
            function(element){
                breadCrumbHtml += i+"<a href=<?php ROOTDIR ?>'index.php?controller="+element.controller+"&action="+element.action+"'>" + element.name + "</a>";
                i = " <i class='fa fa-breadcrum fa-chevron-right'></i> ";
        });

        breadCrumbHtml += "</h5>";
        contentHeader.innerHTML = breadCrumbHtml;
    }

    function displayFormations(tableau,arrayFormation){
        var tableauCSS= document.querySelector("#table-"+tableau);
        var myFormations = arrayFormation.formations;
        var tr = " <th>Nom</th><th>Date</th><th>Durée (en heure)</th> <th>Jours / requis</th><th>Points / requis</th><th style='width: 185px'>Statut</th><th style='width: 80px'></th>";

        for(var i=0; i<myFormations.length;i++){
            tr += "<tr><td>"+myFormations[i].name+"</td><td>"+myFormations[i].date+"</td><td>"+myFormations[i].duration+"</td><td>"+myFormations[i].days+"</td><td>"+myFormations[i].credits+"</td><td><span class='badge bg-green'>"+myFormations[i].status+"</span></td><td><a><i class='fa fa-fw fa-pencil-square-o'></i></a></td></tr>";
        }

        tableauCSS.innerHTML = tr;
    }

    function getFormations(tableau,page){
        var xhr = new XMLHttpRequest();
        xhr.open('GET', "<?php ROOTDIR ?>index.php?controller=formation&action=paginate&tableau="+tableau+"&page="+page, true);
        xhr.send();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status==200) {
                displayFormations(tableau,JSON.parse(this.response));
            }
        }
    }

    function clickPagination(event){
        var li = event.currentTarget;
        var tab = li.parentNode.parentNode.attributes.id.value;
        var liActive = document.querySelector("#"+tab+"> ul > .active");
        var pageActive =  liActive.dataset.page;
        var page = li.dataset.page;

        if(page === "left" && pageActive != 1){
            page = pageActive;
            page--;
            getFormations(tab,page);
            liActive.classList.remove("active");
            liActive.previousElementSibling.classList.add("active");
        } else if(page === "right" && pageActive != numberPage) {
            page = pageActive;
            page++;
            getFormations(tab,page);
            liActive.classList.remove("active");
            liActive.nextElementSibling.classList.add("active");
        } else if(page !== "right" && page !== "left"){
            page = li.dataset.page;
            liActive.classList.remove("active");
            li.classList.add("active");
            getFormations(tab,page);
        }
    }

    function setPagination(element,nbPage){ //
        var elementCss = document.querySelector(element);
        var i=0;
        while(i<nbPage){
            i++;
            var domElementA = document.createElement("a");
            var domElementLi = document.createElement("li");
            elementCss.insertBefore(domElementLi,elementCss.lastElementChild)
            domElementLi.setAttribute("data-page",i);
            domElementLi.appendChild(domElementA);
            domElementA.innerText = i;
        }
        document.querySelector(element+"> li:nth-child(2)").classList.add("active");
    }

    // PROC
    displayBreadCrumb();
    setPagination("#all > ul",3);
</script>




