<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image"><img alt="User Image" class="img-circle" src=<?php ROOTDIR ?>"/dist/img/user2-160x160.jpg"></div>
      <div class="pull-left info">
        <p> <?= $this->employee->getUsername(); ?></p><!-- Status -->
        <p><span class="badge bg-maroon"><?= $this->employee->getCreditsLeft(); ?> CF</span> <span class="badge bg-purple"><?= $this->employee->getDaysLeft(); ?> jours</span></p>

      </div>
    </div><!-- search form (Optional) -->
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header"></li><!-- Optionally, you can add icons to the links -->
      <li>
        <a href=<?php ROOTDIR ?>"/index.php?controller=home&action=home"><i class="fa fa-link"></i> <span>Page d'accueil</span></a>
      </li>
      <li>
        <a href=<?php ROOTDIR ?>"/index.php?controller=formation&action=index"><i class="fa fa-link"></i> <span>Mes formations</span></a>
      </li>
      <?php if($this->employee->isManager()) { ?>
        <li>
          <a href=<?php ROOTDIR ?>"/index.php?controller=team&action=index"><i class="fa fa-link"></i> <span>Gestion d'équipe</span></a>
        </li>
      <?php } ?>
    </ul><!-- /.sidebar-menu -->
  </section><!-- /.sidebar -->
</aside>