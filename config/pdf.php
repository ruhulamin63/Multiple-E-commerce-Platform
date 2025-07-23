<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default PDF Paper Size
    |--------------------------------------------------------------------------
    |
    | This option controls the default paper size that will be used when generating PDFs.
    |
    */
    'paper' => 'a4',

    /*
    |--------------------------------------------------------------------------
    | Default PDF Orientation
    |--------------------------------------------------------------------------
    |
    | This option controls the default orientation that will be used when generating PDFs.
    |
    */
    'orientation' => 'portrait',

    /*
    |--------------------------------------------------------------------------
    | DomPDF Options
    |--------------------------------------------------------------------------
    |
    | Here you can configure options for DomPDF.
    |
    */
    'defines' => [
        'font_dir' => storage_path('fonts/'),
        'font_cache' => storage_path('fonts/'),
        'temp_dir' => sys_get_temp_dir(),
        'chroot' => realpath(base_path()),
        'enable_font_subsetting' => false,
        'enable_javascript' => true,
        'enable_remote' => true,
        'log_output_file' => null,
        'default_media_type' => 'screen',
        'default_paper_size' => 'a4',
        'default_font' => 'serif',
        'dpi' => 96,
        'enable_php' => false,
        'enable_css_float' => false,
        'enable_html5_parser' => false,
    ],
];
