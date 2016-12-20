<?php $this->classBody = "class='hold-transition skin-blue sidebar-mini'"?>
<?php $this->title = "Gestion d'équipe"?>
<?php $this->employee = $employee; ?>
<?php $this->formations = $formations; ?>
<?php $this->team = $team ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Gestion d'équipe</h1>
    </section>
    <!-- Main content -->
    <section class="content">

     <div class="row">

       <?php foreach($team as $member): ?>
         <!-- /.col -->
         <div class="col-md-3">
           <!-- Profile Image -->
           <div class="box box-primary">
             <div class="box-body box-profile">
               <img class="profile-user-img img-responsive img-circle" src="dist/img/user4-128x128.jpg" alt="User profile picture">

               <h3 class="profile-username text-center"><?= $member->getUsername() ?></h3>

               <ul class="list-group list-group-unbordered">
                 <li class="list-group-item">
                   <b>Crédits formation</b> <a class="pull-right"><?= $member->getCreditsLeft() ?></a>
                 </li>
                 <li class="list-group-item">
                   <b>Jours restants</b> <a class="pull-right"><?= $member->getDaysLeft() ?></a>
                 </li>
                 <li class="list-group-item">
                   <b>Demandes</b> <a class="pull-right">2</a>
                 </li>
               </ul>

               <a href=<?php ROOTDIR ?>"/index.php?controller=team&action=manage" class="btn btn-info btn-block"><b>Gérer les demandes</b></a>
             </div>
             <!-- /.box-body -->
           </div>
           <!-- /.box -->
         </div>
         <!-- /.col -->
       <?php endforeach ?>

    </div>
        <!-- /.row -->
        <!-- Your Page Content Here -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



