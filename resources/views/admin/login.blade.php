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

<body class=" ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
        <section class="login-content">
            <div class="container">
                <div class="row align-items-center justify-content-center height-self-center">
                    <div class="col-lg-8">
                        <div class="card auth-card">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center auth-content">
                                    <div class="col-lg-7 align-self-center">
                                        <div class="p-3">
                                            <h2 class="mb-2">Admin Login</h2>
                                            {!! Form::open(['route' => 'admin.login', 'method' => 'get']) !!}
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-label ">
                                                        {!! Form::label('email', 'Email') !!}
                                                        {!! Form::email('email', '', ['class' => ' form-control', 'placeholder' => 'Enter Email Address']) !!}
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-label">
                                                        {!! Form::label('password', 'Password') !!}
                                                        {!! Form::password('password',['class' => ' form-control']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-primary">Sign In</button>

                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 content-right">
                                        <img src="../assets/images/login/01.png" class="img-fluid image-right"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
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

</html>
