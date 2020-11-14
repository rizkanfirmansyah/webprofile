<?= $this->extend('admin/template/index') ?>

<?= $this->section('dashboard') ?>

<!-- page content -->
<div class="right_col" role="main" style="min-height: 6325px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Profile Company</h3>
            </div>


        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Data Company</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a class="dropdown-item" href="#">Settings 1</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <img class="img-responsive d-none mx-auto" id="loadImg" src="<?= base_url('/private/myvendor/animasi/loader.gif') ?>" alt="">
                        </div>
                        <br>
                        <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Company Name <span class="required">*</span>
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input type="text" id="name" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align text-capitalize" for="information">Company information <span class="required">*</span>
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input type="text" id="information" name="information" required="required" class="form-control">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="description" class="text-capitalize col-form-label col-md-3 col-sm-3 label-align">description</label>
                                <div class="col-md-8 col-sm-8 ">
                                    <textarea id="description" class="form-control" type="text" name="description"></textarea>
                                </div>
                            </div>
                            <!-- 
                            <div class="item form-group">
                                <label for="image" class="text-capitalize col-form-label col-md-3 col-sm-3 label-align">image</label>
                                <div class="col-md-8 col-sm-8">
                                    <input name="file" id="uploadFileJS" class="form-control" type="file" multiple />
                                </div>
                            </div> -->
                            <div class="item form-group">
                                <div class="mx-auto col-sm-6 col-md-6">
                                    <img id="gambar_nodin" width="200">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-8 col-sm-8 offset-md-3">
                                    <button type="button" id="simpan" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Simpan</button>
                                    <button class="btn btn-sm btn-warning text-white" id="edit" type="button"><i class="fa fa-edit"></i> Edit</button>
                                    <button class="btn btn-sm btn-danger text-white" type="reset"><i class="fa fa-power-off"></i> Reset</button>
                                    <button class="btn btn-sm btn-secondary text-white" type="button" onclick="start_profile()"><i class="fa fa-undo"></i> Restart</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Data Services</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu mr-5" role="menu">
                                    <li><a class="dropdown-item" id="primary-access-service">Primary</a>
                                    </li>
                                    <li><a class="dropdown-item" id="secondary-access-service">Secondary</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        <img class="img-responsive d-none mx-auto" id="loadImgService" src="<?= base_url('/private/myvendor/animasi/loader.gif') ?>" alt="">
                    </div>
                    <div id="primary-service">
                        <br>

                        <!-- 
                            <div class="item form-group">
                                <label for="image" class="text-capitalize col-form-label col-md-3 col-sm-3 label-align">image</label>
                                <div class="col-md-8 col-sm-8">
                                    <input name="file" id="uploadFileJS" class="form-control" type="file" multiple />
                                </div>
                            </div> -->
                        <div class="item form-group">
                            <div class="mx-auto col-sm-6 col-md-6">
                                <img id="gambar_nodin" width="200">
                            </div>
                        </div>

                        <div class="ln_solid"></div>

                    </div>

                    <div id="secondary-service" style="display: none;">

                        <div class="row" id="col-services">


                        </div>
                    </div>



                </div>
            </div>
        </div>




    </div>
</div>

<!-- /page content -->


<?= $this->endSection() ?>