<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image"><img alt="User Image" class="img-circle" src="dist/img/user2-160x160.jpg"></div>
      <div class="pull-left info">
        <p> <?= $employee->getUsername();?></p><!-- Status -->
        <p><span class="badge bg-maroon"><?= $employee->getCreditsLeft();?> CF</span> <span class="badge bg-purple"><?= $employee->getDaysLeft();?> jours</span></p>
        
      </div>
    </div><!-- search form (Optional) -->
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header"></li><!-- Optionally, you can add icons to the links -->
      <li>
        <a href=<?php ROOTDIR ?>"/m2l/index.php?controller=main&action=index"><i class="fa fa-link"></i> <span>Page d'accueil</span></a>
      </li>
      <li>
        <a href=<?php ROOTDIR ?>"/m2l/index.php?controller=formations&action=index"><i class="fa fa-link"></i> <span>Mes formation</span></a>
      </li>
      <li>
        <a href=<?php ROOTDIR ?>"/m2l/index.php?controller=manage&action=index"><i class="fa fa-link"></i> <span>Gestion d'équipe</span></a>
      </li>
    </ul><!-- /.sidebar-menu -->
  </section><!-- /.sidebar -->
</aside>