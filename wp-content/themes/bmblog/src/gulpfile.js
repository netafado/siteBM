var gulp 		= require ( 'gulp' );
var stylus		= require ( 'gulp-stylus' );
var uglifycss 	= require( 'gulp-uglifycss' );
var prefixer	= require( 'gulp-autoprefixer');
var sourcemaps	= require( 'gulp-sourcemaps' );
var pug 		= require( 'gulp-pug' );
var browserSync	= require('browser-sync').create();



var config = { 
	
	// arquivos que o gulp espera por moficação
	assistir 	: [ './styl/**/*.styl',  './lib/**/*.styl'],
	
	srcStylus	: './styl/*.styl',
	
	destCSS 	: '../css/',
	distCSS 	: '../dist/',

	pugFolfer	: './pug/*.pug',
	pugDes		: './public'

}

gulp.task('pug', function(){
	return gulp.src(config.pugFolfer)
			.pipe(pug({
				pretty: true
			}))
			.pipe(gulp.dest(config.pugDes));
});
/** 
	*Salva os arquivos .styl na pasta /css
	usage: no promt de comando gulp stylus
*/
gulp.task( 'stylus', function(){
	
	return gulp.src(config.srcStylus)
			.pipe(sourcemaps.init())
			.pipe( stylus() )
			.pipe(prefixer())
			.pipe(sourcemaps.write('./maps'))
			.pipe( gulp.dest( config.destCSS ) );	
});

gulp.task('stylusLib', function(){
		// arquivos de terceiros
	return 	gulp.src('lib/*.styl')
			.pipe( stylus() )
			.pipe( gulp.dest( config.destCSS ) );
})


/** 
	*A cada modificação ele atualiza o arquivos css de  acordo com os *.styl
	usage: no promt de comando gulp stylus:watch
*/
gulp.task( 'stylus:w', function(){

	gulp.watch(config.assistir, [ 'stylus','stylusLib' ] );


});

/** 
	*Minimiza o tamanho do CSS
	usage: no promt de comando gulp css
*/
gulp.task('finish', function () {

  gulp.src('./css/**/*.css')
    .pipe(uglifycss({

      "maxLineLen": 80,
      "uglyComments": true

    }))
    .pipe(gulp.dest(config.distCSS));
});


// create a task that ensures the `js` task is complete before
// reloading browsers
gulp.task('reload', ['stylus', 'stylusLib', 'pug'], function (done) {
    browserSync.reload();
    done();
});

// use default task to launch Browsersync and watch JS files
gulp.task('default', ['stylus', 'stylusLib', 'pug'], function () {

    // Serve files from the root of this project
    browserSync.init({
        server: {
            baseDir: "./public"
        }
    });
    // add browserSync.reload to the tasks array to make
    // all browsers reload after tasks are complete.
    gulp.watch(config.assistir, ['reload']);
});