let mix = require("laravel-mix");
let ImageminPlugin = require("imagemin-webpack-plugin").default;
let CopyWebpackPlugin = require("copy-webpack-plugin");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.webpackConfig({
	plugins: [
		// Copy the images folder and optimize all the images
		new CopyWebpackPlugin({
			patterns: [
				{ from: "resources/imgs", to: "imgs" },
			],
		}),
		new ImageminPlugin({ test: /\.(jpe?g|png|gif|svg)$/i })
	]
}).options({ processCssUrls: false });

mix.js("resources/js/app.js", "public/js")
	.js("resources/js/external-links.js", "public/js")
	.sass("resources/sass/app.sass", "public/css")
	.version()
	.browserSync({
		open: false,
		proxy: 'localhost',
		files: ['./public/css/*.css', './public/js/*.js', './resources/views/**/*.blade.php']
	});