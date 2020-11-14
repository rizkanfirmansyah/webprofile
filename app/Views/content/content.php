<?= $this->extend('template/blog') ?>

<?= $this->section('blog') ?>


<!-- Header -->
<header id="header" class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?= uri_decode($judul) ?></h1>
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
</div> <!-- end of ex-basic-1 -->
<!-- end of breadcrumbs -->


<!-- Privacy Content -->
<div class="ex-basic-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="text-container">
                    <h3>Private Data We Receive And Collect</h3>
                    <?php $kata = 'Evolo also automatically collects and receives certain information from your computer or mobile device. including the activities you perform on our Website, the Platforms, and the Applications,' ?>
                    <p><?php $kalimat = explode(" ", $kata);
                        echo $kalimat[0] ?></p>
                    <p>Evolo also automatically collects and receives certain information from your computer or mobile device, including the activities you perform on our Website, the Platforms, and the Applications, the type of hardware and software you are using (for example, your operating system or browser), and information obtained from cookies. For example, each time you visit the Website or otherwise use the Services, we automatically collect your IP address, browser and device type, access times, the web page from which you came, the regions from which you navigate the web page, and the web page(s) you access (as applicable).</p>
                    <p>When you first register for a Evolo account, and when you use the Services, we collect some <a class="turquoise" href="#your-link">Personal Information</a> about you such as:</p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled li-space-lg indent">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">The geographic area where you use your computer and mobile devices</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Your full name, username, and email address and other contact details</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">A unique Evolo user ID (an alphanumeric string) which is assigned to you upon registration</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Other optional information as part of your account profile</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Your IP Address and, when applicable, timestamp related to your consent and confirmation of consent</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Other information submitted by you or your organizational representatives via various methods</div>
                                </li>
                            </ul>
                        </div> <!-- end of col -->

                        <div class="col-md-6">
                            <ul class="list-unstyled li-space-lg indent">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Your billing address and any necessary other information to complete any financial transaction, and when making purchases through the Services, we may also collect your credit card or PayPal information</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">User generated content (such as messages, posts, comments, pages, profiles, images, feeds or communications exchanged on the Supported Platforms)</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Images or other files that you may publish via our Services</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Information (such as messages, posts, comments, pages, profiles, images) we may receive relating to communications you send us, such as queries or comments concerning</div>
                                </li>
                            </ul>
                        </div> <!-- end of col -->
                    </div>
                </div> <!-- end of text-container-->

                <div class="text-container">
                    <h3>How We Use Evolo Landing Page Data</h3>
                    <p>Evolo SaaS Landing Page Template uses visitors' data for the following general purposes:</p>
                    <ol class="li-space-lg">
                        <li>To identify you when you login to your account</li>
                        <li>To enable us to operate the Services and provide them to you</li>
                        <li>To verify your transactions and for purchase confirmation, billing, security, and authentication (including security tokens for communication with installed)</li>
                        <li>To analyze the Website or the other Services and information about our visitors and users, including research into our user demographics and user behaviour in order to improve our content and Services</li>
                        <li>To contact you about your account and provide customer service support, including responding to your comments and questions</li>
                        <li>To share aggregate (non-identifiable) statistics about users of the Services to prospective advertisers and partners</li>
                        <li>To keep you informed about the Services, features, surveys, newsletters, offers, surveys, newsletters, offers, contests and events we think you may find useful or which you have requested from us</li>
                        <li>To sell or market Evolo Landing Page products and services to you</li>
                        <li>To better understand your needs and the needs of users in the aggregate, diagnose problems, analyze trends, improve the features and usability of the Services, and better understand and market to our customers and users</li>
                        <li>To keep the Services safe and secure</li>
                        <li>We also use non-identifiable information gathered for statistical purposes to keep track of the number of visits to the Services with a view to introducing improvements and improving usability of the Services. We may share this type of statistical data so that our partners also understand how often people use the Services, so that they, too, may provide you with an optimal experience.</li>
                    </ol>
                </div> <!-- end of text-container -->

                <div class="text-container">
                    <h3>Customer Content We Process For Customers</h3>
                    <p>Evolo is a HTML landing page template tool. By its nature, Services enable our customers to promote their products and services integrate with hundreds of business applications that they already use, all in one place.</p>
                    <p>Services help our customers promote their products and services, marketing and advertising; engaging audiences; scheduling and publishing messages; and analyze the results.</p>
                </div> <!-- end of text container -->

                <div class="text-container">
                    <h3>Consent Of Using Evolo Landing Page</h3>
                    <p class="mb-5">By using any of the Services, or submitting or collecting any Personal Information via the Services, you consent to the collection, transfer, storage disclosure, and use of your Personal Information in the manner set out in this <?= $judul ?>. If you do not consent to the use of your Personal Information in these ways, please stop using the Services.</p>
                </div> <!-- end of text-container -->

                <div class="row">
                    <div class="col-md-6 komentar-mystyle" id="komentar">
                        <div class="text-container last">
                            <h3>Komentar : 1</h3>

                            <div class="row">
                                <div class="list-group">
                                    <a class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">List group item heading</h5>
                                            <small>3 days ago</small>
                                        </div>
                                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                        <small>Donec id elit non mi porta.</small>
                                    </a>
                                    <a class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">List group item heading</h5>
                                            <small class="text-muted">3 days ago</small>
                                        </div>
                                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                        <small class="text-muted">Donec id elit non mi porta.</small>
                                    </a>
                                    <a class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">List group item heading</h5>
                                            <small class="text-muted">3 days ago</small>
                                        </div>
                                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                        <small class="text-muted">Donec id elit non mi porta.</small>
                                    </a>
                                </div>
                            </div>

                        </div> <!-- end of text container -->
                    </div>
                    <div class="col-md-6">

                        <!-- Privacy Form -->
                        <div class="form-container">
                            <form id="privacyForm" data-toggle="validator" data-focus="false">
                                <div class="form-group">
                                    <input type="text" class="form-control-input" id="pname" required>
                                    <label class="label-control" for="pname">Name</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control-input" id="pemail" required>
                                    <label class="label-control" for="pemail">Email</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <select class="form-control-select" id="pselect" required>
                                        <option class="select-option" value="" disabled selected>Select Option</option>
                                        <option class="select-option" value="Delete data">Delete my data</option>
                                        <option class="select-option" value="Show me data">Show me my data</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group checkbox">
                                    <input type="checkbox" id="pterms" value="Agreed-to-Terms" required>I have read and agree to Evolo's <a href="privacy-policy.html">Halaman Berita</a> and <a href="terms-conditions.html">Terms Conditions</a>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control-submit-button">SUBMIT</button>
                                </div>
                                <div class="form-message">
                                    <div id="pmsgSubmit" class="h3 text-center hidden"></div>
                                </div>
                            </form>
                        </div> <!-- end of form container -->
                        <!-- end of privacy form -->

                    </div>
                </div>
                <!-- <a class="btn-outline-reg back" href="index.html">BACK</a> -->
            </div>
        </div>
    </div>
</div>



<?= $this->endSection() ?>