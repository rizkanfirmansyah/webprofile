<?= $this->extend('template/blog') ?>

<?= $this->section('blog') ?>


<!-- Header -->
<header id="header" class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row text-center">
                    <img class="mx-auto" src="<?= base_url('/public/images/blog.png') ?>" style="max-width: 350px; margin-top:-50px;margin-bottom: -50px;" alt="">
                </div>
                <h1><?= $judul ?></h1>
            </div> <!-- end of col -->
        </div>
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->

<!-- Breadcrumbs -->
<div class="ex-basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs">
                    <a href="index.html">Home</a><i class="fa fa-angle-double-right"></i><span><?= $judul ?></span>
                </div> <!-- end of breadcrumbs -->
            </div> <!-- end of col -->
        </div>
    </div> <!-- end of container -->
</div>
<!-- end of ex-basic-1 -->


<?= $this->endSection() ?>