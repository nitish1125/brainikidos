var gulp = require('gulp'),
    server = require('gulp-server-livereload'),
	notify = require("gulp-notify"),
    sass = require('gulp-sass');
    uglify=require('gulp-uglify');
    concat=require('gulp-concat');
    uglifycss=require('gulp-uglifycss');


    gulp.task('compress',function(){
    	return gulp.src('css/**/*.css')
    	.pipe(concat('main.css'))
    	.pipe(uglifycss())
    	.pipe(gulp.dest('css'));
    });

    gulp.task('server', function() {
        gulp.src('./')
            .pipe(server({
                defaultFile: 'index.html',
                livereload: true,
                open: true
            }));
    });

	gulp.task('watch', function() {
		gulp.watch('sass/**/*.scss', ['styles']);
	});

	gulp.task('styles', function() {
	   return gulp.src('sass/*.scss')
			.pipe(sass({
				errLogToConsole: false,
			}))
			.pipe(gulp.dest('css/'));
	});
	
gulp.task('default', ['styles', 'server', 'watch','compress']);