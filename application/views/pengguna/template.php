<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>X-Phone Gadget</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/pengguna/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/pengguna/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/pengguna/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/pengguna/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/pengguna/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="<?= base_url(); ?>global_assets/js/main/jquery.min.js"></script>
    <script src="<?= base_url(); ?>global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>global_assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="<?= base_url(); ?>global_assets/js/plugins/media/fancybox.min.js"></script>
    <script src="<?= base_url(); ?>global_assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script src="<?= base_url(); ?>assets/pengguna/js/app.js"></script>
    <script src="<?= base_url(); ?>global_assets/js/demo_pages/ecommerce_product_list.js"></script>
    <!-- /theme JS files -->

</head>

<body class="navbar-bottom navbar-top">

    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark fixed-top">
        <div class="navbar-brand">
            <a href="<?= base_url('pengguna/' . $this->uri->segment(2)) ?>" class="d-inline-block">
                <img src="<?= base_url(); ?>global_assets/images/logo_light.png" alt="">
            </a>
        </div>

        <div class="d-md-none">
            <button class="navbar-toggler sidebar-mobile-component-toggle" type="button">
                <i class="icon-search4"></i>
            </button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-user"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
            </button>
        </div>
        <input type="hidden" name="urlini" value="<?= $this->uri->segment(1) . '/' . $this->uri->segment(2); ?>" id="urlini">

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="navbar-nav-link d-none d-md-block">
                        <i class="icon-cart2"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-component-toggle d-none d-md-block">
                        <i class="icon-drag-right"></i>
                    </a>
                </li>
            </ul>
            <span class="badge ml-md-3 mr-md-auto">&nbsp;</span>
            <ul class="navbar-nav">
                <li class="nav-item dropdown dropdown-user">
                    <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= base_url(); ?>assets/pengguna/img/man.png" class="rounded-circle mr-2" height="34" alt="">
                        <span><?= $this->session->userdata('nama_lengkap'); ?></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                        <a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

            <!-- Sidebar mobile toggler -->
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                Navigation
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <!-- /sidebar mobile toggler -->


            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="card-body">
                        <div class="media">
                            <div class="mr-3">
                                <a href="#"><img src="<?= base_url(); ?>assets/pengguna/img/man.png" width="38" height="38" class="rounded-circle" alt=""></a>
                            </div>

                            <div class="media-body">
                                <div class="media-title font-weight-semibold"><?= $this->session->userdata('nama_lengkap'); ?></div>
                                <div class="font-size-xs opacity-50">
                                    <i class="icon-pin font-size-sm"></i> &nbsp;<?= $this->session->userdata('username'); ?>
                                </div>
                            </div>

                            <div class="ml-3 align-self-center">
                                <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="card card-sidebar-mobile">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">

                        <!-- Main -->
                        <li class="nav-item-header">
                            <div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i>
                        </li>
                        <li class="nav-item">
                            <a href="index.html" class="nav-link">
                                <i class="icon-home4"></i>
                                <span>
                                    Dashboard
                                    <span class="d-block font-weight-normal opacity-50">No active orders</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Layouts</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                                <li class="nav-item"><a href="index.html" class="nav-link active">Default layout</a></li>
                                <li class="nav-item"><a href="<?= base_url(); ?>layout_2/LTR/default/full/index.html" class="nav-link">Layout 2</a></li>
                                <li class="nav-item"><a href="<?= base_url(); ?>layout_3/LTR/default/full/index.html" class="nav-link">Layout 3</a></li>
                                <li class="nav-item"><a href="<?= base_url(); ?>layout_4/LTR/default/full/index.html" class="nav-link">Layout 4</a></li>
                                <li class="nav-item"><a href="<?= base_url(); ?>layout_5/LTR/default/full/index.html" class="nav-link">Layout 5</a></li>
                                <li class="nav-item"><a href="<?= base_url(); ?>layout_6/LTR/default/full/index.html" class="nav-link disabled">Layout 6 <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Themes</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Themes">
                                <li class="nav-item"><a href="index.html" class="nav-link active">Default</a></li>
                                <li class="nav-item"><a href="../../../LTR/material/full/index.html" class="nav-link">Material</a></li>
                                <li class="nav-item"><a href="../../../LTR/dark/full/index.html" class="nav-link disabled">Dark <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                                <li class="nav-item"><a href="../../../LTR/clean/full/index.html" class="nav-link disabled">Clean <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Starter kit</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                                <li class="nav-item"><a href="../seed/layout_nav_horizontal.html" class="nav-link">Horizontal navigation</a></li>
                                <li class="nav-item"><a href="../seed/sidebar_none.html" class="nav-link">No sidebar</a></li>
                                <li class="nav-item"><a href="../seed/sidebar_main.html" class="nav-link">1 sidebar</a></li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">2 sidebars</a>
                                    <ul class="nav nav-group-sub">
                                        <li class="nav-item"><a href="../seed/sidebar_secondary.html" class="nav-link">Secondary sidebar</a></li>
                                        <li class="nav-item"><a href="../seed/sidebar_right.html" class="nav-link">Right sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">3 sidebars</a>
                                    <ul class="nav nav-group-sub">
                                        <li class="nav-item"><a href="../seed/sidebar_right_hidden.html" class="nav-link">Right sidebar hidden</a></li>
                                        <li class="nav-item"><a href="../seed/sidebar_right_visible.html" class="nav-link">Right sidebar visible</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Content sidebars</a>
                                    <ul class="nav nav-group-sub">
                                        <li class="nav-item"><a href="../seed/sidebar_content_left.html" class="nav-link">Left sidebar</a></li>
                                        <li class="nav-item"><a href="../seed/sidebar_content_right.html" class="nav-link">Right sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="../seed/layout_boxed.html" class="nav-link">Boxed layout</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="../seed/navbar_fixed_main.html" class="nav-link">Fixed main navbar</a></li>
                                <li class="nav-item"><a href="../seed/navbar_fixed_secondary.html" class="nav-link">Fixed secondary navbar</a></li>
                                <li class="nav-item"><a href="../seed/navbar_fixed_both.html" class="nav-link">Both navbars fixed</a></li>
                                <li class="nav-item"><a href="../seed/layout_fixed.html" class="nav-link">Fixed layout</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="changelog.html" class="nav-link">
                                <i class="icon-list-unordered"></i>
                                <span>Changelog</span>
                                <span class="badge bg-blue-400 align-self-center ml-auto">2.2</span>
                            </a>
                        </li>
                        <li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link"><i class="icon-width"></i> <span>RTL version</span></a></li>
                        <!-- /main -->

                    </ul>
                </div>
                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                <!-- Inner container -->
                <div class="d-flex align-items-start flex-column flex-md-row">

                    <!-- Left content -->
                    <div class="w-100 order-2 order-md-1" id="loadProduct">
                    </div>
                    <!-- /left content -->


                    <!-- Right sidebar component -->
                    <div style="z-index: auto;" class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

                        <!-- Sidebar content -->
                        <div class="sidebar-content">

                            <!-- Categories -->
                            <div class="card">
                                <div class="card-header bg-transparent header-elements-inline">
                                    <span class="text-uppercase font-size-sm font-weight-semibold">KATEGORI</span>
                                    <div class="header-elements">
                                        <div class="list-icons">
                                            <a class="list-icons-item" data-action="collapse"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body border-0 p-0">
                                    <ul class="nav nav-sidebar mb-2">
                                        <li class="nav-item">
                                            <a href="#" onclick="loadProduct()" class="nav-link"><b>TAMPILKAN SEMUA</b></a>
                                        </li>
                                        <?php foreach ($merk->result_array() as $n => $k) : ?>
                                            <li class="nav-item">
                                                <a href="#" onclick="loadProductPerKategori(<?= $k['id_merk'] ?>)" class="nav-link"><?= ++$n ?>. <?= $k['nama_merk'] ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- /categories -->
                            <!-- cari produck -->
                            <div class="card">
                                <div class="card-header bg-transparent header-elements-inline">
                                    <span class="text-uppercase font-size-sm font-weight-semibold">CARI PRODUCT</span>
                                    <div class="header-elements">
                                        <div class="list-icons">
                                            <a class="list-icons-item" data-action="collapse"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <input type="text" name="cariProduct" id="cariProduct" class="form-control" placeholder="CARI PRODUCT">
                                            <span class="input-group-append">
                                                <button class="btn btn-light" type="button" onclick="cariProduct()"><i class="icon-search4"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /cari produck -->

                        </div>
                        <!-- /sidebar content -->

                    </div>
                    <!-- /right sidebar component -->

                </div>
                <!-- /inner container -->

            </div>
            <!-- /content area -->


            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light bg-primary fixed-bottom">
                <div class="text-center d-lg-none w-100">
                    <button type="button" id="buttonCart" class="navbar-toggler dropdown-toggle text-white" disabled data-toggle="collapse" data-target="#navbar-footer">
                        <b><i class="icon-spinner2 spinner" id="loadingLoadCart"></i> <i class="icon-cart2 mr-2"></i>
                            KERANJANG</b>
                    </button>
                </div>
                <div class="navbar-collapse collapse bg-white" id="navbar-footer">
                    <div id="loadCart"></div>
                </div>
            </div>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>

</html>
<script>
    var urlini = $("#urlini").val();
    if (urlini == "pengguna/barang") {
        $.when(loadCart(), loadProduct()).done(function() {
            $("#loadingLoadCart").css("display", "none");
            $('#buttonCart').removeAttr('disabled', 'disabled');
        })
    }

    function loadCart() {
        $.ajax({
            url: "<?= base_url('pengguna/barang/loadCart') ?>",
            type: "POST",
            dataType: "HTML",
            success: function(a) {
                $("#loadCart").html(a);
            },
        });
    }

    function loadProduct() {
        $.ajax({
            url: "<?= base_url('pengguna/barang/loadProduct') ?>",
            type: "GET",
            dataType: "HTML",
            success: function(a) {
                $("#loadProduct").html(a);
            },
        });
    }

    function loadProductPerKategori(id) {
        $.ajax({
            url: "<?= base_url('pengguna/barang/loadProduct') ?>",
            type: "POST",
            data: {
                id: id
            },
            dataType: "HTML",
            success: function(a) {
                $("#loadProduct").html('');
                $("#loadProduct").html(a);
            },
        });
    }

    function cariProduct() {
        var val = $('#cariProduct').val();
        $.ajax({
            url: "<?= base_url('pengguna/barang/cariProduct') ?>",
            type: "POST",
            data: {
                val: val
            },
            dataType: "HTML",
            success: function(a) {
                $("#loadProduct").html('');
                $("#loadProduct").html(a);
            },
        });
    }
</script>