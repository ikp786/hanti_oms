<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ env('APP_NAME') }} {{ $title }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="http://iqonic.design/themes/posdash/html/assets/images/favicon.ico" />
    {{--  {!! HTML::image(asset('assets/admin/images/logo.png'), 'alt text') !!}  --}}
    {{ Html::style(asset('assets/admin/css/backend-plugin.min.css')) }}
    {{ Html::style(asset('assets/admin/css/backende209.css?v=1.0.0')) }}
    {{ Html::style(asset('assets/admin/vendor/%40fortawesome/fontawesome-free/css/all.min.css')) }}
    {{ Html::style(asset('assets/admin/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')) }}
    {{ Html::style(asset('assets/admin/vendor/remixicon/fonts/remixicon.css')) }}

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        @include('admin.inc.sidebar')
        @include('admin.inc.navbar')
        <div class="modal fade" id="new-order" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <h4 class="mb-3">New Order</h4>
                            <div class="content create-workform bg-body">
                                <div class="pb-3">
                                    <label class="mb-2">Email</label>
                                    <input type="text" class="form-control" placeholder="Enter Name or Email">
                                </div>
                                <div class="col-lg-12 mt-4">
                                    <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                        <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                        <div class="btn btn-outline-primary" data-dismiss="modal">Create</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-page">
            @yield('content')
        </div>
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 text-right">
                            <span class="mr-1">
                                <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>©
                            </span> <a href="#" class="">POS Dash</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Backend Bundle JavaScript -->
    {{ Html::script(asset('assets/admin/js/backend-bundle.min.js')) }}
    <!-- Table Treeview JavaScript -->
    {{ Html::script(asset('assets/admin/js/table-treeview.js')) }}
    <!-- Chart Custom JavaScript -->
    {{ Html::script(asset('assets/admin/js/customizer.js')) }}
    <!-- Chart Custom JavaScript -->
    {{ Html::script(asset('assets/admin/js/chart-custom.js')) }}
    <!-- app JavaScript -->
    {{ Html::script(asset('assets/admin/js/app.js')) }}
</body>

<!-- Mirrored from iqonic.design/themes/posdash/html/backend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 May 2021 06:58:56 GMT -->

</html>
