<?= $this->include('layout/head') ?>

<body data-spy="scroll" data-target=".fixed-top">

    <?= $this->include('additional/preloader') ?>

    <?= $this->include('layout/navbar') ?>

    <?= $this->include('layout/header') ?>

    <?= $this->renderSection('menu') ?>

    <?= $this->include('layout/services') ?>

    <?= $this->include('layout/slider') ?>

    <?= $this->include('layout/detail') ?>

    <?= $this->include('additional/pricing') ?>

    <?= $this->include('additional/request') ?>

    <?= $this->include('additional/video') ?>

    <?= $this->include('additional/testimonial') ?>

    <?= $this->include('layout/about') ?>

    <?= $this->include('layout/contact') ?>

    <?= $this->include('layout/footer') ?>


    <?= $this->include('important/copyright') ?>

    <?= $this->include('additional/js.php') ?>

</body>

</html>