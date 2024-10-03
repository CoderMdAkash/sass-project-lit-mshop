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
        
        <x-superadmin.layouts.header />
        
        <x-superadmin.layouts.sidebar />
        
        <div class="page-wrapper">
            <div class="content" id="main-content">
                <div id="global-loader">
                    <div class="whirly-loader"> </div>
                </div>
            </div>
        </div>
        
    </div>

    <script>
        var base_url = "{{ $module_url }}";
        var opening_url = "{{ $opening_url }}";
    </script>
    
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