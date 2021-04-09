import babel from 'gulp-babel';
import concat from 'gulp-concat';
import del from 'del';
import gulp from 'gulp';
import uglify from 'gulp-uglify';
import browserSync from 'browser-sync';
import sass from 'gulp-sass';
import autoprefixer from 'gulp-autoprefixer';
import plumber from 'gulp-plumber';
import merge from 'merge-stream';
import sourcemaps from 'gulp-sourcemaps';
import cleanCSS from 'gulp-clean-css';
import imagemin from 'gulp-imagemin';
import os from 'os';

// Adress local 'nom du dossier + app'
let baseDirRepository = "/maureen/app/";


var routing;
if(os.platform() == "win32") {
    routing = "repositories" + baseDirRepository;
}
else {
    routing = "localhost:8888" + baseDirRepository;
}

const server = browserSync.create();

const paths = {
    php: {
        src: 'app/**/*.{html,php}'
    },
    styles: {
        src: [
            'node_modules/aos/dist/aos.css',
        ],
        dev: 'app/styles/',
        build: 'dist/styles/'
    },
    scripts: {
        src: [
            'node_modules/jquery/dist/jquery.min.js',
            'node_modules/aos/dist/aos.js',
            'node_modules/jquery-lazy/jquery.lazy.min.js',
            'app/scripts/src/elements/*',
            'app/scripts/src/general/*'
        ],
        dev: 'app/scripts/',
        build: 'dist/scripts/'
    },
    images: {
        src: 'app/images/**/*.{gif,png,jpg,svg,ico}',
        dev: 'app/images/',
        build: 'dist/images/'
    },
    copy: {
        src: [
            'app/**/*',
            'app/**/.*',
            '!app/styles/**/*',
            '!app/scripts/**/*',
            '!app/images/**/*',
        ],
        build: 'dist'
    }
};

const clean = () => del(['dist']);

function styles() {
    let stylesSass = gulp.src([
            paths.styles.dev + 'scss/init.scss'
        ])
        .pipe(plumber({
            errorHandler: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        .pipe(sourcemaps.init())
        .pipe(sass({
            errLogToConsole: true,
            includePaths: [
                'node_modules'
            ]
        }))
        .pipe(autoprefixer({
            cascade:  true
        }))
        .pipe(sourcemaps.write());

    let stylesBuild = gulp.src(paths.styles.src)
        .pipe(plumber({
            errorHandler: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        .pipe(sourcemaps.init())
        .pipe(sourcemaps.write());

    return merge(stylesSass, stylesBuild)
        .pipe(concat('styles.css'))
        .pipe(gulp.dest(paths.styles.dev));
}

function scripts() {
    return gulp.src(
            paths.scripts.src,
            { sourcemaps: true }
        )
        .pipe(plumber())
        .pipe(concat('app.js'))
        .pipe(gulp.dest(paths.scripts.dev));
}

function copyImagesWithoutCompression() {
    return gulp.src(paths.images.src)
        .pipe(plumber())
        .pipe(gulp.dest(paths.images.build));
}

function copyImagesWithCompression() {
    return gulp.src(paths.images.src)
        .pipe(imagemin())
        .pipe(gulp.dest(paths.images.build));
}

function reload(done) {
    server.reload();
    done();
}

function copy() {
    return gulp.src(paths.copy.src)
        .pipe(plumber())
        .pipe(gulp.dest(paths.copy.build));
}

function copyStyles() {
    return gulp.src(paths.styles.dev + 'styles.css')
        .pipe(plumber())
        .pipe(cleanCSS())
        .pipe(gulp.dest(paths.styles.build));
}

function copyScripts() {
    return gulp.src(paths.scripts.dev + 'app.js')
        .pipe(plumber())
        .pipe(uglify())
        .pipe(gulp.dest(paths.scripts.build));
}

function serve(done) {
    server.init({
        proxy: {
            target: routing
        },
        options: {
            reloadDelay: 250
        },
        notify: false
    });
    done();
}

const watch = () => {
    gulp.watch(paths.php.src, gulp.series(reload));
    gulp.watch(['app/scripts/src/**/*'], gulp.series(scripts, reload));
    gulp.watch(['app/styles/scss/**/*'], gulp.series(styles, reload));
};

const dev = gulp.series(clean, scripts, styles, serve, watch);
gulp.task('default', dev);

const build = gulp.series(clean, scripts, styles, copy, copyStyles, copyScripts, copyImagesWithoutCompression); // , copyImagesWithCompression
gulp.task('build', build);