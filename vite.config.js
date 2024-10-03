import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/style.css',
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
                'resources/js/app.js',
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
            ],
            refresh: true,
        }),
    ],
});
