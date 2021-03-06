"use strict";

const gulp = require("gulp");
const plumber = require("gulp-plumber");
const sourcemap = require("gulp-sourcemaps");
const rename = require("gulp-rename");
const sass = require("gulp-sass");
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const csso = require("gulp-csso");
const terser = require("gulp-terser");
const server = require("browser-sync").create();
const imagemin = require("gulp-imagemin");
const webp = require("gulp-webp");
const svgstore = require("gulp-svgstore");
const posthtml = require("gulp-posthtml");
const include = require("posthtml-include");
const del = require("del");

gulp.task("css", () => {
    return gulp.src("source/sass/style.scss")
        .pipe(plumber())
        .pipe(sourcemap.init())
        .pipe(sass())
        .pipe(postcss([
            autoprefixer()
        ]))
        .pipe(gulp.dest("source/css"))
        .pipe(gulp.dest("build/css"))
        .pipe(csso())
        .pipe(rename("style.min.css"))
        .pipe(sourcemap.write("."))
        .pipe(gulp.dest("source/css"))
        .pipe(gulp.dest("build/css"))
        .pipe(server.stream());
});

gulp.task("js", () => {
    return gulp.src("source/js/script.js")
        .pipe(sourcemap.init())
        .pipe(terser())
        .pipe(rename("script.min.js"))
        .pipe(sourcemap.write("."))
        .pipe(gulp.dest("build/js"))
        .pipe(server.stream());
});

gulp.task("server", () => {
    server.init({
        server: "build/",
        notify: false,
        open: true,
        cors: true,
        ui: false
    });

    gulp.watch("source/sass/**/*.scss", gulp.series("css"));
    gulp.watch("source/js/*.js", gulp.series("js"));
    gulp.watch(("source/*.php"), gulp.series("copy", "refresh"));
    gulp.watch(("source/templates/**/*.php"), gulp.series("copy", "refresh"));
    gulp.watch(("source/img/icon-*.svg"), gulp.series("sprite", "html", "refresh"));
    gulp.watch(("source/*.html"), gulp.series("html", "refresh"));
});


gulp.task("images", () => {
    return gulp.src("source/img/**/*.{png,jpg,svg}")
        .pipe(imagemin([
            imagemin.optipng({optimizationLevel: 3}),
            imagemin.jpegtran({progressive: true}),
            imagemin.svgo()
        ]))
        .pipe(gulp.dest("source/img"));
});

gulp.task("webp", () => {
    return gulp.src("source/img/**/*.{jpg,png}")
        .pipe(webp({quality: 90}))
        .pipe(gulp.dest("source/img"));
});

gulp.task("sprite", () => {
    return gulp.src("source/img/**/icon-*.svg")
        .pipe(svgstore({
            inlineSvg: true
        }))
        .pipe(rename("sprite.svg"))
        .pipe(gulp.dest("build/img"));
});

gulp.task("html", () => {
    return gulp.src("source/*.html")
        .pipe(posthtml([
            include()
        ]))
        .pipe(gulp.dest("build"));
});

gulp.task("copy", () => {
    return gulp.src([
        "source/fonts/**/*.{woff,woff2}",
        "source/img/**",
        "source/video/**",
        "source/js/*.js",
        "source/css/*.css",
        "source/templates/*.php",
        "source/*.php",
        "source/*.ico",
        "source/PHPMailer/**"
    ], {
        base: "source"
    })
        .pipe(gulp.dest("build"));
});

gulp.task("clean", () => {
    return del("build");
});

gulp.task("build", gulp.series(
    "clean",
    "copy",
    "css",
    "js",
    "sprite",
    "html"
));

gulp.task("refresh", done => {
    server.reload();
    done();
});

gulp.task("start", gulp.series(
    "clean",
    "copy",
    "css",
    "js",
    "sprite",
    "html",
    "server"
));
