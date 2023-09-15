const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.js("resources/js/app.js", "public/js")
    .js("resources/js/admin/admin.js", "public/js/admin")
    .js(
        "resources/js/admin/components/chart-01.js",
        "public/js/admin/components"
    )
    .js(
        "resources/js/admin/components/chart-02.js",
        "public/js/admin/components"
    )
    .js(
        "resources/js/admin/components/chart-03.js",
        "public/js/admin/components"
    )
    .js(
        "resources/js/admin/components/chart-04.js",
        "public/js/admin/components"
    )
    .js("resources/js/owl.carousel.min.js", "public/js")
    .postCss("resources/css/front.css", "public/css", [
        require("tailwindcss")("tailwind-front.config.js"),
    ])
    .postCss("resources/css/admin.css", "public/css", [
        require("tailwindcss")("tailwind-admin.config.js"),
    ])
    .postCss("resources/css/owl.carousel.min.css", "public/css")
    .postCss("resources/css/owl.theme.default.min.css", "public/css");

// mix.browserSync('127.0.0.1:8000');
// to here is the old one

// mix.postCss('resources/css/app.css', 'public/css', [
//     require('postcss-import'),
//     require('postcss-advanced-variables'),
//     require('tailwindcss/nesting'),
//     require('tailwindcss')('tailwind.config.js'),
//     require('autoprefixer'),
// ]);

// mix.postCss('resources/css/front.css', 'public/css', [
//     require('postcss-import'),
//     require('postcss-advanced-variables'),
//     require('tailwindcss/nesting'),
//     require('tailwindcss')('tailwind-front.config.js'),
//     require('autoprefixer'),
// ]);

// mix.postCss('resources/css/app.css', 'public/css', [
//     require('tailwindcss')('tailwind.config.js')
// ]);

// mix.postCss('resources/css/front.css', 'public/css', [
//     require('tailwindcss')('tailwind-front.config.js')
// ]);

// mix.js('resources/js/app.js', 'public/js')

// mix.postCss("resources/css/admin.css", "public/css", [
//     require("postcss-import"),
//     require("tailwindcss/nesting"),
//     require("tailwindcss")("tailwind-admin.config.js"),
//     require("autoprefixer"),
// ]);

// mix.postCss("resources/css/front.css", "public/css", [
//     require("postcss-import"),
//     require("tailwindcss/nesting"),
//     require("tailwindcss")("tailwind-front.config.js"),
//     require("autoprefixer"),
// ]);

// mix
//    .css('resources/css/app.css', 'public/css') // Use .css() for plain CSS
//    .options({
//       processCssUrls: false,
//       postCss: [require('tailwindcss')('admin.tailwind.config.js')],
//    });

// // For Visitor Template
// mix
//    .css('resources/css/front.css', 'public/css') // Use .css() for plain CSS
//    .options({
//       processCssUrls: false,
//       postCss: [require('tailwindcss')('visitor.tailwind.config.js')],
//    });

mix.browserSync("127.0.0.1:8000");
