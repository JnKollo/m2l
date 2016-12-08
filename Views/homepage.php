<?php $this->title = "Dashboard";?>

<img id="logo" src=<?php ROOTDIR ?>"/m2l/Web/img/commun/logo.png">

<div>
    <?= $employee->isActive(); echo $employee->getUsername(); ?>
    <a href=<?php ROOTDIR ?>"/m2l/index.php?controller=security&action=logout">log out</a>
</div>
