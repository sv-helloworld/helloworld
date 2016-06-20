"use strict";

var gulp = require('gulp'),
        gutil = require('gulp-util'),
        sass = require('gulp-sass'),
        autoprefixer = require('gulp-autoprefixer'),
        livereload = require('gulp-livereload'),
        uglify = require('gulp-uglify'),
        concat = require('gulp-concat'),
        concatCss = require('gulp-concat-css'),
        cssnano = require('gulp-cssnano');

var stylesheets = [
    'assets/css/template.css',
    'assets/css/**/*.css'
];

var scripts = {
    app: [
        'assets/js/**/*.js',
    ],
    vendor: [
        'bower_components/jquery/dist/jquery.min.js',
    ],
};

gulp.task('template', function() {
    return gulp.src('**/*.php')
        .pipe(livereload());
});

gulp.task('sass', function() {
    return gulp.src('assets/sass/**/*.{sass,scss}')
        .pipe(sass({outputStyle: 'compressed'}).on('error', function(error) {
            gutil.log(error);
            this.emit('end');
        }))
        .pipe(autoprefixer())
        .pipe(gulp.dest('assets/css'));
});

gulp.task('css', ['sass'], function() {
    return gulp.src(stylesheets)
        .pipe(concatCss('style.css'))
        .pipe(gulp.dest('.'))
        .pipe(livereload());
});

gulp.task('minify_css', ['sass'], function() {
    return gulp.src(stylesheets)
        .pipe(concatCss('style.css'))
        .pipe(cssnano())
        .pipe(gulp.dest('.'))
        .pipe(livereload());
});

gulp.task('scripts_app', function() {
    return gulp.src(scripts.app)
        .pipe(uglify().on('error', function(error) {
            gutil.log(error);
            this.emit('end');
        }))
        .pipe(concat('scripts.min.js'))
        .pipe(gulp.dest('js'))
        .pipe(livereload());
});

gulp.task('scripts_vendor', function() {
    return gulp.src(scripts.vendor)
        .pipe(uglify().on('error', function(error) {
            gutil.log(error);
            this.emit('end');
        }))
        .pipe(concat('vendor.min.js'))
        .pipe(gulp.dest('js'))
        .pipe(livereload());
});

gulp.task('watch', function() {
    livereload.listen({
        host: 'localhost'
    });

    // Watch Blade files
    gulp.watch('**/*.php', ['template']);

    // Watch SASS and SCSS files
    gulp.watch('assets/sass/**/*.{sass,scss}', ['css']);

    // Watch JS files
    gulp.watch('assets/js/*.js', ['scripts_app']);
});

gulp.task('vendor', ['scripts_vendor'])

gulp.task('default', ['watch']);
