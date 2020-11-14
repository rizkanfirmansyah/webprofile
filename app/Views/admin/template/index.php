<!DOCTYPE html>
<html lang="en">

<?= $this->include('admin/layout/header') ?>

<?= $this->include('admin/layout/sidebar') ?>

<?= $this->include('admin/layout/navbar') ?>

<?= $this->renderSection('dashboard') ?>

<?= $this->include('admin/layout/footer') ?>

</body>

<?= $this->include('admin/additional/js') ?>

</html>