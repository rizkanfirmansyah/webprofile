<?= $this->include('layout/head') ?>

<body data-spy="scroll" data-target=".fixed-top">

    <?= $this->include('additional/preloader') ?>

    <?= $this->include('layout/navbar') ?>

    <?= $this->renderSection('blog') ?>


    <?= $this->include('layout/about') ?>

    <?= $this->include('layout/contact') ?>

    <?= $this->include('layout/footer') ?>


    <?= $this->include('important/copyright') ?>

    <?= $this->include('additional/js.php') ?>
</body>

</html>