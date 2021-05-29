<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>X-Phone Gadget</title>

  <!-- Global stylesheets -->
  <!--  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css"> -->
  <link href="<?= base_url(); ?>global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url(); ?>assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url(); ?>assets/css/layout.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url(); ?>assets/css/components.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url(); ?>assets/css/colors.min.css" rel="stylesheet" type="text/css">
  <!-- /global stylesheets -->

  <!-- Core JS files -->
  <script src="<?= base_url(); ?>global_assets/js/main/jquery.min.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/main/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/plugins/loaders/blockui.min.js"></script>
  <!-- /core JS files -->

  <!-- Theme JS files -->
  <script src="<?= base_url(); ?>global_assets/js/plugins/visualization/d3/d3.min.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/plugins/forms/styling/switchery.min.js"></script>
  <!-- <script src="<?= base_url(); ?>global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script> -->
  <script src="<?= base_url(); ?>global_assets/js/plugins/ui/moment/moment.min.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/plugins/pickers/daterangepicker.js"></script>

  <script src="<?= base_url(); ?>assets/js/app.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/demo_pages/dashboard.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/plugins/forms/selects/select2.min.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/demo_pages/datatables_advanced.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/demo_pages/components_modals.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/plugins/media/fancybox.min.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/plugins/forms/styling/uniform.min.js"></script>
  <!--  <script src="<?= base_url(); ?>global_assets/js/plugins/forms/selects/select2.min.js"></script> -->
  <script src="<?= base_url(); ?>global_assets/js/demo_pages/form_select2.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/plugins/notifications/jgrowl.min.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/plugins/notifications/noty.min.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/demo_pages/extra_jgrowl_noty.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/plugins/notifications/pnotify.min.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/plugins/notifications/sweet_alert.min.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/demo_pages/extra_sweetalert.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/demo_pages/form_layouts.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/plugins/forms/selects/select2.min.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/plugins/forms/styling/uniform.min.js"></script>
  <script src="<?= base_url(); ?>global_assets/js/demo_pages/gallery_library.js"></script>

  <script type="text/javascript">
    var swalInit = swal.mixin({
      buttonsStyling: false,
      confirmButtonClass: 'btn btn-primary',
      cancelButtonClass: 'btn btn-light'
    });
  </script>
  <!-- /theme JS files -->

</head>

<body>

  <!-- Main navbar -->
  <div class="navbar navbar-expand-md navbar-dark">
    <div class="navbar-brand wmin-200">
      <a href="index.html" class="d-inline-block">
        <img src="<?= base_url(); ?>global_assets/images/logo_light.png" alt="">
      </a>
    </div>

    <div class="d-md-none">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
        <i class="icon-tree5"></i>
      </button>
      <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
        <i class="icon-paragraph-justify3"></i>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
            <i class="icon-paragraph-justify3"></i>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
            <i class="icon-bell2"></i>
            <span class="d-md-none ml-2">Activity</span>
            <span class="badge badge-pill badge-mark bg-orange-400 border-orange-400 ml-auto ml-md-0"></span>
          </a>

          <div class="dropdown-menu dropdown-content wmin-md-350">
            <div class="dropdown-content-header">
              <span class="font-weight-semibold">Latest activity</span>
              <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
            </div>

            <div class="dropdown-content-body dropdown-scrollable">
              <ul class="media-list">
                <li class="media">
                  <div class="mr-3">
                    <a href="#" class="btn bg-success-400 rounded-round btn-icon"><i class="icon-mention"></i></a>
                  </div>

                  <div class="media-body">
                    <a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and tricks"
                    <div class="font-size-sm text-muted mt-1">4 minutes ago</div>
                  </div>
                </li>

                <li class="media">
                  <div class="mr-3">
                    <a href="#" class="btn bg-pink-400 rounded-round btn-icon"><i class="icon-paperplane"></i></a>
                  </div>

                  <div class="media-body">
                    Special offers have been sent to subscribed users by <a href="#">Donna Gordon</a>
                    <div class="font-size-sm text-muted mt-1">36 minutes ago</div>
                  </div>
                </li>

                <li class="media">
                  <div class="mr-3">
                    <a href="#" class="btn bg-blue rounded-round btn-icon"><i class="icon-plus3"></i></a>
                  </div>

                  <div class="media-body">
                    <a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch in <span class="font-weight-semibold">Limitless</span> repository
                    <div class="font-size-sm text-muted mt-1">2 hours ago</div>
                  </div>
                </li>

                <li class="media">
                  <div class="mr-3">
                    <a href="#" class="btn bg-purple-300 rounded-round btn-icon"><i class="icon-truck"></i></a>
                  </div>

                  <div class="media-body">
                    Shipping cost to the Netherlands has been reduced, database updated
                    <div class="font-size-sm text-muted mt-1">Feb 8, 11:30</div>
                  </div>
                </li>

                <li class="media">
                  <div class="mr-3">
                    <a href="#" class="btn bg-warning-400 rounded-round btn-icon"><i class="icon-comment"></i></a>
                  </div>

                  <div class="media-body">
                    New review received on <a href="#">Server side integration</a> services
                    <div class="font-size-sm text-muted mt-1">Feb 2, 10:20</div>
                  </div>
                </li>

                <li class="media">
                  <div class="mr-3">
                    <a href="#" class="btn bg-teal-400 rounded-round btn-icon"><i class="icon-spinner11"></i></a>
                  </div>

                  <div class="media-body">
                    <strong>January, 2018</strong> - 1320 new users, 3284 orders, $49,390 revenue
                    <div class="font-size-sm text-muted mt-1">Feb 1, 05:46</div>
                  </div>
                </li>
              </ul>
            </div>

            <div class="dropdown-content-footer bg-light">
              <a href="#" class="text-grey mr-auto">All activity</a>
              <div>
                <a href="#" class="text-grey" data-popup="tooltip" title="Clear list"><i class="icon-checkmark3"></i></a>
                <a href="#" class="text-grey ml-2" data-popup="tooltip" title="Settings"><i class="icon-gear"></i></a>
              </div>
            </div>
          </div>
        </li>
      </ul>

      <span class="badge bg-success-400 ml-md-auto mr-md-3">Active</span>

      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
            <i class="icon-bubbles5"></i>
            <span class="d-md-none ml-2">Messages</span>
            <span class="badge badge-pill badge-mark bg-orange-400 border-orange-400 ml-auto ml-md-0"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
            <div class="dropdown-content-header">
              <span class="font-weight-semibold">Messages</span>
              <a href="#" class="text-default"><i class="icon-compose"></i></a>
            </div>

            <div class="dropdown-content-body dropdown-scrollable">
              <ul class="media-list">
                <li class="media">
                  <div class="mr-3 position-relative">
                    <img src="<?= base_url(); ?>global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                  </div>

                  <div class="media-body">
                    <div class="media-title">
                      <a href="#">
                        <span class="font-weight-semibold">James Alexander</span>
                        <span class="text-muted float-right font-size-sm">04:58</span>
                      </a>
                    </div>

                    <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                  </div>
                </li>

                <li class="media">
                  <div class="mr-3 position-relative">
                    <img src="<?= base_url(); ?>global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                  </div>

                  <div class="media-body">
                    <div class="media-title">
                      <a href="#">
                        <span class="font-weight-semibold">Margo Baker</span>
                        <span class="text-muted float-right font-size-sm">12:16</span>
                      </a>
                    </div>

                    <span class="text-muted">That was something he was unable to do because...</span>
                  </div>
                </li>

                <li class="media">
                  <div class="mr-3">
                    <img src="<?= base_url(); ?>global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                  </div>
                  <div class="media-body">
                    <div class="media-title">
                      <a href="#">
                        <span class="font-weight-semibold">Jeremy Victorino</span>
                        <span class="text-muted float-right font-size-sm">22:48</span>
                      </a>
                    </div>

                    <span class="text-muted">But that would be extremely strained and suspicious...</span>
                  </div>
                </li>

                <li class="media">
                  <div class="mr-3">
                    <img src="<?= base_url(); ?>global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                  </div>
                  <div class="media-body">
                    <div class="media-title">
                      <a href="#">
                        <span class="font-weight-semibold">Beatrix Diaz</span>
                        <span class="text-muted float-right font-size-sm">Tue</span>
                      </a>
                    </div>

                    <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                  </div>
                </li>

                <li class="media">
                  <div class="mr-3">
                    <img src="<?= base_url(); ?>global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                  </div>
                  <div class="media-body">
                    <div class="media-title">
                      <a href="#">
                        <span class="font-weight-semibold">Richard Vango</span>
                        <span class="text-muted float-right font-size-sm">Mon</span>
                      </a>
                    </div>

                    <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                  </div>
                </li>
              </ul>
            </div>

            <div class="dropdown-content-footer justify-content-center p-0">
              <a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
            </div>
          </div>
        </li>

        <li class="nav-item dropdown dropdown-user">
          <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
            <img src="<?= base_url(); ?>assets_2/images/man.png" class="rounded-circle mr-2" height="34" alt="">
            <span>Victoria</span>
          </a>

          <div class="dropdown-menu dropdown-menu-right">
            <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
            <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
            <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
            <a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!-- /main navbar -->


  <!-- Page header -->
  <div class="page-header">
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    </div>
  </div>
  <!-- /page header -->


  <!-- Page content -->
  <div class="page-content pt-0">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-light sidebar-main sidebar-expand-md align-self-start">

      <!-- Sidebar mobile toggler -->
      <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
          <i class="icon-arrow-left8"></i>
        </a>
        <span class="font-weight-semibold">Main sidebar</span>
        <a href="#" class="sidebar-mobile-expand">
          <i class="icon-screen-full"></i>
          <i class="icon-screen-normal"></i>
        </a>
      </div>
      <!-- /sidebar mobile toggler -->


      <!-- Sidebar content -->
      <div class="sidebar-content">
        <div class="card card-sidebar-mobile">

          <!-- Header -->
          <div class="card-header header-elements-inline">
            <h6 class="card-title">Menu</h6>
            <div class="header-elements">
              <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
              </div>
            </div>
          </div>

          <!-- User menu -->
          <div class="sidebar-user">
            <div class="card-body">
              <div class="media">
                <div class="mr-3">
                  <a href="#"><img src="<?= base_url(); ?>assets_2/images/man.png" width="38" height="38" class="rounded-circle" alt=""></a>
                </div>

                <div class="media-body">
                  <div class="media-title font-weight-semibold">Xphone Gadget</div>
                  <div class="font-size-xs opacity-50">
                    <i class="icon-pin font-size-sm"></i> &nbsp;Xphone Gadget
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
          <div class="card-body p-0">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

              <!-- Main -->
              <li class="nav-item-header mt-0">
                <div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i>
              </li>
              <li class="nav-item">
                <a href="index.html" class="nav-link">
                  <i class="icon-home4"></i>
                  Dashboard
                </a>
              </li>
              <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Master</span></a>

                <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                  <li class="nav-item"><a href="<?= base_url($this->uri->segment(1) . '/' . 'Pengguna'); ?>" class="nav-link">Pengguna</a></li>
                  <li class="nav-item"><a href="<?= base_url($this->uri->segment(1) . '/' . 'merk'); ?>" class="nav-link">Merk</a></li>
                  <li class="nav-item"><a href="<?= base_url($this->uri->segment(1) . '/' . 'Barang'); ?>" class="nav-link">Barang</a></li>
                </ul>
              </li>
              <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Transaksi</span></a>

                <ul class="nav nav-group-sub" data-submenu-title="Themes">
                  <li class="nav-item"><a href="index.html" class="nav-link active">Transaksi Masuk</a></li>
                  <li class="nav-item"><a href="../../../LTR/material/full/index.html" class="nav-link">Transaksi Proses</a></li>
                  <li class="nav-item"><a href="../../../LTR/clean/full/index.html" class="nav-link">Transaksi Selesai</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="index.html" class="nav-link">
                  <i class="icon-home4"></i>Laporan Penjualan
                </a>
              </li>

              <!-- /layout -->

            </ul>
          </div>
          <!-- /main navigation -->

        </div>
      </div>
      <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->


    <!-- Main content -->
    <div class="content-wrapper">

      <!-- Content area -->
      <div class="content">

        <?= $contents; ?>

      </div>
      <!-- /content area -->

    </div>
    <!-- /main content -->

  </div>
  <!-- /page content -->


  <!-- Footer -->
  <div class="navbar navbar-expand-lg navbar-light">
    <div class="text-center d-lg-none w-100">
      <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
        <i class="icon-unfold mr-2"></i>
        Footer
      </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-footer">
      <span class="navbar-text">
        &copy; 2021. <a href="#">X Phone Gadget Administrator</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">X Phone Gadget</a>
      </span>
    </div>
  </div>
  <!-- /footer -->
  <script type="text/javascript">
    <?php
    $cek = $this->session->userdata('berhasil');
    if ($cek) {
    ?>
      $(document).ready(function() {
        $.jGrowl("<?= $cek; ?>", {
          header: 'Success!',
          theme: 'bg-primary'
        });
      })
    <?php $this->session->unset_userdata('berhasil');
    } ?>
  </script>
</body>

</html>