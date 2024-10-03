<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="SuperAdmin Dashboard">
    <meta name="keywords" content="grocery-shop, ecommerce, food, electronics, clothes, corporate, creative, management, modern">
    <meta name="author" content="SuperAdmin">
    <meta name="robots" content="noindex, nofollow">
    <title>SuperAdmin</title>

    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/logo/'.$setting->meta_logo) }}"> --}}

    {{-- pace js  --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css"> --}}

    <!-- vite -->
    @vite([
        'resources/superadmin/css/bootstrap.min.css',
        'resources/superadmin/css/animate.css',
        'resources/superadmin/css/dataTables.bootstrap4.min.css',
        'resources/superadmin/plugins/fontawesome/css/fontawesome.min.css',
        'resources/superadmin/plugins/fontawesome/css/all.min.css',
        'resources/superadmin/css/style.css',
        'resources/superadmin/plugins/toastr/toastr.css',
        'resources/superadmin/plugins/dragula/css/dragula.min.css',
        'resources/superadmin/plugins/summernote/summernote-bs4.min.css',
        'resources/superadmin/plugins/drag_drop_image/image-uploader.min.css',
    ])

</head>

<body>

    <div class="main-wrapper">
        
        <div class="mt-5 pt-3">
            <div class="content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-xl-6">
                            <div class="card m-lg-5 m-md-5 p-5 shadow-lg mb-5 bg-white rounded">
                                <div class="login-userheading">
                                    <h3 class="p-3"><b>Sign In</b> </h3>
                                </div>
                    
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{ route('superadmin.login.post') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Email</label>
                                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address">
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label">Password</label>
                                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
                                    </div>
                
                                    <div class="form-login">
                                        <div class="alreadyuser m-2">
                                            <a href="#" class="hover-a mb-2">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Login</button>
                                    {{-- <div class="form-login">
                                        <div class="mt-3">
                                            <b><a href="/register" class="text-black">Don't have and Account? <span class="text-bold text-primary">Register Now</span> </a></b>
                                        </div>
                                    </div> --}}
                                    
                                </form>
                            </div>
                        </div>
                
                
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    
    @vite([
        'resources/superadmin/js/jquery-3.6.0.min.js',
        'resources/superadmin/js/feather.min.js',
        'resources/superadmin/js/jquery.slimscroll.min.js',
        'resources/superadmin/js/jquery.dataTables.min.js',
        'resources/superadmin/js/dataTables.bootstrap4.min.js',
        'resources/superadmin/js/bootstrap.bundle.min.js',
        'resources/superadmin/plugins/apexchart/apexcharts.min.js',
        'resources/superadmin/plugins/apexchart/chart-data.js',
        'resources/superadmin/plugins/toastr/toastr.min.js',
        'resources/superadmin/plugins/toastr/toastr.js',
        'resources/superadmin/plugins/summernote/summernote-bs4.min.js',
        'resources/superadmin/plugins/drag_drop_image/image-uploader.min.js',
        'resources/superadmin/plugins/dragula/js/drag-drop.min.js',
        'resources/superadmin/plugins/dragula/js/dragula.min.js',
        'resources/superadmin/js/script.js',
        'resources/superadmin/plugins/sweetalert/sweetalert2.all.min.js',
        'resources/superadmin/js/custom.js',
    ])
    
</body>