const glob = require('glob');
const nodePath = require('path');
const mix	= require('laravel-mix');
const path = require('path');
require('dotenv').config({ path: '../../.env' });
require('laravel-mix-clean');


const publicFolder	= 'assets';

// const copyDirectories = [
// 	{
// 		from	: 'src/assets',
// 		to		: 'assets',
// 	}, {
// 		from	: 'src/assets/img',
// 		to		: 'assets/img',
// 	},
// ];

const jsArr = glob
			.sync( './src/js/*.js' )
			.filter( file => nodePath.basename( file ).substr(0, 1) !== '_' );

const cssArr = glob
			.sync( './src/css/*.css' )
			.filter( file => nodePath.basename( file ).substr(0, 1) !== '_' );

mix
	.alias({
		'@src': path.join(__dirname, 'src/')
	})
	.setPublicPath( publicFolder )
	.clean({
		cleanOnceBeforeBuildPatterns: [ `${ publicFolder }/*` ],
	})
	.options({
		processCssUrls: false
	})
	// copyDirectories.forEach( item => mix.copyDirectory( item.from, item.to ) );
	jsArr.forEach( item => mix.js( item, 'js') );
	cssArr.forEach( item => mix.postCss( item, 'css') );

	if ( mix.inProduction() ) {
		mix.version();
	} else {
		mix.browserSync({
			proxy	: process.env.APP_URL,
			host	: process.env.APP_URL,
			port	: process.env.BROWSER_SYNC_PORT || 8080,
			open	: false,
			browser	: 'google chrome',
			notify	: {
				styles: {
					top: '0',
				}
			},
			files	: [
				`./${ publicFolder }/**/*`,
				"./**/*.htm",
			]
		});
	}